<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassesModel extends Model
{
	protected $table			= 'campus_session_classes';
	protected $returnType		= 'object';
	protected $allowedFields	= ['campusSessionID', 'classID'];

    public function getCampusSessionClass($campusSessionClassID)
    {
        $campusSessionClass = $this->getWhere(['id' => $campusSessionClassID])->getRow();

        if ($campusSessionClass)
        {
            return $campusSessionClass;
        }
        else
        {
            return false;
        }
    }

    public function getCampusSessionClasses()
    {
        $campusSessionClasses = $this->get()->getResult();

        if ($campusSessionClasses)
        {
            return $campusSessionClasses;
        }
        else
        {
            return false;
        }
    }
}