<?php namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
	protected $table			= 'staff';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['name'];

    public function getStaffById($id)
    {
        $staffById = $this->getWhere(['id' => $id])->getRow();

        if ($staffById)
        {
            return $staffById;
        }
        else
        {
            return false;
        }
    }
}