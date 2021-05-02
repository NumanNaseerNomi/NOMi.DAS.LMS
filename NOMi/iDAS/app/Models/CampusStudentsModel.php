<?php namespace App\Models;

use CodeIgniter\Model;

class CampusStudentsModel extends Model
{
	protected $table			= 'campus_students';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['studentID', 'campusID'];

    public function getCampusStudentById($campusStudentId)
    {
        $campusStudent = $this->getWhere(['id' => $campusStudentId])->getRow();

        if ($campusStudent)
        {
            return $campusStudent;
        }
        else
        {
            return false;
        }
    }

    public function getCampusStudents()
    {
        $campusStudents = $this->get()->getResult();

        if ($campusStudents)
        {
            return $campusStudents;
        }
        else
        {
            return false;
        }
    }

    public function getStudentsByCampusId($campusId)
    {
        $studentsByCampusId = $this->getWhere(['campusId' => $campusId])->getResult();

        if ($studentsByCampusId)
        {
            return $studentsByCampusId;
        }
        else
        {
            return false;
        }
    }

    public function getCampusByStudentId($studentId)
    {
        $campusByStudentId = $this->getWhere(['studentId' => $studentId])->getRow();

        if ($campusByStudentId)
        {
            return $campusByStudentId;
        }
        else
        {
            return false;
        }
    }
}