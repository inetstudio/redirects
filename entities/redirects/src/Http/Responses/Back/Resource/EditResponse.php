<?php

namespace InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Resource;

use InetStudio\RedirectsPackage\Redirects\Contracts\Services\Back\ResourceServiceContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\EditResponseContract;

class EditResponse implements EditResponseContract
{
    protected ResourceServiceContract $resourceService;

    public function __construct(ResourceServiceContract $resourceService)
    {
        $this->resourceService = $resourceService;
    }

    public function toResponse($request)
    {
        $id = $request->route('redirect', 0);

        $item = $this->resourceService->show($id);

        return response()->view('admin.module.redirects-package.redirects::back.pages.form', compact('item'));
    }
}
