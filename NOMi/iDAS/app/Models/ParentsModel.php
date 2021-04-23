<?php namespace App\Models;

use CodeIgniter\Model;

class ParentsModel extends Model
{
	protected $table			= 'parents';
	protected $returnType		= 'object';
	protected $allowedFields	= ['name'];

    public function getParent($parentID)
    {
        $parent = $this->getWhere(['id' => $parentID])->getRow();

        if ($parent)
        {
            return $parent;
        }
        else
        {
            return false;
        }
    }

    public function getAllParents()
    {
        $allParents = $this->get()->getResult();

        if ($allParents)
        {
            return $allParents;
        }
        else
        {
            return false;
        }
    }

    public function getParentNID($parentID)
    {
        $parent = $this->getWhere(['id' => $parentID])->getRow();

        if ($parent)
        {
            return $parent->nid;
        }
        else
        {
            return false;
        }
    }

    public function getParentName($parentID)
    {
        $parent = $this->getWhere(['id' => $parentID])->getRow();

        if ($parent)
        {
            return $parent->name;
        }
        else
        {
            return false;
        }
    }

    public function getParentDOB($parentID)
    {
        $parent = $this->getWhere(['id' => $parentID])->getRow();

        if ($parent)
        {
            return $parent->dob;
        }
        else
        {
            return false;
        }
    }
}