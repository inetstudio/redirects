<?php

namespace InetStudio\RedirectsPackage\Redirects\Contracts\Http\Controllers\Back;

use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Requests\Back\Data\GetIndexDataRequestContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Responses\Back\Data\GetIndexDataResponseContract;

interface DataControllerContract
{
    public function getIndexData(GetIndexDataRequestContract $request, GetIndexDataResponseContract $response): GetIndexDataResponseContract;
}
