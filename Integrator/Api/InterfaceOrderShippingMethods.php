<?php
namespace Cel\Integrator\Api;

interface InterfaceOrderShippingMethods
{

    /**
     * Get All orders shipping methods
     *
     * @return array
     */
    public function getAvailableMethods();
}