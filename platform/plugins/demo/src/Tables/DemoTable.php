<?php

namespace Botble\Demo\Tables;

use Auth;
use BaseHelper;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Demo\Repositories\Interfaces\DemoInterface;
use Botble\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Yajra\DataTables\DataTables;
use Botble\Demo\Models\Demo;
use Html;

class DemoTable extends TableAbstract
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
     * DemoTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param DemoInterface $demoRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlGenerator, DemoInterface $demoRepository)
    {
        $this->repository = $demoRepository;
        $this->setOption('id', 'plugins-demo-table');
        parent::__construct($table, $urlGenerator);

        if (!Auth::user()->hasAnyPermission(['demo.edit', 'demo.destroy'])) {
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
                if (!Auth::user()->hasPermission('demo.edit')) {
                    return $item->name;
                }
                return Html::link(route('demo.edit', $item->id), $item->name);
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
                return $this->getOperations('demo.edit', 'demo.destroy', $item);
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
            'demos.id',
            'demos.name',
            'demos.created_at',
            'demos.status',
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
                'name'  => 'demos.id',
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'name' => [
                'name'  => 'demos.name',
                'title' => trans('core/base::tables.name'),
                'class' => 'text-left',
            ],
            'created_at' => [
                'name'  => 'demos.created_at',
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
            'status' => [
                'name'  => 'demos.status',
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
        $buttons = $this->addCreateButton(route('demo.create'), 'demo.create');

        return apply_filters(BASE_FILTER_TABLE_BUTTONS, $buttons, Demo::class);
    }

    /**
     * {@inheritDoc}
     */
    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('demo.deletes'), 'demo.destroy', parent::bulkActions());
    }

    /**
     * {@inheritDoc}
     */
    public function getBulkChanges(): array
    {
        return [
            'demos.name' => [
                'title'    => trans('core/base::tables.name'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'demos.status' => [
                'title'    => trans('core/base::tables.status'),
                'type'     => 'select',
                'choices'  => BaseStatusEnum::labels(),
                'validate' => 'required|in:' . implode(',', BaseStatusEnum::values()),
            ],
            'demos.created_at' => [
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
