<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\AccountsData;
use Mochaka\XeroSDK\Objects\ConversionBalancesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class PostSetupRequest extends Data
{
    #[MapName('ConversionDate')]
    #[MapOutputName('ConversionDate')]
    public mixed $conversionDate = null;

    /** @var DataCollection<int, ConversionBalancesData> */
    #[MapName('ConversionBalances')]
    #[MapOutputName('ConversionBalances')]
    #[DataCollectionOf(ConversionBalancesData::class)]
    public ?DataCollection $conversionBalances = null;

    /** @var DataCollection<int, AccountsData> */
    #[MapName('Accounts')]
    #[MapOutputName('Accounts')]
    #[DataCollectionOf(AccountsData::class)]
    public ?DataCollection $accounts = null;

    public function setConversionDate(mixed $conversionDate): ?self
    {
        $this->conversionDate = $conversionDate;
        return $this;
    }

    /**
     * @var DataCollection<int, ConversionBalancesData>
     */
    public function setConversionBalances(?DataCollection $conversionBalances): ?self
    {
        $this->conversionBalances = $conversionBalances;
        return $this;
    }

    /**
     * @var DataCollection<int, AccountsData>
     */
    public function setAccounts(?DataCollection $accounts): ?self
    {
        $this->accounts = $accounts;
        return $this;
    }
}
