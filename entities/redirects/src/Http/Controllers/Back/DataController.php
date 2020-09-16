<?php

namespace InetStudio\RedirectsPackage\Redirects\Http\Controllers\Back;

use InetStudio\AdminPanel\Base\Http\Controllers\Controller;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Controllers\Back\DataControllerContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Data\GetIndexDataRequestContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Data\GetIndexDataResponseContract;

class DataController extends Controller implements DataControllerContract
{
    public function getIndexData(GetIndexDataRequestContract $request, GetIndexDataResponseContract $response): GetIndexDataResponseContract
    {
        return $response;
    }
}
