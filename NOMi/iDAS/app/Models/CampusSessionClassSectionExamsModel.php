<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionExamsModel extends Model
{
	protected $table			= 'campus_session_class_section_exams';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionClassSectionId', 'examId'];

    public function getCampusSessionClassSectionExamById($id)
    {
        $campusSessionClassSectionExamById = $this->getWhere(['id' => $id])->getRow();

        if ($campusSessionClassSectionExamById)
        {
            return $campusSessionClassSectionExamById;
        }
        else
        {
            return false;
        }
    }
}