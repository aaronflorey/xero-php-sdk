<?php

namespace Mochaka\XeroSDK\Requests;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;

class CreateCurrencyRequest extends Data
{
    #[MapName('Code')]
    #[MapOutputName('Code')]
    public ?string $code = null;

    /** Name of Currency */
    #[MapName('Description')]
    #[MapOutputName('Description')]
    public ?string $description = null;

    public function setCode(?string $code): ?self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Name of Currency
     */
    public function setDescription(?string $description): ?self
    {
        $this->description = $description;
        return $this;
    }
}
