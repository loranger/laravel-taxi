<?php

declare(strict_types=1);

namespace loranger\Taxi\Providers;

use Illuminate\Support\ServiceProvider;
use loranger\Taxi\Console\Commands\TaxiCommand;

class TaxiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                commands: [
                    TaxiCommand::class,
                ]
            );
        }
    }
}
