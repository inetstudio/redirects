<?php

namespace InetStudio\RedirectsPackage\Console\Commands;

use InetStudio\AdminPanel\Base\Console\Commands\BaseSetupCommand;

class SetupCommand extends BaseSetupCommand
{
    protected $name = 'inetstudio:redirects-package:setup';

    protected $description = 'Setup redirects package';

    protected function initCommands(): void
    {
        $this->calls = [
            [
                'type' => 'artisan',
                'description' => 'Redirects setup',
                'command' => 'inetstudio:redirects-package:redirects:setup',
            ],
        ];
    }
}
