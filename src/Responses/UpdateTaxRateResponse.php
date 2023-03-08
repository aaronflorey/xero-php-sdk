<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\TaxRatesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateTaxRateResponse extends Data
{
    /** @var DataCollection<int, TaxRatesData> */
    #[MapName('TaxRates')]
    #[MapInputName('TaxRates')]
    #[DataCollectionOf(TaxRatesData::class)]
    public ?DataCollection $taxRates = null;

    /**
     * @return @var DataCollection<int, TaxRatesData>
     */
    public function getTaxRates(): ?DataCollection
    {
        return $this->taxRates;
    }
}
