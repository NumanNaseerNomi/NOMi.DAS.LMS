<?php namespace App\Models;

use CodeIgniter\Model;

class CampusStudentsModel extends Model
{
	protected $table			= 'campus_students';
	protected $returnType		= 'object';
	protected $allowedFields	= ['studentID', 'campusID'];

    public function getCampusStudent($campusStudentID)
    {
        $campusStudent = $this->getWhere(['id' => $campusStudentID])->getRow();

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

    public function getStudentsByCampusID($campusID)
    {
        $studentsByCampusID = $this->getWhere(['campusID' => $campusID])->getResult();

        if ($studentsByCampusID)
        {
            return $studentsByCampusID;
        }
        else
        {
            return false;
        }
    }

    public function getCampusByStudentID($studentID)
    {
        $campusByStudentID = $this->getWhere(['studentID' => $studentID])->getRow();

        if ($campusByStudentID)
        {
            return $campusByStudentID;
        }
        else
        {
            return false;
        }
    }
}