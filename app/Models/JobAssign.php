<?php

namespace App\Models;
use CodeIgniter\Model;


class JobAssign extends Model{
	protected $table      = 'job_assign_staff';
    protected $primaryKey = 'AssignStaffId';
    protected $returnType     = 'object';
   	protected $allowedFields = ['JobId','OwnerId'];
 	protected $useSoftDeletes = false;
    protected $useTimestamps = false;
    protected $skipValidation     = false;
}

?>