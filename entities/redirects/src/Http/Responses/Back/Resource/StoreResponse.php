<?php

namespace InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Resource;

use Illuminate\Support\Facades\Session;
use InetStudio\RedirectsPackage\Redirects\DTO\Back\Resource\Save\ItemData;
use InetStudio\RedirectsPackage\Redirects\Contracts\Services\Back\ResourceServiceContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\StoreResponseContract;

class StoreResponse implements StoreResponseContract
{

    protected ResourceServiceContract $resourceService;

    public function __construct(ResourceServiceContract $resourceService)
    {
        $this->resourceService = $resourceService;
    }

    public function toResponse($request)
    {
        $data = ItemData::fromRequest($request);

        $item = $this->resourceService->save($data);

        Session::flash('success', 'Редирект успешно создан');

        return response()->redirectToRoute('back.redirects-package.redirects.edit', $item['id']);
    }
}
