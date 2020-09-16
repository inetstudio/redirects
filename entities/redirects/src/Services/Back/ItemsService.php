<?php

declare(strict_types=1);

namespace InetStudio\RedirectsPackage\Redirects\Services\Back;

use InetStudio\RedirectsPackage\Redirects\Services\ItemsService as BaseItemsService;
use InetStudio\RedirectsPackage\Redirects\Contracts\Services\Back\ItemsServiceContract;

class ItemsService extends BaseItemsService implements ItemsServiceContract
{
    public function getAllItems()
    {
        return $this->model::all();
    }
}
