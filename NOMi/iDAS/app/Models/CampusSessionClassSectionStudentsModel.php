<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionStudentsModel extends Model
{
	protected $table			= 'campus_session_class_section_students';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionClassSectionId', 'studentId'];

    public function getCampusSessionClassSectionsByStudentId($studentId)
    {
        $campusSessionClassSectionsByStudentId = $this->getWhere(['studentId' => $studentId])->getResult();

        if ($campusSessionClassSectionsByStudentId)
        {
            return $campusSessionClassSectionsByStudentId;
        }
        else
        {
            return false;
        }
    }
}