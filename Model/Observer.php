<?php
class Foo_Bar_Model_Observer
{
    /**
     * @param Varien_Event_Observer $observer
     * @return $this
     * @deprecated See Foo_Bar_Observer_DoSomethingOnLogin::execute()
     */
    public function doSomethingOnLogin(Varien_Event_Observer $observer)
    {
        return $this;
    }
}