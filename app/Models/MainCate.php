<?php

namespace App\Models;
use CodeIgniter\Model;


class MainCate extends Model{
	protected $table      = 'maincate';
    protected $primaryKey = 'MainCateId';
    protected $returnType     = 'object';
   	protected $allowedFields = ['Name'];
 	protected $useSoftDeletes = false;
    protected $useTimestamps = false;
    protected $skipValidation     = false;
}

?>