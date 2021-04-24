<?php namespace App\Models;

use CodeIgniter\Model;

class CampusesModel extends Model
{
	protected $table			= 'campuses';
	protected $returnType		= 'object';
	protected $allowedFields	= ['campusName', 'campusAddress'];

    public function getCampus($campusID)
    {
        $campus = $this->getWhere(['id' => $campusID])->getRow();

        if ($campus)
        {
            return $campus;
        }
        else
        {
            return false;
        }
    }

    public function getCampuses()
    {
        $campuses = $this->get()->getResult();

        if ($campuses)
        {
            return $campuses;
        }
        else
        {
            return false;
        }
    }

    public function getCampusName($campusID)
    {
        $campus = $this->getWhere(['id' => $campusID])->getRow();

        if ($campus)
        {
            return $campus->campusName;
        }
        else
        {
            return false;
        }
    }

    public function getCampusAddress($campusID)
    {
        $campus = $this->getWhere(['id' => $campusID])->getRow();

        if ($campus)
        {
            return $campus->campusAddress;
        }
        else
        {
            return false;
        }
    }

    public function getCampusCode($campusID)
    {
        $campus = $this->getWhere(['id' => $campusID])->getRow();

        if ($campus)
        {
            return $campus->campusCode;
        }
        else
        {
            return false;
        }
    }
}