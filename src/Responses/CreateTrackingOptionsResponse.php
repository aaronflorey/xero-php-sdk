<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\OptionsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreateTrackingOptionsResponse extends Data
{
    /** @var DataCollection<int, OptionsData> */
    #[MapName('Options')]
    #[MapInputName('Options')]
    #[DataCollectionOf(OptionsData::class)]
    public ?DataCollection $options = null;

    /**
     * @return @var DataCollection<int, OptionsData>
     */
    public function getOptions(): ?DataCollection
    {
        return $this->options;
    }
}
