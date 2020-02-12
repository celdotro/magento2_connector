<?php
namespace Cel\Integrator\Model;

use Cel\Integrator\Api\InterfaceOrderStatuses;

class OrderStatuses implements InterfaceOrderStatuses 
{
    protected $statusCollectionFactory;
    
	public function __construct(\Magento\Sales\Model\ResourceModel\Order\Status\CollectionFactory $statusCollectionFactory) {
        $this->statusCollectionFactory = $statusCollectionFactory;
    }
    
    /**
     * Get All orders statuses
     *
     * @return array
     */
	public function getorderstatusarray() {
    	$options = $this->statusCollectionFactory->create()->toOptionArray();
    	return $options;
	}
}