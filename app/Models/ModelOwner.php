<?php

namespace App\Models;
use CodeIgniter\Model;


class ModelOwner extends Model{
	protected $table      = 'owner';
    protected $primaryKey = 'OwnerId';
    protected $returnType     = 'object';
    protected $allowedFields = ['FirstName','LastName','ProfilePic','Phone','EmailId','Password','Designation','Status'];
	protected $useSoftDeletes = false;
    protected $useTimestamps = false;
    protected $skipValidation     = false;
}

?>