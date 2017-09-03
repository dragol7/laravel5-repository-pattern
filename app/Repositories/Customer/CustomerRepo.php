<?php

namespace App\Repositories\Customer;

use App\Customer;

class CustomerRepo implements ICustomerRepo
{
	protected $customer;

	public function __construct(Customer $customer)
	{
		$this->customer = $customer;
	}

	public function isActive($id)
	{
		// TODO: Implement isActive() method.
	}

	public function findById($id)
	{
		// TODO: Implement findById() method.
	}

	public function getAll()
	{
		return $this->customer->all();
	}

	public function create($object)
	{
		// TODO: Implement create() method.
	}

	public function update($object)
	{
		// TODO: Implement update() method.
	}

	public function delete($id)
	{
		// TODO: Implement delete() method.
	}
}