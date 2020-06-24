<?php

namespace App\Models;
use CodeIgniter\Model;


class SubCate extends Model{
	protected $table      = 'subcate';
    protected $primaryKey = 'SubCateId';
    protected $returnType     = 'object';
   	protected $allowedFields = ['MainCateId','Name','Logo','ProjectOutput'];
 	protected $useSoftDeletes = false;
    protected $useTimestamps = false;
    protected $skipValidation     = false;
}

?>