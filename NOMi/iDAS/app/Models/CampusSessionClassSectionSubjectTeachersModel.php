<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassSectionSubjectTeachersModel extends Model
{
	protected $table			= 'campus_session_class_section_subject_teachers';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionClassSectionSubjectId', 'staffId'];

    public function getStaffByCampusSessionClassSectionSubjectId($campusSessionClassSectionSubjectId)
    {
        $staffByCampusSessionClassSectionSubjectId = $this->getWhere(['campusSessionClassSectionSubjectId' => $campusSessionClassSectionSubjectId])->getRow();

        if ($staffByCampusSessionClassSectionSubjectId)
        {
            return $staffByCampusSessionClassSectionSubjectId;
        }
        else
        {
            return false;
        }
    }
}