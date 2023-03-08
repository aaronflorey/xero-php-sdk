<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class LinkedTransactionsData extends Data
{
    /**
     * Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice
     * @format uuid
     */
    #[MapName('SourceTransactionID')]
    #[MapInputName('SourceTransactionID')]
    public ?string $sourceTransactionID = null;

    /**
     * The line item identifier from the source transaction.
     * @format uuid
     */
    #[MapName('SourceLineItemID')]
    #[MapInputName('SourceLineItemID')]
    public ?string $sourceLineItemID = null;

    /**
     * Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     * @format uuid
     */
    #[MapName('ContactID')]
    #[MapInputName('ContactID')]
    public ?string $contactID = null;

    /**
     * Filter by the TargetTransactionID. Get all the linked transactions  allocated to a particular ACCREC invoice
     * @format uuid
     */
    #[MapName('TargetTransactionID')]
    #[MapInputName('TargetTransactionID')]
    public ?string $targetTransactionID = null;

    /**
     * The line item identifier from the target transaction. It is possible  to link multiple billable expenses to the same TargetLineItemID.
     * @format uuid
     */
    #[MapName('TargetLineItemID')]
    #[MapInputName('TargetLineItemID')]
    public ?string $targetLineItemID = null;

    /**
     * The Xero identifier for an Linked Transaction e.g./LinkedTransactions/297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    #[MapName('LinkedTransactionID')]
    #[MapInputName('LinkedTransactionID')]
    public ?string $linkedTransactionID = null;

    /** Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED. */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    /** This will always be BILLABLEEXPENSE. More types may be added in future. */
    #[MapName('Type')]
    #[MapInputName('Type')]
    public ?string $type = null;

    /**
     * The last modified date in UTC format
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /** The Type of the source tranasction. This will be ACCPAY if the linked transaction was created from an invoice and SPEND if it was created from a bank transaction. */
    #[MapName('SourceTransactionTypeCode')]
    #[MapInputName('SourceTransactionTypeCode')]
    public ?string $sourceTransactionTypeCode = null;

    /** @var DataCollection<int, ValidationErrorsData> */
    #[MapName('ValidationErrors')]
    #[MapInputName('ValidationErrors')]
    #[DataCollectionOf(ValidationErrorsData::class)]
    public ?DataCollection $validationErrors = null;

    /**
     * Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice
     * @return Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice
     * @format uuid
     * @return Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice
     * @format uuid
     * @return Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice
     * @format uuid
     * @return Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice
     * @format uuid
     */
    public function getSourceTransactionID(): ?string
    {
        return $this->sourceTransactionID;
    }

    /**
     * The line item identifier from the source transaction.
     * @return The line item identifier from the source transaction.
     * @format uuid
     * @return The line item identifier from the source transaction.
     * @format uuid
     * @return The line item identifier from the source transaction.
     * @format uuid
     * @return The line item identifier from the source transaction.
     * @format uuid
     */
    public function getSourceLineItemID(): ?string
    {
        return $this->sourceLineItemID;
    }

    /**
     * Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     * @return Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     * @format uuid
     * @return Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     * @format uuid
     * @return Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     * @format uuid
     * @return Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     * @format uuid
     */
    public function getContactID(): ?string
    {
        return $this->contactID;
    }

    /**
     * Filter by the TargetTransactionID. Get all the linked transactions  allocated to a particular ACCREC invoice
     * @return Filter by the TargetTransactionID. Get all the linked transactions  allocated to a particular ACCREC invoice
     * @format uuid
     * @return Filter by the TargetTransactionID. Get all the linked transactions  allocated to a particular ACCREC invoice
     * @format uuid
     * @return Filter by the TargetTransactionID. Get all the linked transactions  allocated to a particular ACCREC invoice
     * @format uuid
     * @return Filter by the TargetTransactionID. Get all the linked transactions  allocated to a particular ACCREC invoice
     * @format uuid
     */
    public function getTargetTransactionID(): ?string
    {
        return $this->targetTransactionID;
    }

    /**
     * The line item identifier from the target transaction. It is possible  to link multiple billable expenses to the same TargetLineItemID.
     * @return The line item identifier from the target transaction. It is possible  to link multiple billable expenses to the same TargetLineItemID.
     * @format uuid
     * @return The line item identifier from the target transaction. It is possible  to link multiple billable expenses to the same TargetLineItemID.
     * @format uuid
     * @return The line item identifier from the target transaction. It is possible  to link multiple billable expenses to the same TargetLineItemID.
     * @format uuid
     * @return The line item identifier from the target transaction. It is possible  to link multiple billable expenses to the same TargetLineItemID.
     * @format uuid
     */
    public function getTargetLineItemID(): ?string
    {
        return $this->targetLineItemID;
    }

    /**
     * The Xero identifier for an Linked Transaction e.g./LinkedTransactions/297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @return The Xero identifier for an Linked Transaction e.g./LinkedTransactions/297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for an Linked Transaction e.g./LinkedTransactions/297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for an Linked Transaction e.g./LinkedTransactions/297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for an Linked Transaction e.g./LinkedTransactions/297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    public function getLinkedTransactionID(): ?string
    {
        return $this->linkedTransactionID;
    }

    /**
     * Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     * @return Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     * @return Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     * @return Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     * @return Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * This will always be BILLABLEEXPENSE. More types may be added in future.
     * @return This will always be BILLABLEEXPENSE. More types may be added in future.
     * @return This will always be BILLABLEEXPENSE. More types may be added in future.
     * @return This will always be BILLABLEEXPENSE. More types may be added in future.
     * @return This will always be BILLABLEEXPENSE. More types may be added in future.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The last modified date in UTC format
     * @return The last modified date in UTC format
     * @example /Date(1573755038314)/
     * @return The last modified date in UTC format
     * @example /Date(1573755038314)/
     * @return The last modified date in UTC format
     * @example /Date(1573755038314)/
     * @return The last modified date in UTC format
     * @example /Date(1573755038314)/
     */
    public function getUpdatedDateUTC(): ?string
    {
        return $this->updatedDateUTC;
    }

    /**
     * The Type of the source tranasction. This will be ACCPAY if the linked transaction was created from an invoice and SPEND if it was created from a bank transaction.
     * @return The Type of the source tranasction. This will be ACCPAY if the linked transaction was created from an invoice and SPEND if it was created from a bank transaction.
     * @return The Type of the source tranasction. This will be ACCPAY if the linked transaction was created from an invoice and SPEND if it was created from a bank transaction.
     * @return The Type of the source tranasction. This will be ACCPAY if the linked transaction was created from an invoice and SPEND if it was created from a bank transaction.
     * @return The Type of the source tranasction. This will be ACCPAY if the linked transaction was created from an invoice and SPEND if it was created from a bank transaction.
     */
    public function getSourceTransactionTypeCode(): ?string
    {
        return $this->sourceTransactionTypeCode;
    }

    /**
     * @return @var DataCollection<int, ValidationErrorsData>
     */
    public function getValidationErrors(): ?DataCollection
    {
        return $this->validationErrors;
    }

    /**
     * Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice
     * @format uuid
     */
    public function setSourceTransactionID(?string $sourceTransactionID): ?self
    {
        $this->sourceTransactionID = $sourceTransactionID;
        return $this;
    }

    /**
     * The line item identifier from the source transaction.
     * @format uuid
     */
    public function setSourceLineItemID(?string $sourceLineItemID): ?self
    {
        $this->sourceLineItemID = $sourceLineItemID;
        return $this;
    }

    /**
     * Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     * @format uuid
     */
    public function setContactID(?string $contactID): ?self
    {
        $this->contactID = $contactID;
        return $this;
    }

    /**
     * Filter by the TargetTransactionID. Get all the linked transactions  allocated to a particular ACCREC invoice
     * @format uuid
     */
    public function setTargetTransactionID(?string $targetTransactionID): ?self
    {
        $this->targetTransactionID = $targetTransactionID;
        return $this;
    }

    /**
     * The line item identifier from the target transaction. It is possible  to link multiple billable expenses to the same TargetLineItemID.
     * @format uuid
     */
    public function setTargetLineItemID(?string $targetLineItemID): ?self
    {
        $this->targetLineItemID = $targetLineItemID;
        return $this;
    }

    /**
     * The Xero identifier for an Linked Transaction e.g./LinkedTransactions/297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
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
     * @example /Date(1573755038314)/
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
}
