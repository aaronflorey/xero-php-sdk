<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\EmployeesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreateEmployeesResponse extends Data
{
    /** @var DataCollection<int, EmployeesData> */
    #[MapName('Employees')]
    #[MapInputName('Employees')]
    #[DataCollectionOf(EmployeesData::class)]
    public ?DataCollection $employees = null;

    /**
     * @return @var DataCollection<int, EmployeesData>
     */
    public function getEmployees(): ?DataCollection
    {
        return $this->employees;
    }
}
