<?php

namespace App\Models;
use CodeIgniter\Model;


class ModelCustomer extends Model{
	protected $table      = 'customer';
    protected $primaryKey = 'CustomerId';
    protected $returnType     = 'object';
   	protected $allowedFields = ['FirstName','LastName','Company','ProfilePic','EmailId','Phone','TimeZone','UserName','Password','BOD','Position','Address','City','CountryId','Status'];
 	protected $useSoftDeletes = false;
    protected $useTimestamps = false;
    protected $skipValidation     = false;
}

?>