<?php

namespace App\Repositories;

interface IRepo
{
	public function findById($id);
	public function getAll();
	public function create($object);
	public function update($object);
	public function delete($id);
}