<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class ExternalLinksData extends Data
{
    /** See External link types */
    #[MapName('LinkType')]
    #[MapInputName('LinkType')]
    public ?string $linkType = null;

    /** URL for service e.g. http://twitter.com/xeroapi */
    #[MapName('Url')]
    #[MapInputName('Url')]
    public ?string $url = null;

    #[MapName('Description')]
    #[MapInputName('Description')]
    public ?string $description = null;

    /**
     * See External link types
     * @return See External link types
     */
    public function getLinkType(): ?string
    {
        return $this->linkType;
    }

    /**
     * URL for service e.g. http://twitter.com/xeroapi
     * @return URL for service e.g. http://twitter.com/xeroapi
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
