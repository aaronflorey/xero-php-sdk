<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class QuotesData extends Data
{
    /**
     * QuoteID GUID is automatically generated and is returned after create or GET.
     * @format uuid
     */
    #[MapName('QuoteID')]
    #[MapInputName('QuoteID')]
    public ?string $quoteID = null;

    /** Unique alpha numeric code identifying a quote (Max Length = 255) */
    #[MapName('QuoteNumber')]
    #[MapInputName('QuoteNumber')]
    public ?string $quoteNumber = null;

    /** Additional reference number */
    #[MapName('Reference')]
    #[MapInputName('Reference')]
    public ?string $reference = null;

    /** Terms of the quote */
    #[MapName('Terms')]
    #[MapInputName('Terms')]
    public ?string $terms = null;

    #[MapName('Contact')]
    #[MapInputName('Contact')]
    public ?string $contact = null;

    /** @var DataCollection<int, LineItemsData> */
    #[MapName('LineItems')]
    #[MapInputName('LineItems')]
    #[DataCollectionOf(LineItemsData::class)]
    public ?DataCollection $lineItems = null;

    /** Date quote was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation */
    #[MapName('Date')]
    #[MapInputName('Date')]
    public ?string $date = null;

    /** Date the quote was issued (YYYY-MM-DD) */
    #[MapName('DateString')]
    #[MapInputName('DateString')]
    public ?string $dateString = null;

    /** Date the quote expires – YYYY-MM-DD. */
    #[MapName('ExpiryDate')]
    #[MapInputName('ExpiryDate')]
    public ?string $expiryDate = null;

    /** Date the quote expires – YYYY-MM-DD. */
    #[MapName('ExpiryDateString')]
    #[MapInputName('ExpiryDateString')]
    public ?string $expiryDateString = null;

    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    #[MapName('CurrencyCode')]
    #[MapInputName('CurrencyCode')]
    public ?string $currencyCode = null;

    /**
     * The currency rate for a multicurrency quote
     * @format double
     */
    #[MapName('CurrencyRate')]
    #[MapInputName('CurrencyRate')]
    public ?int $currencyRate = null;

    /**
     * Total of quote excluding taxes.
     * @format double
     */
    #[MapName('SubTotal')]
    #[MapInputName('SubTotal')]
    public ?int $subTotal = null;

    /**
     * Total tax on quote
     * @format double
     */
    #[MapName('TotalTax')]
    #[MapInputName('TotalTax')]
    public ?int $totalTax = null;

    /**
     * Total of Quote tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @format double
     */
    #[MapName('Total')]
    #[MapInputName('Total')]
    public ?int $total = null;

    /**
     * Total of discounts applied on the quote line items
     * @format double
     */
    #[MapName('TotalDiscount')]
    #[MapInputName('TotalDiscount')]
    public ?int $totalDiscount = null;

    /** Title text for the quote */
    #[MapName('Title')]
    #[MapInputName('Title')]
    public ?string $title = null;

    /** Summary text for the quote */
    #[MapName('Summary')]
    #[MapInputName('Summary')]
    public ?string $summary = null;

    /**
     * See BrandingThemes
     * @format uuid
     */
    #[MapName('BrandingThemeID')]
    #[MapInputName('BrandingThemeID')]
    public ?string $brandingThemeID = null;

    /**
     * Last modified date UTC format
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /** See Quote Line Amount Types */
    #[MapName('LineAmountTypes')]
    #[MapInputName('LineAmountTypes')]
    public ?string $lineAmountTypes = null;

    /** A string to indicate if a invoice status */
    #[MapName('StatusAttributeString')]
    #[MapInputName('StatusAttributeString')]
    public ?string $statusAttributeString = null;

    /** @var DataCollection<int, ValidationErrorsData> */
    #[MapName('ValidationErrors')]
    #[MapInputName('ValidationErrors')]
    #[DataCollectionOf(ValidationErrorsData::class)]
    public ?DataCollection $validationErrors = null;

    /**
     * QuoteID GUID is automatically generated and is returned after create or GET.
     * @return QuoteID GUID is automatically generated and is returned after create or GET.
     * @format uuid
     * @return QuoteID GUID is automatically generated and is returned after create or GET.
     * @format uuid
     * @return QuoteID GUID is automatically generated and is returned after create or GET.
     * @format uuid
     * @return QuoteID GUID is automatically generated and is returned after create or GET.
     * @format uuid
     * @return QuoteID GUID is automatically generated and is returned after create or GET.
     * @format uuid
     */
    public function getQuoteID(): ?string
    {
        return $this->quoteID;
    }

    /**
     * Unique alpha numeric code identifying a quote (Max Length = 255)
     * @return Unique alpha numeric code identifying a quote (Max Length = 255)
     * @return Unique alpha numeric code identifying a quote (Max Length = 255)
     * @return Unique alpha numeric code identifying a quote (Max Length = 255)
     * @return Unique alpha numeric code identifying a quote (Max Length = 255)
     * @return Unique alpha numeric code identifying a quote (Max Length = 255)
     */
    public function getQuoteNumber(): ?string
    {
        return $this->quoteNumber;
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

    /**
     * Terms of the quote
     * @return Terms of the quote
     * @return Terms of the quote
     * @return Terms of the quote
     * @return Terms of the quote
     * @return Terms of the quote
     */
    public function getTerms(): ?string
    {
        return $this->terms;
    }

    public function getContact(): ?string
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
     * Date quote was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
     * @return Date quote was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
     * @return Date quote was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
     * @return Date quote was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
     * @return Date quote was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
     * @return Date quote was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date the quote was issued (YYYY-MM-DD)
     * @return Date the quote was issued (YYYY-MM-DD)
     * @return Date the quote was issued (YYYY-MM-DD)
     * @return Date the quote was issued (YYYY-MM-DD)
     * @return Date the quote was issued (YYYY-MM-DD)
     * @return Date the quote was issued (YYYY-MM-DD)
     */
    public function getDateString(): ?string
    {
        return $this->dateString;
    }

    /**
     * Date the quote expires – YYYY-MM-DD.
     * @return Date the quote expires – YYYY-MM-DD.
     * @return Date the quote expires – YYYY-MM-DD.
     * @return Date the quote expires – YYYY-MM-DD.
     * @return Date the quote expires – YYYY-MM-DD.
     * @return Date the quote expires – YYYY-MM-DD.
     */
    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }

    /**
     * Date the quote expires – YYYY-MM-DD.
     * @return Date the quote expires – YYYY-MM-DD.
     * @return Date the quote expires – YYYY-MM-DD.
     * @return Date the quote expires – YYYY-MM-DD.
     * @return Date the quote expires – YYYY-MM-DD.
     * @return Date the quote expires – YYYY-MM-DD.
     */
    public function getExpiryDateString(): ?string
    {
        return $this->expiryDateString;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * The currency rate for a multicurrency quote
     * @return The currency rate for a multicurrency quote
     * @format double
     * @return The currency rate for a multicurrency quote
     * @format double
     * @return The currency rate for a multicurrency quote
     * @format double
     * @return The currency rate for a multicurrency quote
     * @format double
     * @return The currency rate for a multicurrency quote
     * @format double
     */
    public function getCurrencyRate(): ?int
    {
        return $this->currencyRate;
    }

    /**
     * Total of quote excluding taxes.
     * @return Total of quote excluding taxes.
     * @format double
     * @return Total of quote excluding taxes.
     * @format double
     * @return Total of quote excluding taxes.
     * @format double
     * @return Total of quote excluding taxes.
     * @format double
     * @return Total of quote excluding taxes.
     * @format double
     */
    public function getSubTotal(): ?int
    {
        return $this->subTotal;
    }

    /**
     * Total tax on quote
     * @return Total tax on quote
     * @format double
     * @return Total tax on quote
     * @format double
     * @return Total tax on quote
     * @format double
     * @return Total tax on quote
     * @format double
     * @return Total tax on quote
     * @format double
     */
    public function getTotalTax(): ?int
    {
        return $this->totalTax;
    }

    /**
     * Total of Quote tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @return Total of Quote tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @format double
     * @return Total of Quote tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @format double
     * @return Total of Quote tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @format double
     * @return Total of Quote tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @format double
     * @return Total of Quote tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @format double
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * Total of discounts applied on the quote line items
     * @return Total of discounts applied on the quote line items
     * @format double
     * @return Total of discounts applied on the quote line items
     * @format double
     * @return Total of discounts applied on the quote line items
     * @format double
     * @return Total of discounts applied on the quote line items
     * @format double
     * @return Total of discounts applied on the quote line items
     * @format double
     */
    public function getTotalDiscount(): ?int
    {
        return $this->totalDiscount;
    }

    /**
     * Title text for the quote
     * @return Title text for the quote
     * @return Title text for the quote
     * @return Title text for the quote
     * @return Title text for the quote
     * @return Title text for the quote
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Summary text for the quote
     * @return Summary text for the quote
     * @return Summary text for the quote
     * @return Summary text for the quote
     * @return Summary text for the quote
     * @return Summary text for the quote
     */
    public function getSummary(): ?string
    {
        return $this->summary;
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
     * See Quote Line Amount Types
     * @return See Quote Line Amount Types
     * @return See Quote Line Amount Types
     * @return See Quote Line Amount Types
     * @return See Quote Line Amount Types
     * @return See Quote Line Amount Types
     */
    public function getLineAmountTypes(): ?string
    {
        return $this->lineAmountTypes;
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
     * QuoteID GUID is automatically generated and is returned after create or GET.
     * @format uuid
     */
    public function setQuoteID(?string $quoteID): ?self
    {
        $this->quoteID = $quoteID;
        return $this;
    }

    /**
     * Unique alpha numeric code identifying a quote (Max Length = 255)
     */
    public function setQuoteNumber(?string $quoteNumber): ?self
    {
        $this->quoteNumber = $quoteNumber;
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
     * Terms of the quote
     */
    public function setTerms(?string $terms): ?self
    {
        $this->terms = $terms;
        return $this;
    }

    public function setContact(?string $contact): ?self
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Date quote was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
     */
    public function setDate(?string $date): ?self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Date the quote was issued (YYYY-MM-DD)
     */
    public function setDateString(?string $dateString): ?self
    {
        $this->dateString = $dateString;
        return $this;
    }

    /**
     * Date the quote expires – YYYY-MM-DD.
     */
    public function setExpiryDate(?string $expiryDate): ?self
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Date the quote expires – YYYY-MM-DD.
     */
    public function setExpiryDateString(?string $expiryDateString): ?self
    {
        $this->expiryDateString = $expiryDateString;
        return $this;
    }

    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    public function setCurrencyCode(?string $currencyCode): ?self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * The currency rate for a multicurrency quote
     * @format double
     */
    public function setCurrencyRate(?int $currencyRate): ?self
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }

    /**
     * Total of quote excluding taxes.
     * @format double
     */
    public function setSubTotal(?int $subTotal): ?self
    {
        $this->subTotal = $subTotal;
        return $this;
    }

    /**
     * Total tax on quote
     * @format double
     */
    public function setTotalTax(?int $totalTax): ?self
    {
        $this->totalTax = $totalTax;
        return $this;
    }

    /**
     * Total of Quote tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     * @format double
     */
    public function setTotal(?int $total): ?self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Total of discounts applied on the quote line items
     * @format double
     */
    public function setTotalDiscount(?int $totalDiscount): ?self
    {
        $this->totalDiscount = $totalDiscount;
        return $this;
    }

    /**
     * Title text for the quote
     */
    public function setTitle(?string $title): ?self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Summary text for the quote
     */
    public function setSummary(?string $summary): ?self
    {
        $this->summary = $summary;
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
     * Last modified date UTC format
     * @example /Date(1573755038314)/
     */
    public function setUpdatedDateUTC(?string $updatedDateUTC): ?self
    {
        $this->updatedDateUTC = $updatedDateUTC;
        return $this;
    }

    /**
     * See Quote Line Amount Types
     */
    public function setLineAmountTypes(?string $lineAmountTypes): ?self
    {
        $this->lineAmountTypes = $lineAmountTypes;
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
