<?php

namespace Mochaka\XeroSDK;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Saloon\Http\Connector;

/**
 * The Xero Accounting API exposes accounting and related functions of the
 * main Xero application and can be used for a variety of purposes such as
 * creating transactions like invoices and credit notes, right through to
 * extracting accounting data via our reports endpoint.
 */
class XeroAccountingConnector extends Connector
{
    public function resolveBaseUrl(): string
    {
        return "https://api.xero.com/api.xro/2.0";
    }

    public function accounting(): AccountingResource
    {
        return new AccountingResource($this);
    }
}
