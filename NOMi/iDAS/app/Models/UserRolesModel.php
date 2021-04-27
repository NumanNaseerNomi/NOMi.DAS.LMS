<?php namespace App\Models;

use CodeIgniter\Model;

class UserRolesModel extends Model
{
	protected $table			= 'userRoles';
	protected $returnType		= 'object';
	protected $allowedFields	= ['role'];

	public function getUserRole($userRoleID)
	{
		$userRole = $this->getWhere(['id' => $userRoleID])->getRow();

		if ($userRole)
    	{
    		return $userRole;
    	}
    	else
    	{
    		return false;
    	}
	}
}