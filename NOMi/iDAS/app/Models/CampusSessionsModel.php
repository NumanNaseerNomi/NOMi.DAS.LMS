<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionsModel extends Model
{
	protected $table			= 'campus_sessions';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['sessionId', 'campusId'];

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