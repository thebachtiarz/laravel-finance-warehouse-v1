<?php

namespace TheBachtiarz\FinanceWarehouse\Interfaces;

interface UrlDomainInterface
{
    public const URL_DOMAIN_TRANSACTION_AVAILABLE = [
        self::URL_DOMAIN_ACCOUNT_SUMMARY_NAME => self::URL_DOMAIN_ACCOUNT_SUMMARY_PATH,
        self::URL_DOMAIN_ACCOUNT_UPDATE_NAME => self::URL_DOMAIN_ACCOUNT_UPDATE_PATH,
        self::URL_DOMAIN_BALANCE_CREATE_NAME => self::URL_DOMAIN_BALANCE_CREATE_PATH,
        self::URL_DOMAIN_BALANCE_LIST_NAME => self::URL_DOMAIN_BALANCE_LIST_PATH
    ];

    public const URL_DOMAIN_ACCOUNT_SUMMARY_NAME = "account-summary";
    public const URL_DOMAIN_ACCOUNT_UPDATE_NAME = "account-update";
    public const URL_DOMAIN_BALANCE_CREATE_NAME = "balance-create";
    public const URL_DOMAIN_BALANCE_LIST_NAME = "balance-list";

    public const URL_DOMAIN_ACCOUNT_SUMMARY_PATH = "account/summary";
    public const URL_DOMAIN_ACCOUNT_UPDATE_PATH = "account/update";
    public const URL_DOMAIN_BALANCE_CREATE_PATH = "balance/create";
    public const URL_DOMAIN_BALANCE_LIST_PATH = "balance/list";
}
