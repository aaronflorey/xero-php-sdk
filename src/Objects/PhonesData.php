<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class PhonesData extends Data
{
    #[MapName('PhoneType')]
    #[MapInputName('PhoneType')]
    public ?string $phoneType = null;

    /** max length = 50 */
    #[MapName('PhoneNumber')]
    #[MapInputName('PhoneNumber')]
    public ?string $phoneNumber = null;

    /** max length = 10 */
    #[MapName('PhoneAreaCode')]
    #[MapInputName('PhoneAreaCode')]
    public ?string $phoneAreaCode = null;

    /** max length = 20 */
    #[MapName('PhoneCountryCode')]
    #[MapInputName('PhoneCountryCode')]
    public ?string $phoneCountryCode = null;

    public function getPhoneType(): ?string
    {
        return $this->phoneType;
    }

    /**
     * max length = 50
     * @return max length = 50
     * @return max length = 50
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * max length = 10
     * @return max length = 10
     * @return max length = 10
     */
    public function getPhoneAreaCode(): ?string
    {
        return $this->phoneAreaCode;
    }

    /**
     * max length = 20
     * @return max length = 20
     * @return max length = 20
     */
    public function getPhoneCountryCode(): ?string
    {
        return $this->phoneCountryCode;
    }
}
