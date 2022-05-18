<?php

use TheBachtiarz\FinanceWarehouse\Interfaces\FinanceWarehouseSystemInterface;

/**
 * thebachtiarz finance warehouse config
 *
 * @param string|null $keyName config key name | null will return all
 * @return mixed
 */
function tbfinancewarehouseconfig(?string $keyName = null)
{
    $configName = FinanceWarehouseSystemInterface::FINANCE_CONFIG_NAME;

    return iconv_strlen($keyName)
        ? config("{$configName}.{$keyName}")
        : config("{$configName}");
}
