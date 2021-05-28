<?php namespace App\Models;

use CodeIgniter\Model;

class ParentsModel extends Model
{
	protected $table			= 'parents';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['name'];

    public function getParentById($parentId)
    {
        $parent = $this->getWhere(['id' => $parentId])->getRow();

        if ($parent)
        {
            return $parent;
        }
        else
        {
            return false;
        }
    }
}