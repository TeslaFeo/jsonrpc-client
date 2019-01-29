<?php

namespace Tochka\JsonRpcClient;

use Illuminate\Support\ServiceProvider;
use Tochka\JsonRpcClient\Console\GenerateClient;

class JsonRpcClientServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateClient::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../config/jsonrpcclient.php' => base_path('config/jsonrpcclient.php'),
        ], 'config');

    }
}