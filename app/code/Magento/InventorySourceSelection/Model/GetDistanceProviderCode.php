<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventorySourceSelection\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\InventorySourceSelectionApi\Api\GetDistanceProviderCodeInterface;

/**
 * @inheritdoc
 */
class GetDistanceProviderCode implements GetDistanceProviderCodeInterface
{
    const XML_PATH_DEFAULT_DISTANCE_PROVIDER = 'cataloginventory/source_selection_distance_based/provider';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * GetDefaultDistanceProvider constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @inheritdoc
     */
    public function execute(): string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_DEFAULT_DISTANCE_PROVIDER);
    }
}
