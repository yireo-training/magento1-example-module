<?php
class Foo_Bar_Model_Rewrite_Product extends Mage_Catalog_Model_Product
{
    public function getCategoryIds()
    {
        $categoryIds = parent::getCategoryIds();
        $categoryIds[] = 42;

        return $categoryIds;
    }
}