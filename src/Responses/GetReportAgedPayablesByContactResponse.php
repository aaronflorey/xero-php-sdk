<?php

namespace Mochaka\XeroSDK\Responses;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class GetReportAgedPayablesByContactResponse extends Data
{
    #[MapName('Reports')]
    #[MapInputName('Reports')]
    public ?array $reports = null;

    public function getReports(): ?array
    {
        return $this->reports;
    }
}
