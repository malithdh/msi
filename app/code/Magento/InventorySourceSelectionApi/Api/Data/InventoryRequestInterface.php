<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventorySourceSelectionApi\Api\Data;

/**
 * Request products in a given Qty and StockId
 *
 * @api
 */
interface InventoryRequestInterface
{
    /**
     * Get Stock Id
     *
     * @return int
     */
    public function getStockId(): int;

    /**
     * Get Items
     *
     * @return \Magento\InventorySourceSelectionApi\Api\Data\ItemRequestInterface[]
     */
    public function getItems(): array;

    /**
     * Get address request
     *
     * @return AddressRequestInterface
     */
    public function getAddress(): AddressRequestInterface;
}
