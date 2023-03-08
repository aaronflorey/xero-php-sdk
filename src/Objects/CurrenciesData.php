<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class CurrenciesData extends Data
{
    #[MapName('Code')]
    #[MapInputName('Code')]
    public ?string $code = null;

    /** Name of Currency */
    #[MapName('Description')]
    #[MapInputName('Description')]
    public ?string $description = null;

    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Name of Currency
     * @return Name of Currency
     * @return Name of Currency
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
}
