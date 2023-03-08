<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class WarningsData extends Data
{
    /** Validation error message */
    #[MapName('Message')]
    #[MapInputName('Message')]
    public ?string $message = null;

    /**
     * Validation error message
     * @return Validation error message
     * @return Validation error message
     * @return Validation error message
     * @return Validation error message
     * @return Validation error message
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
}
