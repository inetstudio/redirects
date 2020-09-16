<?php

namespace InetStudio\RedirectsPackage\Redirects\Http\Resources\Back\Resource\Show;

use Illuminate\Http\Resources\Json\JsonResource;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Resources\Back\Resource\Show\ItemResourceContract;

class ItemResource extends JsonResource implements ItemResourceContract
{
    public function toArray($request)
    {
        return [
            'id' => $this['id'],
            'uri' => $this['uri'],
            'destination' => $this['destination'],
            'status' => $this['status'],
        ];
    }
}
