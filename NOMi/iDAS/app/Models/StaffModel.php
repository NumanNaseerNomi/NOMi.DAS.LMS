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

    public function getStaff()
    {
        $staff = $this->get()->getResult();

        if ($staff)
        {
            return $staff;
        }
        else
        {
            return false;
        }
    }

    // public function getStaffNID($staffID)
    // {
    //     $staff = $this->getWhere(['id' => $staffID])->getRow();

    //     if ($staff)
    //     {
    //         return $staff->nid;
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }

    // public function getStaffName($staffID)
    // {
    //     $staff = $this->getWhere(['id' => $staffID])->getRow();

    //     if ($staff)
    //     {
    //         return $staff->name;
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }

    // public function getStaffDOB($staffID)
    // {
    //     $staff = $this->getWhere(['id' => $staffID])->getRow();

    //     if ($staff)
    //     {
    //         return $staff->dob;
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }
}