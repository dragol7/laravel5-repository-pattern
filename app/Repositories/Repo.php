<?php

namespace App\Repositories;

class Repo implements IRepo
{
	protected $entity;

	public function findById($id)
	{
		// TODO: Implement findById() method.
	}

	public function getAll()
	{
		return $this->entity->all();
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