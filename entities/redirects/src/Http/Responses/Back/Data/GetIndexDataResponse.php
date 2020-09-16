<?php

namespace InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Data;

use InetStudio\RedirectsPackage\Redirects\Contracts\Services\Back\DataTables\IndexServiceContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Data\GetIndexDataResponseContract;

class GetIndexDataResponse implements GetIndexDataResponseContract
{
    protected IndexServiceContract $dataService;

    public function __construct(IndexServiceContract $dataService)
    {
        $this->dataService = $dataService;
    }

    public function toResponse($request)
    {
        return $this->dataService->ajax();
    }
}
