<?php

namespace InetStudio\RedirectsPackage\Redirects\Contracts\Services;

use InetStudio\RedirectsPackage\Redirects\Contracts\Models\RedirectModelContract;

interface ItemsServiceContract
{
    public function getModel(): RedirectModelContract;
}
