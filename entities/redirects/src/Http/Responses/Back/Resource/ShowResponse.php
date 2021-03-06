<?php

namespace InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Resource;

use InetStudio\RedirectsPackage\Redirects\Contracts\Services\Back\ResourceServiceContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\ShowResponseContract;

class ShowResponse implements ShowResponseContract
{
    protected ResourceServiceContract $resourceService;

    public function __construct(ResourceServiceContract $resourceService)
    {
        $this->resourceService = $resourceService;
    }

    public function toResponse($request)
    {
        $id = $request->route('redirect');

        $item = $this->resourceService->show($id);

        if (! $item) {
            abort(404);
        }

        return response()->json($item->toArray());
    }
}
