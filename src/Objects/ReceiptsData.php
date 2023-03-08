<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ReceiptsData extends Data
{
    /** Date of receipt – YYYY-MM-DD */
    #[MapName('Date')]
    #[MapInputName('Date')]
    public ?string $date = null;

    #[MapName('Contact')]
    #[MapInputName('Contact')]
    public mixed $contact = null;

    /** @var DataCollection<int, LineItemsData> */
    #[MapName('LineItems')]
    #[MapInputName('LineItems')]
    #[DataCollectionOf(LineItemsData::class)]
    public ?DataCollection $lineItems = null;

    #[MapName('User')]
    #[MapInputName('User')]
    public mixed $user = null;

    /** Additional reference number */
    #[MapName('Reference')]
    #[MapInputName('Reference')]
    public ?string $reference = null;

    #[MapName('LineAmountTypes')]
    #[MapInputName('LineAmountTypes')]
    public ?string $lineAmountTypes = null;

    /**
     * Total of receipt excluding taxes
     * @format double
     */
    #[MapName('SubTotal')]
    #[MapInputName('SubTotal')]
    public ?int $subTotal = null;

    /**
     * Total tax on receipt
     * @format double
     */
    #[MapName('TotalTax')]
    #[MapInputName('TotalTax')]
    public ?int $totalTax = null;

    /**
     * Total of receipt tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     */
    #[MapName('Total')]
    #[MapInputName('Total')]
    public ?int $total = null;

    /**
     * Xero generated unique identifier for receipt
     * @format uuid
     */
    #[MapName('ReceiptID')]
    #[MapInputName('ReceiptID')]
    public ?string $receiptID = null;

    /** Current status of receipt – see status types */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    /** Xero generated sequence number for receipt in current claim for a given user */
    #[MapName('ReceiptNumber')]
    #[MapInputName('ReceiptNumber')]
    public ?string $receiptNumber = null;

    /**
     * Last modified date UTC format
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /**
     * boolean to indicate if a receipt has an attachment
     * @example false
     */
    #[MapName('HasAttachments')]
    #[MapInputName('HasAttachments')]
    public ?bool $hasAttachments = null;

    /** URL link to a source document – shown as “Go to [appName]” in the Xero app */
    #[MapName('Url')]
    #[MapInputName('Url')]
    public ?string $url = null;

    /** @var DataCollection<int, ValidationErrorsData> */
    #[MapName('ValidationErrors')]
    #[MapInputName('ValidationErrors')]
    #[DataCollectionOf(ValidationErrorsData::class)]
    public ?DataCollection $validationErrors = null;

    /** @var DataCollection<int, WarningsData> */
    #[MapName('Warnings')]
    #[MapInputName('Warnings')]
    #[DataCollectionOf(WarningsData::class)]
    public ?DataCollection $warnings = null;

    /** @var DataCollection<int, AttachmentsData> */
    #[MapName('Attachments')]
    #[MapInputName('Attachments')]
    #[DataCollectionOf(AttachmentsData::class)]
    public ?DataCollection $attachments = null;

    /**
     * Date of receipt – YYYY-MM-DD
     * @return Date of receipt – YYYY-MM-DD
     * @return Date of receipt – YYYY-MM-DD
     * @return Date of receipt – YYYY-MM-DD
     * @return Date of receipt – YYYY-MM-DD
     * @return Date of receipt – YYYY-MM-DD
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    public function getContact(): mixed
    {
        return $this->contact;
    }

    /**
     * @return @var DataCollection<int, LineItemsData>
     */
    public function getLineItems(): ?DataCollection
    {
        return $this->lineItems;
    }

    public function getUser(): mixed
    {
        return $this->user;
    }

    /**
     * Additional reference number
     * @return Additional reference number
     * @return Additional reference number
     * @return Additional reference number
     * @return Additional reference number
     * @return Additional reference number
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function getLineAmountTypes(): ?string
    {
        return $this->lineAmountTypes;
    }

    /**
     * Total of receipt excluding taxes
     * @return Total of receipt excluding taxes
     * @format double
     * @return Total of receipt excluding taxes
     * @format double
     * @return Total of receipt excluding taxes
     * @format double
     * @return Total of receipt excluding taxes
     * @format double
     * @return Total of receipt excluding taxes
     * @format double
     */
    public function getSubTotal(): ?int
    {
        return $this->subTotal;
    }

    /**
     * Total tax on receipt
     * @return Total tax on receipt
     * @format double
     * @return Total tax on receipt
     * @format double
     * @return Total tax on receipt
     * @format double
     * @return Total tax on receipt
     * @format double
     * @return Total tax on receipt
     * @format double
     */
    public function getTotalTax(): ?int
    {
        return $this->totalTax;
    }

    /**
     * Total of receipt tax inclusive (i.e. SubTotal + TotalTax)
     * @return Total of receipt tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     * @return Total of receipt tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     * @return Total of receipt tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     * @return Total of receipt tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     * @return Total of receipt tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * Xero generated unique identifier for receipt
     * @return Xero generated unique identifier for receipt
     * @format uuid
     * @return Xero generated unique identifier for receipt
     * @format uuid
     * @return Xero generated unique identifier for receipt
     * @format uuid
     * @return Xero generated unique identifier for receipt
     * @format uuid
     * @return Xero generated unique identifier for receipt
     * @format uuid
     */
    public function getReceiptID(): ?string
    {
        return $this->receiptID;
    }

    /**
     * Current status of receipt – see status types
     * @return Current status of receipt – see status types
     * @return Current status of receipt – see status types
     * @return Current status of receipt – see status types
     * @return Current status of receipt – see status types
     * @return Current status of receipt – see status types
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Xero generated sequence number for receipt in current claim for a given user
     * @return Xero generated sequence number for receipt in current claim for a given user
     * @return Xero generated sequence number for receipt in current claim for a given user
     * @return Xero generated sequence number for receipt in current claim for a given user
     * @return Xero generated sequence number for receipt in current claim for a given user
     * @return Xero generated sequence number for receipt in current claim for a given user
     */
    public function getReceiptNumber(): ?string
    {
        return $this->receiptNumber;
    }

    /**
     * Last modified date UTC format
     * @return Last modified date UTC format
     * @example /Date(1573755038314)/
     * @return Last modified date UTC format
     * @example /Date(1573755038314)/
     * @return Last modified date UTC format
     * @example /Date(1573755038314)/
     * @return Last modified date UTC format
     * @example /Date(1573755038314)/
     * @return Last modified date UTC format
     * @example /Date(1573755038314)/
     */
    public function getUpdatedDateUTC(): ?string
    {
        return $this->updatedDateUTC;
    }

    /**
     * boolean to indicate if a receipt has an attachment
     * @return boolean to indicate if a receipt has an attachment
     * @example false
     * @return boolean to indicate if a receipt has an attachment
     * @example false
     * @return boolean to indicate if a receipt has an attachment
     * @example false
     * @return boolean to indicate if a receipt has an attachment
     * @example false
     * @return boolean to indicate if a receipt has an attachment
     * @example false
     */
    public function getHasAttachments(): ?bool
    {
        return $this->hasAttachments;
    }

    /**
     * URL link to a source document – shown as “Go to [appName]” in the Xero app
     * @return URL link to a source document – shown as “Go to [appName]” in the Xero app
     * @return URL link to a source document – shown as “Go to [appName]” in the Xero app
     * @return URL link to a source document – shown as “Go to [appName]” in the Xero app
     * @return URL link to a source document – shown as “Go to [appName]” in the Xero app
     * @return URL link to a source document – shown as “Go to [appName]” in the Xero app
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return @var DataCollection<int, ValidationErrorsData>
     */
    public function getValidationErrors(): ?DataCollection
    {
        return $this->validationErrors;
    }

    /**
     * @return @var DataCollection<int, WarningsData>
     */
    public function getWarnings(): ?DataCollection
    {
        return $this->warnings;
    }

    /**
     * @return @var DataCollection<int, AttachmentsData>
     */
    public function getAttachments(): ?DataCollection
    {
        return $this->attachments;
    }

    /**
     * Date of receipt – YYYY-MM-DD
     */
    public function setDate(?string $date): ?self
    {
        $this->date = $date;
        return $this;
    }

    public function setContact(mixed $contact): ?self
    {
        $this->contact = $contact;
        return $this;
    }

    public function setUser(mixed $user): ?self
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Additional reference number
     */
    public function setReference(?string $reference): ?self
    {
        $this->reference = $reference;
        return $this;
    }

    public function setLineAmountTypes(?string $lineAmountTypes): ?self
    {
        $this->lineAmountTypes = $lineAmountTypes;
        return $this;
    }

    /**
     * Total of receipt excluding taxes
     * @format double
     */
    public function setSubTotal(?int $subTotal): ?self
    {
        $this->subTotal = $subTotal;
        return $this;
    }

    /**
     * Total tax on receipt
     * @format double
     */
    public function setTotalTax(?int $totalTax): ?self
    {
        $this->totalTax = $totalTax;
        return $this;
    }

    /**
     * Total of receipt tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     */
    public function setTotal(?int $total): ?self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Xero generated unique identifier for receipt
     * @format uuid
     */
    public function setReceiptID(?string $receiptID): ?self
    {
        $this->receiptID = $receiptID;
        return $this;
    }

    /**
     * Current status of receipt – see status types
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Xero generated sequence number for receipt in current claim for a given user
     */
    public function setReceiptNumber(?string $receiptNumber): ?self
    {
        $this->receiptNumber = $receiptNumber;
        return $this;
    }

    /**
     * Last modified date UTC format
     * @example /Date(1573755038314)/
     */
    public function setUpdatedDateUTC(?string $updatedDateUTC): ?self
    {
        $this->updatedDateUTC = $updatedDateUTC;
        return $this;
    }

    /**
     * boolean to indicate if a receipt has an attachment
     * @example false
     */
    public function setHasAttachments(?bool $hasAttachments): ?self
    {
        $this->hasAttachments = $hasAttachments;
        return $this;
    }

    /**
     * URL link to a source document – shown as “Go to [appName]” in the Xero app
     */
    public function setUrl(?string $url): ?self
    {
        $this->url = $url;
        return $this;
    }
}
