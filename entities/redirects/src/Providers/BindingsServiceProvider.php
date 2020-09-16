<?php

namespace InetStudio\RedirectsPackage\Redirects\Providers;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class BindingsServiceProvider extends BaseServiceProvider implements DeferrableProvider
{
    public array $bindings = [
        'InetStudio\RedirectsPackage\Redirects\Contracts\Events\Back\ModifyItemEventContract' => 'InetStudio\RedirectsPackage\Redirects\Events\Back\ModifyItemEvent',

        'InetStudio\RedirectsPackage\Redirects\Contracts\DTO\Back\Resource\Save\ItemDataContract' => 'InetStudio\RedirectsPackage\Redirects\DTO\Back\Resource\Save\ItemData',

        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Controllers\Back\ResourceControllerContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Controllers\Back\ResourceController',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Controllers\Back\DataControllerContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Controllers\Back\DataController',

        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Data\GetIndexDataRequestContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Requests\Back\Data\GetIndexDataRequest',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\CreateRequestContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Requests\Back\Resource\CreateRequest',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\DestroyRequestContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Requests\Back\Resource\DestroyRequest',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\EditRequestContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Requests\Back\Resource\EditRequest',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\IndexRequestContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Requests\Back\Resource\IndexRequest',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\ShowRequestContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Requests\Back\Resource\ShowRequest',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\StoreRequestContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Requests\Back\Resource\StoreRequest',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Resource\UpdateRequestContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Requests\Back\Resource\UpdateRequest',

        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Resources\Back\Resource\Index\ItemResourceContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Resources\Back\Resource\Index\ItemResource',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Resources\Back\Resource\Show\ItemResourceContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Resources\Back\Resource\Show\ItemResource',

        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Data\GetIndexDataResponseContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Data\GetIndexDataResponse',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\CreateResponseContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Resource\CreateResponse',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\DestroyResponseContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Resource\DestroyResponse',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\EditResponseContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Resource\EditResponse',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\IndexResponseContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Resource\IndexResponse',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\ShowResponseContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Resource\ShowResponse',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\StoreResponseContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Resource\StoreResponse',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Resource\UpdateResponseContract' => 'InetStudio\RedirectsPackage\Redirects\Http\Responses\Back\Resource\UpdateResponse',

        'InetStudio\RedirectsPackage\Redirects\Contracts\Listeners\RegenerateRoutesCacheListenerContract' => 'InetStudio\RedirectsPackage\Redirects\Listeners\RegenerateRoutesCacheListener',

        'InetStudio\RedirectsPackage\Redirects\Contracts\Models\RedirectModelContract' => 'InetStudio\RedirectsPackage\Redirects\Models\RedirectModel',

        'InetStudio\RedirectsPackage\Redirects\Contracts\Services\Back\DataTables\IndexServiceContract' => 'InetStudio\RedirectsPackage\Redirects\Services\Back\DataTables\IndexService',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Services\Back\ItemsServiceContract' => 'InetStudio\RedirectsPackage\Redirects\Services\Back\ItemsService',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Services\Back\ResourceServiceContract' => 'InetStudio\RedirectsPackage\Redirects\Services\Back\ResourceService',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Services\Front\ItemsServiceContract' => 'InetStudio\RedirectsPackage\Redirects\Services\Front\ItemsService',
        'InetStudio\RedirectsPackage\Redirects\Contracts\Services\ItemsServiceContract' => 'InetStudio\RedirectsPackage\Redirects\Services\ItemsService',
    ];

    public function provides()
    {
        return array_keys($this->bindings);
    }
}
