<?php namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
	protected $table			= 'students';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['name'];

    public function getStudentById($studentId)
    {
        $student = $this->getWhere(['id' => $studentId])->getRow();

        if ($student)
        {
            return $student;
        }
        else
        {
            return false;
        }
    }
}