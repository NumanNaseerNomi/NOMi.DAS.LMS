<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionsModel extends Model
{
	protected $table			= 'campus_sessions';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['sessionId', 'campusId'];

    public function getCampusSessionById($campusSessionId)
    {
        $campusSession = $this->getWhere(['id' => $campusSessionId])->getRow();

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

    public function getSessionsByCampusId($campusId)
    {
        $sessionsByCampusId = $this->getWhere(['campusId' => $campusId])->getResult();

        if ($sessionsByCampusId)
        {
            return $sessionsByCampusId;
        }
        else
        {
            return false;
        }
    }

    public function getActiveSessionByCampusId($campusId)
    {
        $activeSessionByCampusId = $this->getWhere(['campusId' => $campusId, 'isActive' => true])->getRow();

        if ($activeSessionByCampusId)
        {
            return $activeSessionByCampusId;
        }
        else
        {
            return false;
        }
    }
}