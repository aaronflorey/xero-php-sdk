<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class PurchaseOrdersData extends Data
{
    #[MapName('Contact')]
    #[MapInputName('Contact')]
    public mixed $contact = null;

    /** @var DataCollection<int, LineItemsData> */
    #[MapName('LineItems')]
    #[MapInputName('LineItems')]
    #[DataCollectionOf(LineItemsData::class)]
    public ?DataCollection $lineItems = null;

    /** Date purchase order was issued – YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation */
    #[MapName('Date')]
    #[MapInputName('Date')]
    public ?string $date = null;

    /** Date the goods are to be delivered – YYYY-MM-DD */
    #[MapName('DeliveryDate')]
    #[MapInputName('DeliveryDate')]
    public ?string $deliveryDate = null;

    #[MapName('LineAmountTypes')]
    #[MapInputName('LineAmountTypes')]
    public ?string $lineAmountTypes = null;

    /** Unique alpha numeric code identifying purchase order (when missing will auto-generate from your Organisation Invoice Settings) */
    #[MapName('PurchaseOrderNumber')]
    #[MapInputName('PurchaseOrderNumber')]
    public ?string $purchaseOrderNumber = null;

    /** Additional reference number */
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

    /** See Purchase Order Status Codes */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    /** Boolean to set whether the purchase order should be marked as “sent”. This can be set only on purchase orders that have been approved or billed */
    #[MapName('SentToContact')]
    #[MapInputName('SentToContact')]
    public ?bool $sentToContact = null;

    /** The address the goods are to be delivered to */
    #[MapName('DeliveryAddress')]
    #[MapInputName('DeliveryAddress')]
    public ?string $deliveryAddress = null;

    /** The person that the delivery is going to */
    #[MapName('AttentionTo')]
    #[MapInputName('AttentionTo')]
    public ?string $attentionTo = null;

    /** The phone number for the person accepting the delivery */
    #[MapName('Telephone')]
    #[MapInputName('Telephone')]
    public ?string $telephone = null;

    /** A free text feild for instructions (500 characters max) */
    #[MapName('DeliveryInstructions')]
    #[MapInputName('DeliveryInstructions')]
    public ?string $deliveryInstructions = null;

    /** The date the goods are expected to arrive. */
    #[MapName('ExpectedArrivalDate')]
    #[MapInputName('ExpectedArrivalDate')]
    public ?string $expectedArrivalDate = null;

    /**
     * Xero generated unique identifier for purchase order
     * @format uuid
     */
    #[MapName('PurchaseOrderID')]
    #[MapInputName('PurchaseOrderID')]
    public ?string $purchaseOrderID = null;

    /**
     * The currency rate for a multicurrency purchase order. If no rate is specified, the XE.com day rate is used.
     * @format double
     */
    #[MapName('CurrencyRate')]
    #[MapInputName('CurrencyRate')]
    public ?int $currencyRate = null;

    /**
     * Total of purchase order excluding taxes
     * @format double
     */
    #[MapName('SubTotal')]
    #[MapInputName('SubTotal')]
    public ?int $subTotal = null;

    /**
     * Total tax on purchase order
     * @format double
     */
    #[MapName('TotalTax')]
    #[MapInputName('TotalTax')]
    public ?int $totalTax = null;

    /**
     * Total of Purchase Order tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     */
    #[MapName('Total')]
    #[MapInputName('Total')]
    public ?int $total = null;

    /**
     * Total of discounts applied on the purchase order line items
     * @format double
     */
    #[MapName('TotalDiscount')]
    #[MapInputName('TotalDiscount')]
    public ?int $totalDiscount = null;

    /**
     * boolean to indicate if a purchase order has an attachment
     * @example false
     */
    #[MapName('HasAttachments')]
    #[MapInputName('HasAttachments')]
    public ?bool $hasAttachments = null;

    /**
     * Last modified date UTC format
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

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

    /** @var DataCollection<int, AttachmentsData> */
    #[MapName('Attachments')]
    #[MapInputName('Attachments')]
    #[DataCollectionOf(AttachmentsData::class)]
    public ?DataCollection $attachments = null;

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
     * Date purchase order was issued – YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     * @return Date purchase order was issued – YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     * @return Date purchase order was issued – YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     * @return Date purchase order was issued – YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     * @return Date purchase order was issued – YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     * @return Date purchase order was issued – YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     * @return Date purchase order was issued – YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date the goods are to be delivered – YYYY-MM-DD
     * @return Date the goods are to be delivered – YYYY-MM-DD
     * @return Date the goods are to be delivered – YYYY-MM-DD
     * @return Date the goods are to be delivered – YYYY-MM-DD
     * @return Date the goods are to be delivered – YYYY-MM-DD
     * @return Date the goods are to be delivered – YYYY-MM-DD
     * @return Date the goods are to be delivered – YYYY-MM-DD
     */
    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    public function getLineAmountTypes(): ?string
    {
        return $this->lineAmountTypes;
    }

    /**
     * Unique alpha numeric code identifying purchase order (when missing will auto-generate from your Organisation Invoice Settings)
     * @return Unique alpha numeric code identifying purchase order (when missing will auto-generate from your Organisation Invoice Settings)
     * @return Unique alpha numeric code identifying purchase order (when missing will auto-generate from your Organisation Invoice Settings)
     * @return Unique alpha numeric code identifying purchase order (when missing will auto-generate from your Organisation Invoice Settings)
     * @return Unique alpha numeric code identifying purchase order (when missing will auto-generate from your Organisation Invoice Settings)
     * @return Unique alpha numeric code identifying purchase order (when missing will auto-generate from your Organisation Invoice Settings)
     * @return Unique alpha numeric code identifying purchase order (when missing will auto-generate from your Organisation Invoice Settings)
     */
    public function getPurchaseOrderNumber(): ?string
    {
        return $this->purchaseOrderNumber;
    }

    /**
     * Additional reference number
     * @return Additional reference number
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

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * See Purchase Order Status Codes
     * @return See Purchase Order Status Codes
     * @return See Purchase Order Status Codes
     * @return See Purchase Order Status Codes
     * @return See Purchase Order Status Codes
     * @return See Purchase Order Status Codes
     * @return See Purchase Order Status Codes
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Boolean to set whether the purchase order should be marked as “sent”. This can be set only on purchase orders that have been approved or billed
     * @return Boolean to set whether the purchase order should be marked as “sent”. This can be set only on purchase orders that have been approved or billed
     * @return Boolean to set whether the purchase order should be marked as “sent”. This can be set only on purchase orders that have been approved or billed
     * @return Boolean to set whether the purchase order should be marked as “sent”. This can be set only on purchase orders that have been approved or billed
     * @return Boolean to set whether the purchase order should be marked as “sent”. This can be set only on purchase orders that have been approved or billed
     * @return Boolean to set whether the purchase order should be marked as “sent”. This can be set only on purchase orders that have been approved or billed
     * @return Boolean to set whether the purchase order should be marked as “sent”. This can be set only on purchase orders that have been approved or billed
     */
    public function getSentToContact(): ?bool
    {
        return $this->sentToContact;
    }

    /**
     * The address the goods are to be delivered to
     * @return The address the goods are to be delivered to
     * @return The address the goods are to be delivered to
     * @return The address the goods are to be delivered to
     * @return The address the goods are to be delivered to
     * @return The address the goods are to be delivered to
     * @return The address the goods are to be delivered to
     */
    public function getDeliveryAddress(): ?string
    {
        return $this->deliveryAddress;
    }

    /**
     * The person that the delivery is going to
     * @return The person that the delivery is going to
     * @return The person that the delivery is going to
     * @return The person that the delivery is going to
     * @return The person that the delivery is going to
     * @return The person that the delivery is going to
     * @return The person that the delivery is going to
     */
    public function getAttentionTo(): ?string
    {
        return $this->attentionTo;
    }

    /**
     * The phone number for the person accepting the delivery
     * @return The phone number for the person accepting the delivery
     * @return The phone number for the person accepting the delivery
     * @return The phone number for the person accepting the delivery
     * @return The phone number for the person accepting the delivery
     * @return The phone number for the person accepting the delivery
     * @return The phone number for the person accepting the delivery
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * A free text feild for instructions (500 characters max)
     * @return A free text feild for instructions (500 characters max)
     * @return A free text feild for instructions (500 characters max)
     * @return A free text feild for instructions (500 characters max)
     * @return A free text feild for instructions (500 characters max)
     * @return A free text feild for instructions (500 characters max)
     * @return A free text feild for instructions (500 characters max)
     */
    public function getDeliveryInstructions(): ?string
    {
        return $this->deliveryInstructions;
    }

    /**
     * The date the goods are expected to arrive.
     * @return The date the goods are expected to arrive.
     * @return The date the goods are expected to arrive.
     * @return The date the goods are expected to arrive.
     * @return The date the goods are expected to arrive.
     * @return The date the goods are expected to arrive.
     * @return The date the goods are expected to arrive.
     */
    public function getExpectedArrivalDate(): ?string
    {
        return $this->expectedArrivalDate;
    }

    /**
     * Xero generated unique identifier for purchase order
     * @return Xero generated unique identifier for purchase order
     * @format uuid
     * @return Xero generated unique identifier for purchase order
     * @format uuid
     * @return Xero generated unique identifier for purchase order
     * @format uuid
     * @return Xero generated unique identifier for purchase order
     * @format uuid
     * @return Xero generated unique identifier for purchase order
     * @format uuid
     * @return Xero generated unique identifier for purchase order
     * @format uuid
     */
    public function getPurchaseOrderID(): ?string
    {
        return $this->purchaseOrderID;
    }

    /**
     * The currency rate for a multicurrency purchase order. If no rate is specified, the XE.com day rate is used.
     * @return The currency rate for a multicurrency purchase order. If no rate is specified, the XE.com day rate is used.
     * @format double
     * @return The currency rate for a multicurrency purchase order. If no rate is specified, the XE.com day rate is used.
     * @format double
     * @return The currency rate for a multicurrency purchase order. If no rate is specified, the XE.com day rate is used.
     * @format double
     * @return The currency rate for a multicurrency purchase order. If no rate is specified, the XE.com day rate is used.
     * @format double
     * @return The currency rate for a multicurrency purchase order. If no rate is specified, the XE.com day rate is used.
     * @format double
     * @return The currency rate for a multicurrency purchase order. If no rate is specified, the XE.com day rate is used.
     * @format double
     */
    public function getCurrencyRate(): ?int
    {
        return $this->currencyRate;
    }

    /**
     * Total of purchase order excluding taxes
     * @return Total of purchase order excluding taxes
     * @format double
     * @return Total of purchase order excluding taxes
     * @format double
     * @return Total of purchase order excluding taxes
     * @format double
     * @return Total of purchase order excluding taxes
     * @format double
     * @return Total of purchase order excluding taxes
     * @format double
     * @return Total of purchase order excluding taxes
     * @format double
     */
    public function getSubTotal(): ?int
    {
        return $this->subTotal;
    }

    /**
     * Total tax on purchase order
     * @return Total tax on purchase order
     * @format double
     * @return Total tax on purchase order
     * @format double
     * @return Total tax on purchase order
     * @format double
     * @return Total tax on purchase order
     * @format double
     * @return Total tax on purchase order
     * @format double
     * @return Total tax on purchase order
     * @format double
     */
    public function getTotalTax(): ?int
    {
        return $this->totalTax;
    }

    /**
     * Total of Purchase Order tax inclusive (i.e. SubTotal + TotalTax)
     * @return Total of Purchase Order tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     * @return Total of Purchase Order tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     * @return Total of Purchase Order tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     * @return Total of Purchase Order tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     * @return Total of Purchase Order tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     * @return Total of Purchase Order tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * Total of discounts applied on the purchase order line items
     * @return Total of discounts applied on the purchase order line items
     * @format double
     * @return Total of discounts applied on the purchase order line items
     * @format double
     * @return Total of discounts applied on the purchase order line items
     * @format double
     * @return Total of discounts applied on the purchase order line items
     * @format double
     * @return Total of discounts applied on the purchase order line items
     * @format double
     * @return Total of discounts applied on the purchase order line items
     * @format double
     */
    public function getTotalDiscount(): ?int
    {
        return $this->totalDiscount;
    }

    /**
     * boolean to indicate if a purchase order has an attachment
     * @return boolean to indicate if a purchase order has an attachment
     * @example false
     * @return boolean to indicate if a purchase order has an attachment
     * @example false
     * @return boolean to indicate if a purchase order has an attachment
     * @example false
     * @return boolean to indicate if a purchase order has an attachment
     * @example false
     * @return boolean to indicate if a purchase order has an attachment
     * @example false
     * @return boolean to indicate if a purchase order has an attachment
     * @example false
     */
    public function getHasAttachments(): ?bool
    {
        return $this->hasAttachments;
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
     * @return Last modified date UTC format
     * @example /Date(1573755038314)/
     */
    public function getUpdatedDateUTC(): ?string
    {
        return $this->updatedDateUTC;
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

    public function setContact(mixed $contact): ?self
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Date purchase order was issued – YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     */
    public function setDate(?string $date): ?self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Date the goods are to be delivered – YYYY-MM-DD
     */
    public function setDeliveryDate(?string $deliveryDate): ?self
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    public function setLineAmountTypes(?string $lineAmountTypes): ?self
    {
        $this->lineAmountTypes = $lineAmountTypes;
        return $this;
    }

    /**
     * Unique alpha numeric code identifying purchase order (when missing will auto-generate from your Organisation Invoice Settings)
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): ?self
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;
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
     * See Purchase Order Status Codes
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Boolean to set whether the purchase order should be marked as “sent”. This can be set only on purchase orders that have been approved or billed
     */
    public function setSentToContact(?bool $sentToContact): ?self
    {
        $this->sentToContact = $sentToContact;
        return $this;
    }

    /**
     * The address the goods are to be delivered to
     */
    public function setDeliveryAddress(?string $deliveryAddress): ?self
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * The person that the delivery is going to
     */
    public function setAttentionTo(?string $attentionTo): ?self
    {
        $this->attentionTo = $attentionTo;
        return $this;
    }

    /**
     * The phone number for the person accepting the delivery
     */
    public function setTelephone(?string $telephone): ?self
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * A free text feild for instructions (500 characters max)
     */
    public function setDeliveryInstructions(?string $deliveryInstructions): ?self
    {
        $this->deliveryInstructions = $deliveryInstructions;
        return $this;
    }

    /**
     * The date the goods are expected to arrive.
     */
    public function setExpectedArrivalDate(?string $expectedArrivalDate): ?self
    {
        $this->expectedArrivalDate = $expectedArrivalDate;
        return $this;
    }

    /**
     * Xero generated unique identifier for purchase order
     * @format uuid
     */
    public function setPurchaseOrderID(?string $purchaseOrderID): ?self
    {
        $this->purchaseOrderID = $purchaseOrderID;
        return $this;
    }

    /**
     * The currency rate for a multicurrency purchase order. If no rate is specified, the XE.com day rate is used.
     * @format double
     */
    public function setCurrencyRate(?int $currencyRate): ?self
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }

    /**
     * Total of purchase order excluding taxes
     * @format double
     */
    public function setSubTotal(?int $subTotal): ?self
    {
        $this->subTotal = $subTotal;
        return $this;
    }

    /**
     * Total tax on purchase order
     * @format double
     */
    public function setTotalTax(?int $totalTax): ?self
    {
        $this->totalTax = $totalTax;
        return $this;
    }

    /**
     * Total of Purchase Order tax inclusive (i.e. SubTotal + TotalTax)
     * @format double
     */
    public function setTotal(?int $total): ?self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Total of discounts applied on the purchase order line items
     * @format double
     */
    public function setTotalDiscount(?int $totalDiscount): ?self
    {
        $this->totalDiscount = $totalDiscount;
        return $this;
    }

    /**
     * boolean to indicate if a purchase order has an attachment
     * @example false
     */
    public function setHasAttachments(?bool $hasAttachments): ?self
    {
        $this->hasAttachments = $hasAttachments;
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
     * A string to indicate if a invoice status
     */
    public function setStatusAttributeString(?string $statusAttributeString): ?self
    {
        $this->statusAttributeString = $statusAttributeString;
        return $this;
    }
}
