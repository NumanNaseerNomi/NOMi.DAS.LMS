<?php namespace App\Models;

use CodeIgniter\Model;

class ResultGradingSchemeModel extends Model
{
	protected $table			= 'resultGradingScheme';
	protected $returnType		= 'object';
	// protected $allowedFields	= [''];

    public function getResultGradingScheme()
    {
        $resultGradingScheme = $this->get()->getResult();

        if ($resultGradingScheme)
        {
            return $resultGradingScheme;
        }
        else
        {
            return false;
        }
    }

    public function getGradeByMarks($marks)
    {
        $gradeByMarks = $this->getWhere(['minMarks <=' => $marks, 'maxMarks >=' => $marks])->getRow();

        if ($gradeByMarks)
        {
            return $gradeByMarks;
        }
        else
        {
            return false;
        }
    }
}