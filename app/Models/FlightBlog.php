<?php

namespace App\Models;
use CodeIgniter\Model;


class FlightBlog extends Model{
	protected $table      = 'flight_blog';
    protected $primaryKey = 'FlightBlogId';
    protected $returnType     = 'object';
   	protected $allowedFields = ['Title','Description','Version'];
 	protected $useSoftDeletes = false;
    protected $useTimestamps = false;
    protected $skipValidation     = false;
}

?>