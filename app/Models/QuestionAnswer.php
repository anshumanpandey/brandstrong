<?php

namespace App\Models;
use CodeIgniter\Model;


class QuestionAnswer extends Model{
	protected $table      = 'job_question_answer';
    protected $primaryKey = 'AnswerId';
    protected $returnType     = 'object';
   	protected $allowedFields = ['JobId','QuestionId','Answer'];
 	protected $useSoftDeletes = false;
    protected $useTimestamps = false;
    protected $skipValidation     = false;
}

?>