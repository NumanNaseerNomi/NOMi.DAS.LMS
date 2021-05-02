<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionStudentsModel extends Model
{
	protected $table			= 'campus_session_class_section_students';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionClassSectionId', 'studentId'];

    public function getCampusSessionClassSectionSubjectById($campusSessionClassSectionStudentId)
    {
        $campusSessionClassSectionStudentById = $this->getWhere(['id' => $campusSessionClassSectionStudentId])->getRow();

        if ($campusSessionClassSectionStudentById)
        {
            return $campusSessionClassSectionStudentById;
        }
        else
        {
            return false;
        }
    }

    public function getCampusSessionClassSectionStudents()
    {
        $campusSessionClassSectionStudents = $this->get()->getResult();

        if ($campusSessionClassSectionStudents)
        {
            return $campusSessionClassSectionStudents;
        }
        else
        {
            return false;
        }
    }

    public function getStudentsByCampusSessionClassSectionId($campusSessionClassSectionId)
    {
        $studentsByCampusSessionClassSectionId = $this->getWhere(['campusSessionClassSectionId' => $campusSessionClassSectionId])->getResult();

        if ($studentsByCampusSessionClassSectionId)
        {
            return $studentsByCampusSessionClassSectionId;
        }
        else
        {
            return false;
        }
    }

    public function getCampusSessionClassSectionByStudentId($studentId)
    {
        $campusSessionClassSectionByStudentId = $this->getWhere(['studentId' => $studentId])->getResult();

        if ($campusSessionClassSectionByStudentId)
        {
            return $campusSessionClassSectionByStudentId;
        }
        else
        {
            return false;
        }
    }
}