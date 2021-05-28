<?php namespace App\Models;

use CodeIgniter\Model;

class ClassesModel extends Model
{
	protected $table			= 'classes';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['class'];

    public function getClassById($id)
    {
        $classById = $this->getWhere(['id' => $id])->getRow();

        if ($classById)
        {
            return $classById;
        }
        else
        {
            return false;
        }
    }
}