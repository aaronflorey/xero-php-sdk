<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class OverpaymentsData extends Data
{
    /** See Overpayment Types */
    #[MapName('Type')]
    #[MapInputName('Type')]
    public ?string $type = null;

    #[MapName('Contact')]
    #[MapInputName('Contact')]
    public mixed $contact = null;

    /** The date the overpayment is created YYYY-MM-DD */
    #[MapName('Date')]
    #[MapInputName('Date')]
    public ?string $date = null;

    /** See Overpayment Status Codes */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    #[MapName('LineAmountTypes')]
    #[MapInputName('LineAmountTypes')]
    public ?string $lineAmountTypes = null;

    /** @var DataCollection<int, LineItemsData> */
    #[MapName('LineItems')]
    #[MapInputName('LineItems')]
    #[DataCollectionOf(LineItemsData::class)]
    public ?DataCollection $lineItems = null;

    /**
     * The subtotal of the overpayment excluding taxes
     * @format double
     */
    #[MapName('SubTotal')]
    #[MapInputName('SubTotal')]
    public ?int $subTotal = null;

    /**
     * The total tax on the overpayment
     * @format double
     */
    #[MapName('TotalTax')]
    #[MapInputName('TotalTax')]
    public ?int $totalTax = null;

    /**
     * The total of the overpayment (subtotal + total tax)
     * @format double
     */
    #[MapName('Total')]
    #[MapInputName('Total')]
    public ?int $total = null;

    /**
     * UTC timestamp of last update to the overpayment
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    #[MapName('CurrencyCode')]
    #[MapInputName('CurrencyCode')]
    public ?string $currencyCode = null;

    /**
     * Xero generated unique identifier
     * @format uuid
     */
    #[MapName('OverpaymentID')]
    #[MapInputName('OverpaymentID')]
    public ?string $overpaymentID = null;

    /**
     * The currency rate for a multicurrency overpayment. If no rate is specified, the XE.com day rate is used
     * @format double
     */
    #[MapName('CurrencyRate')]
    #[MapInputName('CurrencyRate')]
    public ?int $currencyRate = null;

    /**
     * The remaining credit balance on the overpayment
     * @format double
     */
    #[MapName('RemainingCredit')]
    #[MapInputName('RemainingCredit')]
    public ?int $remainingCredit = null;

    /** @var DataCollection<int, AllocationsData> */
    #[MapName('Allocations')]
    #[MapInputName('Allocations')]
    #[DataCollectionOf(AllocationsData::class)]
    public ?DataCollection $allocations = null;

    /**
     * The amount of applied to an invoice
     * @format double
     * @example 2
     */
    #[MapName('AppliedAmount')]
    #[MapInputName('AppliedAmount')]
    public ?int $appliedAmount = null;

    /** @var DataCollection<int, PaymentsData> */
    #[MapName('Payments')]
    #[MapInputName('Payments')]
    #[DataCollectionOf(PaymentsData::class)]
    public ?DataCollection $payments = null;

    /**
     * boolean to indicate if a overpayment has an attachment
     * @example false
     */
    #[MapName('HasAttachments')]
    #[MapInputName('HasAttachments')]
    public ?bool $hasAttachments = null;

    /** @var DataCollection<int, AttachmentsData> */
    #[MapName('Attachments')]
    #[MapInputName('Attachments')]
    #[DataCollectionOf(AttachmentsData::class)]
    public ?DataCollection $attachments = null;

    /**
     * See Overpayment Types
     * @return See Overpayment Types
     * @return See Overpayment Types
     * @return See Overpayment Types
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    public function getContact(): mixed
    {
        return $this->contact;
    }

    /**
     * The date the overpayment is created YYYY-MM-DD
     * @return The date the overpayment is created YYYY-MM-DD
     * @return The date the overpayment is created YYYY-MM-DD
     * @return The date the overpayment is created YYYY-MM-DD
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * See Overpayment Status Codes
     * @return See Overpayment Status Codes
     * @return See Overpayment Status Codes
     * @return See Overpayment Status Codes
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getLineAmountTypes(): ?string
    {
        return $this->lineAmountTypes;
    }

    /**
     * @return @var DataCollection<int, LineItemsData>
     */
    public function getLineItems(): ?DataCollection
    {
        return $this->lineItems;
    }

    /**
     * The subtotal of the overpayment excluding taxes
     * @return The subtotal of the overpayment excluding taxes
     * @format double
     * @return The subtotal of the overpayment excluding taxes
     * @format double
     * @return The subtotal of the overpayment excluding taxes
     * @format double
     */
    public function getSubTotal(): ?int
    {
        return $this->subTotal;
    }

    /**
     * The total tax on the overpayment
     * @return The total tax on the overpayment
     * @format double
     * @return The total tax on the overpayment
     * @format double
     * @return The total tax on the overpayment
     * @format double
     */
    public function getTotalTax(): ?int
    {
        return $this->totalTax;
    }

    /**
     * The total of the overpayment (subtotal + total tax)
     * @return The total of the overpayment (subtotal + total tax)
     * @format double
     * @return The total of the overpayment (subtotal + total tax)
     * @format double
     * @return The total of the overpayment (subtotal + total tax)
     * @format double
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * UTC timestamp of last update to the overpayment
     * @return UTC timestamp of last update to the overpayment
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to the overpayment
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to the overpayment
     * @example /Date(1573755038314)/
     */
    public function getUpdatedDateUTC(): ?string
    {
        return $this->updatedDateUTC;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Xero generated unique identifier
     * @return Xero generated unique identifier
     * @format uuid
     * @return Xero generated unique identifier
     * @format uuid
     * @return Xero generated unique identifier
     * @format uuid
     */
    public function getOverpaymentID(): ?string
    {
        return $this->overpaymentID;
    }

    /**
     * The currency rate for a multicurrency overpayment. If no rate is specified, the XE.com day rate is used
     * @return The currency rate for a multicurrency overpayment. If no rate is specified, the XE.com day rate is used
     * @format double
     * @return The currency rate for a multicurrency overpayment. If no rate is specified, the XE.com day rate is used
     * @format double
     * @return The currency rate for a multicurrency overpayment. If no rate is specified, the XE.com day rate is used
     * @format double
     */
    public function getCurrencyRate(): ?int
    {
        return $this->currencyRate;
    }

    /**
     * The remaining credit balance on the overpayment
     * @return The remaining credit balance on the overpayment
     * @format double
     * @return The remaining credit balance on the overpayment
     * @format double
     * @return The remaining credit balance on the overpayment
     * @format double
     */
    public function getRemainingCredit(): ?int
    {
        return $this->remainingCredit;
    }

    /**
     * @return @var DataCollection<int, AllocationsData>
     */
    public function getAllocations(): ?DataCollection
    {
        return $this->allocations;
    }

    /**
     * The amount of applied to an invoice
     * @return The amount of applied to an invoice
     * @format double
     * @example 2
     * @return The amount of applied to an invoice
     * @format double
     * @example 2
     * @return The amount of applied to an invoice
     * @format double
     * @example 2
     */
    public function getAppliedAmount(): ?int
    {
        return $this->appliedAmount;
    }

    /**
     * @return @var DataCollection<int, PaymentsData>
     */
    public function getPayments(): ?DataCollection
    {
        return $this->payments;
    }

    /**
     * boolean to indicate if a overpayment has an attachment
     * @return boolean to indicate if a overpayment has an attachment
     * @example false
     * @return boolean to indicate if a overpayment has an attachment
     * @example false
     * @return boolean to indicate if a overpayment has an attachment
     * @example false
     */
    public function getHasAttachments(): ?bool
    {
        return $this->hasAttachments;
    }

    /**
     * @return @var DataCollection<int, AttachmentsData>
     */
    public function getAttachments(): ?DataCollection
    {
        return $this->attachments;
    }
}
