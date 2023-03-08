<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\UsersData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetUserResponse extends Data
{
    /** @var DataCollection<int, UsersData> */
    #[MapName('Users')]
    #[MapInputName('Users')]
    #[DataCollectionOf(UsersData::class)]
    public ?DataCollection $users = null;

    /**
     * @return @var DataCollection<int, UsersData>
     */
    public function getUsers(): ?DataCollection
    {
        return $this->users;
    }
}
