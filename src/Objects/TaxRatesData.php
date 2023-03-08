<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class TaxRatesData extends Data
{
    /** Name of tax rate */
    #[MapName('Name')]
    #[MapInputName('Name')]
    public ?string $name = null;

    /** The tax type */
    #[MapName('TaxType')]
    #[MapInputName('TaxType')]
    public ?string $taxType = null;

    /** @var DataCollection<int, TaxComponentsData> */
    #[MapName('TaxComponents')]
    #[MapInputName('TaxComponents')]
    #[DataCollectionOf(TaxComponentsData::class)]
    public ?DataCollection $taxComponents = null;

    /** See Status Codes */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    /** See ReportTaxTypes */
    #[MapName('ReportTaxType')]
    #[MapInputName('ReportTaxType')]
    public ?string $reportTaxType = null;

    /** Boolean to describe if tax rate can be used for asset accounts i.e.  true,false */
    #[MapName('CanApplyToAssets')]
    #[MapInputName('CanApplyToAssets')]
    public ?bool $canApplyToAssets = null;

    /** Boolean to describe if tax rate can be used for equity accounts i.e true,false */
    #[MapName('CanApplyToEquity')]
    #[MapInputName('CanApplyToEquity')]
    public ?bool $canApplyToEquity = null;

    /** Boolean to describe if tax rate can be used for expense accounts  i.e. true,false */
    #[MapName('CanApplyToExpenses')]
    #[MapInputName('CanApplyToExpenses')]
    public ?bool $canApplyToExpenses = null;

    /** Boolean to describe if tax rate can be used for liability accounts  i.e. true,false */
    #[MapName('CanApplyToLiabilities')]
    #[MapInputName('CanApplyToLiabilities')]
    public ?bool $canApplyToLiabilities = null;

    /** Boolean to describe if tax rate can be used for revenue accounts i.e. true,false */
    #[MapName('CanApplyToRevenue')]
    #[MapInputName('CanApplyToRevenue')]
    public ?bool $canApplyToRevenue = null;

    /**
     * Tax Rate (decimal to 4dp) e.g 12.5000
     * @format double
     */
    #[MapName('DisplayTaxRate')]
    #[MapInputName('DisplayTaxRate')]
    public ?int $displayTaxRate = null;

    /**
     * Effective Tax Rate (decimal to 4dp) e.g 12.5000
     * @format double
     */
    #[MapName('EffectiveRate')]
    #[MapInputName('EffectiveRate')]
    public ?int $effectiveRate = null;

    /**
     * Name of tax rate
     * @return Name of tax rate
     * @return Name of tax rate
     * @return Name of tax rate
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The tax type
     * @return The tax type
     * @return The tax type
     * @return The tax type
     */
    public function getTaxType(): ?string
    {
        return $this->taxType;
    }

    /**
     * @return @var DataCollection<int, TaxComponentsData>
     */
    public function getTaxComponents(): ?DataCollection
    {
        return $this->taxComponents;
    }

    /**
     * See Status Codes
     * @return See Status Codes
     * @return See Status Codes
     * @return See Status Codes
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * See ReportTaxTypes
     * @return See ReportTaxTypes
     * @return See ReportTaxTypes
     * @return See ReportTaxTypes
     */
    public function getReportTaxType(): ?string
    {
        return $this->reportTaxType;
    }

    /**
     * Boolean to describe if tax rate can be used for asset accounts i.e.  true,false
     * @return Boolean to describe if tax rate can be used for asset accounts i.e.  true,false
     * @return Boolean to describe if tax rate can be used for asset accounts i.e.  true,false
     * @return Boolean to describe if tax rate can be used for asset accounts i.e.  true,false
     */
    public function getCanApplyToAssets(): ?bool
    {
        return $this->canApplyToAssets;
    }

    /**
     * Boolean to describe if tax rate can be used for equity accounts i.e true,false
     * @return Boolean to describe if tax rate can be used for equity accounts i.e true,false
     * @return Boolean to describe if tax rate can be used for equity accounts i.e true,false
     * @return Boolean to describe if tax rate can be used for equity accounts i.e true,false
     */
    public function getCanApplyToEquity(): ?bool
    {
        return $this->canApplyToEquity;
    }

    /**
     * Boolean to describe if tax rate can be used for expense accounts  i.e. true,false
     * @return Boolean to describe if tax rate can be used for expense accounts  i.e. true,false
     * @return Boolean to describe if tax rate can be used for expense accounts  i.e. true,false
     * @return Boolean to describe if tax rate can be used for expense accounts  i.e. true,false
     */
    public function getCanApplyToExpenses(): ?bool
    {
        return $this->canApplyToExpenses;
    }

    /**
     * Boolean to describe if tax rate can be used for liability accounts  i.e. true,false
     * @return Boolean to describe if tax rate can be used for liability accounts  i.e. true,false
     * @return Boolean to describe if tax rate can be used for liability accounts  i.e. true,false
     * @return Boolean to describe if tax rate can be used for liability accounts  i.e. true,false
     */
    public function getCanApplyToLiabilities(): ?bool
    {
        return $this->canApplyToLiabilities;
    }

    /**
     * Boolean to describe if tax rate can be used for revenue accounts i.e. true,false
     * @return Boolean to describe if tax rate can be used for revenue accounts i.e. true,false
     * @return Boolean to describe if tax rate can be used for revenue accounts i.e. true,false
     * @return Boolean to describe if tax rate can be used for revenue accounts i.e. true,false
     */
    public function getCanApplyToRevenue(): ?bool
    {
        return $this->canApplyToRevenue;
    }

    /**
     * Tax Rate (decimal to 4dp) e.g 12.5000
     * @return Tax Rate (decimal to 4dp) e.g 12.5000
     * @format double
     * @return Tax Rate (decimal to 4dp) e.g 12.5000
     * @format double
     * @return Tax Rate (decimal to 4dp) e.g 12.5000
     * @format double
     */
    public function getDisplayTaxRate(): ?int
    {
        return $this->displayTaxRate;
    }

    /**
     * Effective Tax Rate (decimal to 4dp) e.g 12.5000
     * @return Effective Tax Rate (decimal to 4dp) e.g 12.5000
     * @format double
     * @return Effective Tax Rate (decimal to 4dp) e.g 12.5000
     * @format double
     * @return Effective Tax Rate (decimal to 4dp) e.g 12.5000
     * @format double
     */
    public function getEffectiveRate(): ?int
    {
        return $this->effectiveRate;
    }

    /**
     * Name of tax rate
     */
    public function setName(?string $name): ?self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The tax type
     */
    public function setTaxType(?string $taxType): ?self
    {
        $this->taxType = $taxType;
        return $this;
    }

    /**
     * See Status Codes
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * See ReportTaxTypes
     */
    public function setReportTaxType(?string $reportTaxType): ?self
    {
        $this->reportTaxType = $reportTaxType;
        return $this;
    }

    /**
     * Boolean to describe if tax rate can be used for asset accounts i.e.  true,false
     */
    public function setCanApplyToAssets(?bool $canApplyToAssets): ?self
    {
        $this->canApplyToAssets = $canApplyToAssets;
        return $this;
    }

    /**
     * Boolean to describe if tax rate can be used for equity accounts i.e true,false
     */
    public function setCanApplyToEquity(?bool $canApplyToEquity): ?self
    {
        $this->canApplyToEquity = $canApplyToEquity;
        return $this;
    }

    /**
     * Boolean to describe if tax rate can be used for expense accounts  i.e. true,false
     */
    public function setCanApplyToExpenses(?bool $canApplyToExpenses): ?self
    {
        $this->canApplyToExpenses = $canApplyToExpenses;
        return $this;
    }

    /**
     * Boolean to describe if tax rate can be used for liability accounts  i.e. true,false
     */
    public function setCanApplyToLiabilities(?bool $canApplyToLiabilities): ?self
    {
        $this->canApplyToLiabilities = $canApplyToLiabilities;
        return $this;
    }

    /**
     * Boolean to describe if tax rate can be used for revenue accounts i.e. true,false
     */
    public function setCanApplyToRevenue(?bool $canApplyToRevenue): ?self
    {
        $this->canApplyToRevenue = $canApplyToRevenue;
        return $this;
    }

    /**
     * Tax Rate (decimal to 4dp) e.g 12.5000
     * @format double
     */
    public function setDisplayTaxRate(?int $displayTaxRate): ?self
    {
        $this->displayTaxRate = $displayTaxRate;
        return $this;
    }

    /**
     * Effective Tax Rate (decimal to 4dp) e.g 12.5000
     * @format double
     */
    public function setEffectiveRate(?int $effectiveRate): ?self
    {
        $this->effectiveRate = $effectiveRate;
        return $this;
    }
}
