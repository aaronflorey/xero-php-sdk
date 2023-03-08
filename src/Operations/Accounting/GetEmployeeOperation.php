<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetEmployeeResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific employee used in Xero payrun using a unique employee
 * Id
 * @operation getEmployee
 * @tags Accounting
 */
class GetEmployeeOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a Employee
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $employeeID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $employeeID,
    ) {
        $this->employeeID = $employeeID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Employees/{EmployeeID}', ['{EmployeeID}' => $this->employeeID]);
    }

    public function createDtoFromResponse(Response1 $response): GetEmployeeResponse
    {
        return GetEmployeeResponse::from($response->json());
    }
}
