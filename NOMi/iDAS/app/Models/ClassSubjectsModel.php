<?php namespace App\Models;

use CodeIgniter\Model;

class ClassSubjectsModel extends Model
{
	protected $table			= 'class_subjects';
	protected $returnType		= 'object';
	protected $allowedFields	= ['classId', 'subjectId'];

    public function getClassSubject($classSubjectID)
    {
        $classSubject = $this->getWhere(['id' => $classSubjectID])->getRow();

        if ($classSubject)
        {
            return $classSubject;
        }
        else
        {
            return false;
        }
    }

    public function getClassSubjects()
    {
        $classSubjects = $this->get()->getResult();

        if ($classSubjects)
        {
            return $classSubjects;
        }
        else
        {
            return false;
        }
    }

    public function getSubjectsByClassId($classId)
    {
        $subjectsByClassId = $this->getWhere(['classId' => $classId])->getResult();

        if ($subjectsByClassId)
        {
            return $subjectsByClassId;
        }
        else
        {
            return false;
        }
    }
}