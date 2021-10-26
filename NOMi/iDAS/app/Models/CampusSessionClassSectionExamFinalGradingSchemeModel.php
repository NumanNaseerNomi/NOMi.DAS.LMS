<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionExamFinalGradingSchemeModel extends Model
{
	protected $table			= 'campus_session_class_section_exam_finalGradingScheme';
	protected $returnType		= 'object';
	// protected $allowedFields	= [''];

    public function getFinalGradingSchemeByCampusSessionClassSectionExamId($campusSessionClassSectionExamId)
    {
        $finalGradingSchemeByCampusSessionClassSectionExamId = $this->getWhere(['campusSessionClassSectionExamId' => $campusSessionClassSectionExamId])->getRow();

        if ($finalGradingSchemeByCampusSessionClassSectionExamId)
        {
            return $finalGradingSchemeByCampusSessionClassSectionExamId;
        }
        else
        {
            return false;
        }
    }
}