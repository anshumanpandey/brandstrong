<?php

namespace App\Models;
use CodeIgniter\Model;


class Job extends Model{
	protected $table      = 'jobs';
    protected $primaryKey = 'JobId';
    protected $returnType     = 'object';
   	protected $allowedFields = ['CustomerId','SubCateId','Title','Description','SpecialRequest','Hanger','JobStatus','JobCompletedDate','DownloadLink','ProjectOutput'];
 	protected $useSoftDeletes = false;
    protected $useTimestamps = false;
    protected $skipValidation     = false;
}

?>