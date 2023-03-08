<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class BankTransfersData extends Data
{
    #[MapName('FromBankAccount')]
    #[MapInputName('FromBankAccount')]
    public mixed $fromBankAccount = null;

    #[MapName('ToBankAccount')]
    #[MapInputName('ToBankAccount')]
    public mixed $toBankAccount = null;

    /**
     * amount of the transaction
     * @format double
     */
    #[MapName('Amount')]
    #[MapInputName('Amount')]
    public ?int $amount = null;

    /** The date of the Transfer YYYY-MM-DD */
    #[MapName('Date')]
    #[MapInputName('Date')]
    public ?string $date = null;

    /**
     * The identifier of the Bank Transfer
     * @format uuid
     */
    #[MapName('BankTransferID')]
    #[MapInputName('BankTransferID')]
    public ?string $bankTransferID = null;

    /**
     * The currency rate
     * @format double
     */
    #[MapName('CurrencyRate')]
    #[MapInputName('CurrencyRate')]
    public ?int $currencyRate = null;

    /**
     * The Bank Transaction ID for the source account
     * @format uuid
     */
    #[MapName('FromBankTransactionID')]
    #[MapInputName('FromBankTransactionID')]
    public ?string $fromBankTransactionID = null;

    /**
     * The Bank Transaction ID for the destination account
     * @format uuid
     */
    #[MapName('ToBankTransactionID')]
    #[MapInputName('ToBankTransactionID')]
    public ?string $toBankTransactionID = null;

    /**
     * The Bank Transaction boolean to show if it is reconciled for the source account
     * @example false
     */
    #[MapName('FromIsReconciled')]
    #[MapInputName('FromIsReconciled')]
    public ?bool $fromIsReconciled = null;

    /**
     * The Bank Transaction boolean to show if it is reconciled for the destination account
     * @example false
     */
    #[MapName('ToIsReconciled')]
    #[MapInputName('ToIsReconciled')]
    public ?bool $toIsReconciled = null;

    /** Reference for the transactions. */
    #[MapName('Reference')]
    #[MapInputName('Reference')]
    public ?string $reference = null;

    /**
     * Boolean to indicate if a Bank Transfer has an attachment
     * @example false
     */
    #[MapName('HasAttachments')]
    #[MapInputName('HasAttachments')]
    public ?bool $hasAttachments = null;

    /**
     * UTC timestamp of creation date of bank transfer
     * @example /Date(1573755038314)/
     */
    #[MapName('CreatedDateUTC')]
    #[MapInputName('CreatedDateUTC')]
    public ?string $createdDateUTC = null;

    /** @var DataCollection<int, ValidationErrorsData> */
    #[MapName('ValidationErrors')]
    #[MapInputName('ValidationErrors')]
    #[DataCollectionOf(ValidationErrorsData::class)]
    public ?DataCollection $validationErrors = null;

    public function getFromBankAccount(): mixed
    {
        return $this->fromBankAccount;
    }

    public function getToBankAccount(): mixed
    {
        return $this->toBankAccount;
    }

    /**
     * amount of the transaction
     * @return amount of the transaction
     * @format double
     * @return amount of the transaction
     * @format double
     * @return amount of the transaction
     * @format double
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * The date of the Transfer YYYY-MM-DD
     * @return The date of the Transfer YYYY-MM-DD
     * @return The date of the Transfer YYYY-MM-DD
     * @return The date of the Transfer YYYY-MM-DD
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * The identifier of the Bank Transfer
     * @return The identifier of the Bank Transfer
     * @format uuid
     * @return The identifier of the Bank Transfer
     * @format uuid
     * @return The identifier of the Bank Transfer
     * @format uuid
     */
    public function getBankTransferID(): ?string
    {
        return $this->bankTransferID;
    }

    /**
     * The currency rate
     * @return The currency rate
     * @format double
     * @return The currency rate
     * @format double
     * @return The currency rate
     * @format double
     */
    public function getCurrencyRate(): ?int
    {
        return $this->currencyRate;
    }

    /**
     * The Bank Transaction ID for the source account
     * @return The Bank Transaction ID for the source account
     * @format uuid
     * @return The Bank Transaction ID for the source account
     * @format uuid
     * @return The Bank Transaction ID for the source account
     * @format uuid
     */
    public function getFromBankTransactionID(): ?string
    {
        return $this->fromBankTransactionID;
    }

    /**
     * The Bank Transaction ID for the destination account
     * @return The Bank Transaction ID for the destination account
     * @format uuid
     * @return The Bank Transaction ID for the destination account
     * @format uuid
     * @return The Bank Transaction ID for the destination account
     * @format uuid
     */
    public function getToBankTransactionID(): ?string
    {
        return $this->toBankTransactionID;
    }

    /**
     * The Bank Transaction boolean to show if it is reconciled for the source account
     * @return The Bank Transaction boolean to show if it is reconciled for the source account
     * @example false
     * @return The Bank Transaction boolean to show if it is reconciled for the source account
     * @example false
     * @return The Bank Transaction boolean to show if it is reconciled for the source account
     * @example false
     */
    public function getFromIsReconciled(): ?bool
    {
        return $this->fromIsReconciled;
    }

    /**
     * The Bank Transaction boolean to show if it is reconciled for the destination account
     * @return The Bank Transaction boolean to show if it is reconciled for the destination account
     * @example false
     * @return The Bank Transaction boolean to show if it is reconciled for the destination account
     * @example false
     * @return The Bank Transaction boolean to show if it is reconciled for the destination account
     * @example false
     */
    public function getToIsReconciled(): ?bool
    {
        return $this->toIsReconciled;
    }

    /**
     * Reference for the transactions.
     * @return Reference for the transactions.
     * @return Reference for the transactions.
     * @return Reference for the transactions.
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Boolean to indicate if a Bank Transfer has an attachment
     * @return Boolean to indicate if a Bank Transfer has an attachment
     * @example false
     * @return Boolean to indicate if a Bank Transfer has an attachment
     * @example false
     * @return Boolean to indicate if a Bank Transfer has an attachment
     * @example false
     */
    public function getHasAttachments(): ?bool
    {
        return $this->hasAttachments;
    }

    /**
     * UTC timestamp of creation date of bank transfer
     * @return UTC timestamp of creation date of bank transfer
     * @example /Date(1573755038314)/
     * @return UTC timestamp of creation date of bank transfer
     * @example /Date(1573755038314)/
     * @return UTC timestamp of creation date of bank transfer
     * @example /Date(1573755038314)/
     */
    public function getCreatedDateUTC(): ?string
    {
        return $this->createdDateUTC;
    }

    /**
     * @return @var DataCollection<int, ValidationErrorsData>
     */
    public function getValidationErrors(): ?DataCollection
    {
        return $this->validationErrors;
    }

    public function setFromBankAccount(mixed $fromBankAccount): ?self
    {
        $this->fromBankAccount = $fromBankAccount;
        return $this;
    }

    public function setToBankAccount(mixed $toBankAccount): ?self
    {
        $this->toBankAccount = $toBankAccount;
        return $this;
    }

    /**
     * amount of the transaction
     * @format double
     */
    public function setAmount(?int $amount): ?self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * The date of the Transfer YYYY-MM-DD
     */
    public function setDate(?string $date): ?self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The identifier of the Bank Transfer
     * @format uuid
     */
    public function setBankTransferID(?string $bankTransferID): ?self
    {
        $this->bankTransferID = $bankTransferID;
        return $this;
    }

    /**
     * The currency rate
     * @format double
     */
    public function setCurrencyRate(?int $currencyRate): ?self
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }

    /**
     * The Bank Transaction ID for the source account
     * @format uuid
     */
    public function setFromBankTransactionID(?string $fromBankTransactionID): ?self
    {
        $this->fromBankTransactionID = $fromBankTransactionID;
        return $this;
    }

    /**
     * The Bank Transaction ID for the destination account
     * @format uuid
     */
    public function setToBankTransactionID(?string $toBankTransactionID): ?self
    {
        $this->toBankTransactionID = $toBankTransactionID;
        return $this;
    }

    /**
     * The Bank Transaction boolean to show if it is reconciled for the source account
     * @example false
     */
    public function setFromIsReconciled(?bool $fromIsReconciled): ?self
    {
        $this->fromIsReconciled = $fromIsReconciled;
        return $this;
    }

    /**
     * The Bank Transaction boolean to show if it is reconciled for the destination account
     * @example false
     */
    public function setToIsReconciled(?bool $toIsReconciled): ?self
    {
        $this->toIsReconciled = $toIsReconciled;
        return $this;
    }

    /**
     * Reference for the transactions.
     */
    public function setReference(?string $reference): ?self
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Boolean to indicate if a Bank Transfer has an attachment
     * @example false
     */
    public function setHasAttachments(?bool $hasAttachments): ?self
    {
        $this->hasAttachments = $hasAttachments;
        return $this;
    }

    /**
     * UTC timestamp of creation date of bank transfer
     * @example /Date(1573755038314)/
     */
    public function setCreatedDateUTC(?string $createdDateUTC): ?self
    {
        $this->createdDateUTC = $createdDateUTC;
        return $this;
    }
}
