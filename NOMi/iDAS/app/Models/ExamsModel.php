<?php namespace App\Models;

use CodeIgniter\Model;

class ExamsModel extends Model
{
	protected $table			= 'exams';
	protected $returnType		= 'object';
	// protected $allowedFields	= [''];

    public function getExamById($id)
    {
        $examById = $this->getWhere(['id' => $id])->getRow();

        if ($examById)
        {
            return $examById;
        }
        else
        {
            return false;
        }
    }
}