<?php

namespace App\Repositories\Customer;

use App\Repositories\IRepo;

interface ICustomerRepo extends IRepo
{
	public function isActive($id);
}