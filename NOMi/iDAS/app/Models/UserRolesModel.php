<?php namespace App\Models;

use CodeIgniter\Model;

class UserRolesModel extends Model
{
	protected $table			= 'userRoles';
	protected $returnType		= 'object';
	protected $allowedFields	= ['role'];

	public function getUserRoleName($userRoleID)
	{
		$userRole = $this->getWhere(['id' => $userRoleID])->getRow();

		if ($userRole)
    	{
    		return $userRole->role;
    	}
    	else
    	{
    		return false;
    	}
	}

}