<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\AccountsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetAccountsResponse extends Data
{
    /** @var DataCollection<int, AccountsData> */
    #[MapName('Accounts')]
    #[MapInputName('Accounts')]
    #[DataCollectionOf(AccountsData::class)]
    public ?DataCollection $accounts = null;

    /**
     * @return @var DataCollection<int, AccountsData>
     */
    public function getAccounts(): ?DataCollection
    {
        return $this->accounts;
    }
}
