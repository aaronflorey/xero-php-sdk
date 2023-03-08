<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ManualJournalsData extends Data
{
    /** Description of journal being posted */
    #[MapName('Narration')]
    #[MapInputName('Narration')]
    public ?string $narration = null;

    /** @var DataCollection<int, JournalLinesData> */
    #[MapName('JournalLines')]
    #[MapInputName('JournalLines')]
    #[DataCollectionOf(JournalLinesData::class)]
    public ?DataCollection $journalLines = null;

    /** Date journal was posted – YYYY-MM-DD */
    #[MapName('Date')]
    #[MapInputName('Date')]
    public ?string $date = null;

    #[MapName('LineAmountTypes')]
    #[MapInputName('LineAmountTypes')]
    public ?string $lineAmountTypes = null;

    /** See Manual Journal Status Codes */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    /** Url link to a source document – shown as “Go to [appName]” in the Xero app */
    #[MapName('Url')]
    #[MapInputName('Url')]
    public ?string $url = null;

    /** Boolean – default is true if not specified */
    #[MapName('ShowOnCashBasisReports')]
    #[MapInputName('ShowOnCashBasisReports')]
    public ?bool $showOnCashBasisReports = null;

    /**
     * Boolean to indicate if a manual journal has an attachment
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

    /**
     * The Xero identifier for a Manual Journal
     * @format uuid
     */
    #[MapName('ManualJournalID')]
    #[MapInputName('ManualJournalID')]
    public ?string $manualJournalID = null;

    /**
     * A string to indicate if a invoice status
     * @example ERROR
     */
    #[MapName('StatusAttributeString')]
    #[MapInputName('StatusAttributeString')]
    public ?string $statusAttributeString = null;

    /** @var DataCollection<int, WarningsData> */
    #[MapName('Warnings')]
    #[MapInputName('Warnings')]
    #[DataCollectionOf(WarningsData::class)]
    public ?DataCollection $warnings = null;

    /** @var DataCollection<int, ValidationErrorsData> */
    #[MapName('ValidationErrors')]
    #[MapInputName('ValidationErrors')]
    #[DataCollectionOf(ValidationErrorsData::class)]
    public ?DataCollection $validationErrors = null;

    /** @var DataCollection<int, AttachmentsData> */
    #[MapName('Attachments')]
    #[MapInputName('Attachments')]
    #[DataCollectionOf(AttachmentsData::class)]
    public ?DataCollection $attachments = null;

    /**
     * Description of journal being posted
     * @return Description of journal being posted
     * @return Description of journal being posted
     * @return Description of journal being posted
     * @return Description of journal being posted
     * @return Description of journal being posted
     */
    public function getNarration(): ?string
    {
        return $this->narration;
    }

    /**
     * @return @var DataCollection<int, JournalLinesData>
     */
    public function getJournalLines(): ?DataCollection
    {
        return $this->journalLines;
    }

    /**
     * Date journal was posted – YYYY-MM-DD
     * @return Date journal was posted – YYYY-MM-DD
     * @return Date journal was posted – YYYY-MM-DD
     * @return Date journal was posted – YYYY-MM-DD
     * @return Date journal was posted – YYYY-MM-DD
     * @return Date journal was posted – YYYY-MM-DD
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    public function getLineAmountTypes(): ?string
    {
        return $this->lineAmountTypes;
    }

    /**
     * See Manual Journal Status Codes
     * @return See Manual Journal Status Codes
     * @return See Manual Journal Status Codes
     * @return See Manual Journal Status Codes
     * @return See Manual Journal Status Codes
     * @return See Manual Journal Status Codes
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Url link to a source document – shown as “Go to [appName]” in the Xero app
     * @return Url link to a source document – shown as “Go to [appName]” in the Xero app
     * @return Url link to a source document – shown as “Go to [appName]” in the Xero app
     * @return Url link to a source document – shown as “Go to [appName]” in the Xero app
     * @return Url link to a source document – shown as “Go to [appName]” in the Xero app
     * @return Url link to a source document – shown as “Go to [appName]” in the Xero app
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Boolean – default is true if not specified
     * @return Boolean – default is true if not specified
     * @return Boolean – default is true if not specified
     * @return Boolean – default is true if not specified
     * @return Boolean – default is true if not specified
     * @return Boolean – default is true if not specified
     */
    public function getShowOnCashBasisReports(): ?bool
    {
        return $this->showOnCashBasisReports;
    }

    /**
     * Boolean to indicate if a manual journal has an attachment
     * @return Boolean to indicate if a manual journal has an attachment
     * @example false
     * @return Boolean to indicate if a manual journal has an attachment
     * @example false
     * @return Boolean to indicate if a manual journal has an attachment
     * @example false
     * @return Boolean to indicate if a manual journal has an attachment
     * @example false
     * @return Boolean to indicate if a manual journal has an attachment
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
     */
    public function getUpdatedDateUTC(): ?string
    {
        return $this->updatedDateUTC;
    }

    /**
     * The Xero identifier for a Manual Journal
     * @return The Xero identifier for a Manual Journal
     * @format uuid
     * @return The Xero identifier for a Manual Journal
     * @format uuid
     * @return The Xero identifier for a Manual Journal
     * @format uuid
     * @return The Xero identifier for a Manual Journal
     * @format uuid
     * @return The Xero identifier for a Manual Journal
     * @format uuid
     */
    public function getManualJournalID(): ?string
    {
        return $this->manualJournalID;
    }

    /**
     * A string to indicate if a invoice status
     * @return A string to indicate if a invoice status
     * @example ERROR
     * @return A string to indicate if a invoice status
     * @example ERROR
     * @return A string to indicate if a invoice status
     * @example ERROR
     * @return A string to indicate if a invoice status
     * @example ERROR
     * @return A string to indicate if a invoice status
     * @example ERROR
     */
    public function getStatusAttributeString(): ?string
    {
        return $this->statusAttributeString;
    }

    /**
     * @return @var DataCollection<int, WarningsData>
     */
    public function getWarnings(): ?DataCollection
    {
        return $this->warnings;
    }

    /**
     * @return @var DataCollection<int, ValidationErrorsData>
     */
    public function getValidationErrors(): ?DataCollection
    {
        return $this->validationErrors;
    }

    /**
     * @return @var DataCollection<int, AttachmentsData>
     */
    public function getAttachments(): ?DataCollection
    {
        return $this->attachments;
    }

    /**
     * Description of journal being posted
     */
    public function setNarration(?string $narration): ?self
    {
        $this->narration = $narration;
        return $this;
    }

    /**
     * Date journal was posted – YYYY-MM-DD
     */
    public function setDate(?string $date): ?self
    {
        $this->date = $date;
        return $this;
    }

    public function setLineAmountTypes(?string $lineAmountTypes): ?self
    {
        $this->lineAmountTypes = $lineAmountTypes;
        return $this;
    }

    /**
     * See Manual Journal Status Codes
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Url link to a source document – shown as “Go to [appName]” in the Xero app
     */
    public function setUrl(?string $url): ?self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Boolean – default is true if not specified
     */
    public function setShowOnCashBasisReports(?bool $showOnCashBasisReports): ?self
    {
        $this->showOnCashBasisReports = $showOnCashBasisReports;
        return $this;
    }

    /**
     * Boolean to indicate if a manual journal has an attachment
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
     * The Xero identifier for a Manual Journal
     * @format uuid
     */
    public function setManualJournalID(?string $manualJournalID): ?self
    {
        $this->manualJournalID = $manualJournalID;
        return $this;
    }

    /**
     * A string to indicate if a invoice status
     * @example ERROR
     */
    public function setStatusAttributeString(?string $statusAttributeString): ?self
    {
        $this->statusAttributeString = $statusAttributeString;
        return $this;
    }
}
