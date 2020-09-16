<?php

namespace InetStudio\RedirectsPackage\Redirects\Http\Controllers\Back;

use InetStudio\AdminPanel\Base\Http\Controllers\Controller;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\EditRequestContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\ShowRequestContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\IndexRequestContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\StoreRequestContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Controllers\Back\ResourceControllerContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\CreateRequestContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\UpdateRequestContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\EditResponseContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\ShowResponseContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\DestroyRequestContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\IndexResponseContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\StoreResponseContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\CreateResponseContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\UpdateResponseContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\DestroyResponseContract;

class ResourceController extends Controller implements ResourceControllerContract
{
    public function index(IndexRequestContract $request, IndexResponseContract $response): IndexResponseContract
    {
        return $response;
    }

    public function create(CreateRequestContract $request, CreateResponseContract $response): CreateResponseContract
    {
        return $response;
    }

    public function store(StoreRequestContract $request, StoreResponseContract $response): StoreResponseContract
    {
        return $response;
    }

    public function show(ShowRequestContract $request, ShowResponseContract $response): ShowResponseContract
    {
        return $response;
    }

    public function edit(EditRequestContract $request, EditResponseContract $response): EditResponseContract
    {
        return $response;
    }

    public function update(UpdateRequestContract $request, UpdateResponseContract $response): UpdateResponseContract
    {
        return $response;
    }

    public function destroy(DestroyRequestContract $request, DestroyResponseContract $response): DestroyResponseContract
    {
        return $response;
    }
}
