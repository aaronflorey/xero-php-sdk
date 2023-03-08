<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class InvoicesData extends Data
{
    /** See Invoice Types */
    #[MapName('Type')]
    #[MapInputName('Type')]
    public ?string $type = null;

    #[MapName('Contact')]
    #[MapInputName('Contact')]
    public mixed $contact = null;

    /** @var DataCollection<int, LineItemsData> */
    #[MapName('LineItems')]
    #[MapInputName('LineItems')]
    #[DataCollectionOf(LineItemsData::class)]
    public ?DataCollection $lineItems = null;

    /** Date invoice was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation */
    #[MapName('Date')]
    #[MapInputName('Date')]
    public ?string $date = null;

    /** Date invoice is due – YYYY-MM-DD */
    #[MapName('DueDate')]
    #[MapInputName('DueDate')]
    public ?string $dueDate = null;

    #[MapName('LineAmountTypes')]
    #[MapInputName('LineAmountTypes')]
    public ?string $lineAmountTypes = null;

    /** ACCREC – Unique alpha numeric code identifying invoice (when missing will auto-generate from your Organisation Invoice Settings) (max length = 255) */
    #[MapName('InvoiceNumber')]
    #[MapInputName('InvoiceNumber')]
    public ?string $invoiceNumber = null;

    /** ACCREC only – additional reference number */
    #[MapName('Reference')]
    #[MapInputName('Reference')]
    public ?string $reference = null;

    /**
     * See BrandingThemes
     * @format uuid
     */
    #[MapName('BrandingThemeID')]
    #[MapInputName('BrandingThemeID')]
    public ?string $brandingThemeID = null;

    /** URL link to a source document – shown as “Go to [appName]” in the Xero app */
    #[MapName('Url')]
    #[MapInputName('Url')]
    public ?string $url = null;

    #[MapName('CurrencyCode')]
    #[MapInputName('CurrencyCode')]
    public ?string $currencyCode = null;

    /**
     * The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used. (max length = [18].[6])
     * @format double
     */
    #[MapName('CurrencyRate')]
    #[MapInputName('CurrencyRate')]
    public ?int $currencyRate = null;

    /** See Invoice Status Codes */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    /** Boolean to set whether the invoice in the Xero app should be marked as “sent”. This can be set only on invoices that have been approved */
    #[MapName('SentToContact')]
    #[MapInputName('SentToContact')]
    public ?bool $sentToContact = null;

    /** Shown on sales invoices (Accounts Receivable) when this has been set */
    #[MapName('ExpectedPaymentDate')]
    #[MapInputName('ExpectedPaymentDate')]
    public ?string $expectedPaymentDate = null;

    /** Shown on bills (Accounts Payable) when this has been set */
    #[MapName('PlannedPaymentDate')]
    #[MapInputName('PlannedPaymentDate')]
    public ?string $plannedPaymentDate = null;

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
     * Total of invoice excluding taxes
     * @format double
     */
    #[MapName('SubTotal')]
    #[MapInputName('SubTotal')]
    public ?int $subTotal = null;

    /**
     * Total tax on invoice
     * @format double
     */
    #[MapName('TotalTax')]
    #[MapInputName('TotalTax')]
    public ?int $totalTax = null;

    /**
     * Total of Invoice tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @format double
     */
    #[MapName('Total')]
    #[MapInputName('Total')]
    public ?int $total = null;

    /**
     * Total of discounts applied on the invoice line items
     * @format double
     */
    #[MapName('TotalDiscount')]
    #[MapInputName('TotalDiscount')]
    public ?int $totalDiscount = null;

    /**
     * Xero generated unique identifier for invoice
     * @format uuid
     */
    #[MapName('InvoiceID')]
    #[MapInputName('InvoiceID')]
    public ?string $invoiceID = null;

    /**
     * Xero generated unique identifier for repeating invoices
     * @format uuid
     */
    #[MapName('RepeatingInvoiceID')]
    #[MapInputName('RepeatingInvoiceID')]
    public ?string $repeatingInvoiceID = null;

    /**
     * boolean to indicate if an invoice has an attachment
     * @example false
     */
    #[MapName('HasAttachments')]
    #[MapInputName('HasAttachments')]
    public ?bool $hasAttachments = null;

    /** boolean to indicate if an invoice has a discount */
    #[MapName('IsDiscounted')]
    #[MapInputName('IsDiscounted')]
    public ?bool $isDiscounted = null;

    /** @var DataCollection<int, PaymentsData> */
    #[MapName('Payments')]
    #[MapInputName('Payments')]
    #[DataCollectionOf(PaymentsData::class)]
    public ?DataCollection $payments = null;

    /** @var DataCollection<int, PrepaymentsData> */
    #[MapName('Prepayments')]
    #[MapInputName('Prepayments')]
    #[DataCollectionOf(PrepaymentsData::class)]
    public ?DataCollection $prepayments = null;

    /** @var DataCollection<int, OverpaymentsData> */
    #[MapName('Overpayments')]
    #[MapInputName('Overpayments')]
    #[DataCollectionOf(OverpaymentsData::class)]
    public ?DataCollection $overpayments = null;

    /**
     * Amount remaining to be paid on invoice
     * @format double
     */
    #[MapName('AmountDue')]
    #[MapInputName('AmountDue')]
    public ?int $amountDue = null;

    /**
     * Sum of payments received for invoice
     * @format double
     */
    #[MapName('AmountPaid')]
    #[MapInputName('AmountPaid')]
    public ?int $amountPaid = null;

    /** The date the invoice was fully paid. Only returned on fully paid invoices */
    #[MapName('FullyPaidOnDate')]
    #[MapInputName('FullyPaidOnDate')]
    public ?string $fullyPaidOnDate = null;

    /**
     * Sum of all credit notes, over-payments and pre-payments applied to invoice
     * @format double
     */
    #[MapName('AmountCredited')]
    #[MapInputName('AmountCredited')]
    public ?int $amountCredited = null;

    /**
     * Last modified date UTC format
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /** @var DataCollection<int, CreditNotesData> */
    #[MapName('CreditNotes')]
    #[MapInputName('CreditNotes')]
    #[DataCollectionOf(CreditNotesData::class)]
    public ?DataCollection $creditNotes = null;

    /** @var DataCollection<int, AttachmentsData> */
    #[MapName('Attachments')]
    #[MapInputName('Attachments')]
    #[DataCollectionOf(AttachmentsData::class)]
    public ?DataCollection $attachments = null;

    /**
     * A boolean to indicate if a invoice has an validation errors
     * @example false
     */
    #[MapName('HasErrors')]
    #[MapInputName('HasErrors')]
    public ?bool $hasErrors = null;

    /** A string to indicate if a invoice status */
    #[MapName('StatusAttributeString')]
    #[MapInputName('StatusAttributeString')]
    public ?string $statusAttributeString = null;

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
     * See Invoice Types
     * @return See Invoice Types
     * @return See Invoice Types
     * @return See Invoice Types
     * @return See Invoice Types
     * @return See Invoice Types
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
     * @return @var DataCollection<int, LineItemsData>
     */
    public function getLineItems(): ?DataCollection
    {
        return $this->lineItems;
    }

    /**
     * Date invoice was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
     * @return Date invoice was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
     * @return Date invoice was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
     * @return Date invoice was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
     * @return Date invoice was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
     * @return Date invoice was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
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
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    public function getLineAmountTypes(): ?string
    {
        return $this->lineAmountTypes;
    }

    /**
     * ACCREC – Unique alpha numeric code identifying invoice (when missing will auto-generate from your Organisation Invoice Settings) (max length = 255)
     * @return ACCREC – Unique alpha numeric code identifying invoice (when missing will auto-generate from your Organisation Invoice Settings) (max length = 255)
     * @return ACCREC – Unique alpha numeric code identifying invoice (when missing will auto-generate from your Organisation Invoice Settings) (max length = 255)
     * @return ACCREC – Unique alpha numeric code identifying invoice (when missing will auto-generate from your Organisation Invoice Settings) (max length = 255)
     * @return ACCREC – Unique alpha numeric code identifying invoice (when missing will auto-generate from your Organisation Invoice Settings) (max length = 255)
     * @return ACCREC – Unique alpha numeric code identifying invoice (when missing will auto-generate from your Organisation Invoice Settings) (max length = 255)
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    /**
     * ACCREC only – additional reference number
     * @return ACCREC only – additional reference number
     * @return ACCREC only – additional reference number
     * @return ACCREC only – additional reference number
     * @return ACCREC only – additional reference number
     * @return ACCREC only – additional reference number
     */
    public function getReference(): ?string
    {
        return $this->reference;
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
     */
    public function getBrandingThemeID(): ?string
    {
        return $this->brandingThemeID;
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

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used. (max length = [18].[6])
     * @return The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used. (max length = [18].[6])
     * @format double
     * @return The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used. (max length = [18].[6])
     * @format double
     * @return The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used. (max length = [18].[6])
     * @format double
     * @return The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used. (max length = [18].[6])
     * @format double
     * @return The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used. (max length = [18].[6])
     * @format double
     */
    public function getCurrencyRate(): ?int
    {
        return $this->currencyRate;
    }

    /**
     * See Invoice Status Codes
     * @return See Invoice Status Codes
     * @return See Invoice Status Codes
     * @return See Invoice Status Codes
     * @return See Invoice Status Codes
     * @return See Invoice Status Codes
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Boolean to set whether the invoice in the Xero app should be marked as “sent”. This can be set only on invoices that have been approved
     * @return Boolean to set whether the invoice in the Xero app should be marked as “sent”. This can be set only on invoices that have been approved
     * @return Boolean to set whether the invoice in the Xero app should be marked as “sent”. This can be set only on invoices that have been approved
     * @return Boolean to set whether the invoice in the Xero app should be marked as “sent”. This can be set only on invoices that have been approved
     * @return Boolean to set whether the invoice in the Xero app should be marked as “sent”. This can be set only on invoices that have been approved
     * @return Boolean to set whether the invoice in the Xero app should be marked as “sent”. This can be set only on invoices that have been approved
     */
    public function getSentToContact(): ?bool
    {
        return $this->sentToContact;
    }

    /**
     * Shown on sales invoices (Accounts Receivable) when this has been set
     * @return Shown on sales invoices (Accounts Receivable) when this has been set
     * @return Shown on sales invoices (Accounts Receivable) when this has been set
     * @return Shown on sales invoices (Accounts Receivable) when this has been set
     * @return Shown on sales invoices (Accounts Receivable) when this has been set
     * @return Shown on sales invoices (Accounts Receivable) when this has been set
     */
    public function getExpectedPaymentDate(): ?string
    {
        return $this->expectedPaymentDate;
    }

    /**
     * Shown on bills (Accounts Payable) when this has been set
     * @return Shown on bills (Accounts Payable) when this has been set
     * @return Shown on bills (Accounts Payable) when this has been set
     * @return Shown on bills (Accounts Payable) when this has been set
     * @return Shown on bills (Accounts Payable) when this has been set
     * @return Shown on bills (Accounts Payable) when this has been set
     */
    public function getPlannedPaymentDate(): ?string
    {
        return $this->plannedPaymentDate;
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
     */
    public function getCISRate(): ?int
    {
        return $this->cISRate;
    }

    /**
     * Total of invoice excluding taxes
     * @return Total of invoice excluding taxes
     * @format double
     * @return Total of invoice excluding taxes
     * @format double
     * @return Total of invoice excluding taxes
     * @format double
     * @return Total of invoice excluding taxes
     * @format double
     * @return Total of invoice excluding taxes
     * @format double
     */
    public function getSubTotal(): ?int
    {
        return $this->subTotal;
    }

    /**
     * Total tax on invoice
     * @return Total tax on invoice
     * @format double
     * @return Total tax on invoice
     * @format double
     * @return Total tax on invoice
     * @format double
     * @return Total tax on invoice
     * @format double
     * @return Total tax on invoice
     * @format double
     */
    public function getTotalTax(): ?int
    {
        return $this->totalTax;
    }

    /**
     * Total of Invoice tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @return Total of Invoice tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @format double
     * @return Total of Invoice tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @format double
     * @return Total of Invoice tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @format double
     * @return Total of Invoice tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @format double
     * @return Total of Invoice tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @format double
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * Total of discounts applied on the invoice line items
     * @return Total of discounts applied on the invoice line items
     * @format double
     * @return Total of discounts applied on the invoice line items
     * @format double
     * @return Total of discounts applied on the invoice line items
     * @format double
     * @return Total of discounts applied on the invoice line items
     * @format double
     * @return Total of discounts applied on the invoice line items
     * @format double
     */
    public function getTotalDiscount(): ?int
    {
        return $this->totalDiscount;
    }

    /**
     * Xero generated unique identifier for invoice
     * @return Xero generated unique identifier for invoice
     * @format uuid
     * @return Xero generated unique identifier for invoice
     * @format uuid
     * @return Xero generated unique identifier for invoice
     * @format uuid
     * @return Xero generated unique identifier for invoice
     * @format uuid
     * @return Xero generated unique identifier for invoice
     * @format uuid
     */
    public function getInvoiceID(): ?string
    {
        return $this->invoiceID;
    }

    /**
     * Xero generated unique identifier for repeating invoices
     * @return Xero generated unique identifier for repeating invoices
     * @format uuid
     * @return Xero generated unique identifier for repeating invoices
     * @format uuid
     * @return Xero generated unique identifier for repeating invoices
     * @format uuid
     * @return Xero generated unique identifier for repeating invoices
     * @format uuid
     * @return Xero generated unique identifier for repeating invoices
     * @format uuid
     */
    public function getRepeatingInvoiceID(): ?string
    {
        return $this->repeatingInvoiceID;
    }

    /**
     * boolean to indicate if an invoice has an attachment
     * @return boolean to indicate if an invoice has an attachment
     * @example false
     * @return boolean to indicate if an invoice has an attachment
     * @example false
     * @return boolean to indicate if an invoice has an attachment
     * @example false
     * @return boolean to indicate if an invoice has an attachment
     * @example false
     * @return boolean to indicate if an invoice has an attachment
     * @example false
     */
    public function getHasAttachments(): ?bool
    {
        return $this->hasAttachments;
    }

    /**
     * boolean to indicate if an invoice has a discount
     * @return boolean to indicate if an invoice has a discount
     * @return boolean to indicate if an invoice has a discount
     * @return boolean to indicate if an invoice has a discount
     * @return boolean to indicate if an invoice has a discount
     * @return boolean to indicate if an invoice has a discount
     */
    public function getIsDiscounted(): ?bool
    {
        return $this->isDiscounted;
    }

    /**
     * @return @var DataCollection<int, PaymentsData>
     */
    public function getPayments(): ?DataCollection
    {
        return $this->payments;
    }

    /**
     * @return @var DataCollection<int, PrepaymentsData>
     */
    public function getPrepayments(): ?DataCollection
    {
        return $this->prepayments;
    }

    /**
     * @return @var DataCollection<int, OverpaymentsData>
     */
    public function getOverpayments(): ?DataCollection
    {
        return $this->overpayments;
    }

    /**
     * Amount remaining to be paid on invoice
     * @return Amount remaining to be paid on invoice
     * @format double
     * @return Amount remaining to be paid on invoice
     * @format double
     * @return Amount remaining to be paid on invoice
     * @format double
     * @return Amount remaining to be paid on invoice
     * @format double
     * @return Amount remaining to be paid on invoice
     * @format double
     */
    public function getAmountDue(): ?int
    {
        return $this->amountDue;
    }

    /**
     * Sum of payments received for invoice
     * @return Sum of payments received for invoice
     * @format double
     * @return Sum of payments received for invoice
     * @format double
     * @return Sum of payments received for invoice
     * @format double
     * @return Sum of payments received for invoice
     * @format double
     * @return Sum of payments received for invoice
     * @format double
     */
    public function getAmountPaid(): ?int
    {
        return $this->amountPaid;
    }

    /**
     * The date the invoice was fully paid. Only returned on fully paid invoices
     * @return The date the invoice was fully paid. Only returned on fully paid invoices
     * @return The date the invoice was fully paid. Only returned on fully paid invoices
     * @return The date the invoice was fully paid. Only returned on fully paid invoices
     * @return The date the invoice was fully paid. Only returned on fully paid invoices
     * @return The date the invoice was fully paid. Only returned on fully paid invoices
     */
    public function getFullyPaidOnDate(): ?string
    {
        return $this->fullyPaidOnDate;
    }

    /**
     * Sum of all credit notes, over-payments and pre-payments applied to invoice
     * @return Sum of all credit notes, over-payments and pre-payments applied to invoice
     * @format double
     * @return Sum of all credit notes, over-payments and pre-payments applied to invoice
     * @format double
     * @return Sum of all credit notes, over-payments and pre-payments applied to invoice
     * @format double
     * @return Sum of all credit notes, over-payments and pre-payments applied to invoice
     * @format double
     * @return Sum of all credit notes, over-payments and pre-payments applied to invoice
     * @format double
     */
    public function getAmountCredited(): ?int
    {
        return $this->amountCredited;
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
     * @return @var DataCollection<int, CreditNotesData>
     */
    public function getCreditNotes(): ?DataCollection
    {
        return $this->creditNotes;
    }

    /**
     * @return @var DataCollection<int, AttachmentsData>
     */
    public function getAttachments(): ?DataCollection
    {
        return $this->attachments;
    }

    /**
     * A boolean to indicate if a invoice has an validation errors
     * @return A boolean to indicate if a invoice has an validation errors
     * @example false
     * @return A boolean to indicate if a invoice has an validation errors
     * @example false
     * @return A boolean to indicate if a invoice has an validation errors
     * @example false
     * @return A boolean to indicate if a invoice has an validation errors
     * @example false
     * @return A boolean to indicate if a invoice has an validation errors
     * @example false
     */
    public function getHasErrors(): ?bool
    {
        return $this->hasErrors;
    }

    /**
     * A string to indicate if a invoice status
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
     * See Invoice Types
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
     * Date invoice was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
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

    public function setLineAmountTypes(?string $lineAmountTypes): ?self
    {
        $this->lineAmountTypes = $lineAmountTypes;
        return $this;
    }

    /**
     * ACCREC – Unique alpha numeric code identifying invoice (when missing will auto-generate from your Organisation Invoice Settings) (max length = 255)
     */
    public function setInvoiceNumber(?string $invoiceNumber): ?self
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * ACCREC only – additional reference number
     */
    public function setReference(?string $reference): ?self
    {
        $this->reference = $reference;
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
     * URL link to a source document – shown as “Go to [appName]” in the Xero app
     */
    public function setUrl(?string $url): ?self
    {
        $this->url = $url;
        return $this;
    }

    public function setCurrencyCode(?string $currencyCode): ?self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used. (max length = [18].[6])
     * @format double
     */
    public function setCurrencyRate(?int $currencyRate): ?self
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }

    /**
     * See Invoice Status Codes
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Boolean to set whether the invoice in the Xero app should be marked as “sent”. This can be set only on invoices that have been approved
     */
    public function setSentToContact(?bool $sentToContact): ?self
    {
        $this->sentToContact = $sentToContact;
        return $this;
    }

    /**
     * Shown on sales invoices (Accounts Receivable) when this has been set
     */
    public function setExpectedPaymentDate(?string $expectedPaymentDate): ?self
    {
        $this->expectedPaymentDate = $expectedPaymentDate;
        return $this;
    }

    /**
     * Shown on bills (Accounts Payable) when this has been set
     */
    public function setPlannedPaymentDate(?string $plannedPaymentDate): ?self
    {
        $this->plannedPaymentDate = $plannedPaymentDate;
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
     * Total of invoice excluding taxes
     * @format double
     */
    public function setSubTotal(?int $subTotal): ?self
    {
        $this->subTotal = $subTotal;
        return $this;
    }

    /**
     * Total tax on invoice
     * @format double
     */
    public function setTotalTax(?int $totalTax): ?self
    {
        $this->totalTax = $totalTax;
        return $this;
    }

    /**
     * Total of Invoice tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @format double
     */
    public function setTotal(?int $total): ?self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Total of discounts applied on the invoice line items
     * @format double
     */
    public function setTotalDiscount(?int $totalDiscount): ?self
    {
        $this->totalDiscount = $totalDiscount;
        return $this;
    }

    /**
     * Xero generated unique identifier for invoice
     * @format uuid
     */
    public function setInvoiceID(?string $invoiceID): ?self
    {
        $this->invoiceID = $invoiceID;
        return $this;
    }

    /**
     * Xero generated unique identifier for repeating invoices
     * @format uuid
     */
    public function setRepeatingInvoiceID(?string $repeatingInvoiceID): ?self
    {
        $this->repeatingInvoiceID = $repeatingInvoiceID;
        return $this;
    }

    /**
     * boolean to indicate if an invoice has an attachment
     * @example false
     */
    public function setHasAttachments(?bool $hasAttachments): ?self
    {
        $this->hasAttachments = $hasAttachments;
        return $this;
    }

    /**
     * boolean to indicate if an invoice has a discount
     */
    public function setIsDiscounted(?bool $isDiscounted): ?self
    {
        $this->isDiscounted = $isDiscounted;
        return $this;
    }

    /**
     * Amount remaining to be paid on invoice
     * @format double
     */
    public function setAmountDue(?int $amountDue): ?self
    {
        $this->amountDue = $amountDue;
        return $this;
    }

    /**
     * Sum of payments received for invoice
     * @format double
     */
    public function setAmountPaid(?int $amountPaid): ?self
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }

    /**
     * The date the invoice was fully paid. Only returned on fully paid invoices
     */
    public function setFullyPaidOnDate(?string $fullyPaidOnDate): ?self
    {
        $this->fullyPaidOnDate = $fullyPaidOnDate;
        return $this;
    }

    /**
     * Sum of all credit notes, over-payments and pre-payments applied to invoice
     * @format double
     */
    public function setAmountCredited(?int $amountCredited): ?self
    {
        $this->amountCredited = $amountCredited;
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
     * A boolean to indicate if a invoice has an validation errors
     * @example false
     */
    public function setHasErrors(?bool $hasErrors): ?self
    {
        $this->hasErrors = $hasErrors;
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
}
