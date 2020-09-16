<?php

namespace InetStudio\RedirectsPackage\Redirects\Listeners;

use Illuminate\Support\Facades\Artisan;
use InetStudio\RedirectsPackage\Redirects\Contracts\Listeners\RegenerateRoutesCacheListenerContract;

class RegenerateRoutesCacheListener implements RegenerateRoutesCacheListenerContract
{
    public function handle($event): void
    {
        Artisan::call('route:cache');
    }
}
