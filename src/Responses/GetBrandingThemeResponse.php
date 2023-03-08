<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\BrandingThemesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetBrandingThemeResponse extends Data
{
    /** @var DataCollection<int, BrandingThemesData> */
    #[MapName('BrandingThemes')]
    #[MapInputName('BrandingThemes')]
    #[DataCollectionOf(BrandingThemesData::class)]
    public ?DataCollection $brandingThemes = null;

    /**
     * @return @var DataCollection<int, BrandingThemesData>
     */
    public function getBrandingThemes(): ?DataCollection
    {
        return $this->brandingThemes;
    }
}
