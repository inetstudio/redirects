<?php

namespace InetStudio\RedirectsPackage\Redirects\Contracts\Services\Back;

use InetStudio\RedirectsPackage\Redirects\Contracts\Models\RedirectModelContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\DTO\Back\Resource\Save\ItemDataContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Services\ItemsServiceContract as BaseItemsServiceContract;

interface ResourceServiceContract extends BaseItemsServiceContract
{
    public function create(): RedirectModelContract;

    public function show($id): ?RedirectModelContract;

    public function save(ItemDataContract $data): RedirectModelContract;

    public function destroy($id): int;
}
