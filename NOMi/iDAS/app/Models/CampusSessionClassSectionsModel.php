<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionsModel extends Model
{
	protected $table			= 'campus_session_class_sections';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionClassId', 'sectionId'];

    public function getCampusSessionClassSectionById($id)
    {
        $campusSessionClassSectionById = $this->getWhere(['id' => $id])->getRow();

        if ($campusSessionClassSectionById)
        {
            return $campusSessionClassSectionById;
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