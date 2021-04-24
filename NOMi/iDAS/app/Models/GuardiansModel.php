<?php namespace App\Models;

use CodeIgniter\Model;

class GuardiansModel extends Model
{
	protected $table			= 'guardians';
	protected $returnType		= 'object';
	protected $allowedFields	= ['relation'];

    public function getGuardian($guardianID)
    {
        $guardian = $this->getWhere(['id' => $guardianID])->getRow();

        if ($guardian)
        {
            return $guardian;
        }
        else
        {
            return false;
        }
    }

    public function getGuardians()
    {
        $guardians = $this->get()->getResult();

        if ($guardians)
        {
            return $guardians;
        }
        else
        {
            return false;
        }
    }
}