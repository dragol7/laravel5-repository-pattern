<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Repo implements IRepo
{
	protected $entity;
	
	public function __construct($entity)
	{
		if(!$entity instanceof Model) {
			throw new RepoException("Class " . get_class($entity) . " must be an instance of Illuminate\\Database\\Eloquent\\Model");
		}
		$this->entity = $entity;
	}

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