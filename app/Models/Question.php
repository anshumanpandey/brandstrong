<?php

namespace App\Models;
use CodeIgniter\Model;


class Question extends Model{
	protected $table      = 'subcate_question';
    protected $primaryKey = 'QuestionId';
    protected $returnType     = 'object';
   	protected $allowedFields = ['SubCateId','Title'];
 	protected $useSoftDeletes = false;
    protected $useTimestamps = false;
    protected $skipValidation     = false;
}

?>