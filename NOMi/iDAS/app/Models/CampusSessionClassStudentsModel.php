<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassStudentsModel extends Model
{
	protected $table			= 'campus_session_class_students';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionClassId', 'sectionId'];

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