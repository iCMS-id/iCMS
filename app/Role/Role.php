<?php

namespace App\Role;

use Auth;
use App\Role\UnauthorizeException;

class Role {
	protected $app;

	public function __construct($app)
	{
		$this->app = $app;
	}

	public function can($permission_name)
	{
		return false;
	}

	public function getPermission()
	{
		return [];
	}

	public function getAllPermission()
	{
		return [];
	}

	public function getAllRole()
	{
		return [];
	}

	public function getRole()
	{
		return "";
	}

	public function isAdmin()
	{
		return true;
	}
}