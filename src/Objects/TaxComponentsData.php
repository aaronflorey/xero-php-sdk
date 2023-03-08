<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class TaxComponentsData extends Data
{
    /** Name of Tax Component */
    #[MapName('Name')]
    #[MapInputName('Name')]
    public ?string $name = null;

    /**
     * Tax Rate (up to 4dp)
     * @format double
     */
    #[MapName('Rate')]
    #[MapInputName('Rate')]
    public ?int $rate = null;

    /** Boolean to describe if Tax rate is compounded. */
    #[MapName('IsCompound')]
    #[MapInputName('IsCompound')]
    public ?bool $isCompound = null;

    /** Boolean to describe if tax rate is non-recoverable. Non-recoverable rates are only applicable to Canadian organisations */
    #[MapName('IsNonRecoverable')]
    #[MapInputName('IsNonRecoverable')]
    public ?bool $isNonRecoverable = null;

    /**
     * Name of Tax Component
     * @return Name of Tax Component
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Tax Rate (up to 4dp)
     * @return Tax Rate (up to 4dp)
     * @format double
     */
    public function getRate(): ?int
    {
        return $this->rate;
    }

    /**
     * Boolean to describe if Tax rate is compounded.
     * @return Boolean to describe if Tax rate is compounded.
     */
    public function getIsCompound(): ?bool
    {
        return $this->isCompound;
    }

    /**
     * Boolean to describe if tax rate is non-recoverable. Non-recoverable rates are only applicable to Canadian organisations
     * @return Boolean to describe if tax rate is non-recoverable. Non-recoverable rates are only applicable to Canadian organisations
     */
    public function getIsNonRecoverable(): ?bool
    {
        return $this->isNonRecoverable;
    }
}
