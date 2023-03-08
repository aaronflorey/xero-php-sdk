<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class AttachmentsData extends Data
{
    /**
     * Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    #[MapName('AttachmentID')]
    #[MapInputName('AttachmentID')]
    public ?string $attachmentID = null;

    /**
     * Name of the file
     * @example xero-dev.jpg
     */
    #[MapName('FileName')]
    #[MapInputName('FileName')]
    public ?string $fileName = null;

    /**
     * URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     */
    #[MapName('Url')]
    #[MapInputName('Url')]
    public ?string $url = null;

    /**
     * Type of file
     * @example image/jpg
     */
    #[MapName('MimeType')]
    #[MapInputName('MimeType')]
    public ?string $mimeType = null;

    /** Length of the file content */
    #[MapName('ContentLength')]
    #[MapInputName('ContentLength')]
    public ?int $contentLength = null;

    /** Include the file with the online invoice */
    #[MapName('IncludeOnline')]
    #[MapInputName('IncludeOnline')]
    public ?bool $includeOnline = null;

    /**
     * Unique ID for the file
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return Unique ID for the file
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    public function getAttachmentID(): ?string
    {
        return $this->attachmentID;
    }

    /**
     * Name of the file
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     * @return Name of the file
     * @example xero-dev.jpg
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * URL to the file on xero.com
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     * @return URL to the file on xero.com
     * @example https://api.xero.com/api.xro/2.0/Accounts/da962997-a8bd-4dff-9616-01cdc199283f/Attachments/sample5.jpg
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Type of file
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     * @return Type of file
     * @example image/jpg
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    /**
     * Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     * @return Length of the file content
     */
    public function getContentLength(): ?int
    {
        return $this->contentLength;
    }

    /**
     * Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     * @return Include the file with the online invoice
     */
    public function getIncludeOnline(): ?bool
    {
        return $this->includeOnline;
    }
}
