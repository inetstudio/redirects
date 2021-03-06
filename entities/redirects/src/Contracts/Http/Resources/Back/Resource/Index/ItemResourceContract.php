<?php

namespace InetStudio\RedirectsPackage\Redirects\Contracts\Http\Resources\Back\Resource\Index;

use ArrayAccess;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Routing\UrlRoutable;
use JsonSerializable;

interface ItemResourceContract extends ArrayAccess, JsonSerializable, Responsable, UrlRoutable
{
}
