<?php

declare(strict_types=1);

namespace InetStudio\RedirectsPackage\Redirects\Services\Back\DataTables;

use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Services\DataTable;
use InetStudio\RedirectsPackage\Redirects\Contracts\Models\RedirectModelContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Services\Back\DataTables\IndexServiceContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Resources\Back\Resource\Index\ItemResourceContract;

class IndexService extends DataTable implements IndexServiceContract
{
    protected RedirectModelContract $model;

    protected ItemResourceContract $resource;

    public function __construct(RedirectModelContract $model)
    {
        $this->model = $model;
        $this->resource = resolve(
            ItemResourceContract::class,
            [
                'resource' => null,
            ]
        );
    }

    public function ajax(): JsonResponse
    {
        return DataTables::of($this->query())
            ->setTransformer(function ($item) {
                return $this->resource::make($item)->resolve();
            })
            ->rawColumns(['actions'])
            ->make();
    }

    public function query()
    {
        return $this->model->query();
    }

    public function html(): Builder
    {
        /** @var Builder $table */
        $table = app('datatables.html');

        return $table
            ->columns($this->getColumns())
            ->ajax($this->getAjaxOptions())
            ->parameters($this->getParameters());
    }

    protected function getColumns(): array
    {
        return [
            ['data' => 'uri', 'name' => 'uri', 'title' => 'Источник'],
            ['data' => 'destination', 'name' => 'destination', 'title' => 'Назначение'],
            ['data' => 'status', 'name' => 'status', 'title' => 'Статус'],
            ['data' => 'created_at', 'name' => 'created_at', 'title' => 'Дата создания'],
            ['data' => 'updated_at', 'name' => 'updated_at', 'title' => 'Дата обновления'],
            [
                'data' => 'actions',
                'name' => 'actions',
                'title' => 'Действия',
                'orderable' => false,
                'searchable' => false,
            ],
        ];
    }

    protected function getAjaxOptions(): array
    {
        return [
            'url' => route('back.redirects-package.redirects.data.index'),
            'type' => 'POST',
        ];
    }

    protected function getParameters(): array
    {
        $translation = trans('admin::datatables');

        return [
            'paging' => true,
            'pagingType' => 'full_numbers',
            'searching' => true,
            'info' => false,
            'searchDelay' => 350,
            'language' => $translation,
        ];
    }
}
