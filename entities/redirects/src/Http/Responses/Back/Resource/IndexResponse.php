<?php

namespace InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Resource;

use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\IndexResponseContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Services\Back\DataTables\IndexServiceContract as DataTableServiceContract;

class IndexResponse implements IndexResponseContract
{
    protected DataTableServiceContract $datatableService;

    public function __construct(DataTableServiceContract $datatableService)
    {
        $this->datatableService = $datatableService;
    }

    public function toResponse($request)
    {
        $table = $this->datatableService->html();

        return view('admin.module.redirects-package.redirects::back.pages.index', compact('table'));
    }
}
