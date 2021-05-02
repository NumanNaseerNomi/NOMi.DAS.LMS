<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassStudentsModel extends Model
{
	protected $table			= 'campus_session_class_students';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionClassId', 'sectionId'];

    public function getCampusSessionClassStudentById($campusSessionClassStudentId)
    {
        $campusSessionClassStudentById = $this->getWhere(['id' => $campusSessionClassStudentId])->getRow();

        if ($campusSessionClassStudentById)
        {
            return $campusSessionClassStudentById;
        }
        else
        {
            return false;
        }
    }

    public function getCampusSessionClassStudents()
    {
        $campusSessionClassStudents = $this->get()->getResult();

        if ($campusSessionClassStudents)
        {
            return $campusSessionClassStudents;
        }
        else
        {
            return false;
        }
    }

    public function getStudentsByCampusSessionClassId($campusSessionClassId)
    {
        $campusSessionClassStudents = $this->getWhere(['campusSessionClassId' => $campusSessionClassId])->getResult();

        if ($campusSessionClassStudents)
        {
            return $campusSessionClassStudents;
        }
        else
        {
            return false;
        }
    }

    public function getCampusSessionClassesByStudentId($studentId)
    {
        $campusSessionClassStudents = $this->getWhere(['studentId' => $studentId])->getResult();

        if ($campusSessionClassStudents)
        {
            return $campusSessionClassStudents;
        }
        else
        {
            return false;
        }
    }
}