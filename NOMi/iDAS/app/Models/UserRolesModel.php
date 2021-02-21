<?php namespace App\Models;

use CodeIgniter\Model;

class UserRolesModel extends Model
{
	protected $table			= 'userRoles';
	protected $returnType		= 'object';
	protected $allowedFields	= ['role'];

	public function getUserRoleName($userRoleID)
	{
		$roleName = $this->getWhere(['id' => $userRoleID])->getRow();

		if ($roleName)
    	{
    		return $roleName;
    	}
    	else
    	{
    		return false;
    	}
	}

}