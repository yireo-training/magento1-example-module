<?php
class Foo_Bar_Observer_DoSomethingOnLogin
{
    public function execute(Varien_Event_Observer $observer)
    {
        /** @var $customer Mage_Customer_Model_Customer */
        $customer = $observer->getEvent()->getCustomer();
        // or
        $data = $observer->getEvent()->getData();
        $customer = $data['customer'];
        return $this;
    }
}


// Yireo_NewRelic
// Bluebear_NewRelic
$helper = Mage::helper('yireo_newrelic');