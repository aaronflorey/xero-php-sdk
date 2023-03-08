<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ItemsData extends Data
{
    /** User defined item code (max length = 30) */
    #[MapName('Code')]
    #[MapInputName('Code')]
    public ?string $code = null;

    /** The inventory asset account for the item. The account must be of type INVENTORY. The  COGSAccountCode in PurchaseDetails is also required to create a tracked item */
    #[MapName('InventoryAssetAccountCode')]
    #[MapInputName('InventoryAssetAccountCode')]
    public ?string $inventoryAssetAccountCode = null;

    /** The name of the item (max length = 50) */
    #[MapName('Name')]
    #[MapInputName('Name')]
    public ?string $name = null;

    /** Boolean value, defaults to true. When IsSold is true the item will be available on sales transactions in the Xero UI. If IsSold is updated to false then Description and SalesDetails values will be nulled. */
    #[MapName('IsSold')]
    #[MapInputName('IsSold')]
    public ?bool $isSold = null;

    /** Boolean value, defaults to true. When IsPurchased is true the item is available for purchase transactions in the Xero UI. If IsPurchased is updated to false then PurchaseDescription and PurchaseDetails values will be nulled. */
    #[MapName('IsPurchased')]
    #[MapInputName('IsPurchased')]
    public ?bool $isPurchased = null;

    /** The sales description of the item (max length = 4000) */
    #[MapName('Description')]
    #[MapInputName('Description')]
    public ?string $description = null;

    /** The purchase description of the item (max length = 4000) */
    #[MapName('PurchaseDescription')]
    #[MapInputName('PurchaseDescription')]
    public ?string $purchaseDescription = null;

    #[MapName('PurchaseDetails')]
    #[MapInputName('PurchaseDetails')]
    public mixed $purchaseDetails = null;

    #[MapName('SalesDetails')]
    #[MapInputName('SalesDetails')]
    public mixed $salesDetails = null;

    /** True for items that are tracked as inventory. An item will be tracked as inventory if the InventoryAssetAccountCode and COGSAccountCode are set. */
    #[MapName('IsTrackedAsInventory')]
    #[MapInputName('IsTrackedAsInventory')]
    public ?bool $isTrackedAsInventory = null;

    /**
     * The value of the item on hand. Calculated using average cost accounting.
     * @format double
     */
    #[MapName('TotalCostPool')]
    #[MapInputName('TotalCostPool')]
    public ?int $totalCostPool = null;

    /**
     * The quantity of the item on hand
     * @format double
     */
    #[MapName('QuantityOnHand')]
    #[MapInputName('QuantityOnHand')]
    public ?int $quantityOnHand = null;

    /**
     * Last modified date in UTC format
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /**
     * The Xero identifier for an Item
     * @format uuid
     */
    #[MapName('ItemID')]
    #[MapInputName('ItemID')]
    public ?string $itemID = null;

    /** Status of object */
    #[MapName('StatusAttributeString')]
    #[MapInputName('StatusAttributeString')]
    public ?string $statusAttributeString = null;

    /** @var DataCollection<int, ValidationErrorsData> */
    #[MapName('ValidationErrors')]
    #[MapInputName('ValidationErrors')]
    #[DataCollectionOf(ValidationErrorsData::class)]
    public ?DataCollection $validationErrors = null;

    /**
     * User defined item code (max length = 30)
     * @return User defined item code (max length = 30)
     * @return User defined item code (max length = 30)
     * @return User defined item code (max length = 30)
     * @return User defined item code (max length = 30)
     * @return User defined item code (max length = 30)
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The inventory asset account for the item. The account must be of type INVENTORY. The  COGSAccountCode in PurchaseDetails is also required to create a tracked item
     * @return The inventory asset account for the item. The account must be of type INVENTORY. The  COGSAccountCode in PurchaseDetails is also required to create a tracked item
     * @return The inventory asset account for the item. The account must be of type INVENTORY. The  COGSAccountCode in PurchaseDetails is also required to create a tracked item
     * @return The inventory asset account for the item. The account must be of type INVENTORY. The  COGSAccountCode in PurchaseDetails is also required to create a tracked item
     * @return The inventory asset account for the item. The account must be of type INVENTORY. The  COGSAccountCode in PurchaseDetails is also required to create a tracked item
     * @return The inventory asset account for the item. The account must be of type INVENTORY. The  COGSAccountCode in PurchaseDetails is also required to create a tracked item
     */
    public function getInventoryAssetAccountCode(): ?string
    {
        return $this->inventoryAssetAccountCode;
    }

    /**
     * The name of the item (max length = 50)
     * @return The name of the item (max length = 50)
     * @return The name of the item (max length = 50)
     * @return The name of the item (max length = 50)
     * @return The name of the item (max length = 50)
     * @return The name of the item (max length = 50)
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Boolean value, defaults to true. When IsSold is true the item will be available on sales transactions in the Xero UI. If IsSold is updated to false then Description and SalesDetails values will be nulled.
     * @return Boolean value, defaults to true. When IsSold is true the item will be available on sales transactions in the Xero UI. If IsSold is updated to false then Description and SalesDetails values will be nulled.
     * @return Boolean value, defaults to true. When IsSold is true the item will be available on sales transactions in the Xero UI. If IsSold is updated to false then Description and SalesDetails values will be nulled.
     * @return Boolean value, defaults to true. When IsSold is true the item will be available on sales transactions in the Xero UI. If IsSold is updated to false then Description and SalesDetails values will be nulled.
     * @return Boolean value, defaults to true. When IsSold is true the item will be available on sales transactions in the Xero UI. If IsSold is updated to false then Description and SalesDetails values will be nulled.
     * @return Boolean value, defaults to true. When IsSold is true the item will be available on sales transactions in the Xero UI. If IsSold is updated to false then Description and SalesDetails values will be nulled.
     */
    public function getIsSold(): ?bool
    {
        return $this->isSold;
    }

    /**
     * Boolean value, defaults to true. When IsPurchased is true the item is available for purchase transactions in the Xero UI. If IsPurchased is updated to false then PurchaseDescription and PurchaseDetails values will be nulled.
     * @return Boolean value, defaults to true. When IsPurchased is true the item is available for purchase transactions in the Xero UI. If IsPurchased is updated to false then PurchaseDescription and PurchaseDetails values will be nulled.
     * @return Boolean value, defaults to true. When IsPurchased is true the item is available for purchase transactions in the Xero UI. If IsPurchased is updated to false then PurchaseDescription and PurchaseDetails values will be nulled.
     * @return Boolean value, defaults to true. When IsPurchased is true the item is available for purchase transactions in the Xero UI. If IsPurchased is updated to false then PurchaseDescription and PurchaseDetails values will be nulled.
     * @return Boolean value, defaults to true. When IsPurchased is true the item is available for purchase transactions in the Xero UI. If IsPurchased is updated to false then PurchaseDescription and PurchaseDetails values will be nulled.
     * @return Boolean value, defaults to true. When IsPurchased is true the item is available for purchase transactions in the Xero UI. If IsPurchased is updated to false then PurchaseDescription and PurchaseDetails values will be nulled.
     */
    public function getIsPurchased(): ?bool
    {
        return $this->isPurchased;
    }

    /**
     * The sales description of the item (max length = 4000)
     * @return The sales description of the item (max length = 4000)
     * @return The sales description of the item (max length = 4000)
     * @return The sales description of the item (max length = 4000)
     * @return The sales description of the item (max length = 4000)
     * @return The sales description of the item (max length = 4000)
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * The purchase description of the item (max length = 4000)
     * @return The purchase description of the item (max length = 4000)
     * @return The purchase description of the item (max length = 4000)
     * @return The purchase description of the item (max length = 4000)
     * @return The purchase description of the item (max length = 4000)
     * @return The purchase description of the item (max length = 4000)
     */
    public function getPurchaseDescription(): ?string
    {
        return $this->purchaseDescription;
    }

    public function getPurchaseDetails(): mixed
    {
        return $this->purchaseDetails;
    }

    public function getSalesDetails(): mixed
    {
        return $this->salesDetails;
    }

    /**
     * True for items that are tracked as inventory. An item will be tracked as inventory if the InventoryAssetAccountCode and COGSAccountCode are set.
     * @return True for items that are tracked as inventory. An item will be tracked as inventory if the InventoryAssetAccountCode and COGSAccountCode are set.
     * @return True for items that are tracked as inventory. An item will be tracked as inventory if the InventoryAssetAccountCode and COGSAccountCode are set.
     * @return True for items that are tracked as inventory. An item will be tracked as inventory if the InventoryAssetAccountCode and COGSAccountCode are set.
     * @return True for items that are tracked as inventory. An item will be tracked as inventory if the InventoryAssetAccountCode and COGSAccountCode are set.
     * @return True for items that are tracked as inventory. An item will be tracked as inventory if the InventoryAssetAccountCode and COGSAccountCode are set.
     */
    public function getIsTrackedAsInventory(): ?bool
    {
        return $this->isTrackedAsInventory;
    }

    /**
     * The value of the item on hand. Calculated using average cost accounting.
     * @return The value of the item on hand. Calculated using average cost accounting.
     * @format double
     * @return The value of the item on hand. Calculated using average cost accounting.
     * @format double
     * @return The value of the item on hand. Calculated using average cost accounting.
     * @format double
     * @return The value of the item on hand. Calculated using average cost accounting.
     * @format double
     * @return The value of the item on hand. Calculated using average cost accounting.
     * @format double
     */
    public function getTotalCostPool(): ?int
    {
        return $this->totalCostPool;
    }

    /**
     * The quantity of the item on hand
     * @return The quantity of the item on hand
     * @format double
     * @return The quantity of the item on hand
     * @format double
     * @return The quantity of the item on hand
     * @format double
     * @return The quantity of the item on hand
     * @format double
     * @return The quantity of the item on hand
     * @format double
     */
    public function getQuantityOnHand(): ?int
    {
        return $this->quantityOnHand;
    }

    /**
     * Last modified date in UTC format
     * @return Last modified date in UTC format
     * @example /Date(1573755038314)/
     * @return Last modified date in UTC format
     * @example /Date(1573755038314)/
     * @return Last modified date in UTC format
     * @example /Date(1573755038314)/
     * @return Last modified date in UTC format
     * @example /Date(1573755038314)/
     * @return Last modified date in UTC format
     * @example /Date(1573755038314)/
     */
    public function getUpdatedDateUTC(): ?string
    {
        return $this->updatedDateUTC;
    }

    /**
     * The Xero identifier for an Item
     * @return The Xero identifier for an Item
     * @format uuid
     * @return The Xero identifier for an Item
     * @format uuid
     * @return The Xero identifier for an Item
     * @format uuid
     * @return The Xero identifier for an Item
     * @format uuid
     * @return The Xero identifier for an Item
     * @format uuid
     */
    public function getItemID(): ?string
    {
        return $this->itemID;
    }

    /**
     * Status of object
     * @return Status of object
     * @return Status of object
     * @return Status of object
     * @return Status of object
     * @return Status of object
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
     * User defined item code (max length = 30)
     */
    public function setCode(?string $code): ?self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * The inventory asset account for the item. The account must be of type INVENTORY. The  COGSAccountCode in PurchaseDetails is also required to create a tracked item
     */
    public function setInventoryAssetAccountCode(?string $inventoryAssetAccountCode): ?self
    {
        $this->inventoryAssetAccountCode = $inventoryAssetAccountCode;
        return $this;
    }

    /**
     * The name of the item (max length = 50)
     */
    public function setName(?string $name): ?self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Boolean value, defaults to true. When IsSold is true the item will be available on sales transactions in the Xero UI. If IsSold is updated to false then Description and SalesDetails values will be nulled.
     */
    public function setIsSold(?bool $isSold): ?self
    {
        $this->isSold = $isSold;
        return $this;
    }

    /**
     * Boolean value, defaults to true. When IsPurchased is true the item is available for purchase transactions in the Xero UI. If IsPurchased is updated to false then PurchaseDescription and PurchaseDetails values will be nulled.
     */
    public function setIsPurchased(?bool $isPurchased): ?self
    {
        $this->isPurchased = $isPurchased;
        return $this;
    }

    /**
     * The sales description of the item (max length = 4000)
     */
    public function setDescription(?string $description): ?self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The purchase description of the item (max length = 4000)
     */
    public function setPurchaseDescription(?string $purchaseDescription): ?self
    {
        $this->purchaseDescription = $purchaseDescription;
        return $this;
    }

    public function setPurchaseDetails(mixed $purchaseDetails): ?self
    {
        $this->purchaseDetails = $purchaseDetails;
        return $this;
    }

    public function setSalesDetails(mixed $salesDetails): ?self
    {
        $this->salesDetails = $salesDetails;
        return $this;
    }

    /**
     * True for items that are tracked as inventory. An item will be tracked as inventory if the InventoryAssetAccountCode and COGSAccountCode are set.
     */
    public function setIsTrackedAsInventory(?bool $isTrackedAsInventory): ?self
    {
        $this->isTrackedAsInventory = $isTrackedAsInventory;
        return $this;
    }

    /**
     * The value of the item on hand. Calculated using average cost accounting.
     * @format double
     */
    public function setTotalCostPool(?int $totalCostPool): ?self
    {
        $this->totalCostPool = $totalCostPool;
        return $this;
    }

    /**
     * The quantity of the item on hand
     * @format double
     */
    public function setQuantityOnHand(?int $quantityOnHand): ?self
    {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * Last modified date in UTC format
     * @example /Date(1573755038314)/
     */
    public function setUpdatedDateUTC(?string $updatedDateUTC): ?self
    {
        $this->updatedDateUTC = $updatedDateUTC;
        return $this;
    }

    /**
     * The Xero identifier for an Item
     * @format uuid
     */
    public function setItemID(?string $itemID): ?self
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Status of object
     */
    public function setStatusAttributeString(?string $statusAttributeString): ?self
    {
        $this->statusAttributeString = $statusAttributeString;
        return $this;
    }
}
