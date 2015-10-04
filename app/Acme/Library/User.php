<?php namespace App\Acme\Library;

class User 	
{

	protected  $user = [];
	protected $object;

	public function __construct(User $user,Object $object)
	{
		$this->user = $user;
		$this->object = $object;
	}



}
