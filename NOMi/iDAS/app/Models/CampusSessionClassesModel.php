<?php namespace App\Models;

use CodeIgniter\Model;

class CampusSessionClassesModel extends Model
{
	protected $table			= 'campus_session_classes';
	protected $returnType		= 'object';
	// protected $allowedFields	= ['campusSessionId', 'classId'];

    public function getCampusSessionClass($campusSessionClassId)
    {
        $campusSessionClass = $this->getWhere(['id' => $campusSessionClassId])->getRow();

        if ($campusSessionClass)
        {
            return $campusSessionClass;
        }
        else
        {
            return false;
        }
    }

    public function getCampusSessionClasses()
    {
        $campusSessionClasses = $this->get()->getResult();

        if ($campusSessionClasses)
        {
            return $campusSessionClasses;
        }
        else
        {
            return false;
        }
    }

    public function getClassesByCampusSessionId($campusSessionId)
    {
        $campusSessionClasses = $this->getWhere(['campusSessionId' => $campusSessionId])->getResult();

        if ($campusSessionClasses)
        {
            return $campusSessionClasses;
        }
        else
        {
            return false;
        }
    }



//     public function getClassesByCampusSessionId($campusSessionId)
//     {
//       //  $db      = \Config\Database::connect();
// $builder = $this->db->table($table);        // 'mytablename' is the name of your table

// $builder->select('id');       // names of your columns
// $builder->where(['campusSessionId' => $campusSessionId]);                // where clause
// $query = $builder->get()->getResult();


//         $campusSessionClasses = $this->select('id')->where(['campusSessionId' => $campusSessionId])->getCompiledSelect();

//         if ($query)
//         {
//             return $query;
//         }
//         else
//         {
//             return false;
//         }
//     }
}