<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionExamSubjectsModel extends Model
{
	protected $table			= 'campus_session_class_section_exam_subjects';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionClassSectionExamId', 'subjectId'];

    public function getCampusSessionClassSectionExamSubjectById($id)
    {
        $campusSessionClassSectionExamSubjectById = $this->getWhere(['id' => $id])->getRow();

        if ($campusSessionClassSectionExamSubjectById)
        {
            return $campusSessionClassSectionExamSubjectById;
        }
        else
        {
            return false;
        }
    }
}