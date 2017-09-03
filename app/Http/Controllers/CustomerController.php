<?php

namespace App\Http\Controllers;

use App\Repositories\Customer\ICustomerRepo;

class CustomerController extends Controller
{
	protected $repo;
	
	public function __construct(ICustomerRepo $repo)
	{
		$this->repo = $repo;
	}

	public function getAll()
	{
		return $this->repo->getAll();
	}
}
