<?php namespace App\Models;

use CodeIgniter\Model;

class UserRolesModel extends Model
{
	protected $table			= 'userRoles';
	protected $returnType		= 'object';
	protected $allowedFields	= ['role'];

	public function getUserRoleById($userRoleId)
	{
		$userRole = $this->getWhere(['id' => $userRoleId])->getRow();

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