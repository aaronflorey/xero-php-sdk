<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\AccountsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateAccountRequest extends Data
{
    /** @var DataCollection<int, AccountsData> */
    #[MapName('Accounts')]
    #[MapOutputName('Accounts')]
    #[DataCollectionOf(AccountsData::class)]
    public ?DataCollection $accounts = null;

    /**
     * @var DataCollection<int, AccountsData>
     */
    public function setAccounts(?DataCollection $accounts): ?self
    {
        $this->accounts = $accounts;
        return $this;
    }
}
