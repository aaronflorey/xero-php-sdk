<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class RepeatingInvoicesData extends Data
{
    /** See Invoice Types */
    #[MapName('Type')]
    #[MapInputName('Type')]
    public ?string $type = null;

    #[MapName('Contact')]
    #[MapInputName('Contact')]
    public mixed $contact = null;

    #[MapName('Schedule')]
    #[MapInputName('Schedule')]
    public mixed $schedule = null;

    /** @var DataCollection<int, LineItemsData> */
    #[MapName('LineItems')]
    #[MapInputName('LineItems')]
    #[DataCollectionOf(LineItemsData::class)]
    public ?DataCollection $lineItems = null;

    #[MapName('LineAmountTypes')]
    #[MapInputName('LineAmountTypes')]
    public ?string $lineAmountTypes = null;

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

    #[MapName('CurrencyCode')]
    #[MapInputName('CurrencyCode')]
    public ?string $currencyCode = null;

    /** One of the following - DRAFT or AUTHORISED – See Invoice Status Codes */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

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
     * Total of Invoice tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     */
    #[MapName('Total')]
    #[MapInputName('Total')]
    public ?int $total = null;

    /**
     * Xero generated unique identifier for repeating invoice template
     * @format uuid
     */
    #[MapName('RepeatingInvoiceID')]
    #[MapInputName('RepeatingInvoiceID')]
    public ?string $repeatingInvoiceID = null;

    /**
     * Xero generated unique identifier for repeating invoice template
     * @format uuid
     */
    #[MapName('ID')]
    #[MapInputName('ID')]
    public ?string $iD = null;

    /**
     * Boolean to indicate if an invoice has an attachment
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
     * Boolean to indicate whether the invoice has been approved for sending
     * @example false
     */
    #[MapName('ApprovedForSending')]
    #[MapInputName('ApprovedForSending')]
    public ?bool $approvedForSending = null;

    /**
     * Boolean to indicate whether a copy is sent to sender's email
     * @example false
     */
    #[MapName('SendCopy')]
    #[MapInputName('SendCopy')]
    public ?bool $sendCopy = null;

    /**
     * Boolean to indicate whether the invoice in the Xero app displays as "sent"
     * @example false
     */
    #[MapName('MarkAsSent')]
    #[MapInputName('MarkAsSent')]
    public ?bool $markAsSent = null;

    /**
     * Boolean to indicate whether to include PDF attachment
     * @example false
     */
    #[MapName('IncludePDF')]
    #[MapInputName('IncludePDF')]
    public ?bool $includePDF = null;

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

    public function getSchedule(): mixed
    {
        return $this->schedule;
    }

    /**
     * @return @var DataCollection<int, LineItemsData>
     */
    public function getLineItems(): ?DataCollection
    {
        return $this->lineItems;
    }

    public function getLineAmountTypes(): ?string
    {
        return $this->lineAmountTypes;
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

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * One of the following - DRAFT or AUTHORISED – See Invoice Status Codes
     * @return One of the following - DRAFT or AUTHORISED – See Invoice Status Codes
     * @return One of the following - DRAFT or AUTHORISED – See Invoice Status Codes
     * @return One of the following - DRAFT or AUTHORISED – See Invoice Status Codes
     * @return One of the following - DRAFT or AUTHORISED – See Invoice Status Codes
     * @return One of the following - DRAFT or AUTHORISED – See Invoice Status Codes
     */
    public function getStatus(): ?string
    {
        return $this->status;
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
     * Total of Invoice tax inclusive (i.e. SubTotal + TotalTax)
     * @return Total of Invoice tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     * @return Total of Invoice tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     * @return Total of Invoice tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     * @return Total of Invoice tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     * @return Total of Invoice tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * Xero generated unique identifier for repeating invoice template
     * @return Xero generated unique identifier for repeating invoice template
     * @format uuid
     * @return Xero generated unique identifier for repeating invoice template
     * @format uuid
     * @return Xero generated unique identifier for repeating invoice template
     * @format uuid
     * @return Xero generated unique identifier for repeating invoice template
     * @format uuid
     * @return Xero generated unique identifier for repeating invoice template
     * @format uuid
     */
    public function getRepeatingInvoiceID(): ?string
    {
        return $this->repeatingInvoiceID;
    }

    /**
     * Xero generated unique identifier for repeating invoice template
     * @return Xero generated unique identifier for repeating invoice template
     * @format uuid
     * @return Xero generated unique identifier for repeating invoice template
     * @format uuid
     * @return Xero generated unique identifier for repeating invoice template
     * @format uuid
     * @return Xero generated unique identifier for repeating invoice template
     * @format uuid
     * @return Xero generated unique identifier for repeating invoice template
     * @format uuid
     */
    public function getID(): ?string
    {
        return $this->iD;
    }

    /**
     * Boolean to indicate if an invoice has an attachment
     * @return Boolean to indicate if an invoice has an attachment
     * @example false
     * @return Boolean to indicate if an invoice has an attachment
     * @example false
     * @return Boolean to indicate if an invoice has an attachment
     * @example false
     * @return Boolean to indicate if an invoice has an attachment
     * @example false
     * @return Boolean to indicate if an invoice has an attachment
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

    /**
     * Boolean to indicate whether the invoice has been approved for sending
     * @return Boolean to indicate whether the invoice has been approved for sending
     * @example false
     * @return Boolean to indicate whether the invoice has been approved for sending
     * @example false
     * @return Boolean to indicate whether the invoice has been approved for sending
     * @example false
     * @return Boolean to indicate whether the invoice has been approved for sending
     * @example false
     * @return Boolean to indicate whether the invoice has been approved for sending
     * @example false
     */
    public function getApprovedForSending(): ?bool
    {
        return $this->approvedForSending;
    }

    /**
     * Boolean to indicate whether a copy is sent to sender's email
     * @return Boolean to indicate whether a copy is sent to sender's email
     * @example false
     * @return Boolean to indicate whether a copy is sent to sender's email
     * @example false
     * @return Boolean to indicate whether a copy is sent to sender's email
     * @example false
     * @return Boolean to indicate whether a copy is sent to sender's email
     * @example false
     * @return Boolean to indicate whether a copy is sent to sender's email
     * @example false
     */
    public function getSendCopy(): ?bool
    {
        return $this->sendCopy;
    }

    /**
     * Boolean to indicate whether the invoice in the Xero app displays as "sent"
     * @return Boolean to indicate whether the invoice in the Xero app displays as "sent"
     * @example false
     * @return Boolean to indicate whether the invoice in the Xero app displays as "sent"
     * @example false
     * @return Boolean to indicate whether the invoice in the Xero app displays as "sent"
     * @example false
     * @return Boolean to indicate whether the invoice in the Xero app displays as "sent"
     * @example false
     * @return Boolean to indicate whether the invoice in the Xero app displays as "sent"
     * @example false
     */
    public function getMarkAsSent(): ?bool
    {
        return $this->markAsSent;
    }

    /**
     * Boolean to indicate whether to include PDF attachment
     * @return Boolean to indicate whether to include PDF attachment
     * @example false
     * @return Boolean to indicate whether to include PDF attachment
     * @example false
     * @return Boolean to indicate whether to include PDF attachment
     * @example false
     * @return Boolean to indicate whether to include PDF attachment
     * @example false
     * @return Boolean to indicate whether to include PDF attachment
     * @example false
     */
    public function getIncludePDF(): ?bool
    {
        return $this->includePDF;
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

    public function setSchedule(mixed $schedule): ?self
    {
        $this->schedule = $schedule;
        return $this;
    }

    public function setLineAmountTypes(?string $lineAmountTypes): ?self
    {
        $this->lineAmountTypes = $lineAmountTypes;
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

    public function setCurrencyCode(?string $currencyCode): ?self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * One of the following - DRAFT or AUTHORISED – See Invoice Status Codes
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
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
     * Total of Invoice tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     */
    public function setTotal(?int $total): ?self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Xero generated unique identifier for repeating invoice template
     * @format uuid
     */
    public function setRepeatingInvoiceID(?string $repeatingInvoiceID): ?self
    {
        $this->repeatingInvoiceID = $repeatingInvoiceID;
        return $this;
    }

    /**
     * Xero generated unique identifier for repeating invoice template
     * @format uuid
     */
    public function setID(?string $iD): ?self
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Boolean to indicate if an invoice has an attachment
     * @example false
     */
    public function setHasAttachments(?bool $hasAttachments): ?self
    {
        $this->hasAttachments = $hasAttachments;
        return $this;
    }

    /**
     * Boolean to indicate whether the invoice has been approved for sending
     * @example false
     */
    public function setApprovedForSending(?bool $approvedForSending): ?self
    {
        $this->approvedForSending = $approvedForSending;
        return $this;
    }

    /**
     * Boolean to indicate whether a copy is sent to sender's email
     * @example false
     */
    public function setSendCopy(?bool $sendCopy): ?self
    {
        $this->sendCopy = $sendCopy;
        return $this;
    }

    /**
     * Boolean to indicate whether the invoice in the Xero app displays as "sent"
     * @example false
     */
    public function setMarkAsSent(?bool $markAsSent): ?self
    {
        $this->markAsSent = $markAsSent;
        return $this;
    }

    /**
     * Boolean to indicate whether to include PDF attachment
     * @example false
     */
    public function setIncludePDF(?bool $includePDF): ?self
    {
        $this->includePDF = $includePDF;
        return $this;
    }
}
