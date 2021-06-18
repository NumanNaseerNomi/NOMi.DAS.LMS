<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionSubjectsModel extends Model
{
	protected $table			= 'campus_session_class_section_subjects';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionClassSectionId', 'subjectId'];

    public function getSubjectsByCampusSessionClassSectionId($campusSessionClassSectionId)
    {
        $subjectsByCampusSessionClassSectionId = $this->getWhere(['campusSessionClassSectionId' => $campusSessionClassSectionId])->getResult();

        if ($subjectsByCampusSessionClassSectionId)
        {
            return $subjectsByCampusSessionClassSectionId;
        }
        else
        {
            return false;
        }
    }
}