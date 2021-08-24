<?php

namespace Botble\Clients\Tables;

use Auth;
use BaseHelper;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Clients\Repositories\Interfaces\ClientsInterface;
use Botble\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Yajra\DataTables\DataTables;
use Botble\Clients\Models\Clients;
use Html;

class ClientsTable extends TableAbstract
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
     * ClientsTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param ClientsInterface $clientsRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlGenerator, ClientsInterface $clientsRepository)
    {
        $this->repository = $clientsRepository;
        $this->setOption('id', 'plugins-clients-table');
        parent::__construct($table, $urlGenerator);

        if (!Auth::user()->hasAnyPermission(['clients.edit', 'clients.destroy'])) {
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
            ->editColumn('company', function ($item) {
                if (!Auth::user()->hasPermission('clients.edit')) {
                    return $item->company;
                }
                return Html::link(route('clients.edit', $item->id), $item->company);
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
                return $this->getOperations('clients.edit', 'clients.destroy', $item);
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
            'clients.id',
            'clients.company',
            'clients.created_at',
            'clients.status',
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
                'name'  => 'clients.id',
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'company' => [
                'name'  => 'clients.company',
                'title' => trans('company'),
                'class' => 'text-left',
            ],
            'created_at' => [
                'name'  => 'clients.created_at',
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
            'status' => [
                'name'  => 'clients.status',
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
        $buttons = $this->addCreateButton(route('clients.create'), 'clients.create');

        return apply_filters(BASE_FILTER_TABLE_BUTTONS, $buttons, Clients::class);
    }

    /**
     * {@inheritDoc}
     */
    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('clients.deletes'), 'clients.destroy', parent::bulkActions());
    }

    /**
     * {@inheritDoc}
     */
    public function getBulkChanges(): array
    {
        return [
            'clients.company' => [
                'title'    => trans('core/base::tables.name'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'clients.status' => [
                'title'    => trans('core/base::tables.status'),
                'type'     => 'select',
                'choices'  => BaseStatusEnum::labels(),
                'validate' => 'required|in:' . implode(',', BaseStatusEnum::values()),
            ],
            'clients.created_at' => [
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
