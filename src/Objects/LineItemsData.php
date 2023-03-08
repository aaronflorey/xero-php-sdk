<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class LineItemsData extends Data
{
    /**
     * LineItem unique ID
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    #[MapName('LineItemID')]
    #[MapInputName('LineItemID')]
    public ?string $lineItemID = null;

    /** Description needs to be at least 1 char long. A line item with just a description (i.e no unit amount or quantity) can be created by specifying just a <Description> element that contains at least 1 character */
    #[MapName('Description')]
    #[MapInputName('Description')]
    public ?string $description = null;

    /**
     * LineItem Quantity
     * @format double
     */
    #[MapName('Quantity')]
    #[MapInputName('Quantity')]
    public ?int $quantity = null;

    /**
     * LineItem Unit Amount
     * @format double
     */
    #[MapName('UnitAmount')]
    #[MapInputName('UnitAmount')]
    public ?int $unitAmount = null;

    /** See Items */
    #[MapName('ItemCode')]
    #[MapInputName('ItemCode')]
    public ?string $itemCode = null;

    /** See Accounts */
    #[MapName('AccountCode')]
    #[MapInputName('AccountCode')]
    public ?string $accountCode = null;

    /**
     * The associated account ID related to this line item
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    #[MapName('AccountID')]
    #[MapInputName('AccountID')]
    public ?string $accountID = null;

    /** The tax type from TaxRates */
    #[MapName('TaxType')]
    #[MapInputName('TaxType')]
    public ?string $taxType = null;

    /**
     * The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     * @format double
     */
    #[MapName('TaxAmount')]
    #[MapInputName('TaxAmount')]
    public ?int $taxAmount = null;

    #[MapName('Item')]
    #[MapInputName('Item')]
    public mixed $item = null;

    /**
     * If you wish to omit either the Quantity or UnitAmount you can provide a LineAmount and Xero will calculate the missing amount for you. The line amount reflects the discounted price if either a DiscountRate or DiscountAmount has been used i.e. LineAmount = Quantity * Unit Amount * ((100 - DiscountRate)/100) or LineAmount = (Quantity * UnitAmount) - DiscountAmount
     * @format double
     */
    #[MapName('LineAmount')]
    #[MapInputName('LineAmount')]
    public ?int $lineAmount = null;

    /** @var DataCollection<int, TrackingData> */
    #[MapName('Tracking')]
    #[MapInputName('Tracking')]
    #[DataCollectionOf(TrackingData::class)]
    public ?DataCollection $tracking = null;

    /**
     * Percentage discount being applied to a line item (only supported on  ACCREC invoices – ACC PAY invoices and credit notes in Xero do not support discounts
     * @format double
     */
    #[MapName('DiscountRate')]
    #[MapInputName('DiscountRate')]
    public ?int $discountRate = null;

    /**
     * Discount amount being applied to a line item. Only supported on ACCREC invoices and quotes. ACCPAY invoices and credit notes in Xero do not support discounts.
     * @format double
     */
    #[MapName('DiscountAmount')]
    #[MapInputName('DiscountAmount')]
    public ?int $discountAmount = null;

    /**
     * The Xero identifier for a Repeating Invoice
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    #[MapName('RepeatingInvoiceID')]
    #[MapInputName('RepeatingInvoiceID')]
    public ?string $repeatingInvoiceID = null;

    /**
     * LineItem unique ID
     * @return LineItem unique ID
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return LineItem unique ID
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return LineItem unique ID
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return LineItem unique ID
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return LineItem unique ID
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return LineItem unique ID
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return LineItem unique ID
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return LineItem unique ID
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return LineItem unique ID
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    public function getLineItemID(): ?string
    {
        return $this->lineItemID;
    }

    /**
     * Description needs to be at least 1 char long. A line item with just a description (i.e no unit amount or quantity) can be created by specifying just a <Description> element that contains at least 1 character
     * @return Description needs to be at least 1 char long. A line item with just a description (i.e no unit amount or quantity) can be created by specifying just a <Description> element that contains at least 1 character
     * @return Description needs to be at least 1 char long. A line item with just a description (i.e no unit amount or quantity) can be created by specifying just a <Description> element that contains at least 1 character
     * @return Description needs to be at least 1 char long. A line item with just a description (i.e no unit amount or quantity) can be created by specifying just a <Description> element that contains at least 1 character
     * @return Description needs to be at least 1 char long. A line item with just a description (i.e no unit amount or quantity) can be created by specifying just a <Description> element that contains at least 1 character
     * @return Description needs to be at least 1 char long. A line item with just a description (i.e no unit amount or quantity) can be created by specifying just a <Description> element that contains at least 1 character
     * @return Description needs to be at least 1 char long. A line item with just a description (i.e no unit amount or quantity) can be created by specifying just a <Description> element that contains at least 1 character
     * @return Description needs to be at least 1 char long. A line item with just a description (i.e no unit amount or quantity) can be created by specifying just a <Description> element that contains at least 1 character
     * @return Description needs to be at least 1 char long. A line item with just a description (i.e no unit amount or quantity) can be created by specifying just a <Description> element that contains at least 1 character
     * @return Description needs to be at least 1 char long. A line item with just a description (i.e no unit amount or quantity) can be created by specifying just a <Description> element that contains at least 1 character
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * LineItem Quantity
     * @return LineItem Quantity
     * @format double
     * @return LineItem Quantity
     * @format double
     * @return LineItem Quantity
     * @format double
     * @return LineItem Quantity
     * @format double
     * @return LineItem Quantity
     * @format double
     * @return LineItem Quantity
     * @format double
     * @return LineItem Quantity
     * @format double
     * @return LineItem Quantity
     * @format double
     * @return LineItem Quantity
     * @format double
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * LineItem Unit Amount
     * @return LineItem Unit Amount
     * @format double
     * @return LineItem Unit Amount
     * @format double
     * @return LineItem Unit Amount
     * @format double
     * @return LineItem Unit Amount
     * @format double
     * @return LineItem Unit Amount
     * @format double
     * @return LineItem Unit Amount
     * @format double
     * @return LineItem Unit Amount
     * @format double
     * @return LineItem Unit Amount
     * @format double
     * @return LineItem Unit Amount
     * @format double
     */
    public function getUnitAmount(): ?int
    {
        return $this->unitAmount;
    }

    /**
     * See Items
     * @return See Items
     * @return See Items
     * @return See Items
     * @return See Items
     * @return See Items
     * @return See Items
     * @return See Items
     * @return See Items
     * @return See Items
     */
    public function getItemCode(): ?string
    {
        return $this->itemCode;
    }

    /**
     * See Accounts
     * @return See Accounts
     * @return See Accounts
     * @return See Accounts
     * @return See Accounts
     * @return See Accounts
     * @return See Accounts
     * @return See Accounts
     * @return See Accounts
     * @return See Accounts
     */
    public function getAccountCode(): ?string
    {
        return $this->accountCode;
    }

    /**
     * The associated account ID related to this line item
     * @return The associated account ID related to this line item
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The associated account ID related to this line item
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The associated account ID related to this line item
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The associated account ID related to this line item
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The associated account ID related to this line item
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The associated account ID related to this line item
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The associated account ID related to this line item
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The associated account ID related to this line item
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The associated account ID related to this line item
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    public function getAccountID(): ?string
    {
        return $this->accountID;
    }

    /**
     * The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     */
    public function getTaxType(): ?string
    {
        return $this->taxType;
    }

    /**
     * The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     * @return The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     * @format double
     * @return The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     * @format double
     * @return The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     * @format double
     * @return The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     * @format double
     * @return The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     * @format double
     * @return The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     * @format double
     * @return The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     * @format double
     * @return The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     * @format double
     * @return The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     * @format double
     */
    public function getTaxAmount(): ?int
    {
        return $this->taxAmount;
    }

    public function getItem(): mixed
    {
        return $this->item;
    }

    /**
     * If you wish to omit either the Quantity or UnitAmount you can provide a LineAmount and Xero will calculate the missing amount for you. The line amount reflects the discounted price if either a DiscountRate or DiscountAmount has been used i.e. LineAmount = Quantity * Unit Amount * ((100 - DiscountRate)/100) or LineAmount = (Quantity * UnitAmount) - DiscountAmount
     * @return If you wish to omit either the Quantity or UnitAmount you can provide a LineAmount and Xero will calculate the missing amount for you. The line amount reflects the discounted price if either a DiscountRate or DiscountAmount has been used i.e. LineAmount = Quantity * Unit Amount * ((100 - DiscountRate)/100) or LineAmount = (Quantity * UnitAmount) - DiscountAmount
     * @format double
     * @return If you wish to omit either the Quantity or UnitAmount you can provide a LineAmount and Xero will calculate the missing amount for you. The line amount reflects the discounted price if either a DiscountRate or DiscountAmount has been used i.e. LineAmount = Quantity * Unit Amount * ((100 - DiscountRate)/100) or LineAmount = (Quantity * UnitAmount) - DiscountAmount
     * @format double
     * @return If you wish to omit either the Quantity or UnitAmount you can provide a LineAmount and Xero will calculate the missing amount for you. The line amount reflects the discounted price if either a DiscountRate or DiscountAmount has been used i.e. LineAmount = Quantity * Unit Amount * ((100 - DiscountRate)/100) or LineAmount = (Quantity * UnitAmount) - DiscountAmount
     * @format double
     * @return If you wish to omit either the Quantity or UnitAmount you can provide a LineAmount and Xero will calculate the missing amount for you. The line amount reflects the discounted price if either a DiscountRate or DiscountAmount has been used i.e. LineAmount = Quantity * Unit Amount * ((100 - DiscountRate)/100) or LineAmount = (Quantity * UnitAmount) - DiscountAmount
     * @format double
     * @return If you wish to omit either the Quantity or UnitAmount you can provide a LineAmount and Xero will calculate the missing amount for you. The line amount reflects the discounted price if either a DiscountRate or DiscountAmount has been used i.e. LineAmount = Quantity * Unit Amount * ((100 - DiscountRate)/100) or LineAmount = (Quantity * UnitAmount) - DiscountAmount
     * @format double
     * @return If you wish to omit either the Quantity or UnitAmount you can provide a LineAmount and Xero will calculate the missing amount for you. The line amount reflects the discounted price if either a DiscountRate or DiscountAmount has been used i.e. LineAmount = Quantity * Unit Amount * ((100 - DiscountRate)/100) or LineAmount = (Quantity * UnitAmount) - DiscountAmount
     * @format double
     * @return If you wish to omit either the Quantity or UnitAmount you can provide a LineAmount and Xero will calculate the missing amount for you. The line amount reflects the discounted price if either a DiscountRate or DiscountAmount has been used i.e. LineAmount = Quantity * Unit Amount * ((100 - DiscountRate)/100) or LineAmount = (Quantity * UnitAmount) - DiscountAmount
     * @format double
     * @return If you wish to omit either the Quantity or UnitAmount you can provide a LineAmount and Xero will calculate the missing amount for you. The line amount reflects the discounted price if either a DiscountRate or DiscountAmount has been used i.e. LineAmount = Quantity * Unit Amount * ((100 - DiscountRate)/100) or LineAmount = (Quantity * UnitAmount) - DiscountAmount
     * @format double
     * @return If you wish to omit either the Quantity or UnitAmount you can provide a LineAmount and Xero will calculate the missing amount for you. The line amount reflects the discounted price if either a DiscountRate or DiscountAmount has been used i.e. LineAmount = Quantity * Unit Amount * ((100 - DiscountRate)/100) or LineAmount = (Quantity * UnitAmount) - DiscountAmount
     * @format double
     */
    public function getLineAmount(): ?int
    {
        return $this->lineAmount;
    }

    /**
     * @return @var DataCollection<int, TrackingData>
     */
    public function getTracking(): ?DataCollection
    {
        return $this->tracking;
    }

    /**
     * Percentage discount being applied to a line item (only supported on  ACCREC invoices – ACC PAY invoices and credit notes in Xero do not support discounts
     * @return Percentage discount being applied to a line item (only supported on  ACCREC invoices – ACC PAY invoices and credit notes in Xero do not support discounts
     * @format double
     * @return Percentage discount being applied to a line item (only supported on  ACCREC invoices – ACC PAY invoices and credit notes in Xero do not support discounts
     * @format double
     * @return Percentage discount being applied to a line item (only supported on  ACCREC invoices – ACC PAY invoices and credit notes in Xero do not support discounts
     * @format double
     * @return Percentage discount being applied to a line item (only supported on  ACCREC invoices – ACC PAY invoices and credit notes in Xero do not support discounts
     * @format double
     * @return Percentage discount being applied to a line item (only supported on  ACCREC invoices – ACC PAY invoices and credit notes in Xero do not support discounts
     * @format double
     * @return Percentage discount being applied to a line item (only supported on  ACCREC invoices – ACC PAY invoices and credit notes in Xero do not support discounts
     * @format double
     * @return Percentage discount being applied to a line item (only supported on  ACCREC invoices – ACC PAY invoices and credit notes in Xero do not support discounts
     * @format double
     * @return Percentage discount being applied to a line item (only supported on  ACCREC invoices – ACC PAY invoices and credit notes in Xero do not support discounts
     * @format double
     * @return Percentage discount being applied to a line item (only supported on  ACCREC invoices – ACC PAY invoices and credit notes in Xero do not support discounts
     * @format double
     */
    public function getDiscountRate(): ?int
    {
        return $this->discountRate;
    }

    /**
     * Discount amount being applied to a line item. Only supported on ACCREC invoices and quotes. ACCPAY invoices and credit notes in Xero do not support discounts.
     * @return Discount amount being applied to a line item. Only supported on ACCREC invoices and quotes. ACCPAY invoices and credit notes in Xero do not support discounts.
     * @format double
     * @return Discount amount being applied to a line item. Only supported on ACCREC invoices and quotes. ACCPAY invoices and credit notes in Xero do not support discounts.
     * @format double
     * @return Discount amount being applied to a line item. Only supported on ACCREC invoices and quotes. ACCPAY invoices and credit notes in Xero do not support discounts.
     * @format double
     * @return Discount amount being applied to a line item. Only supported on ACCREC invoices and quotes. ACCPAY invoices and credit notes in Xero do not support discounts.
     * @format double
     * @return Discount amount being applied to a line item. Only supported on ACCREC invoices and quotes. ACCPAY invoices and credit notes in Xero do not support discounts.
     * @format double
     * @return Discount amount being applied to a line item. Only supported on ACCREC invoices and quotes. ACCPAY invoices and credit notes in Xero do not support discounts.
     * @format double
     * @return Discount amount being applied to a line item. Only supported on ACCREC invoices and quotes. ACCPAY invoices and credit notes in Xero do not support discounts.
     * @format double
     * @return Discount amount being applied to a line item. Only supported on ACCREC invoices and quotes. ACCPAY invoices and credit notes in Xero do not support discounts.
     * @format double
     * @return Discount amount being applied to a line item. Only supported on ACCREC invoices and quotes. ACCPAY invoices and credit notes in Xero do not support discounts.
     * @format double
     */
    public function getDiscountAmount(): ?int
    {
        return $this->discountAmount;
    }

    /**
     * The Xero identifier for a Repeating Invoice
     * @return The Xero identifier for a Repeating Invoice
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The Xero identifier for a Repeating Invoice
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The Xero identifier for a Repeating Invoice
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The Xero identifier for a Repeating Invoice
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The Xero identifier for a Repeating Invoice
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The Xero identifier for a Repeating Invoice
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The Xero identifier for a Repeating Invoice
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The Xero identifier for a Repeating Invoice
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The Xero identifier for a Repeating Invoice
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    public function getRepeatingInvoiceID(): ?string
    {
        return $this->repeatingInvoiceID;
    }
}
