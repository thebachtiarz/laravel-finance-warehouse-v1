<?php

namespace TheBachtiarz\FinanceWarehouse;

class DataService
{
    /**
     * list of config who need to registered into current project.
     * perform by financewarehouse app module.
     *
     * @return array
     */
    public static function registerConfig(): array
    {
        $registerConfig = [];

        // ! logging
        $logging = config('logging.channels');
        $registerConfig[] = [
            'logging.channels' => array_merge(
                $logging,
                [
                    'financewarehouse' => [
                        'driver' => 'single',
                        'path' => tbdirlocation("log/financewarehouse.log")
                    ]
                ]
            )
        ];

        return $registerConfig;
    }
}
