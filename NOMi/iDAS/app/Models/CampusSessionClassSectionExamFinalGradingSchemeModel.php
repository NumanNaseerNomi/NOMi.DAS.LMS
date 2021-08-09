<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionExamFinalGradingSchemeModel extends Model
{
	protected $table			= 'campus_session_class_section_exam_finalGradingScheme';
	protected $returnType		= 'object';
	// protected $allowedFields	= [''];

    // public function getFinalResultGradingScheme()
    // {
    //     $finalResultGradingScheme = $this->get()->getResult();

    //     if ($finalResultGradingScheme)
    //     {
    //         return $finalResultGradingScheme;
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }

    public function getFinalResultGradingSchemeByCampusSessionClassSectionExamId($campus_session_class_section_examId)
    {
        $finalResultGradingSchemeByCampusSessionClassSectionExamId = $this->getWhere(['campus_session_class_section_examId' => $campus_session_class_section_examId])->getRow();

        if ($finalResultGradingSchemeByCampusSessionClassSectionExamId)
        {
            return $finalResultGradingSchemeByCampusSessionClassSectionExamId;
        }
        else
        {
            return false;
        }
    }

    // public function getGradeByMarks($marks)
    // {
    //     $gradeByMarks = $this->getWhere(['minMarks <=' => $marks, 'maxMarks >=' => $marks])->getRow();

    //     if ($gradeByMarks)
    //     {
    //         return $gradeByMarks;
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }
}