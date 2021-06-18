<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionExamSubjectStudentsMarksModel extends Model
{
	protected $table			= 'campus_session_class_section_exam_subject_students_marks';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionClassSectionExamSubjectId', 'studentId', 'marks'];

    public function getCampusSessionClassSectionExamSubjectMarksByStudentId($studentId)
    {
        $campusSessionClassSectionExamSubjectMarksByStudentId = $this->getWhere(['studentId' => $studentId])->getResult();

        if ($campusSessionClassSectionExamSubjectMarksByStudentId)
        {
            return $campusSessionClassSectionExamSubjectMarksByStudentId;
        }
        else
        {
            return false;
        }
    }
}