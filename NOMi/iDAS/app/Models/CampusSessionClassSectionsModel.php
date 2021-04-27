<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionsModel extends Model
{
	protected $table			= 'campus_session_class_sections';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionClassId', 'sectionId'];

    public function getCampusSessionClassSection($campusSessionClassSectionId)
    {
        $campusSessionClassSection = $this->getWhere(['id' => $campusSessionClassSectionId])->getRow();

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

    public function getSectionsByCampusSessionClassId($campusSessionClassId)
    {
        $campusSessionClassSections = $this->getWhere(['campusSessionClassId' => $campusSessionClassId])->getResult();

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