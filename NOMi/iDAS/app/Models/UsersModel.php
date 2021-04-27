<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
	protected $table			= 'users';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['userName', 'userPassword'];

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

    public function getUserById($userId)
    {
        $user = $this->getWhere(['id' => $userId])->getRow();

        if ($user)
        {
            return $user;
        }
        else
        {
            return false;
        }
    }

    public function getUsers()
    {
        $users = $this->get()->getResult();

        if ($users)
        {
            return $users;
        }
        else
        {
            return false;
        }
    }

	// public function getUserName($userId)
	// {
	// 	$user = $this->getWhere(['id' => $userId])->getRow();

	// 	if ($user)
 //    	{
 //    		return $user->userName;
 //    	}
 //    	else
 //    	{
 //    		return false;
 //    	}
	// }

	// public function getUserRoleID($userId)
	// {
	// 	$user = $this->getWhere(['id' => $userId])->getRow();

	// 	if ($user)
 //    	{
 //    		return $user->userRoleID;
 //    	}
 //    	else
 //    	{
 //    		return false;
 //    	}
	// }

	// public function getUserCandidateID($userId)
	// {
	// 	$user = $this->getWhere(['id' => $userId])->getRow();

	// 	if ($user)
 //    	{
 //    		return $user->userCandidateID;
 //    	}
 //    	else
 //    	{
 //    		return false;
 //    	}
	// }
}