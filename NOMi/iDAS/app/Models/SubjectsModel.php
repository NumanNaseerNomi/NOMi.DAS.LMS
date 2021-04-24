<?php namespace App\Models;

use CodeIgniter\Model;

class SubjectsModel extends Model
{
	protected $table			= 'subjects';
	protected $returnType		= 'object';
	protected $allowedFields	= ['session'];

    public function getSubject($subjectID)
    {
        $subject = $this->getWhere(['id' => $subjectID])->getRow();

        if ($subject)
        {
            return $subject;
        }
        else
        {
            return false;
        }
    }

    public function getSubjects()
    {
        $subjects = $this->get()->getResult();

        if ($subjects)
        {
            return $subjects;
        }
        else
        {
            return false;
        }
    }
}