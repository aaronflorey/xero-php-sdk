<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class JournalLinesData extends Data
{
    /**
     * Xero identifier for Journal
     * @format uuid
     * @example 7be9db36-3598-4755-ba5c-c2dbc8c4a7a2
     */
    #[MapName('JournalLineID')]
    #[MapInputName('JournalLineID')]
    public ?string $journalLineID = null;

    /**
     * See Accounts
     * @format uuid
     * @example ceef66a5-a545-413b-9312-78a53caadbc4
     */
    #[MapName('AccountID')]
    #[MapInputName('AccountID')]
    public ?string $accountID = null;

    /**
     * See Accounts
     * @example 090
     * @example 720
     */
    #[MapName('AccountCode')]
    #[MapInputName('AccountCode')]
    public ?string $accountCode = null;

    #[MapName('AccountType')]
    #[MapInputName('AccountType')]
    public ?string $accountType = null;

    /**
     * See AccountCodes
     * @example Checking Account
     */
    #[MapName('AccountName')]
    #[MapInputName('AccountName')]
    public ?string $accountName = null;

    /**
     * The description from the source transaction line item. Only returned if populated.
     * @example My business checking account
     * Description for journal line
     * @example Coded incorrectly Office Equipment should be Computer Equipment
     */
    #[MapName('Description')]
    #[MapInputName('Description')]
    public ?string $description = null;

    /**
     * Net amount of journal line. This will be a positive value for a debit and negative for a credit
     * @format double
     * @example 4130.98
     */
    #[MapName('NetAmount')]
    #[MapInputName('NetAmount')]
    public ?int $netAmount = null;

    /**
     * Gross amount of journal line (NetAmount + TaxAmount).
     * @format double
     * @example 4130.98
     */
    #[MapName('GrossAmount')]
    #[MapInputName('GrossAmount')]
    public ?int $grossAmount = null;

    /**
     * Total tax on a journal line
     * @format double
     * The calculated tax amount based on the TaxType and LineAmount
     */
    #[MapName('TaxAmount')]
    #[MapInputName('TaxAmount')]
    public ?int $taxAmount = null;

    /**
     * The tax type from taxRates
     * The tax type from TaxRates
     */
    #[MapName('TaxType')]
    #[MapInputName('TaxType')]
    public ?string $taxType = null;

    /**
     * see TaxRates
     * @example Tax Exempt
     */
    #[MapName('TaxName')]
    #[MapInputName('TaxName')]
    public ?string $taxName = null;

    /** @var DataCollection<int, TrackingCategoriesData> */
    #[MapName('TrackingCategories')]
    #[MapInputName('TrackingCategories')]
    #[DataCollectionOf(TrackingCategoriesData::class)]
    public ?DataCollection $trackingCategories = null;

    /**
     * total for line. Debits are positive, credits are negative value
     * @format double
     * @example -2569
     */
    #[MapName('LineAmount')]
    #[MapInputName('LineAmount')]
    public ?int $lineAmount = null;

    /** @var DataCollection<int, TrackingData> */
    #[MapName('Tracking')]
    #[MapInputName('Tracking')]
    #[DataCollectionOf(TrackingData::class)]
    public ?DataCollection $tracking = null;

    /** is the line blank */
    #[MapName('IsBlank')]
    #[MapInputName('IsBlank')]
    public ?bool $isBlank = null;

    /**
     * Xero identifier for Journal
     * @return Xero identifier for Journal
     * @format uuid
     * @example 7be9db36-3598-4755-ba5c-c2dbc8c4a7a2
     */
    public function getJournalLineID(): ?string
    {
        return $this->journalLineID;
    }

    /**
     * See Accounts
     * @return See Accounts
     * @format uuid
     * @example ceef66a5-a545-413b-9312-78a53caadbc4
     * @return See Accounts
     * @format uuid
     * @example ceef66a5-a545-413b-9312-78a53caadbc4
     */
    public function getAccountID(): ?string
    {
        return $this->accountID;
    }

    /**
     * See Accounts
     * @return See Accounts
     * @example 090
     * @return See Accounts
     * @example 090
     */
    public function getAccountCode(): ?string
    {
        return $this->accountCode;
    }

    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * See AccountCodes
     * @return See AccountCodes
     * @example Checking Account
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * The description from the source transaction line item. Only returned if populated.
     * @return The description from the source transaction line item. Only returned if populated.
     * @example My business checking account
     * @return The description from the source transaction line item. Only returned if populated.
     * @example My business checking account
     * Description for journal line
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Net amount of journal line. This will be a positive value for a debit and negative for a credit
     * @return Net amount of journal line. This will be a positive value for a debit and negative for a credit
     * @format double
     * @example 4130.98
     */
    public function getNetAmount(): ?int
    {
        return $this->netAmount;
    }

    /**
     * Gross amount of journal line (NetAmount + TaxAmount).
     * @return Gross amount of journal line (NetAmount + TaxAmount).
     * @format double
     * @example 4130.98
     */
    public function getGrossAmount(): ?int
    {
        return $this->grossAmount;
    }

    /**
     * Total tax on a journal line
     * @return Total tax on a journal line
     * @format double
     * @return Total tax on a journal line
     * @format double
     * The calculated tax amount based on the TaxType and LineAmount
     */
    public function getTaxAmount(): ?int
    {
        return $this->taxAmount;
    }

    /**
     * The tax type from taxRates
     * @return The tax type from taxRates
     * @return The tax type from taxRates
     * The tax type from TaxRates
     */
    public function getTaxType(): ?string
    {
        return $this->taxType;
    }

    /**
     * see TaxRates
     * @return see TaxRates
     * @example Tax Exempt
     */
    public function getTaxName(): ?string
    {
        return $this->taxName;
    }

    /**
     * @return @var DataCollection<int, TrackingCategoriesData>
     */
    public function getTrackingCategories(): ?DataCollection
    {
        return $this->trackingCategories;
    }

    /**
     * total for line. Debits are positive, credits are negative value
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
     * is the line blank
     */
    public function getIsBlank(): ?bool
    {
        return $this->isBlank;
    }
}
