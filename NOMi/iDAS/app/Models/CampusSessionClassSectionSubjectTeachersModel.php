<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionSubjectTeachersModel extends Model
{
	protected $table			= 'campus_session_class_section_subject_teachers';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionClassSectionSubjectId', 'staffId'];

    public function getCampusSessionClassSectionSubjectTeacherById($campusSessionClassSectionSubjectTeacherId)
    {
        $campusSessionClassSectionSubjectTeacherById = $this->getWhere(['id' => $campusSessionClassSectionSubjectTeacherId])->getRow();

        if ($campusSessionClassSectionSubjectTeacherById)
        {
            return $campusSessionClassSectionSubjectTeacherById;
        }
        else
        {
            return false;
        }
    }

    public function getCampusSessionClassSectionSubjectTeachers()
    {
        $campusSessionClassSectionSubjectTeachers = $this->get()->getResult();

        if ($campusSessionClassSectionSubjectTeachers)
        {
            return $campusSessionClassSectionSubjectTeachers;
        }
        else
        {
            return false;
        }
    }

    public function getCampusSessionClassSectionSubjectsByStaffId($staffId)
    {
        $campusSessionClassSectionSubjectsByStaffId = $this->getWhere(['staffId' => $staffId])->getResult();

        if ($campusSessionClassSectionSubjectsByStaffId)
        {
            return $campusSessionClassSectionSubjectsByStaffId;
        }
        else
        {
            return false;
        }
    }

    public function getStaffByCampusSessionClassSectionSubjectId($campusSessionClassSectionSubjectId)
    {
        $staffByCampusSessionClassSectionSubjectId = $this->getWhere(['campusSessionClassSectionSubjectId' => $campusSessionClassSectionSubjectId])->getRow();

        if ($staffByCampusSessionClassSectionSubjectId)
        {
            return $staffByCampusSessionClassSectionSubjectId;
        }
        else
        {
            return false;
        }
    }
}