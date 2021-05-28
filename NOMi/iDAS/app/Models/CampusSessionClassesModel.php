<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassesModel extends Model
{
	protected $table			= 'campus_session_classes';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionId', 'classId'];

    public function getCampusSessionClassById($id)
    {
        $campusSessionClassById = $this->getWhere(['id' => $id])->getRow();

        if ($campusSessionClassById)
        {
            return $campusSessionClassById;
        }
        else
        {
            return false;
        }
    }

    public function getClassesByCampusSessionId($campusSessionId)
    {
        $campusSessionClasses = $this->getWhere(['campusSessionId' => $campusSessionId])->getResult();

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