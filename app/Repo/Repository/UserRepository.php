<?php
namespace Repo\Repository;
use User; 
 
class UserRepository implements UserRepository {

	public function all()
	{
	 return User::all();
	}

	public function find($id)
	{
	 return User::find($id);
	}

	public function create($input)
	{
	 return User::create($input);
	}

}