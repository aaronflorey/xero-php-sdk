<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class JournalsData extends Data
{
    /**
     * Xero identifier
     * @format uuid
     */
    #[MapName('JournalID')]
    #[MapInputName('JournalID')]
    public ?string $journalID = null;

    /** Date the journal was posted */
    #[MapName('JournalDate')]
    #[MapInputName('JournalDate')]
    public ?string $journalDate = null;

    /** Xero generated journal number */
    #[MapName('JournalNumber')]
    #[MapInputName('JournalNumber')]
    public ?int $journalNumber = null;

    /**
     * Created date UTC format
     * @example /Date(1573755038314)/
     */
    #[MapName('CreatedDateUTC')]
    #[MapInputName('CreatedDateUTC')]
    public ?string $createdDateUTC = null;

    /** reference field for additional indetifying information */
    #[MapName('Reference')]
    #[MapInputName('Reference')]
    public ?string $reference = null;

    /**
     * The identifier for the source transaction (e.g. InvoiceID)
     * @format uuid
     */
    #[MapName('SourceID')]
    #[MapInputName('SourceID')]
    public ?string $sourceID = null;

    /** The journal source type. The type of transaction that created the journal */
    #[MapName('SourceType')]
    #[MapInputName('SourceType')]
    public ?string $sourceType = null;

    /** @var DataCollection<int, JournalLinesData> */
    #[MapName('JournalLines')]
    #[MapInputName('JournalLines')]
    #[DataCollectionOf(JournalLinesData::class)]
    public ?DataCollection $journalLines = null;

    /**
     * Xero identifier
     * @return Xero identifier
     * @format uuid
     * @return Xero identifier
     * @format uuid
     * @return Xero identifier
     * @format uuid
     */
    public function getJournalID(): ?string
    {
        return $this->journalID;
    }

    /**
     * Date the journal was posted
     * @return Date the journal was posted
     * @return Date the journal was posted
     * @return Date the journal was posted
     */
    public function getJournalDate(): ?string
    {
        return $this->journalDate;
    }

    /**
     * Xero generated journal number
     * @return Xero generated journal number
     * @return Xero generated journal number
     * @return Xero generated journal number
     */
    public function getJournalNumber(): ?int
    {
        return $this->journalNumber;
    }

    /**
     * Created date UTC format
     * @return Created date UTC format
     * @example /Date(1573755038314)/
     * @return Created date UTC format
     * @example /Date(1573755038314)/
     * @return Created date UTC format
     * @example /Date(1573755038314)/
     */
    public function getCreatedDateUTC(): ?string
    {
        return $this->createdDateUTC;
    }

    /**
     * reference field for additional indetifying information
     * @return reference field for additional indetifying information
     * @return reference field for additional indetifying information
     * @return reference field for additional indetifying information
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * The identifier for the source transaction (e.g. InvoiceID)
     * @return The identifier for the source transaction (e.g. InvoiceID)
     * @format uuid
     * @return The identifier for the source transaction (e.g. InvoiceID)
     * @format uuid
     * @return The identifier for the source transaction (e.g. InvoiceID)
     * @format uuid
     */
    public function getSourceID(): ?string
    {
        return $this->sourceID;
    }

    /**
     * The journal source type. The type of transaction that created the journal
     * @return The journal source type. The type of transaction that created the journal
     * @return The journal source type. The type of transaction that created the journal
     * @return The journal source type. The type of transaction that created the journal
     */
    public function getSourceType(): ?string
    {
        return $this->sourceType;
    }

    /**
     * @return @var DataCollection<int, JournalLinesData>
     */
    public function getJournalLines(): ?DataCollection
    {
        return $this->journalLines;
    }
}
