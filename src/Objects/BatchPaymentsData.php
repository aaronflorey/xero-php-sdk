<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class BatchPaymentsData extends Data
{
    #[MapName('Account')]
    #[MapInputName('Account')]
    public mixed $account = null;

    /** (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero. */
    #[MapName('Reference')]
    #[MapInputName('Reference')]
    public ?string $reference = null;

    /** (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero. */
    #[MapName('Particulars')]
    #[MapInputName('Particulars')]
    public ?string $particulars = null;

    /** (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero. */
    #[MapName('Code')]
    #[MapInputName('Code')]
    public ?string $code = null;

    /** (Non-NZ Only) These details are sent to the org’s bank as a reference for the batch payment transaction. They will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement imported into Xero. Maximum field length = 18 */
    #[MapName('Details')]
    #[MapInputName('Details')]
    public ?string $details = null;

    /** (UK Only) Only shows on the statement line in Xero. Max length =18 */
    #[MapName('Narrative')]
    #[MapInputName('Narrative')]
    public ?string $narrative = null;

    /**
     * The Xero generated unique identifier for the bank transaction (read-only)
     * @format uuid
     */
    #[MapName('BatchPaymentID')]
    #[MapInputName('BatchPaymentID')]
    public ?string $batchPaymentID = null;

    /** Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06 */
    #[MapName('DateString')]
    #[MapInputName('DateString')]
    public ?string $dateString = null;

    /** Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06 */
    #[MapName('Date')]
    #[MapInputName('Date')]
    public ?string $date = null;

    /**
     * The amount of the payment. Must be less than or equal to the outstanding amount owing on the invoice e.g. 200.00
     * @format double
     */
    #[MapName('Amount')]
    #[MapInputName('Amount')]
    public ?int $amount = null;

    /** @var DataCollection<int, PaymentsData> */
    #[MapName('Payments')]
    #[MapInputName('Payments')]
    #[DataCollectionOf(PaymentsData::class)]
    public ?DataCollection $payments = null;

    /** PAYBATCH for bill payments or RECBATCH for sales invoice payments (read-only) */
    #[MapName('Type')]
    #[MapInputName('Type')]
    public ?string $type = null;

    /** AUTHORISED or DELETED (read-only). New batch payments will have a status of AUTHORISED. It is not possible to delete batch payments via the API. */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    /**
     * The total of the payments that make up the batch (read-only)
     * @format double
     */
    #[MapName('TotalAmount')]
    #[MapInputName('TotalAmount')]
    public ?int $totalAmount = null;

    /**
     * UTC timestamp of last update to the payment
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /** Booelan that tells you if the batch payment has been reconciled (read-only) */
    #[MapName('IsReconciled')]
    #[MapInputName('IsReconciled')]
    public ?bool $isReconciled = null;

    /** @var DataCollection<int, ValidationErrorsData> */
    #[MapName('ValidationErrors')]
    #[MapInputName('ValidationErrors')]
    #[DataCollectionOf(ValidationErrorsData::class)]
    public ?DataCollection $validationErrors = null;

    public function getAccount(): mixed
    {
        return $this->account;
    }

    /**
     * (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     */
    public function getParticulars(): ?string
    {
        return $this->particulars;
    }

    /**
     * (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     * @return (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * (Non-NZ Only) These details are sent to the org’s bank as a reference for the batch payment transaction. They will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement imported into Xero. Maximum field length = 18
     * @return (Non-NZ Only) These details are sent to the org’s bank as a reference for the batch payment transaction. They will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement imported into Xero. Maximum field length = 18
     * @return (Non-NZ Only) These details are sent to the org’s bank as a reference for the batch payment transaction. They will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement imported into Xero. Maximum field length = 18
     * @return (Non-NZ Only) These details are sent to the org’s bank as a reference for the batch payment transaction. They will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement imported into Xero. Maximum field length = 18
     * @return (Non-NZ Only) These details are sent to the org’s bank as a reference for the batch payment transaction. They will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement imported into Xero. Maximum field length = 18
     * @return (Non-NZ Only) These details are sent to the org’s bank as a reference for the batch payment transaction. They will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement imported into Xero. Maximum field length = 18
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * (UK Only) Only shows on the statement line in Xero. Max length =18
     * @return (UK Only) Only shows on the statement line in Xero. Max length =18
     * @return (UK Only) Only shows on the statement line in Xero. Max length =18
     * @return (UK Only) Only shows on the statement line in Xero. Max length =18
     * @return (UK Only) Only shows on the statement line in Xero. Max length =18
     * @return (UK Only) Only shows on the statement line in Xero. Max length =18
     */
    public function getNarrative(): ?string
    {
        return $this->narrative;
    }

    /**
     * The Xero generated unique identifier for the bank transaction (read-only)
     * @return The Xero generated unique identifier for the bank transaction (read-only)
     * @format uuid
     * @return The Xero generated unique identifier for the bank transaction (read-only)
     * @format uuid
     * @return The Xero generated unique identifier for the bank transaction (read-only)
     * @format uuid
     * @return The Xero generated unique identifier for the bank transaction (read-only)
     * @format uuid
     * @return The Xero generated unique identifier for the bank transaction (read-only)
     * @format uuid
     */
    public function getBatchPaymentID(): ?string
    {
        return $this->batchPaymentID;
    }

    /**
     * Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     * @return Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     * @return Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     * @return Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     * @return Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     * @return Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     */
    public function getDateString(): ?string
    {
        return $this->dateString;
    }

    /**
     * Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     * @return Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     * @return Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     * @return Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     * @return Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     * @return Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * The amount of the payment. Must be less than or equal to the outstanding amount owing on the invoice e.g. 200.00
     * @return The amount of the payment. Must be less than or equal to the outstanding amount owing on the invoice e.g. 200.00
     * @format double
     * @return The amount of the payment. Must be less than or equal to the outstanding amount owing on the invoice e.g. 200.00
     * @format double
     * @return The amount of the payment. Must be less than or equal to the outstanding amount owing on the invoice e.g. 200.00
     * @format double
     * @return The amount of the payment. Must be less than or equal to the outstanding amount owing on the invoice e.g. 200.00
     * @format double
     * @return The amount of the payment. Must be less than or equal to the outstanding amount owing on the invoice e.g. 200.00
     * @format double
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @return @var DataCollection<int, PaymentsData>
     */
    public function getPayments(): ?DataCollection
    {
        return $this->payments;
    }

    /**
     * PAYBATCH for bill payments or RECBATCH for sales invoice payments (read-only)
     * @return PAYBATCH for bill payments or RECBATCH for sales invoice payments (read-only)
     * @return PAYBATCH for bill payments or RECBATCH for sales invoice payments (read-only)
     * @return PAYBATCH for bill payments or RECBATCH for sales invoice payments (read-only)
     * @return PAYBATCH for bill payments or RECBATCH for sales invoice payments (read-only)
     * @return PAYBATCH for bill payments or RECBATCH for sales invoice payments (read-only)
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * AUTHORISED or DELETED (read-only). New batch payments will have a status of AUTHORISED. It is not possible to delete batch payments via the API.
     * @return AUTHORISED or DELETED (read-only). New batch payments will have a status of AUTHORISED. It is not possible to delete batch payments via the API.
     * @return AUTHORISED or DELETED (read-only). New batch payments will have a status of AUTHORISED. It is not possible to delete batch payments via the API.
     * @return AUTHORISED or DELETED (read-only). New batch payments will have a status of AUTHORISED. It is not possible to delete batch payments via the API.
     * @return AUTHORISED or DELETED (read-only). New batch payments will have a status of AUTHORISED. It is not possible to delete batch payments via the API.
     * @return AUTHORISED or DELETED (read-only). New batch payments will have a status of AUTHORISED. It is not possible to delete batch payments via the API.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The total of the payments that make up the batch (read-only)
     * @return The total of the payments that make up the batch (read-only)
     * @format double
     * @return The total of the payments that make up the batch (read-only)
     * @format double
     * @return The total of the payments that make up the batch (read-only)
     * @format double
     * @return The total of the payments that make up the batch (read-only)
     * @format double
     * @return The total of the payments that make up the batch (read-only)
     * @format double
     */
    public function getTotalAmount(): ?int
    {
        return $this->totalAmount;
    }

    /**
     * UTC timestamp of last update to the payment
     * @return UTC timestamp of last update to the payment
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to the payment
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to the payment
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to the payment
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to the payment
     * @example /Date(1573755038314)/
     */
    public function getUpdatedDateUTC(): ?string
    {
        return $this->updatedDateUTC;
    }

    /**
     * Booelan that tells you if the batch payment has been reconciled (read-only)
     * @return Booelan that tells you if the batch payment has been reconciled (read-only)
     * @return Booelan that tells you if the batch payment has been reconciled (read-only)
     * @return Booelan that tells you if the batch payment has been reconciled (read-only)
     * @return Booelan that tells you if the batch payment has been reconciled (read-only)
     * @return Booelan that tells you if the batch payment has been reconciled (read-only)
     */
    public function getIsReconciled(): ?bool
    {
        return $this->isReconciled;
    }

    /**
     * @return @var DataCollection<int, ValidationErrorsData>
     */
    public function getValidationErrors(): ?DataCollection
    {
        return $this->validationErrors;
    }

    public function setAccount(mixed $account): ?self
    {
        $this->account = $account;
        return $this;
    }

    /**
     * (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     */
    public function setReference(?string $reference): ?self
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     */
    public function setParticulars(?string $particulars): ?self
    {
        $this->particulars = $particulars;
        return $this;
    }

    /**
     * (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     */
    public function setCode(?string $code): ?self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * (Non-NZ Only) These details are sent to the org’s bank as a reference for the batch payment transaction. They will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement imported into Xero. Maximum field length = 18
     */
    public function setDetails(?string $details): ?self
    {
        $this->details = $details;
        return $this;
    }

    /**
     * (UK Only) Only shows on the statement line in Xero. Max length =18
     */
    public function setNarrative(?string $narrative): ?self
    {
        $this->narrative = $narrative;
        return $this;
    }

    /**
     * The Xero generated unique identifier for the bank transaction (read-only)
     * @format uuid
     */
    public function setBatchPaymentID(?string $batchPaymentID): ?self
    {
        $this->batchPaymentID = $batchPaymentID;
        return $this;
    }

    /**
     * Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     */
    public function setDateString(?string $dateString): ?self
    {
        $this->dateString = $dateString;
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
     * The amount of the payment. Must be less than or equal to the outstanding amount owing on the invoice e.g. 200.00
     * @format double
     */
    public function setAmount(?int $amount): ?self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * PAYBATCH for bill payments or RECBATCH for sales invoice payments (read-only)
     */
    public function setType(?string $type): ?self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * AUTHORISED or DELETED (read-only). New batch payments will have a status of AUTHORISED. It is not possible to delete batch payments via the API.
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The total of the payments that make up the batch (read-only)
     * @format double
     */
    public function setTotalAmount(?int $totalAmount): ?self
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * UTC timestamp of last update to the payment
     * @example /Date(1573755038314)/
     */
    public function setUpdatedDateUTC(?string $updatedDateUTC): ?self
    {
        $this->updatedDateUTC = $updatedDateUTC;
        return $this;
    }

    /**
     * Booelan that tells you if the batch payment has been reconciled (read-only)
     */
    public function setIsReconciled(?bool $isReconciled): ?self
    {
        $this->isReconciled = $isReconciled;
        return $this;
    }
}
