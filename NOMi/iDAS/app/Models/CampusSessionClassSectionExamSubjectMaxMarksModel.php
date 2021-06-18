<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionExamSubjectMaxMarksModel extends Model
{
	protected $table			= 'campus_session_class_section_exam_subject_maxmarks';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionClassSectionExamSubjectId', 'maxMarks'];

    public function getMaxMarksByCampusSessionClassSectionExamSubjectId($campusSessionClassSectionExamSubjectId)
    {
        $maxMarksByCampusSessionClassSectionExamSubjectId = $this->getWhere(['campusSessionClassSectionExamSubjectId' => $campusSessionClassSectionExamSubjectId])->getRow();

        if ($maxMarksByCampusSessionClassSectionExamSubjectId)
        {
            return $maxMarksByCampusSessionClassSectionExamSubjectId;
        }
        else
        {
            return false;
        }
    }
}