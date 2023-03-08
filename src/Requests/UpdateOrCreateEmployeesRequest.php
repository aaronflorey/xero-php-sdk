<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\EmployeesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateOrCreateEmployeesRequest extends Data
{
    /** @var DataCollection<int, EmployeesData> */
    #[MapName('Employees')]
    #[MapOutputName('Employees')]
    #[DataCollectionOf(EmployeesData::class)]
    public ?DataCollection $employees = null;

    /**
     * @var DataCollection<int, EmployeesData>
     */
    public function setEmployees(?DataCollection $employees): ?self
    {
        $this->employees = $employees;
        return $this;
    }
}
