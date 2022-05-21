<?php

namespace TheBachtiarz\FinanceWarehouse;

use Illuminate\Support\ServiceProvider;
use TheBachtiarz\FinanceWarehouse\Interfaces\FinanceWarehouseSystemInterface;

class FinanceWarehouseServiceProvider extends ServiceProvider
{
    /**
     * register module finance warehouse
     *
     * @return void
     */
    public function register(): void
    {
        $applicationFinanceWarehouseService = new ApplicationFinanceWarehouseService;

        $applicationFinanceWarehouseService->registerConfig();

        if ($this->app->runningInConsole()) {
            $this->commands($applicationFinanceWarehouseService->registerCommands());
        }
    }

    /**
     * boot module finance warehouse
     *
     * @return void
     */
    public function boot(): void
    {
        if (app()->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/' . FinanceWarehouseSystemInterface::FINANCE_CONFIG_NAME . '.php' => config_path(FinanceWarehouseSystemInterface::FINANCE_CONFIG_NAME . '.php'),
            ], 'thebachtiarz-finance-warehouse-config');
        }
    }
}
