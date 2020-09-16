<?php

namespace InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Resource;

use InetStudio\RedirectsPackage\Redirects\Contracts\Services\Back\ResourceServiceContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\DestroyResponseContract;

class DestroyResponse implements DestroyResponseContract
{
    protected ResourceServiceContract $resourceService;

    public function __construct(ResourceServiceContract $resourceService)
    {
        $this->resourceService = $resourceService;
    }

    public function toResponse($request)
    {
        $id = $request->route('redirect');

        $count = $this->resourceService->destroy($id);

        return response()->json(
            [
                'success' => ($count > 0),
            ]
        );
    }
}
