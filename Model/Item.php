<?php
use Symfony\Component\Debug\Debug;

class Foo_Bar_Model_Item
    extends Mage_Core_Model_Abstract
    implements \Foo\Bar\Api\ItemInterface
{
    public function getName() : string
    {
        return parent::getName();
    }

    public function setName(string $name)
    {
        parent::setName($name);
    }

    protected function _beforeSave()
    {
        if (!is_string($this->getName())) {
            throw new Exception('Name is not a string');
        }

        if (stristr($this->getDescription(), 'unt')) {
            throw new Exception('This description is not allowed');
        }

        Debug::enable();

        $this->setName(trim($this->getName()));
        parent::_beforeSave();
    }
}

/*
 * $item = Mage::getModel('foobar/item);
 * $item->setName('foobar');
 * $item->setData('name', 'foobar');
 */