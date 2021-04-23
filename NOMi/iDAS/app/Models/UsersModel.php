<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
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

    public function getUser($userID)
    {
        $user = $this->getWhere(['id' => $userID])->getRow();

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

	public function getUserName($userID)
	{
		$user = $this->getWhere(['id' => $userID])->getRow();

		if ($user)
    	{
    		return $user->userName;
    	}
    	else
    	{
    		return false;
    	}
	}

	public function getUserRoleID($userID)
	{
		$user = $this->getWhere(['id' => $userID])->getRow();

		if ($user)
    	{
    		return $user->userRoleID;
    	}
    	else
    	{
    		return false;
    	}
	}

	public function getUserCandidateID($userID)
	{
		$user = $this->getWhere(['id' => $userID])->getRow();

		if ($user)
    	{
    		return $user->userCandidateID;
    	}
    	else
    	{
    		return false;
    	}
	}
}