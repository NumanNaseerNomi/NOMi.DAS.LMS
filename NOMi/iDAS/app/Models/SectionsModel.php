<?php namespace App\Models;

use CodeIgniter\Model;

class SectionsModel extends Model
{
	protected $table			= 'sections';
	protected $returnType		= 'object';
	protected $allowedFields	= ['section'];

    public function getSection($sectionsID)
    {
        $section = $this->getWhere(['id' => $sectionsID])->getRow();

        if ($section)
        {
            return $section;
        }
        else
        {
            return false;
        }
    }

    public function getSections()
    {
        $sections = $this->get()->getResult();

        if ($sections)
        {
            return $sections;
        }
        else
        {
            return false;
        }
    }
}