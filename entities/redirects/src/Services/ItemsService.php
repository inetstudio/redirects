<?php

declare(strict_types=1);

namespace InetStudio\RedirectsPackage\Redirects\Services;

use Illuminate\Database\Eloquent\Collection;
use InetStudio\RedirectsPackage\Redirects\Contracts\Models\RedirectModelContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Services\ItemsServiceContract;

class ItemsService implements ItemsServiceContract
{
    protected RedirectModelContract $model;

    public function __construct(RedirectModelContract $model)
    {
        $this->model = $model;
    }

    public function getModel(): RedirectModelContract
    {
        return $this->model;
    }

    public function getAllItems(): Collection
    {
        return $this->model::all();
    }
}
