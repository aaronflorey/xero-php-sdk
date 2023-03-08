<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\TaxRatesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateTaxRateRequest extends Data
{
    /** @var DataCollection<int, TaxRatesData> */
    #[MapName('TaxRates')]
    #[MapOutputName('TaxRates')]
    #[DataCollectionOf(TaxRatesData::class)]
    public ?DataCollection $taxRates = null;

    /**
     * @var DataCollection<int, TaxRatesData>
     */
    public function setTaxRates(?DataCollection $taxRates): ?self
    {
        $this->taxRates = $taxRates;
        return $this;
    }
}
