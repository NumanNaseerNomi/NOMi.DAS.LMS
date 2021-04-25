<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionSubjectsModel extends Model
{
	protected $table			= 'campus_session_class_section_subjects';
	protected $returnType		= 'object';
	protected $allowedFields	= ['campusSessionClassSectionID', 'subjectID'];

    public function getCampusSessionClassSectionSubject($campusSessionClassSectionSubjectID)
    {
        $campusSessionClassSectionSubject = $this->getWhere(['id' => $campusSessionClassSectionSubjectID])->getRow();

        if ($campusSessionClassSectionSubject)
        {
            return $campusSessionClassSectionSubject;
        }
        else
        {
            return false;
        }
    }

    public function getCampusSessionClassSectionSubjects()
    {
        $campusSessionClassSectionSubjects = $this->get()->getResult();

        if ($campusSessionClassSectionSubjects)
        {
            return $campusSessionClassSectionSubjects;
        }
        else
        {
            return false;
        }
    }
}