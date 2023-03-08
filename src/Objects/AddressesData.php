<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class AddressesData extends Data
{
    /** define the type of address */
    #[MapName('AddressType')]
    #[MapInputName('AddressType')]
    public ?string $addressType = null;

    /** max length = 500 */
    #[MapName('AddressLine1')]
    #[MapInputName('AddressLine1')]
    public ?string $addressLine1 = null;

    /** max length = 500 */
    #[MapName('AddressLine2')]
    #[MapInputName('AddressLine2')]
    public ?string $addressLine2 = null;

    /** max length = 500 */
    #[MapName('AddressLine3')]
    #[MapInputName('AddressLine3')]
    public ?string $addressLine3 = null;

    /** max length = 500 */
    #[MapName('AddressLine4')]
    #[MapInputName('AddressLine4')]
    public ?string $addressLine4 = null;

    /** max length = 255 */
    #[MapName('City')]
    #[MapInputName('City')]
    public ?string $city = null;

    /** max length = 255 */
    #[MapName('Region')]
    #[MapInputName('Region')]
    public ?string $region = null;

    /** max length = 50 */
    #[MapName('PostalCode')]
    #[MapInputName('PostalCode')]
    public ?string $postalCode = null;

    /** max length = 50, [A-Z], [a-z] only */
    #[MapName('Country')]
    #[MapInputName('Country')]
    public ?string $country = null;

    /** max length = 255 */
    #[MapName('AttentionTo')]
    #[MapInputName('AttentionTo')]
    public ?string $attentionTo = null;

    /**
     * define the type of address
     * @return define the type of address
     * @return define the type of address
     */
    public function getAddressType(): ?string
    {
        return $this->addressType;
    }

    /**
     * max length = 500
     * @return max length = 500
     * @return max length = 500
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * max length = 500
     * @return max length = 500
     * @return max length = 500
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * max length = 500
     * @return max length = 500
     * @return max length = 500
     */
    public function getAddressLine3(): ?string
    {
        return $this->addressLine3;
    }

    /**
     * max length = 500
     * @return max length = 500
     * @return max length = 500
     */
    public function getAddressLine4(): ?string
    {
        return $this->addressLine4;
    }

    /**
     * max length = 255
     * @return max length = 255
     * @return max length = 255
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * max length = 255
     * @return max length = 255
     * @return max length = 255
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * max length = 50
     * @return max length = 50
     * @return max length = 50
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * max length = 50, [A-Z], [a-z] only
     * @return max length = 50, [A-Z], [a-z] only
     * @return max length = 50, [A-Z], [a-z] only
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * max length = 255
     * @return max length = 255
     * @return max length = 255
     */
    public function getAttentionTo(): ?string
    {
        return $this->attentionTo;
    }
}
