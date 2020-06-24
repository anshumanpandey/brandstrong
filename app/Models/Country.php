<?php

namespace App\Models;
use CodeIgniter\Model;


class Country extends Model{
	protected $table      = 'country';
    protected $primaryKey = 'CountryId';
    protected $returnType     = 'object';
   	protected $allowedFields = ['Name'];
 	protected $useSoftDeletes = false;
    protected $useTimestamps = false;
    protected $skipValidation     = false;
}

?>