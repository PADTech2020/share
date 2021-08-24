<?php

namespace Botble\Campaigns\Tables;

use Auth;
use BaseHelper;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Campaigns\Repositories\Interfaces\CampaignsInterface;
use Botble\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Yajra\DataTables\DataTables;
use Botble\Campaigns\Models\Campaigns;
use Html;

class CampaignsTable extends TableAbstract
{

    /**
     * @var bool
     */
    protected $hasActions = true;

    /**
     * @var bool
     */
    protected $hasFilter = true;

    /**
     * CampaignsTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param CampaignsInterface $campaignsRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlGenerator, CampaignsInterface $campaignsRepository)
    {
        $this->repository = $campaignsRepository;
        $this->setOption('id', 'plugins-campaigns-table');
        parent::__construct($table, $urlGenerator);

        if (!Auth::user()->hasAnyPermission(['campaigns.edit', 'campaigns.destroy'])) {
            $this->hasOperations = false;
            $this->hasActions = false;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function ajax()
    {
        $data = $this->table
            ->eloquent($this->query())
            ->editColumn('name', function ($item) {
                if (!Auth::user()->hasPermission('campaigns.edit')) {
                    return $item->name;
                }
                return Html::link(route('campaigns.edit', $item->id), $item->name);
            })
            ->editColumn('checkbox', function ($item) {
                return $this->getCheckbox($item->id);
            })
            ->editColumn('created_at', function ($item) {
                return BaseHelper::formatDate($item->created_at);
            })
            ->editColumn('status', function ($item) {
                return $item->status->toHtml();
            });

        return apply_filters(BASE_FILTER_GET_LIST_DATA, $data, $this->repository->getModel())
            ->addColumn('operations', function ($item) {
                return $this->getOperations('campaigns.edit', 'campaigns.destroy', $item);
            })
            ->escapeColumns([])
            ->make(true);
    }

    /**
     * {@inheritDoc}
     */
    public function query()
    {
        $model = $this->repository->getModel();
        $select = [
            'campaigns.id',
            'campaigns.name',
            'campaigns.created_at',
            'campaigns.status',
        ];

        $query = $model->select($select);

        return $this->applyScopes(apply_filters(BASE_FILTER_TABLE_QUERY, $query, $model, $select));
    }

    /**
     * {@inheritDoc}
     */
    public function columns()
    {
        return [
            'id' => [
                'name'  => 'campaigns.id',
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'name' => [
                'name'  => 'campaigns.name',
                'title' => trans('core/base::tables.name'),
                'class' => 'text-left',
            ],
            'created_at' => [
                'name'  => 'campaigns.created_at',
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
            'status' => [
                'name'  => 'campaigns.status',
                'title' => trans('core/base::tables.status'),
                'width' => '100px',
            ],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function buttons()
    {
        $buttons = $this->addCreateButton(route('campaigns.create'), 'campaigns.create');

        return apply_filters(BASE_FILTER_TABLE_BUTTONS, $buttons, Campaigns::class);
    }

    /**
     * {@inheritDoc}
     */
    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('campaigns.deletes'), 'campaigns.destroy', parent::bulkActions());
    }

    /**
     * {@inheritDoc}
     */
    public function getBulkChanges(): array
    {
        return [
            'campaigns.name' => [
                'title'    => trans('core/base::tables.name'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'campaigns.status' => [
                'title'    => trans('core/base::tables.status'),
                'type'     => 'select',
                'choices'  => BaseStatusEnum::labels(),
                'validate' => 'required|in:' . implode(',', BaseStatusEnum::values()),
            ],
            'campaigns.created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'type'  => 'date',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getFilters(): array
    {
        return $this->getBulkChanges();
    }
}
