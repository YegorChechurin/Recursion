<?php

class ProductSearcher
{
	public function findFirstMatch(string $product_name, Container $container, $path_to_product=[]): ?array
	{
		$path_to_product[] = $container->getId();

		$products = $container->getProducts();

		if ($products) {
			foreach ($products as $p) {
				if ($p->getName()==$product_name) {
					return $path_to_product;
				}
			}
		} 

		$child_containers = $container->getContainers();

		if ($child_containers) {		
			foreach ($child_containers as $cc) {
				$result = $this->findFirstMatch($product_name,$cc,$path_to_product);

				if ($result != null) {
					return $result;
				}
			}
		} 

		return null;
		
	}
}