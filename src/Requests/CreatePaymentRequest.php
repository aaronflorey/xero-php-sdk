<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\ValidationErrorsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreatePaymentRequest extends Data
{
    #[MapName('Invoice')]
    #[MapOutputName('Invoice')]
    public mixed $invoice = null;

    #[MapName('CreditNote')]
    #[MapOutputName('CreditNote')]
    public mixed $creditNote = null;

    #[MapName('Prepayment')]
    #[MapOutputName('Prepayment')]
    public mixed $prepayment = null;

    #[MapName('Overpayment')]
    #[MapOutputName('Overpayment')]
    public mixed $overpayment = null;

    /** Number of invoice or credit note you are applying payment to e.g.INV-4003 */
    #[MapName('InvoiceNumber')]
    #[MapOutputName('InvoiceNumber')]
    public ?string $invoiceNumber = null;

    /** Number of invoice or credit note you are applying payment to e.g. INV-4003 */
    #[MapName('CreditNoteNumber')]
    #[MapOutputName('CreditNoteNumber')]
    public ?string $creditNoteNumber = null;

    #[MapName('BatchPayment')]
    #[MapOutputName('BatchPayment')]
    public mixed $batchPayment = null;

    #[MapName('Account')]
    #[MapOutputName('Account')]
    public mixed $account = null;

    /** Code of account you are using to make the payment e.g. 001 (note- not all accounts have a code value) */
    #[MapName('Code')]
    #[MapOutputName('Code')]
    public ?string $code = null;

    /** Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06 */
    #[MapName('Date')]
    #[MapOutputName('Date')]
    public ?string $date = null;

    /**
     * Exchange rate when payment is received. Only used for non base currency invoices and credit notes e.g. 0.7500
     * @format double
     */
    #[MapName('CurrencyRate')]
    #[MapOutputName('CurrencyRate')]
    public ?int $currencyRate = null;

    /**
     * The amount of the payment. Must be less than or equal to the outstanding amount owing on the invoice e.g. 200.00
     * @format double
     */
    #[MapName('Amount')]
    #[MapOutputName('Amount')]
    public ?int $amount = null;

    /**
     * The amount of the payment in the currency of the bank account.
     * @format double
     */
    #[MapName('BankAmount')]
    #[MapOutputName('BankAmount')]
    public ?int $bankAmount = null;

    /** An optional description for the payment e.g. Direct Debit */
    #[MapName('Reference')]
    #[MapOutputName('Reference')]
    public ?string $reference = null;

    /** An optional parameter for the payment. A boolean indicating whether you would like the payment to be created as reconciled when using PUT, or whether a payment has been reconciled when using GET */
    #[MapName('IsReconciled')]
    #[MapOutputName('IsReconciled')]
    public ?bool $isReconciled = null;

    /** The status of the payment. */
    #[MapName('Status')]
    #[MapOutputName('Status')]
    public ?string $status = null;

    /** See Payment Types. */
    #[MapName('PaymentType')]
    #[MapOutputName('PaymentType')]
    public ?string $paymentType = null;

    /**
     * UTC timestamp of last update to the payment
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapOutputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /**
     * The Xero identifier for an Payment e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    #[MapName('PaymentID')]
    #[MapOutputName('PaymentID')]
    public ?string $paymentID = null;

    /**
     * Present if the payment was created as part of a batch.
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    #[MapName('BatchPaymentID')]
    #[MapOutputName('BatchPaymentID')]
    public ?string $batchPaymentID = null;

    /** The suppliers bank account number the payment is being made to */
    #[MapName('BankAccountNumber')]
    #[MapOutputName('BankAccountNumber')]
    public ?string $bankAccountNumber = null;

    /** The suppliers bank account number the payment is being made to */
    #[MapName('Particulars')]
    #[MapOutputName('Particulars')]
    public ?string $particulars = null;

    /** The information to appear on the supplier's bank account */
    #[MapName('Details')]
    #[MapOutputName('Details')]
    public ?string $details = null;

    /**
     * A boolean to indicate if a contact has an validation errors
     * @example false
     */
    #[MapName('HasAccount')]
    #[MapOutputName('HasAccount')]
    public ?bool $hasAccount = null;

    /**
     * A boolean to indicate if a contact has an validation errors
     * @example false
     */
    #[MapName('HasValidationErrors')]
    #[MapOutputName('HasValidationErrors')]
    public ?bool $hasValidationErrors = null;

    /** A string to indicate if a invoice status */
    #[MapName('StatusAttributeString')]
    #[MapOutputName('StatusAttributeString')]
    public ?string $statusAttributeString = null;

    /** @var DataCollection<int, ValidationErrorsData> */
    #[MapName('ValidationErrors')]
    #[MapOutputName('ValidationErrors')]
    #[DataCollectionOf(ValidationErrorsData::class)]
    public ?DataCollection $validationErrors = null;

    public function setInvoice(mixed $invoice): ?self
    {
        $this->invoice = $invoice;
        return $this;
    }

    public function setCreditNote(mixed $creditNote): ?self
    {
        $this->creditNote = $creditNote;
        return $this;
    }

    public function setPrepayment(mixed $prepayment): ?self
    {
        $this->prepayment = $prepayment;
        return $this;
    }

    public function setOverpayment(mixed $overpayment): ?self
    {
        $this->overpayment = $overpayment;
        return $this;
    }

    /**
     * Number of invoice or credit note you are applying payment to e.g.INV-4003
     */
    public function setInvoiceNumber(?string $invoiceNumber): ?self
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * Number of invoice or credit note you are applying payment to e.g. INV-4003
     */
    public function setCreditNoteNumber(?string $creditNoteNumber): ?self
    {
        $this->creditNoteNumber = $creditNoteNumber;
        return $this;
    }

    public function setBatchPayment(mixed $batchPayment): ?self
    {
        $this->batchPayment = $batchPayment;
        return $this;
    }

    public function setAccount(mixed $account): ?self
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Code of account you are using to make the payment e.g. 001 (note- not all accounts have a code value)
     */
    public function setCode(?string $code): ?self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     */
    public function setDate(?string $date): ?self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Exchange rate when payment is received. Only used for non base currency invoices and credit notes e.g. 0.7500
     */
    public function setCurrencyRate(?int $currencyRate): ?self
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }

    /**
     * The amount of the payment. Must be less than or equal to the outstanding amount owing on the invoice e.g. 200.00
     */
    public function setAmount(?int $amount): ?self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * The amount of the payment in the currency of the bank account.
     */
    public function setBankAmount(?int $bankAmount): ?self
    {
        $this->bankAmount = $bankAmount;
        return $this;
    }

    /**
     * An optional description for the payment e.g. Direct Debit
     */
    public function setReference(?string $reference): ?self
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * An optional parameter for the payment. A boolean indicating whether you would like the payment to be created as reconciled when using PUT, or whether a payment has been reconciled when using GET
     */
    public function setIsReconciled(?bool $isReconciled): ?self
    {
        $this->isReconciled = $isReconciled;
        return $this;
    }

    /**
     * The status of the payment.
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * See Payment Types.
     */
    public function setPaymentType(?string $paymentType): ?self
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * UTC timestamp of last update to the payment
     */
    public function setUpdatedDateUTC(?string $updatedDateUTC): ?self
    {
        $this->updatedDateUTC = $updatedDateUTC;
        return $this;
    }

    /**
     * The Xero identifier for an Payment e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     */
    public function setPaymentID(?string $paymentID): ?self
    {
        $this->paymentID = $paymentID;
        return $this;
    }

    /**
     * Present if the payment was created as part of a batch.
     */
    public function setBatchPaymentID(?string $batchPaymentID): ?self
    {
        $this->batchPaymentID = $batchPaymentID;
        return $this;
    }

    /**
     * The suppliers bank account number the payment is being made to
     */
    public function setBankAccountNumber(?string $bankAccountNumber): ?self
    {
        $this->bankAccountNumber = $bankAccountNumber;
        return $this;
    }

    /**
     * The suppliers bank account number the payment is being made to
     */
    public function setParticulars(?string $particulars): ?self
    {
        $this->particulars = $particulars;
        return $this;
    }

    /**
     * The information to appear on the supplier's bank account
     */
    public function setDetails(?string $details): ?self
    {
        $this->details = $details;
        return $this;
    }

    /**
     * A boolean to indicate if a contact has an validation errors
     */
    public function setHasAccount(?bool $hasAccount): ?self
    {
        $this->hasAccount = $hasAccount;
        return $this;
    }

    /**
     * A boolean to indicate if a contact has an validation errors
     */
    public function setHasValidationErrors(?bool $hasValidationErrors): ?self
    {
        $this->hasValidationErrors = $hasValidationErrors;
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
     * @var DataCollection<int, ValidationErrorsData>
     */
    public function setValidationErrors(?DataCollection $validationErrors): ?self
    {
        $this->validationErrors = $validationErrors;
        return $this;
    }
}
