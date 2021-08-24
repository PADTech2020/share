<?php

namespace Botble\Partners\Tables;

use Auth;
use BaseHelper;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Partners\Repositories\Interfaces\PartnersInterface;
use Botble\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Yajra\DataTables\DataTables;
use Botble\Partners\Models\Partners;
use Html;

class PartnersTable extends TableAbstract
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
     * PartnersTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param PartnersInterface $partnersRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlGenerator, PartnersInterface $partnersRepository)
    {
        $this->repository = $partnersRepository;
        $this->setOption('id', 'plugins-partners-table');
        parent::__construct($table, $urlGenerator);

        if (!Auth::user()->hasAnyPermission(['partners.edit', 'partners.destroy'])) {
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
                if (!Auth::user()->hasPermission('partners.edit')) {
                    return $item->name;
                }
                return Html::link(route('partners.edit', $item->id), $item->name);
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
                return $this->getOperations('partners.edit', 'partners.destroy', $item);
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
            'partners.id',
            'partners.name',
            'partners.created_at',
            'partners.status',
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
                'name'  => 'partners.id',
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'name' => [
                'name'  => 'partners.name',
                'title' => trans('core/base::tables.name'),
                'class' => 'text-left',
            ],
            'created_at' => [
                'name'  => 'partners.created_at',
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
            'status' => [
                'name'  => 'partners.status',
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
        $buttons = $this->addCreateButton(route('partners.create'), 'partners.create');

        return apply_filters(BASE_FILTER_TABLE_BUTTONS, $buttons, Partners::class);
    }

    /**
     * {@inheritDoc}
     */
    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('partners.deletes'), 'partners.destroy', parent::bulkActions());
    }

    /**
     * {@inheritDoc}
     */
    public function getBulkChanges(): array
    {
        return [
            'partners.name' => [
                'title'    => trans('core/base::tables.name'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'partners.status' => [
                'title'    => trans('core/base::tables.status'),
                'type'     => 'select',
                'choices'  => BaseStatusEnum::labels(),
                'validate' => 'required|in:' . implode(',', BaseStatusEnum::values()),
            ],
            'partners.created_at' => [
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
