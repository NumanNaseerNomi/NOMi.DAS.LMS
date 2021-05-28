<?php namespace App\Models;

use CodeIgniter\Model;

class CampusStudentsModel extends Model
{
	protected $table			= 'campus_students';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['studentID', 'campusID'];

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