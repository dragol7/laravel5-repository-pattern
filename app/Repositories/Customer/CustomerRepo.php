<?php

namespace App\Repositories\Customer;

use App\Customer;
use App\Repositories\Repo;

class CustomerRepo extends Repo implements ICustomerRepo
{
	public function __construct(Customer $customer)
	{
		parent::__construct($customer);
	}

	public function isActive($id)
	{
		// TODO: Implement isActive() method.
	}
}