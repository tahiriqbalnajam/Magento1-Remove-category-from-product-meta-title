<?php

class Idlbridge_CustomProductMetaTags_Model_Observer
{
	public function catalogControllerProductView($observer)
	{
		$product = $observer->getProduct();
		if($product INSTANCEOF Mage_Catalog_Model_Product) {
			if($product->getMetaTitle() == '') {
                $productName = $product->getName();
                $title = "buy ".$productName." online uk";
                $product->setMetaTitle($title);
            }
		}
	}
}