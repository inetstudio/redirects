<?php

declare(strict_types=1);

namespace InetStudio\RedirectsPackage\Redirects\Services\Back;

use InetStudio\RedirectsPackage\Redirects\Contracts\Models\RedirectModelContract;
use InetStudio\RedirectsPackage\Redirects\Services\ItemsService as BaseItemsService;
use InetStudio\RedirectsPackage\Redirects\Contracts\Services\Back\ResourceServiceContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\DTO\Back\Resource\Save\ItemDataContract;

class ResourceService extends BaseItemsService implements ResourceServiceContract
{
    public function create(): RedirectModelContract
    {
        return new $this->model;
    }

    public function show($id): ?RedirectModelContract
    {
        return $this->model::find($id);
    }

    public function save(ItemDataContract $data): RedirectModelContract
    {
        $item = $this->model::find($data->id) ?? new $this->model;

        $item->uri = $data->uri;
        $item->destination = $data->destination;
        $item->status = $data->status;

        $item->save();

        event(
            resolve(
                'InetStudio\RedirectsPackage\Redirects\Contracts\Events\Back\ModifyItemEventContract',
                compact('item')
            )
        );

        return $item;
    }

    public function destroy($id): int
    {
        return $this->model::destroy($id);
    }
}
