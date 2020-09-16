<?php

namespace InetStudio\RedirectsPackage\Redirects\Events\Back;

use Illuminate\Queue\SerializesModels;
use InetStudio\RedirectsPackage\Redirects\Contracts\Models\RedirectModelContract;
use InetStudio\RedirectsPackage\Redirects\Contracts\Events\Back\ModifyItemEventContract;

class ModifyItemEvent implements ModifyItemEventContract
{
    use SerializesModels;

    public RedirectModelContract $item;

    public function __construct(RedirectModelContract $item)
    {
        $this->item = $item;
    }
}
