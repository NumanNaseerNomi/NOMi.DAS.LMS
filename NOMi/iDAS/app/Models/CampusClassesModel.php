<?php namespace App\Models;

use CodeIgniter\Model;

class CampusClassesModel extends Model
{
	protected $table			= 'campus_classes';
	protected $returnType		= 'object';
	protected $allowedFields	= ['classID', 'campusID'];

    public function getCampusClass($campusClassID)
    {
        $campusClass = $this->getWhere(['id' => $campusClassID])->getRow();

        if ($campusClass)
        {
            return $campusClass;
        }
        else
        {
            return false;
        }
    }

    public function getCampusClasses()
    {
        $campusClasses = $this->get()->getResult();

        if ($campusClasses)
        {
            return $campusClasses;
        }
        else
        {
            return false;
        }
    }
}