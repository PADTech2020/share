<?php

namespace Botble\Projects\Tables;

use Auth;
use BaseHelper;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Projects\Repositories\Interfaces\ProjectsInterface;
use Botble\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Yajra\DataTables\DataTables;
use Botble\Projects\Models\Projects;
use Html;

class ProjectsTable extends TableAbstract
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
     * ProjectsTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param ProjectsInterface $projectsRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlGenerator, ProjectsInterface $projectsRepository)
    {
        $this->repository = $projectsRepository;
        $this->setOption('id', 'plugins-projects-table');
        parent::__construct($table, $urlGenerator);

        if (!Auth::user()->hasAnyPermission(['projects.edit', 'projects.destroy'])) {
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
                if (!Auth::user()->hasPermission('projects.edit')) {
                    return $item->name;
                }
                return Html::link(route('projects.edit', $item->id), $item->name);
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
                return $this->getOperations('projects.edit', 'projects.destroy', $item);
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
            'projects.id',
            'projects.name',
            'projects.created_at',
            'projects.status',
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
                'name'  => 'projects.id',
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'name' => [
                'name'  => 'projects.name',
                'title' => trans('core/base::tables.name'),
                'class' => 'text-left',
            ],
            'created_at' => [
                'name'  => 'projects.created_at',
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
            'status' => [
                'name'  => 'projects.status',
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
        $buttons = $this->addCreateButton(route('projects.create'), 'projects.create');

        return apply_filters(BASE_FILTER_TABLE_BUTTONS, $buttons, Projects::class);
    }

    /**
     * {@inheritDoc}
     */
    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('projects.deletes'), 'projects.destroy', parent::bulkActions());
    }

    /**
     * {@inheritDoc}
     */
    public function getBulkChanges(): array
    {
        return [
            'projects.name' => [
                'title'    => trans('core/base::tables.name'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'projects.status' => [
                'title'    => trans('core/base::tables.status'),
                'type'     => 'select',
                'choices'  => BaseStatusEnum::labels(),
                'validate' => 'required|in:' . implode(',', BaseStatusEnum::values()),
            ],
            'projects.created_at' => [
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
