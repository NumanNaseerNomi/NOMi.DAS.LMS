<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = 'users';

	public function login($userData)
	{
		$user = $this->getWhere(['userName' => $userData['userName']])->getRow();

		if ($user)
    	{
    		$verifyPassword = password_verify($userData['userPassword'], $user->userPassword);

    		if ($verifyPassword)
    		{
    			return $user;
    		}

    		return false;
    	}
    	else
    	{
    		return false;
    	}
	}
}