<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Simple product data view
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 */
namespace Godogi\ZoomLoggedIn\Block\Product\View;
use Magento\Framework\Json\EncoderInterface;

class Gallery extends \Magento\Catalog\Block\Product\View\Gallery
{
    protected $_customerSession;

    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \Magento\Framework\Stdlib\ArrayUtils $arrayUtils,
        EncoderInterface $jsonEncoder,
        \Magento\Customer\Model\Session $customerSession,
        array $data = []
    ) {
        $this->_customerSession = $customerSession;
        parent::__construct($context, $arrayUtils, $jsonEncoder, $data);
    }

    public function isCustomerLoggedIn(){
        return $this->_customerSession->isLoggedIn();
    }
}
