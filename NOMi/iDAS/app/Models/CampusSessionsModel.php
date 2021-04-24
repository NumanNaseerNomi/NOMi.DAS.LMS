<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionsModel extends Model
{
	protected $table			= 'campus_sessions';
	protected $returnType		= 'object';
	protected $allowedFields	= ['sessionID', 'campusID'];

    public function getCampusSession($campusSessionID)
    {
        $campusSession = $this->getWhere(['id' => $campusSessionID])->getRow();

        if ($campusSession)
        {
            return $campusSession;
        }
        else
        {
            return false;
        }
    }

    public function getCampusSessions()
    {
        $campusSessions = $this->get()->getResult();

        if ($campusSessions)
        {
            return $campusSessions;
        }
        else
        {
            return false;
        }
    }
}