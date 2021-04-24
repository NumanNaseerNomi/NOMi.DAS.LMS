<?php namespace App\Models;

use CodeIgniter\Model;

class ClassesModel extends Model
{
	protected $table			= 'classes';
	protected $returnType		= 'object';
	protected $allowedFields	= ['class'];

    public function getClass($classID)
    {
        $class = $this->getWhere(['id' => $classID])->getRow();

        if ($class)
        {
            return $class;
        }
        else
        {
            return false;
        }
    }

    public function getClasses()
    {
        $classes = $this->get()->getResult();

        if ($classes)
        {
            return $classes;
        }
        else
        {
            return false;
        }
    }
}