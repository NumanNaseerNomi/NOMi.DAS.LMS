<?php namespace App\Models;

use CodeIgniter\Model;

class UserCandidatesModel extends Model
{
	protected $table			= 'UserCandidates';
	protected $returnType		= 'object';
	protected $allowedFields	= ['staffID', 'studentsID', 'parentsID'];

	public function getUserCandidateById($userCandidateId)
	{
		$userCandidate = $this->getWhere(['id' => $userCandidateId])->getRow();

		if ($userCandidate)
    	{
    		return $userCandidate;
    	}
    	else
    	{
    		return false;
    	}
	}

    public function getUserCandidates()
    {
        $userCandidates = $this->get()->getResult();

        if ($userCandidates)
        {
            return $userCandidates;
        }
        else
        {
            return false;
        }
    }

	public function getUserCandidateType($userCandidateId)
	{
		$userCandidate = $this->getWhere(['id' => $userCandidateId])->getRow();

		if ($userCandidate)
    	{
    		if ($userCandidate->staffID != null)
    		{
    			return "Staff";
    		}
    		else if ($userCandidate->studentsID != null)
    		{
    			return "Student";
    		}
    		else if ($userCandidate->parentsID != null)
    		{
    			return "Parents";
    		}
    	}
    	else
    	{
    		return false;
    	}
	}

	public function getUserCandidateID($userCandidateId)
	{
		$userCandidate = $this->getWhere(['id' => $userCandidateId])->getRow();

		if ($userCandidate)
    	{
    		if ($userCandidate->staffID != null)
    		{
    			return $userCandidate->staffID;
    		}
    		else if ($userCandidate->studentsID != null)
    		{
    			return $userCandidate->studentsID;
    		}
    		else if ($userCandidate->parentsID != null)
    		{
    			return $userCandidate->parentsID;
    		}
    	}
    	else
    	{
    		return false;
    	}
	}
}