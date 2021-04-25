<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionSubjectStudentsModel extends Model
{
	protected $table			= 'campus_session_class_section_subject_students';
	protected $returnType		= 'object';
	protected $allowedFields	= ['campusSessionClassSectionSubjectID', 'studentID'];

    public function getCampusSessionClassSectionSubjectStudent($campusSessionClassSectionSubjectStudentID)
    {
        $campusSessionClassSectionSubjectStudent = $this->getWhere(['id' => $campusSessionClassSectionSubjectStudentID])->getRow();

        if ($campusSessionClassSectionSubjectStudent)
        {
            return $campusSessionClassSectionSubjectStudent;
        }
        else
        {
            return false;
        }
    }

    public function getCampusSessionClassSectionSubjectStudents()
    {
        $campusSessionClassSectionSubjectStudents = $this->get()->getResult();

        if ($campusSessionClassSectionSubjectStudents)
        {
            return $campusSessionClassSectionSubjectStudents;
        }
        else
        {
            return false;
        }
    }
}