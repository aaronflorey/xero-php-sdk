<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class BankTransactionsData extends Data
{
    /** See Bank Transaction Types */
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

    #[MapName('BankAccount')]
    #[MapInputName('BankAccount')]
    public mixed $bankAccount = null;

    /** Boolean to show if transaction is reconciled */
    #[MapName('IsReconciled')]
    #[MapInputName('IsReconciled')]
    public ?bool $isReconciled = null;

    /** Date of transaction – YYYY-MM-DD */
    #[MapName('Date')]
    #[MapInputName('Date')]
    public ?string $date = null;

    /** Reference for the transaction. Only supported for SPEND and RECEIVE transactions. */
    #[MapName('Reference')]
    #[MapInputName('Reference')]
    public ?string $reference = null;

    #[MapName('CurrencyCode')]
    #[MapInputName('CurrencyCode')]
    public ?string $currencyCode = null;

    /**
     * Exchange rate to base currency when money is spent or received. e.g.0.7500 Only used for bank transactions in non base currency. If this isn’t specified for non base currency accounts then either the user-defined rate (preference) or the XE.com day rate will be used. Setting currency is only supported on overpayments.
     * @format double
     */
    #[MapName('CurrencyRate')]
    #[MapInputName('CurrencyRate')]
    public ?int $currencyRate = null;

    /** URL link to a source document – shown as “Go to App Name” */
    #[MapName('Url')]
    #[MapInputName('Url')]
    public ?string $url = null;

    /** See Bank Transaction Status Codes */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    #[MapName('LineAmountTypes')]
    #[MapInputName('LineAmountTypes')]
    public ?string $lineAmountTypes = null;

    /**
     * Total of bank transaction excluding taxes
     * @format double
     */
    #[MapName('SubTotal')]
    #[MapInputName('SubTotal')]
    public ?int $subTotal = null;

    /**
     * Total tax on bank transaction
     * @format double
     */
    #[MapName('TotalTax')]
    #[MapInputName('TotalTax')]
    public ?int $totalTax = null;

    /**
     * Total of bank transaction tax inclusive
     * @format double
     */
    #[MapName('Total')]
    #[MapInputName('Total')]
    public ?int $total = null;

    /**
     * Xero generated unique identifier for bank transaction
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    #[MapName('BankTransactionID')]
    #[MapInputName('BankTransactionID')]
    public ?string $bankTransactionID = null;

    /**
     * Xero generated unique identifier for a Prepayment. This will be returned on BankTransactions with a Type of SPEND-PREPAYMENT or RECEIVE-PREPAYMENT
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    #[MapName('PrepaymentID')]
    #[MapInputName('PrepaymentID')]
    public ?string $prepaymentID = null;

    /**
     * Xero generated unique identifier for an Overpayment. This will be returned on BankTransactions with a Type of SPEND-OVERPAYMENT or RECEIVE-OVERPAYMENT
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    #[MapName('OverpaymentID')]
    #[MapInputName('OverpaymentID')]
    public ?string $overpaymentID = null;

    /**
     * Last modified date UTC format
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /**
     * Boolean to indicate if a bank transaction has an attachment
     * @example false
     */
    #[MapName('HasAttachments')]
    #[MapInputName('HasAttachments')]
    public ?bool $hasAttachments = null;

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
     * See Bank Transaction Types
     * @return See Bank Transaction Types
     * @return See Bank Transaction Types
     * @return See Bank Transaction Types
     * @return See Bank Transaction Types
     * @return See Bank Transaction Types
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

    public function getBankAccount(): mixed
    {
        return $this->bankAccount;
    }

    /**
     * Boolean to show if transaction is reconciled
     * @return Boolean to show if transaction is reconciled
     * @return Boolean to show if transaction is reconciled
     * @return Boolean to show if transaction is reconciled
     * @return Boolean to show if transaction is reconciled
     * @return Boolean to show if transaction is reconciled
     */
    public function getIsReconciled(): ?bool
    {
        return $this->isReconciled;
    }

    /**
     * Date of transaction – YYYY-MM-DD
     * @return Date of transaction – YYYY-MM-DD
     * @return Date of transaction – YYYY-MM-DD
     * @return Date of transaction – YYYY-MM-DD
     * @return Date of transaction – YYYY-MM-DD
     * @return Date of transaction – YYYY-MM-DD
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Reference for the transaction. Only supported for SPEND and RECEIVE transactions.
     * @return Reference for the transaction. Only supported for SPEND and RECEIVE transactions.
     * @return Reference for the transaction. Only supported for SPEND and RECEIVE transactions.
     * @return Reference for the transaction. Only supported for SPEND and RECEIVE transactions.
     * @return Reference for the transaction. Only supported for SPEND and RECEIVE transactions.
     * @return Reference for the transaction. Only supported for SPEND and RECEIVE transactions.
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Exchange rate to base currency when money is spent or received. e.g.0.7500 Only used for bank transactions in non base currency. If this isn’t specified for non base currency accounts then either the user-defined rate (preference) or the XE.com day rate will be used. Setting currency is only supported on overpayments.
     * @return Exchange rate to base currency when money is spent or received. e.g.0.7500 Only used for bank transactions in non base currency. If this isn’t specified for non base currency accounts then either the user-defined rate (preference) or the XE.com day rate will be used. Setting currency is only supported on overpayments.
     * @format double
     * @return Exchange rate to base currency when money is spent or received. e.g.0.7500 Only used for bank transactions in non base currency. If this isn’t specified for non base currency accounts then either the user-defined rate (preference) or the XE.com day rate will be used. Setting currency is only supported on overpayments.
     * @format double
     * @return Exchange rate to base currency when money is spent or received. e.g.0.7500 Only used for bank transactions in non base currency. If this isn’t specified for non base currency accounts then either the user-defined rate (preference) or the XE.com day rate will be used. Setting currency is only supported on overpayments.
     * @format double
     * @return Exchange rate to base currency when money is spent or received. e.g.0.7500 Only used for bank transactions in non base currency. If this isn’t specified for non base currency accounts then either the user-defined rate (preference) or the XE.com day rate will be used. Setting currency is only supported on overpayments.
     * @format double
     * @return Exchange rate to base currency when money is spent or received. e.g.0.7500 Only used for bank transactions in non base currency. If this isn’t specified for non base currency accounts then either the user-defined rate (preference) or the XE.com day rate will be used. Setting currency is only supported on overpayments.
     * @format double
     */
    public function getCurrencyRate(): ?int
    {
        return $this->currencyRate;
    }

    /**
     * URL link to a source document – shown as “Go to App Name”
     * @return URL link to a source document – shown as “Go to App Name”
     * @return URL link to a source document – shown as “Go to App Name”
     * @return URL link to a source document – shown as “Go to App Name”
     * @return URL link to a source document – shown as “Go to App Name”
     * @return URL link to a source document – shown as “Go to App Name”
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * See Bank Transaction Status Codes
     * @return See Bank Transaction Status Codes
     * @return See Bank Transaction Status Codes
     * @return See Bank Transaction Status Codes
     * @return See Bank Transaction Status Codes
     * @return See Bank Transaction Status Codes
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
     * Total of bank transaction excluding taxes
     * @return Total of bank transaction excluding taxes
     * @format double
     * @return Total of bank transaction excluding taxes
     * @format double
     * @return Total of bank transaction excluding taxes
     * @format double
     * @return Total of bank transaction excluding taxes
     * @format double
     * @return Total of bank transaction excluding taxes
     * @format double
     */
    public function getSubTotal(): ?int
    {
        return $this->subTotal;
    }

    /**
     * Total tax on bank transaction
     * @return Total tax on bank transaction
     * @format double
     * @return Total tax on bank transaction
     * @format double
     * @return Total tax on bank transaction
     * @format double
     * @return Total tax on bank transaction
     * @format double
     * @return Total tax on bank transaction
     * @format double
     */
    public function getTotalTax(): ?int
    {
        return $this->totalTax;
    }

    /**
     * Total of bank transaction tax inclusive
     * @return Total of bank transaction tax inclusive
     * @format double
     * @return Total of bank transaction tax inclusive
     * @format double
     * @return Total of bank transaction tax inclusive
     * @format double
     * @return Total of bank transaction tax inclusive
     * @format double
     * @return Total of bank transaction tax inclusive
     * @format double
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * Xero generated unique identifier for bank transaction
     * @return Xero generated unique identifier for bank transaction
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Xero generated unique identifier for bank transaction
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Xero generated unique identifier for bank transaction
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Xero generated unique identifier for bank transaction
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Xero generated unique identifier for bank transaction
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    public function getBankTransactionID(): ?string
    {
        return $this->bankTransactionID;
    }

    /**
     * Xero generated unique identifier for a Prepayment. This will be returned on BankTransactions with a Type of SPEND-PREPAYMENT or RECEIVE-PREPAYMENT
     * @return Xero generated unique identifier for a Prepayment. This will be returned on BankTransactions with a Type of SPEND-PREPAYMENT or RECEIVE-PREPAYMENT
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Xero generated unique identifier for a Prepayment. This will be returned on BankTransactions with a Type of SPEND-PREPAYMENT or RECEIVE-PREPAYMENT
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Xero generated unique identifier for a Prepayment. This will be returned on BankTransactions with a Type of SPEND-PREPAYMENT or RECEIVE-PREPAYMENT
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Xero generated unique identifier for a Prepayment. This will be returned on BankTransactions with a Type of SPEND-PREPAYMENT or RECEIVE-PREPAYMENT
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Xero generated unique identifier for a Prepayment. This will be returned on BankTransactions with a Type of SPEND-PREPAYMENT or RECEIVE-PREPAYMENT
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    public function getPrepaymentID(): ?string
    {
        return $this->prepaymentID;
    }

    /**
     * Xero generated unique identifier for an Overpayment. This will be returned on BankTransactions with a Type of SPEND-OVERPAYMENT or RECEIVE-OVERPAYMENT
     * @return Xero generated unique identifier for an Overpayment. This will be returned on BankTransactions with a Type of SPEND-OVERPAYMENT or RECEIVE-OVERPAYMENT
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Xero generated unique identifier for an Overpayment. This will be returned on BankTransactions with a Type of SPEND-OVERPAYMENT or RECEIVE-OVERPAYMENT
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Xero generated unique identifier for an Overpayment. This will be returned on BankTransactions with a Type of SPEND-OVERPAYMENT or RECEIVE-OVERPAYMENT
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Xero generated unique identifier for an Overpayment. This will be returned on BankTransactions with a Type of SPEND-OVERPAYMENT or RECEIVE-OVERPAYMENT
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Xero generated unique identifier for an Overpayment. This will be returned on BankTransactions with a Type of SPEND-OVERPAYMENT or RECEIVE-OVERPAYMENT
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    public function getOverpaymentID(): ?string
    {
        return $this->overpaymentID;
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
     * Boolean to indicate if a bank transaction has an attachment
     * @return Boolean to indicate if a bank transaction has an attachment
     * @example false
     * @return Boolean to indicate if a bank transaction has an attachment
     * @example false
     * @return Boolean to indicate if a bank transaction has an attachment
     * @example false
     * @return Boolean to indicate if a bank transaction has an attachment
     * @example false
     * @return Boolean to indicate if a bank transaction has an attachment
     * @example false
     */
    public function getHasAttachments(): ?bool
    {
        return $this->hasAttachments;
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
     * See Bank Transaction Types
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

    public function setBankAccount(mixed $bankAccount): ?self
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * Boolean to show if transaction is reconciled
     */
    public function setIsReconciled(?bool $isReconciled): ?self
    {
        $this->isReconciled = $isReconciled;
        return $this;
    }

    /**
     * Date of transaction – YYYY-MM-DD
     */
    public function setDate(?string $date): ?self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Reference for the transaction. Only supported for SPEND and RECEIVE transactions.
     */
    public function setReference(?string $reference): ?self
    {
        $this->reference = $reference;
        return $this;
    }

    public function setCurrencyCode(?string $currencyCode): ?self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Exchange rate to base currency when money is spent or received. e.g.0.7500 Only used for bank transactions in non base currency. If this isn’t specified for non base currency accounts then either the user-defined rate (preference) or the XE.com day rate will be used. Setting currency is only supported on overpayments.
     * @format double
     */
    public function setCurrencyRate(?int $currencyRate): ?self
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }

    /**
     * URL link to a source document – shown as “Go to App Name”
     */
    public function setUrl(?string $url): ?self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * See Bank Transaction Status Codes
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
     * Total of bank transaction excluding taxes
     * @format double
     */
    public function setSubTotal(?int $subTotal): ?self
    {
        $this->subTotal = $subTotal;
        return $this;
    }

    /**
     * Total tax on bank transaction
     * @format double
     */
    public function setTotalTax(?int $totalTax): ?self
    {
        $this->totalTax = $totalTax;
        return $this;
    }

    /**
     * Total of bank transaction tax inclusive
     * @format double
     */
    public function setTotal(?int $total): ?self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Xero generated unique identifier for bank transaction
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    public function setBankTransactionID(?string $bankTransactionID): ?self
    {
        $this->bankTransactionID = $bankTransactionID;
        return $this;
    }

    /**
     * Xero generated unique identifier for a Prepayment. This will be returned on BankTransactions with a Type of SPEND-PREPAYMENT or RECEIVE-PREPAYMENT
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    public function setPrepaymentID(?string $prepaymentID): ?self
    {
        $this->prepaymentID = $prepaymentID;
        return $this;
    }

    /**
     * Xero generated unique identifier for an Overpayment. This will be returned on BankTransactions with a Type of SPEND-OVERPAYMENT or RECEIVE-OVERPAYMENT
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    public function setOverpaymentID(?string $overpaymentID): ?self
    {
        $this->overpaymentID = $overpaymentID;
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
     * Boolean to indicate if a bank transaction has an attachment
     * @example false
     */
    public function setHasAttachments(?bool $hasAttachments): ?self
    {
        $this->hasAttachments = $hasAttachments;
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
