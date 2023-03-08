<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class AllocationsData extends Data
{
    #[MapName('Invoice')]
    #[MapInputName('Invoice')]
    public mixed $invoice = null;

    #[MapName('Overpayment')]
    #[MapInputName('Overpayment')]
    public mixed $overpayment = null;

    #[MapName('Prepayment')]
    #[MapInputName('Prepayment')]
    public mixed $prepayment = null;

    #[MapName('CreditNote')]
    #[MapInputName('CreditNote')]
    public mixed $creditNote = null;

    /**
     * the amount being applied to the invoice
     * @format double
     */
    #[MapName('Amount')]
    #[MapInputName('Amount')]
    public ?int $amount = null;

    /** the date the allocation is applied YYYY-MM-DD. */
    #[MapName('Date')]
    #[MapInputName('Date')]
    public ?string $date = null;

    /** A string to indicate if a invoice status */
    #[MapName('StatusAttributeString')]
    #[MapInputName('StatusAttributeString')]
    public ?string $statusAttributeString = null;

    /** @var DataCollection<int, ValidationErrorsData> */
    #[MapName('ValidationErrors')]
    #[MapInputName('ValidationErrors')]
    #[DataCollectionOf(ValidationErrorsData::class)]
    public ?DataCollection $validationErrors = null;

    public function getInvoice(): mixed
    {
        return $this->invoice;
    }

    public function getOverpayment(): mixed
    {
        return $this->overpayment;
    }

    public function getPrepayment(): mixed
    {
        return $this->prepayment;
    }

    public function getCreditNote(): mixed
    {
        return $this->creditNote;
    }

    /**
     * the amount being applied to the invoice
     * @return the amount being applied to the invoice
     * @format double
     * @return the amount being applied to the invoice
     * @format double
     * @return the amount being applied to the invoice
     * @format double
     * @return the amount being applied to the invoice
     * @format double
     * @return the amount being applied to the invoice
     * @format double
     * @return the amount being applied to the invoice
     * @format double
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * the date the allocation is applied YYYY-MM-DD.
     * @return the date the allocation is applied YYYY-MM-DD.
     * @return the date the allocation is applied YYYY-MM-DD.
     * @return the date the allocation is applied YYYY-MM-DD.
     * @return the date the allocation is applied YYYY-MM-DD.
     * @return the date the allocation is applied YYYY-MM-DD.
     * @return the date the allocation is applied YYYY-MM-DD.
     */
    public function getDate(): ?string
    {
        return $this->date;
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

    public function setInvoice(mixed $invoice): ?self
    {
        $this->invoice = $invoice;
        return $this;
    }

    public function setOverpayment(mixed $overpayment): ?self
    {
        $this->overpayment = $overpayment;
        return $this;
    }

    public function setPrepayment(mixed $prepayment): ?self
    {
        $this->prepayment = $prepayment;
        return $this;
    }

    public function setCreditNote(mixed $creditNote): ?self
    {
        $this->creditNote = $creditNote;
        return $this;
    }

    /**
     * the amount being applied to the invoice
     * @format double
     */
    public function setAmount(?int $amount): ?self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * the date the allocation is applied YYYY-MM-DD.
     */
    public function setDate(?string $date): ?self
    {
        $this->date = $date;
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
