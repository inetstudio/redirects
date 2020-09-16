<?php

namespace InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Resource;

use InetStudio\RedirectsPackage\Redirects\Contracts\Services\Back\ResourceServiceContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\CreateResponseContract;

class CreateResponse implements CreateResponseContract
{
    protected ResourceServiceContract $resourceService;

    public function __construct(ResourceServiceContract $resourceService)
    {
        $this->resourceService = $resourceService;
    }

    public function toResponse($request)
    {
        $item = $this->resourceService->create();

        return response()->view('admin.module.redirects-package.redirects::back.pages.form', compact('item'));
    }
}
