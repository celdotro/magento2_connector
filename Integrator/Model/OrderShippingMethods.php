<?php 
namespace Cel\Integrator\Model;

use Cel\Integrator\Api\InterfaceOrderShippingMethods;

class OrderShippingMethods implements InterfaceOrderShippingMethods
{
    protected $scopeConfig;

    protected $shipconfig;
    
    public function __construct(
    \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
    \Magento\Shipping\Model\Config $shipconfig
    ) {
        $this->shipconfig  = $shipconfig;
        $this->scopeConfig = $scopeConfig;
    }

    public function getAvailableMethods($isActiveOnlyFlag = false)
    {
        $activeCarriers = $this->shipconfig->getActiveCarriers();
        $storeScope     = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $methods        = [];
        foreach($activeCarriers as $carrierCode => $carrierModel)
        {
            if($carrierMethods = $carrierModel->getAllowedMethods() )
            {
                $carrierTitle =$this->scopeConfig->getValue('carriers/'.$carrierCode.'/title');
                foreach ($carrierMethods as $methodCode => $method)
                {
                    $methods[] = [
                        'label'         => $carrierTitle . ' ' . $carrierCode . ' ' . $methodCode,
                        'carrier_code'  => $carrierCode,
                        'method_code'   => $methodCode,
                        'carrier_method'=> $method
                    ];

                }

            }
        }
        return $methods; 
    }
}