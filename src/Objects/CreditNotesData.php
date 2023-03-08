<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreditNotesData extends Data
{
    /** See Credit Note Types */
    #[MapName('Type')]
    #[MapInputName('Type')]
    public ?string $type = null;

    #[MapName('Contact')]
    #[MapInputName('Contact')]
    public mixed $contact = null;

    /** The date the credit note is issued YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation */
    #[MapName('Date')]
    #[MapInputName('Date')]
    public ?string $date = null;

    /** Date invoice is due – YYYY-MM-DD */
    #[MapName('DueDate')]
    #[MapInputName('DueDate')]
    public ?string $dueDate = null;

    /** See Credit Note Status Codes */
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
     * The subtotal of the credit note excluding taxes
     * @format double
     */
    #[MapName('SubTotal')]
    #[MapInputName('SubTotal')]
    public ?int $subTotal = null;

    /**
     * The total tax on the credit note
     * @format double
     */
    #[MapName('TotalTax')]
    #[MapInputName('TotalTax')]
    public ?int $totalTax = null;

    /**
     * The total of the Credit Note(subtotal + total tax)
     * @format double
     */
    #[MapName('Total')]
    #[MapInputName('Total')]
    public ?int $total = null;

    /**
     * CIS deduction for UK contractors
     * @format double
     */
    #[MapName('CISDeduction')]
    #[MapInputName('CISDeduction')]
    public ?int $cISDeduction = null;

    /**
     * CIS Deduction rate for the organisation
     * @format double
     */
    #[MapName('CISRate')]
    #[MapInputName('CISRate')]
    public ?int $cISRate = null;

    /**
     * UTC timestamp of last update to the credit note
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /** The specified currency code */
    #[MapName('CurrencyCode')]
    #[MapInputName('CurrencyCode')]
    public ?string $currencyCode = null;

    /** Date when credit note was fully paid(UTC format) */
    #[MapName('FullyPaidOnDate')]
    #[MapInputName('FullyPaidOnDate')]
    public ?string $fullyPaidOnDate = null;

    /**
     * Xero generated unique identifier
     * @format uuid
     */
    #[MapName('CreditNoteID')]
    #[MapInputName('CreditNoteID')]
    public ?string $creditNoteID = null;

    /** ACCRECCREDIT – Unique alpha numeric code identifying credit note (when missing will auto-generate from your Organisation Invoice Settings) */
    #[MapName('CreditNoteNumber')]
    #[MapInputName('CreditNoteNumber')]
    public ?string $creditNoteNumber = null;

    /** ACCRECCREDIT only – additional reference number */
    #[MapName('Reference')]
    #[MapInputName('Reference')]
    public ?string $reference = null;

    /** boolean to indicate if a credit note has been sent to a contact via  the Xero app (currently read only) */
    #[MapName('SentToContact')]
    #[MapInputName('SentToContact')]
    public ?bool $sentToContact = null;

    /**
     * The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used
     * @format double
     */
    #[MapName('CurrencyRate')]
    #[MapInputName('CurrencyRate')]
    public ?int $currencyRate = null;

    /**
     * The remaining credit balance on the Credit Note
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
     * See BrandingThemes
     * @format uuid
     */
    #[MapName('BrandingThemeID')]
    #[MapInputName('BrandingThemeID')]
    public ?string $brandingThemeID = null;

    /** A string to indicate if a invoice status */
    #[MapName('StatusAttributeString')]
    #[MapInputName('StatusAttributeString')]
    public ?string $statusAttributeString = null;

    /**
     * boolean to indicate if a credit note has an attachment
     * @example false
     */
    #[MapName('HasAttachments')]
    #[MapInputName('HasAttachments')]
    public ?bool $hasAttachments = null;

    /**
     * A boolean to indicate if a credit note has an validation errors
     * @example false
     */
    #[MapName('HasErrors')]
    #[MapInputName('HasErrors')]
    public ?bool $hasErrors = null;

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

    /**
     * See Credit Note Types
     * @return See Credit Note Types
     * @return See Credit Note Types
     * @return See Credit Note Types
     * @return See Credit Note Types
     * @return See Credit Note Types
     * @return See Credit Note Types
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
     * The date the credit note is issued YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     * @return The date the credit note is issued YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     * @return The date the credit note is issued YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     * @return The date the credit note is issued YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     * @return The date the credit note is issued YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     * @return The date the credit note is issued YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     * @return The date the credit note is issued YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date invoice is due – YYYY-MM-DD
     * @return Date invoice is due – YYYY-MM-DD
     * @return Date invoice is due – YYYY-MM-DD
     * @return Date invoice is due – YYYY-MM-DD
     * @return Date invoice is due – YYYY-MM-DD
     * @return Date invoice is due – YYYY-MM-DD
     * @return Date invoice is due – YYYY-MM-DD
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    /**
     * See Credit Note Status Codes
     * @return See Credit Note Status Codes
     * @return See Credit Note Status Codes
     * @return See Credit Note Status Codes
     * @return See Credit Note Status Codes
     * @return See Credit Note Status Codes
     * @return See Credit Note Status Codes
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
     * The subtotal of the credit note excluding taxes
     * @return The subtotal of the credit note excluding taxes
     * @format double
     * @return The subtotal of the credit note excluding taxes
     * @format double
     * @return The subtotal of the credit note excluding taxes
     * @format double
     * @return The subtotal of the credit note excluding taxes
     * @format double
     * @return The subtotal of the credit note excluding taxes
     * @format double
     * @return The subtotal of the credit note excluding taxes
     * @format double
     */
    public function getSubTotal(): ?int
    {
        return $this->subTotal;
    }

    /**
     * The total tax on the credit note
     * @return The total tax on the credit note
     * @format double
     * @return The total tax on the credit note
     * @format double
     * @return The total tax on the credit note
     * @format double
     * @return The total tax on the credit note
     * @format double
     * @return The total tax on the credit note
     * @format double
     * @return The total tax on the credit note
     * @format double
     */
    public function getTotalTax(): ?int
    {
        return $this->totalTax;
    }

    /**
     * The total of the Credit Note(subtotal + total tax)
     * @return The total of the Credit Note(subtotal + total tax)
     * @format double
     * @return The total of the Credit Note(subtotal + total tax)
     * @format double
     * @return The total of the Credit Note(subtotal + total tax)
     * @format double
     * @return The total of the Credit Note(subtotal + total tax)
     * @format double
     * @return The total of the Credit Note(subtotal + total tax)
     * @format double
     * @return The total of the Credit Note(subtotal + total tax)
     * @format double
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * CIS deduction for UK contractors
     * @return CIS deduction for UK contractors
     * @format double
     * @return CIS deduction for UK contractors
     * @format double
     * @return CIS deduction for UK contractors
     * @format double
     * @return CIS deduction for UK contractors
     * @format double
     * @return CIS deduction for UK contractors
     * @format double
     * @return CIS deduction for UK contractors
     * @format double
     */
    public function getCISDeduction(): ?int
    {
        return $this->cISDeduction;
    }

    /**
     * CIS Deduction rate for the organisation
     * @return CIS Deduction rate for the organisation
     * @format double
     * @return CIS Deduction rate for the organisation
     * @format double
     * @return CIS Deduction rate for the organisation
     * @format double
     * @return CIS Deduction rate for the organisation
     * @format double
     * @return CIS Deduction rate for the organisation
     * @format double
     * @return CIS Deduction rate for the organisation
     * @format double
     */
    public function getCISRate(): ?int
    {
        return $this->cISRate;
    }

    /**
     * UTC timestamp of last update to the credit note
     * @return UTC timestamp of last update to the credit note
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to the credit note
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to the credit note
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to the credit note
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to the credit note
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to the credit note
     * @example /Date(1573755038314)/
     */
    public function getUpdatedDateUTC(): ?string
    {
        return $this->updatedDateUTC;
    }

    /**
     * The specified currency code
     * @return The specified currency code
     * @return The specified currency code
     * @return The specified currency code
     * @return The specified currency code
     * @return The specified currency code
     * @return The specified currency code
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Date when credit note was fully paid(UTC format)
     * @return Date when credit note was fully paid(UTC format)
     * @return Date when credit note was fully paid(UTC format)
     * @return Date when credit note was fully paid(UTC format)
     * @return Date when credit note was fully paid(UTC format)
     * @return Date when credit note was fully paid(UTC format)
     * @return Date when credit note was fully paid(UTC format)
     */
    public function getFullyPaidOnDate(): ?string
    {
        return $this->fullyPaidOnDate;
    }

    /**
     * Xero generated unique identifier
     * @return Xero generated unique identifier
     * @format uuid
     * @return Xero generated unique identifier
     * @format uuid
     * @return Xero generated unique identifier
     * @format uuid
     * @return Xero generated unique identifier
     * @format uuid
     * @return Xero generated unique identifier
     * @format uuid
     * @return Xero generated unique identifier
     * @format uuid
     */
    public function getCreditNoteID(): ?string
    {
        return $this->creditNoteID;
    }

    /**
     * ACCRECCREDIT – Unique alpha numeric code identifying credit note (when missing will auto-generate from your Organisation Invoice Settings)
     * @return ACCRECCREDIT – Unique alpha numeric code identifying credit note (when missing will auto-generate from your Organisation Invoice Settings)
     * @return ACCRECCREDIT – Unique alpha numeric code identifying credit note (when missing will auto-generate from your Organisation Invoice Settings)
     * @return ACCRECCREDIT – Unique alpha numeric code identifying credit note (when missing will auto-generate from your Organisation Invoice Settings)
     * @return ACCRECCREDIT – Unique alpha numeric code identifying credit note (when missing will auto-generate from your Organisation Invoice Settings)
     * @return ACCRECCREDIT – Unique alpha numeric code identifying credit note (when missing will auto-generate from your Organisation Invoice Settings)
     * @return ACCRECCREDIT – Unique alpha numeric code identifying credit note (when missing will auto-generate from your Organisation Invoice Settings)
     */
    public function getCreditNoteNumber(): ?string
    {
        return $this->creditNoteNumber;
    }

    /**
     * ACCRECCREDIT only – additional reference number
     * @return ACCRECCREDIT only – additional reference number
     * @return ACCRECCREDIT only – additional reference number
     * @return ACCRECCREDIT only – additional reference number
     * @return ACCRECCREDIT only – additional reference number
     * @return ACCRECCREDIT only – additional reference number
     * @return ACCRECCREDIT only – additional reference number
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * boolean to indicate if a credit note has been sent to a contact via  the Xero app (currently read only)
     * @return boolean to indicate if a credit note has been sent to a contact via  the Xero app (currently read only)
     * @return boolean to indicate if a credit note has been sent to a contact via  the Xero app (currently read only)
     * @return boolean to indicate if a credit note has been sent to a contact via  the Xero app (currently read only)
     * @return boolean to indicate if a credit note has been sent to a contact via  the Xero app (currently read only)
     * @return boolean to indicate if a credit note has been sent to a contact via  the Xero app (currently read only)
     * @return boolean to indicate if a credit note has been sent to a contact via  the Xero app (currently read only)
     */
    public function getSentToContact(): ?bool
    {
        return $this->sentToContact;
    }

    /**
     * The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used
     * @return The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used
     * @format double
     * @return The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used
     * @format double
     * @return The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used
     * @format double
     * @return The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used
     * @format double
     * @return The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used
     * @format double
     * @return The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used
     * @format double
     */
    public function getCurrencyRate(): ?int
    {
        return $this->currencyRate;
    }

    /**
     * The remaining credit balance on the Credit Note
     * @return The remaining credit balance on the Credit Note
     * @format double
     * @return The remaining credit balance on the Credit Note
     * @format double
     * @return The remaining credit balance on the Credit Note
     * @format double
     * @return The remaining credit balance on the Credit Note
     * @format double
     * @return The remaining credit balance on the Credit Note
     * @format double
     * @return The remaining credit balance on the Credit Note
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
     * See BrandingThemes
     * @return See BrandingThemes
     * @format uuid
     * @return See BrandingThemes
     * @format uuid
     * @return See BrandingThemes
     * @format uuid
     * @return See BrandingThemes
     * @format uuid
     * @return See BrandingThemes
     * @format uuid
     * @return See BrandingThemes
     * @format uuid
     */
    public function getBrandingThemeID(): ?string
    {
        return $this->brandingThemeID;
    }

    /**
     * A string to indicate if a invoice status
     * @return A string to indicate if a invoice status
     * @return A string to indicate if a invoice status
     * @return A string to indicate if a invoice status
     * @return A string to indicate if a invoice status
     * @return A string to indicate if a invoice status
     * @return A string to indicate if a invoice status
     */
    public function getStatusAttributeString(): ?string
    {
        return $this->statusAttributeString;
    }

    /**
     * boolean to indicate if a credit note has an attachment
     * @return boolean to indicate if a credit note has an attachment
     * @example false
     * @return boolean to indicate if a credit note has an attachment
     * @example false
     * @return boolean to indicate if a credit note has an attachment
     * @example false
     * @return boolean to indicate if a credit note has an attachment
     * @example false
     * @return boolean to indicate if a credit note has an attachment
     * @example false
     * @return boolean to indicate if a credit note has an attachment
     * @example false
     */
    public function getHasAttachments(): ?bool
    {
        return $this->hasAttachments;
    }

    /**
     * A boolean to indicate if a credit note has an validation errors
     * @return A boolean to indicate if a credit note has an validation errors
     * @example false
     * @return A boolean to indicate if a credit note has an validation errors
     * @example false
     * @return A boolean to indicate if a credit note has an validation errors
     * @example false
     * @return A boolean to indicate if a credit note has an validation errors
     * @example false
     * @return A boolean to indicate if a credit note has an validation errors
     * @example false
     * @return A boolean to indicate if a credit note has an validation errors
     * @example false
     */
    public function getHasErrors(): ?bool
    {
        return $this->hasErrors;
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
     * See Credit Note Types
     */
    public function setType(?string $type): ?self
    {
        $this->type = $type;
        return $this;
    }

    public function setContact(mixed $contact): ?self
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * The date the credit note is issued YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     */
    public function setDate(?string $date): ?self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Date invoice is due – YYYY-MM-DD
     */
    public function setDueDate(?string $dueDate): ?self
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * See Credit Note Status Codes
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    public function setLineAmountTypes(?string $lineAmountTypes): ?self
    {
        $this->lineAmountTypes = $lineAmountTypes;
        return $this;
    }

    /**
     * The subtotal of the credit note excluding taxes
     * @format double
     */
    public function setSubTotal(?int $subTotal): ?self
    {
        $this->subTotal = $subTotal;
        return $this;
    }

    /**
     * The total tax on the credit note
     * @format double
     */
    public function setTotalTax(?int $totalTax): ?self
    {
        $this->totalTax = $totalTax;
        return $this;
    }

    /**
     * The total of the Credit Note(subtotal + total tax)
     * @format double
     */
    public function setTotal(?int $total): ?self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * CIS deduction for UK contractors
     * @format double
     */
    public function setCISDeduction(?int $cISDeduction): ?self
    {
        $this->cISDeduction = $cISDeduction;
        return $this;
    }

    /**
     * CIS Deduction rate for the organisation
     * @format double
     */
    public function setCISRate(?int $cISRate): ?self
    {
        $this->cISRate = $cISRate;
        return $this;
    }

    /**
     * UTC timestamp of last update to the credit note
     * @example /Date(1573755038314)/
     */
    public function setUpdatedDateUTC(?string $updatedDateUTC): ?self
    {
        $this->updatedDateUTC = $updatedDateUTC;
        return $this;
    }

    /**
     * The specified currency code
     */
    public function setCurrencyCode(?string $currencyCode): ?self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Date when credit note was fully paid(UTC format)
     */
    public function setFullyPaidOnDate(?string $fullyPaidOnDate): ?self
    {
        $this->fullyPaidOnDate = $fullyPaidOnDate;
        return $this;
    }

    /**
     * Xero generated unique identifier
     * @format uuid
     */
    public function setCreditNoteID(?string $creditNoteID): ?self
    {
        $this->creditNoteID = $creditNoteID;
        return $this;
    }

    /**
     * ACCRECCREDIT – Unique alpha numeric code identifying credit note (when missing will auto-generate from your Organisation Invoice Settings)
     */
    public function setCreditNoteNumber(?string $creditNoteNumber): ?self
    {
        $this->creditNoteNumber = $creditNoteNumber;
        return $this;
    }

    /**
     * ACCRECCREDIT only – additional reference number
     */
    public function setReference(?string $reference): ?self
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * boolean to indicate if a credit note has been sent to a contact via  the Xero app (currently read only)
     */
    public function setSentToContact(?bool $sentToContact): ?self
    {
        $this->sentToContact = $sentToContact;
        return $this;
    }

    /**
     * The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used
     * @format double
     */
    public function setCurrencyRate(?int $currencyRate): ?self
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }

    /**
     * The remaining credit balance on the Credit Note
     * @format double
     */
    public function setRemainingCredit(?int $remainingCredit): ?self
    {
        $this->remainingCredit = $remainingCredit;
        return $this;
    }

    /**
     * The amount of applied to an invoice
     * @format double
     * @example 2
     */
    public function setAppliedAmount(?int $appliedAmount): ?self
    {
        $this->appliedAmount = $appliedAmount;
        return $this;
    }

    /**
     * See BrandingThemes
     * @format uuid
     */
    public function setBrandingThemeID(?string $brandingThemeID): ?self
    {
        $this->brandingThemeID = $brandingThemeID;
        return $this;
    }

    /**
     * A string to indicate if a invoice status
     */
    public function setStatusAttributeString(?string $statusAttributeString): ?self
    {
        $this->statusAttributeString = $statusAttributeString;
        return $this;
    }

    /**
     * boolean to indicate if a credit note has an attachment
     * @example false
     */
    public function setHasAttachments(?bool $hasAttachments): ?self
    {
        $this->hasAttachments = $hasAttachments;
        return $this;
    }

    /**
     * A boolean to indicate if a credit note has an validation errors
     * @example false
     */
    public function setHasErrors(?bool $hasErrors): ?self
    {
        $this->hasErrors = $hasErrors;
        return $this;
    }
}
