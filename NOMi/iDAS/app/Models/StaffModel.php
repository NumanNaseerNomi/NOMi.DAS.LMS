<?php namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
	protected $table			= 'staff';
	protected $returnType		= 'object';
	protected $allowedFields	= ['name'];

    public function getStaff($staffID)
    {
        $staff = $this->getWhere(['id' => $staffID])->getRow();

        if ($staff)
        {
            return $staff;
        }
        else
        {
            return false;
        }
    }

    public function getAllStaff()
    {
        $allStaff = $this->get()->getResult();

        if ($allStaff)
        {
            return $allStaff;
        }
        else
        {
            return false;
        }
    }

    public function getStaffNID($staffID)
    {
        $staff = $this->getWhere(['id' => $staffID])->getRow();

        if ($staff)
        {
            return $staff->nid;
        }
        else
        {
            return false;
        }
    }

    public function getStaffName($staffID)
    {
        $staff = $this->getWhere(['id' => $staffID])->getRow();

        if ($staff)
        {
            return $staff->name;
        }
        else
        {
            return false;
        }
    }

    public function getStaffDOB($staffID)
    {
        $staff = $this->getWhere(['id' => $staffID])->getRow();

        if ($staff)
        {
            return $staff->dob;
        }
        else
        {
            return false;
        }
    }
}