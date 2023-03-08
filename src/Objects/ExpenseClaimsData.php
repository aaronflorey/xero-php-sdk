<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ExpenseClaimsData extends Data
{
    /**
     * Xero generated unique identifier for an expense claim
     * @format uuid
     */
    #[MapName('ExpenseClaimID')]
    #[MapInputName('ExpenseClaimID')]
    public ?string $expenseClaimID = null;

    /** Current status of an expense claim – see status types */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    /** @var DataCollection<int, PaymentsData> */
    #[MapName('Payments')]
    #[MapInputName('Payments')]
    #[DataCollectionOf(PaymentsData::class)]
    public ?DataCollection $payments = null;

    #[MapName('User')]
    #[MapInputName('User')]
    public mixed $user = null;

    /** @var DataCollection<int, ReceiptsData> */
    #[MapName('Receipts')]
    #[MapInputName('Receipts')]
    #[DataCollectionOf(ReceiptsData::class)]
    public ?DataCollection $receipts = null;

    /**
     * Last modified date UTC format
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /**
     * The total of an expense claim being paid
     * @format double
     */
    #[MapName('Total')]
    #[MapInputName('Total')]
    public ?int $total = null;

    /**
     * The amount due to be paid for an expense claim
     * @format double
     */
    #[MapName('AmountDue')]
    #[MapInputName('AmountDue')]
    public ?int $amountDue = null;

    /**
     * The amount still to pay for an expense claim
     * @format double
     */
    #[MapName('AmountPaid')]
    #[MapInputName('AmountPaid')]
    public ?int $amountPaid = null;

    /** The date when the expense claim is due to be paid YYYY-MM-DD */
    #[MapName('PaymentDueDate')]
    #[MapInputName('PaymentDueDate')]
    public ?string $paymentDueDate = null;

    /** The date the expense claim will be reported in Xero YYYY-MM-DD */
    #[MapName('ReportingDate')]
    #[MapInputName('ReportingDate')]
    public ?string $reportingDate = null;

    /**
     * The Xero identifier for the Receipt e.g. e59a2c7f-1306-4078-a0f3-73537afcbba9
     * @format uuid
     */
    #[MapName('ReceiptID')]
    #[MapInputName('ReceiptID')]
    public ?string $receiptID = null;

    /**
     * Xero generated unique identifier for an expense claim
     * @return Xero generated unique identifier for an expense claim
     * @format uuid
     * @return Xero generated unique identifier for an expense claim
     * @format uuid
     * @return Xero generated unique identifier for an expense claim
     * @format uuid
     * @return Xero generated unique identifier for an expense claim
     * @format uuid
     */
    public function getExpenseClaimID(): ?string
    {
        return $this->expenseClaimID;
    }

    /**
     * Current status of an expense claim – see status types
     * @return Current status of an expense claim – see status types
     * @return Current status of an expense claim – see status types
     * @return Current status of an expense claim – see status types
     * @return Current status of an expense claim – see status types
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return @var DataCollection<int, PaymentsData>
     */
    public function getPayments(): ?DataCollection
    {
        return $this->payments;
    }

    public function getUser(): mixed
    {
        return $this->user;
    }

    /**
     * @return @var DataCollection<int, ReceiptsData>
     */
    public function getReceipts(): ?DataCollection
    {
        return $this->receipts;
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
     */
    public function getUpdatedDateUTC(): ?string
    {
        return $this->updatedDateUTC;
    }

    /**
     * The total of an expense claim being paid
     * @return The total of an expense claim being paid
     * @format double
     * @return The total of an expense claim being paid
     * @format double
     * @return The total of an expense claim being paid
     * @format double
     * @return The total of an expense claim being paid
     * @format double
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * The amount due to be paid for an expense claim
     * @return The amount due to be paid for an expense claim
     * @format double
     * @return The amount due to be paid for an expense claim
     * @format double
     * @return The amount due to be paid for an expense claim
     * @format double
     * @return The amount due to be paid for an expense claim
     * @format double
     */
    public function getAmountDue(): ?int
    {
        return $this->amountDue;
    }

    /**
     * The amount still to pay for an expense claim
     * @return The amount still to pay for an expense claim
     * @format double
     * @return The amount still to pay for an expense claim
     * @format double
     * @return The amount still to pay for an expense claim
     * @format double
     * @return The amount still to pay for an expense claim
     * @format double
     */
    public function getAmountPaid(): ?int
    {
        return $this->amountPaid;
    }

    /**
     * The date when the expense claim is due to be paid YYYY-MM-DD
     * @return The date when the expense claim is due to be paid YYYY-MM-DD
     * @return The date when the expense claim is due to be paid YYYY-MM-DD
     * @return The date when the expense claim is due to be paid YYYY-MM-DD
     * @return The date when the expense claim is due to be paid YYYY-MM-DD
     */
    public function getPaymentDueDate(): ?string
    {
        return $this->paymentDueDate;
    }

    /**
     * The date the expense claim will be reported in Xero YYYY-MM-DD
     * @return The date the expense claim will be reported in Xero YYYY-MM-DD
     * @return The date the expense claim will be reported in Xero YYYY-MM-DD
     * @return The date the expense claim will be reported in Xero YYYY-MM-DD
     * @return The date the expense claim will be reported in Xero YYYY-MM-DD
     */
    public function getReportingDate(): ?string
    {
        return $this->reportingDate;
    }

    /**
     * The Xero identifier for the Receipt e.g. e59a2c7f-1306-4078-a0f3-73537afcbba9
     * @return The Xero identifier for the Receipt e.g. e59a2c7f-1306-4078-a0f3-73537afcbba9
     * @format uuid
     * @return The Xero identifier for the Receipt e.g. e59a2c7f-1306-4078-a0f3-73537afcbba9
     * @format uuid
     * @return The Xero identifier for the Receipt e.g. e59a2c7f-1306-4078-a0f3-73537afcbba9
     * @format uuid
     * @return The Xero identifier for the Receipt e.g. e59a2c7f-1306-4078-a0f3-73537afcbba9
     * @format uuid
     */
    public function getReceiptID(): ?string
    {
        return $this->receiptID;
    }

    /**
     * Xero generated unique identifier for an expense claim
     * @format uuid
     */
    public function setExpenseClaimID(?string $expenseClaimID): ?self
    {
        $this->expenseClaimID = $expenseClaimID;
        return $this;
    }

    /**
     * Current status of an expense claim – see status types
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    public function setUser(mixed $user): ?self
    {
        $this->user = $user;
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
     * The total of an expense claim being paid
     * @format double
     */
    public function setTotal(?int $total): ?self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * The amount due to be paid for an expense claim
     * @format double
     */
    public function setAmountDue(?int $amountDue): ?self
    {
        $this->amountDue = $amountDue;
        return $this;
    }

    /**
     * The amount still to pay for an expense claim
     * @format double
     */
    public function setAmountPaid(?int $amountPaid): ?self
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }

    /**
     * The date when the expense claim is due to be paid YYYY-MM-DD
     */
    public function setPaymentDueDate(?string $paymentDueDate): ?self
    {
        $this->paymentDueDate = $paymentDueDate;
        return $this;
    }

    /**
     * The date the expense claim will be reported in Xero YYYY-MM-DD
     */
    public function setReportingDate(?string $reportingDate): ?self
    {
        $this->reportingDate = $reportingDate;
        return $this;
    }

    /**
     * The Xero identifier for the Receipt e.g. e59a2c7f-1306-4078-a0f3-73537afcbba9
     * @format uuid
     */
    public function setReceiptID(?string $receiptID): ?self
    {
        $this->receiptID = $receiptID;
        return $this;
    }
}
