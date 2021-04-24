<?php namespace App\Models;

use CodeIgniter\Model;

class SessionsModel extends Model
{
	protected $table			= 'sessions';
	protected $returnType		= 'object';
	protected $allowedFields	= ['session'];

    public function getSession($sessionID)
    {
        $session = $this->getWhere(['id' => $sessionID])->getRow();

        if ($session)
        {
            return $session;
        }
        else
        {
            return false;
        }
    }

    public function getSessions()
    {
        $sessions = $this->get()->getResult();

        if ($sessions)
        {
            return $sessions;
        }
        else
        {
            return false;
        }
    }
}