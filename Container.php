<?php

class Container
{
	private $id;

	private $products;

	private $containers;

	public function __construct(int $id)
	{
		$this->id = $id;
		$this->products = [];
		$this->containers = [];
	}

	public function getId(): int
	{
		return $this->id;
	}

	public function getProducts(): array
	{
		return $this->products;
	}

	public function getContainers(): array
	{
		return $this->containers;
	}

	public function addProducts(Product $product)
	{
		$this->products[] = $product;
	}

	public function addContainers(Container $container)
	{
		$this->containers[] = $container;
	}
}