<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table			= 'users';
	protected $returnType		= 'object';
	protected $allowedFields	= ['userName', 'userPassword'];

	public function login($userData)
	{
		$user = $this->getWhere(['userName' => $userData->userName])->getRow();

		if ($user && password_verify($userData->userPassword, $user->userPassword))
    	{
    		return $user;
    	}
    	else
    	{
    		return false;
    	}
	}
}