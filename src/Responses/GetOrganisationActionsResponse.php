<?php

namespace Mochaka\XeroSDK\Responses;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class GetOrganisationActionsResponse extends Data
{
    #[MapName('Actions')]
    #[MapInputName('Actions')]
    public ?array $actions = null;

    public function getActions(): ?array
    {
        return $this->actions;
    }
}
