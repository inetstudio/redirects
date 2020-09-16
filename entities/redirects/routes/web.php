<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

if (Schema::hasTable('redirects')) {
    $redirectsService = resolve('InetStudio\RedirectsPackage\Redirects\Contracts\Services\ItemsServiceContract');
    $redirects = $redirectsService->getAllItems();

    foreach ($redirects as $redirect) {
        Route::redirect($redirect['uri'], $redirect['destination'], $redirect['status']);
    }
}

Route::group(
    [
        'namespace' => 'InetStudio\RedirectsPackage\Redirects\Contracts\Http\Controllers\Back',
        'middleware' => ['web', 'back.auth'],
        'prefix' => 'back/redirects-package',
    ],
    function () {
        Route::any('redirects/data', 'DataControllerContract@getIndexData')
            ->name('back.redirects-package.redirects.data.index');

        Route::resource(
            'redirects',
            'ResourceControllerContract',
            [
                'as' => 'back.redirects-package',
            ]
        );
    }
);
