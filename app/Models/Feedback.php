<?php

namespace App\Models;
use CodeIgniter\Model;


class Feedback extends Model{
	protected $table      = 'feedback';
    protected $primaryKey = 'FeedbackId';
    protected $returnType     = 'object';
   	protected $allowedFields = ['CustomerId','Title','Note','File','Tags','Status'];
 	protected $useSoftDeletes = false;
    protected $useTimestamps = false;
    protected $skipValidation     = false;
}

?>