<?php namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
	protected $table			= 'students';
	protected $returnType		= 'object';
	protected $allowedFields	= ['name'];

    public function getStudent($studentID)
    {
        $student = $this->getWhere(['id' => $studentID])->getRow();

        if ($student)
        {
            return $student;
        }
        else
        {
            return false;
        }
    }

    public function getStudents()
    {
        $students = $this->get()->getResult();

        if ($students)
        {
            return $students;
        }
        else
        {
            return false;
        }
    }

    public function getStudentNID($studentID)
    {
        $student = $this->getWhere(['id' => $studentID])->getRow();

        if ($student)
        {
            return $student->nid;
        }
        else
        {
            return false;
        }
    }

    public function getStudentName($studentID)
    {
        $student = $this->getWhere(['id' => $studentID])->getRow();

        if ($student)
        {
            return $student->name;
        }
        else
        {
            return false;
        }
    }

    public function getStudentDOB($studentID)
    {
        $student = $this->getWhere(['id' => $studentID])->getRow();

        if ($student)
        {
            return $student->dob;
        }
        else
        {
            return false;
        }
    }

    public function getStudentParentID($studentID)
    {
        $student = $this->getWhere(['id' => $studentID])->getRow();

        if ($student)
        {
            return $student->parentID;
        }
        else
        {
            return false;
        }
    }
}