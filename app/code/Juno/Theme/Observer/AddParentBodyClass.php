<?php declare(strict_types=1);
/**
* @author Kim Phung - BURO210
* @copyright Copyright © 2023 BURO210. All rights reserved.
* @package Juno\Theme
*/

namespace Juno\Theme\Observer;

/**
* Class AddParentBodyClass
* @package Juno\Theme\AddParentBodyClass
*/
Class AddParentBodyClass implements \Magento\Framework\Event\ObserverInterface
{
    /**
    * Config constructor.
    *
    * @param \Magento\Framework\View\Page\Config $config
    */
    public function __construct(
        private readonly \Magento\Framework\View\Page\Config $config
    ) {}

    /**
    * Execute layout_load_before
    * @param \Magento\Framework\Event\Observer $observer
    */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $config = $this->config;

        if ($config->getPageLayout() === 'cms-article') {
            $config->addBodyClass('page-layout-1column');
        }
    }
}