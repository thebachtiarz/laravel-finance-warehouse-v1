<?php

namespace TheBachtiarz\FinanceWarehouse\Services;

use TheBachtiarz\FinanceWarehouse\Interfaces\{FinanceWarehouseSystemInterface, UrlDomainInterface};
use TheBachtiarz\FinanceWarehouse\Services\CurlService;

class FinanceWarehouseService
{
    /**
     * Get account summary
     *
     * @param string $account
     * @return array
     */
    public static function accountSummary(string $account): array
    {
        try {
            $_data = [
                FinanceWarehouseSystemInterface::FINANCE_ACCOUNT_PARAM => $account
            ];

            return CurlService::setUrl(UrlDomainInterface::URL_DOMAIN_ACCOUNT_SUMMARY_NAME)->setData($_data)->post();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update account finance
     *
     * @param string $account
     * @param string $accountNew
     * @return array
     */
    public static function accountUpdate(string $account, string $accountNew): array
    {
        try {
            $_data = [
                FinanceWarehouseSystemInterface::FINANCE_ACCOUNT_PARAM => $account,
                FinanceWarehouseSystemInterface::FINANCE_ACCOUNT_NEW_PARAM => $accountNew
            ];

            return CurlService::setUrl(UrlDomainInterface::URL_DOMAIN_ACCOUNT_UPDATE_NAME)->setData($_data)->post();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Create new balance record
     *
     * @param string $account
     * @param string $balance
     * @return array
     */
    public static function balanceCreate(string $account, string $balance): array
    {
        try {
            $_data = [
                FinanceWarehouseSystemInterface::FINANCE_ACCOUNT_PARAM => $account,
                FinanceWarehouseSystemInterface::FINANCE_BALANCE_PARAM => $balance
            ];

            return CurlService::setUrl(UrlDomainInterface::URL_DOMAIN_BALANCE_CREATE_NAME)->setData($_data)->post();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Get balance warehouses list
     *
     * @param string $account
     * @return array
     */
    public static function balanceList(string $account): array
    {
        try {
            $_data = [
                FinanceWarehouseSystemInterface::FINANCE_ACCOUNT_PARAM => $account
            ];

            return CurlService::setUrl(UrlDomainInterface::URL_DOMAIN_BALANCE_LIST_NAME)->setData($_data)->post();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
