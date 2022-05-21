<?php

namespace TheBachtiarz\FinanceWarehouse\Services;

use TheBachtiarz\FinanceWarehouse\Interfaces\UrlDomainInterface;
use TheBachtiarz\FinanceWarehouse\Logs\FinanceWarehouseProcessLog;
use TheBachtiarz\Toolkit\Helper\Curl\CurlRestService;

class CurlService
{
    use CurlRestService {
        post as public postOrigin;
    }

    /**
     * process curl post.
     * with logger.
     *
     * @override
     * @return array
     */
    public static function post(): array
    {
        $process = self::postOrigin();

        FinanceWarehouseProcessLog::status($process['status'] ?? false)->message($process['message'] ?? "")->log();

        return $process;
    }

    /**
     * base domain resolver
     *
     * @override
     * @param boolean $productionMode
     * @return string
     */
    private static function baseDomainResolver(bool $productionMode = true): string
    {
        return $productionMode ? tbfinancewarehouseconfig('api_url_production') : tbfinancewarehouseconfig('api_url_sandbox');
    }

    /**
     * url end point resolver
     *
     * @override
     * @return string
     */
    private static function urlResolver(): string
    {
        $_baseDomain = self::baseDomainResolver(tbfinancewarehouseconfig('is_production_mode'));

        $_prefix = tbfinancewarehouseconfig('api_url_prefix');

        $_endPoint = UrlDomainInterface::URL_DOMAIN_TRANSACTION_AVAILABLE[self::$url];

        return "{$_baseDomain}/{$_prefix}/{$_endPoint}";
    }
}
