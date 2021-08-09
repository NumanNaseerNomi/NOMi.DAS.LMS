<?php namespace App\Models;

use CodeIgniter\Model;

class UserCandidatesModel extends Model
{
	protected $table			= 'userCandidates';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['staffID', 'studentsID', 'parentsID'];

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
}