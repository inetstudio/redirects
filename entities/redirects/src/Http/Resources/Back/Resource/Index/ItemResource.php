<?php

namespace InetStudio\RedirectsPackage\Redirects\Http\Resources\Back\Resource\Index;

use Illuminate\Http\Resources\Json\JsonResource;
use InetStudio\RedirectsPackage\Redirects\Contracts\Http\Resources\Back\Resource\Index\ItemResourceContract;

class ItemResource extends JsonResource implements ItemResourceContract
{
    public function toArray($request)
    {
        return [
            'id' => (int) $this['id'],
            'uri' => $this['uri'],
            'destination' => $this['destination'],
            'status' => $this['status'],
            'created_at' => (string) $this['created_at'],
            'updated_at' => (string) $this['updated_at'],
            'actions' => view(
                    'admin.module.redirects-package.redirects::back.partials.datatables.actions',
                    [
                        'item' => $this,
                    ]
                )
                ->render(),
        ];
    }
}
