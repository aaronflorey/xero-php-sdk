<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\CurrenciesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetCurrenciesResponse extends Data
{
    /** @var DataCollection<int, CurrenciesData> */
    #[MapName('Currencies')]
    #[MapInputName('Currencies')]
    #[DataCollectionOf(CurrenciesData::class)]
    public ?DataCollection $currencies = null;

    /**
     * @return @var DataCollection<int, CurrenciesData>
     */
    public function getCurrencies(): ?DataCollection
    {
        return $this->currencies;
    }
}
