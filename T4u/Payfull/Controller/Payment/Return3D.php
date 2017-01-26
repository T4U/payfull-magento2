<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace T4u\Payfull\Controller\Payment;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use T4u\Payfull\Helper\Payfullapi;
/**
 * Class Return3D
 */
class Return3D extends Action
{
     
    private $result;

    private $helper;  

    protected $checkoutSession;   

    public function __construct(
        Context $context,
        JsonFactory    $resultJsonFactory,
        Payfullapi $helper,
        \Magento\Checkout\Model\Session $checkoutSession
    ) {
        parent::__construct($context);
        $this->helper = $helper;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->checkoutSession = $checkoutSession;
    }
    /**
     * @inheritdoc
     */
    public function execute()
    {
        /*$payfull = $this->checkoutSession->getPayfull();
        echo $payfull['html'];*/
        print_r($_REQUEST);exit;
        echo "3D Secure Payment Successful";
    }
   
}
