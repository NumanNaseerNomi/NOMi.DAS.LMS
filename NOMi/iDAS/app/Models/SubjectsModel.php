<?php namespace App\Models;

use CodeIgniter\Model;

class SubjectsModel extends Model
{
	protected $table			= 'subjects';
	protected $returnType		= 'object';
	// protected $allowedFields	= [''];

    public function getSubjectById($id)
    {
        $subjectById = $this->getWhere(['id' => $id])->getRow();

        if ($subjectById)
        {
            return $subjectById;
        }
        else
        {
            return false;
        }
    }
}