<?php declare(strict_types=1);
/**
* @author Kim Phung - BURO210
* @copyright Copyright © 2023 BURO210. All rights reserved.
* @package Juno\Theme
*/

namespace Juno\Theme\ViewModel;

/**
* Class StoreHours
* @package Juno\Theme\ViewModel\StoreHours
*/
Class StoreHours implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
    * scopeConfig constructor.
    *
    * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    */
    public function __construct(
        private readonly \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {}

    /**
    * Get StoreHours
    * @return string
    */
    public function getStoreHours(): string
    {
         return $this->scopeConfig->getValue('general/store_information/hours');
    }
}