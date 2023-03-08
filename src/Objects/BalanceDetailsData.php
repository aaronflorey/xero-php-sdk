<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;

class BalanceDetailsData extends Data
{
    /**
     * The opening balances of the account. Debits are positive, credits are negative values
     * @format double
     */
    #[MapName('Balance')]
    #[MapOutputName('Balance')]
    public ?int $balance = null;

    /** The currency of the balance (Not required for base currency) */
    #[MapName('CurrencyCode')]
    #[MapOutputName('CurrencyCode')]
    public ?string $currencyCode = null;

    /**
     * (Optional) Exchange rate to base currency when money is spent or received. If not specified, XE rate for the day is applied
     * @format double
     */
    #[MapName('CurrencyRate')]
    #[MapOutputName('CurrencyRate')]
    public ?int $currencyRate = null;

    /**
     * The opening balances of the account. Debits are positive, credits are negative values
     * The opening balances of the account. Debits are positive, credits are negative values
     * @format double
     */
    public function setBalance(?int $balance): ?self
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * The currency of the balance (Not required for base currency)
     */
    public function setCurrencyCode(?string $currencyCode): ?self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * (Optional) Exchange rate to base currency when money is spent or received. If not specified, XE rate for the day is applied
     * (Optional) Exchange rate to base currency when money is spent or received. If not specified, XE rate for the day is applied
     * @format double
     */
    public function setCurrencyRate(?int $currencyRate): ?self
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }
}
