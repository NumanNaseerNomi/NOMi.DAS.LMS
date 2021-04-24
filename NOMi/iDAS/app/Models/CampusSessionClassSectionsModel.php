<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionsModel extends Model
{
	protected $table			= 'campus_session_class_sections';
	protected $returnType		= 'object';
	protected $allowedFields	= ['campusSessionClassID', 'sectionID'];

    public function getCampusSessionClassSection($campusSessionClassSectionID)
    {
        $campusSessionClassSection = $this->getWhere(['id' => $campusSessionClassSectionID])->getRow();

        if ($campusSessionClassSection)
        {
            return $campusSessionClassSection;
        }
        else
        {
            return false;
        }
    }

    public function getCampusSessionClassSections()
    {
        $campusSessionClassSections = $this->get()->getResult();

        if ($campusSessionClassSections)
        {
            return $campusSessionClassSections;
        }
        else
        {
            return false;
        }
    }
}