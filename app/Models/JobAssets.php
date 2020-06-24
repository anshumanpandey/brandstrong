<?php

namespace App\Models;
use CodeIgniter\Model;


class JobAssets extends Model{
	protected $table      = 'job_assets';
    protected $primaryKey = 'AssetsId';
    protected $returnType     = 'object';
   	protected $allowedFields = ['JobId','File'];
 	protected $useSoftDeletes = false;
    protected $useTimestamps = false;
    protected $skipValidation     = false;
}

?>