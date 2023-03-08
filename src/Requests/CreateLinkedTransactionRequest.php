<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\ValidationErrorsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreateLinkedTransactionRequest extends Data
{
    /**
     * Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice
     * @format uuid
     */
    #[MapName('SourceTransactionID')]
    #[MapOutputName('SourceTransactionID')]
    public ?string $sourceTransactionID = null;

    /**
     * The line item identifier from the source transaction.
     * @format uuid
     */
    #[MapName('SourceLineItemID')]
    #[MapOutputName('SourceLineItemID')]
    public ?string $sourceLineItemID = null;

    /**
     * Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     * @format uuid
     */
    #[MapName('ContactID')]
    #[MapOutputName('ContactID')]
    public ?string $contactID = null;

    /**
     * Filter by the TargetTransactionID. Get all the linked transactions  allocated to a particular ACCREC invoice
     * @format uuid
     */
    #[MapName('TargetTransactionID')]
    #[MapOutputName('TargetTransactionID')]
    public ?string $targetTransactionID = null;

    /**
     * The line item identifier from the target transaction. It is possible  to link multiple billable expenses to the same TargetLineItemID.
     * @format uuid
     */
    #[MapName('TargetLineItemID')]
    #[MapOutputName('TargetLineItemID')]
    public ?string $targetLineItemID = null;

    /**
     * The Xero identifier for an Linked Transaction e.g./LinkedTransactions/297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    #[MapName('LinkedTransactionID')]
    #[MapOutputName('LinkedTransactionID')]
    public ?string $linkedTransactionID = null;

    /** Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED. */
    #[MapName('Status')]
    #[MapOutputName('Status')]
    public ?string $status = null;

    /** This will always be BILLABLEEXPENSE. More types may be added in future. */
    #[MapName('Type')]
    #[MapOutputName('Type')]
    public ?string $type = null;

    /**
     * The last modified date in UTC format
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapOutputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /** The Type of the source tranasction. This will be ACCPAY if the linked transaction was created from an invoice and SPEND if it was created from a bank transaction. */
    #[MapName('SourceTransactionTypeCode')]
    #[MapOutputName('SourceTransactionTypeCode')]
    public ?string $sourceTransactionTypeCode = null;

    /** @var DataCollection<int, ValidationErrorsData> */
    #[MapName('ValidationErrors')]
    #[MapOutputName('ValidationErrors')]
    #[DataCollectionOf(ValidationErrorsData::class)]
    public ?DataCollection $validationErrors = null;

    /**
     * Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice
     */
    public function setSourceTransactionID(?string $sourceTransactionID): ?self
    {
        $this->sourceTransactionID = $sourceTransactionID;
        return $this;
    }

    /**
     * The line item identifier from the source transaction.
     */
    public function setSourceLineItemID(?string $sourceLineItemID): ?self
    {
        $this->sourceLineItemID = $sourceLineItemID;
        return $this;
    }

    /**
     * Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     */
    public function setContactID(?string $contactID): ?self
    {
        $this->contactID = $contactID;
        return $this;
    }

    /**
     * Filter by the TargetTransactionID. Get all the linked transactions  allocated to a particular ACCREC invoice
     */
    public function setTargetTransactionID(?string $targetTransactionID): ?self
    {
        $this->targetTransactionID = $targetTransactionID;
        return $this;
    }

    /**
     * The line item identifier from the target transaction. It is possible  to link multiple billable expenses to the same TargetLineItemID.
     */
    public function setTargetLineItemID(?string $targetLineItemID): ?self
    {
        $this->targetLineItemID = $targetLineItemID;
        return $this;
    }

    /**
     * The Xero identifier for an Linked Transaction e.g./LinkedTransactions/297c2dc5-cc47-4afd-8ec8-74990b8761e9
     */
    public function setLinkedTransactionID(?string $linkedTransactionID): ?self
    {
        $this->linkedTransactionID = $linkedTransactionID;
        return $this;
    }

    /**
     * Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * This will always be BILLABLEEXPENSE. More types may be added in future.
     */
    public function setType(?string $type): ?self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The last modified date in UTC format
     */
    public function setUpdatedDateUTC(?string $updatedDateUTC): ?self
    {
        $this->updatedDateUTC = $updatedDateUTC;
        return $this;
    }

    /**
     * The Type of the source tranasction. This will be ACCPAY if the linked transaction was created from an invoice and SPEND if it was created from a bank transaction.
     */
    public function setSourceTransactionTypeCode(?string $sourceTransactionTypeCode): ?self
    {
        $this->sourceTransactionTypeCode = $sourceTransactionTypeCode;
        return $this;
    }

    /**
     * @var DataCollection<int, ValidationErrorsData>
     */
    public function setValidationErrors(?DataCollection $validationErrors): ?self
    {
        $this->validationErrors = $validationErrors;
        return $this;
    }
}
