<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionSubjectsModel extends Model
{
	protected $table			= 'campus_session_class_section_subjects';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionClassSectionId', 'subjectId'];

    public function getCampusSessionClassSectionSubject($campusSessionClassSectionSubjectId)
    {
        $campusSessionClassSectionSubject = $this->getWhere(['id' => $campusSessionClassSectionSubjectId])->getRow();

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

    public function getCampusSessionClassSectionBySubjectId($subjectId)
    {
        $subjectsByCampusSessionClassSubjectId = $this->getWhere(['subjectId' => $subjectId])->getResult();

        if ($subjectsByCampusSessionClassSubjectId)
        {
            return $subjectsByCampusSessionClassSubjectId;
        }
        else
        {
            return false;
        }
    }
}