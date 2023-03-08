<?php

namespace Mochaka\XeroSDK\Responses;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class GetContactCISSettingsResponse extends Data
{
    #[MapName('CISSettings')]
    #[MapInputName('CISSettings')]
    public ?array $cISSettings = null;

    public function getCISSettings(): ?array
    {
        return $this->cISSettings;
    }
}
