<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class BrandingThemesData extends Data
{
    /**
     * Xero identifier
     * @format uuid
     */
    #[MapName('BrandingThemeID')]
    #[MapInputName('BrandingThemeID')]
    public ?string $brandingThemeID = null;

    /** Name of branding theme */
    #[MapName('Name')]
    #[MapInputName('Name')]
    public ?string $name = null;

    /** The location of the image file used as the logo on this branding theme */
    #[MapName('LogoUrl')]
    #[MapInputName('LogoUrl')]
    public ?string $logoUrl = null;

    /** Always INVOICE */
    #[MapName('Type')]
    #[MapInputName('Type')]
    public ?string $type = null;

    /** Integer – ranked order of branding theme. The default branding theme has a value of 0 */
    #[MapName('SortOrder')]
    #[MapInputName('SortOrder')]
    public ?int $sortOrder = null;

    /**
     * UTC timestamp of creation date of branding theme
     * @example /Date(1573755038314)/
     */
    #[MapName('CreatedDateUTC')]
    #[MapInputName('CreatedDateUTC')]
    public ?string $createdDateUTC = null;

    /**
     * Xero identifier
     * @return Xero identifier
     * @format uuid
     * @return Xero identifier
     * @format uuid
     */
    public function getBrandingThemeID(): ?string
    {
        return $this->brandingThemeID;
    }

    /**
     * Name of branding theme
     * @return Name of branding theme
     * @return Name of branding theme
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The location of the image file used as the logo on this branding theme
     * @return The location of the image file used as the logo on this branding theme
     * @return The location of the image file used as the logo on this branding theme
     */
    public function getLogoUrl(): ?string
    {
        return $this->logoUrl;
    }

    /**
     * Always INVOICE
     * @return Always INVOICE
     * @return Always INVOICE
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Integer – ranked order of branding theme. The default branding theme has a value of 0
     * @return Integer – ranked order of branding theme. The default branding theme has a value of 0
     * @return Integer – ranked order of branding theme. The default branding theme has a value of 0
     */
    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    /**
     * UTC timestamp of creation date of branding theme
     * @return UTC timestamp of creation date of branding theme
     * @example /Date(1573755038314)/
     * @return UTC timestamp of creation date of branding theme
     * @example /Date(1573755038314)/
     */
    public function getCreatedDateUTC(): ?string
    {
        return $this->createdDateUTC;
    }
}
