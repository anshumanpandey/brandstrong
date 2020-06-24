<?php namespace App\Controllers;
use App\Models\ModelOwner;
use App\Models\MainCate;
use App\Models\SubCate;
use App\Models\Feedback;
use App\Models\FlightBlog;
use App\Models\ModelCustomer;
use App\Models\Question;
use App\Models\Job;
use App\Models\JobAssets;
use App\Models\JobAssign;

class Owner extends BaseController
{
	var $owner='';
	var $maincate='';
	var $subcate='';
	var $feedback='';
	var $flightblog='';
	var $customer='';
	var $question='';
	var $job='';
	var $jobassets='';
	var $jobassign='';
	var $session='';
	var	$db='';
	public function __construct() {
		helper('form');
		$this->session = \Config\Services::session();
		$this->owner=new ModelOwner();
		$this->maincate=new MainCate();
		$this->subcate=new SubCate();
		$this->feedback=new Feedback();
		$this->flightblog=new FlightBlog();
		$this->customer=new ModelCustomer();
		$this->question=new Question();
		$this->job=new Job();
		$this->jobassign=new JobAssign();
		$this->jobassets=new JobAssets();
		$this->db=\Config\Database::connect();
	}
	public function login()
	{
		return view('owner/index');
	}
	public function logout()
	{
		$this->session->destroy();
		return redirect()->to(base_url().'/owner/login');
	}
	public function checkLogin()
	{
		$check=$this->owner->where("EmailId",$this->request->getpost('email'))->where("Password",base64_encode($this->request->getpost('password')))->first();
		if(empty($check)){
			$data['status']=['status'=>0,'message'=>"Invalid email address and password"];
		}else{
			print_r($check);
			$newdata = [
				'FirstName'  => $check->FirstName,
				'LastName'     => $check->LastName,
				'Type' => $check->Type,
				'OwnerId' => $check->OwnerId,
				'ProfilePic' => $check->ProfilePic,
			];
			$this->session->set($newdata);
		//	echo "Aaaaaaaaaaaaaa".$this->session->get('FirstName');
			return redirect()->to(base_url().'/owner/job');
			$data['status']=['status'=>1,'message'=>"Successful Login"];
		}
		return view('owner/index',$data);
	}
	public function maincate()
	{
		$data['active']="maincate";
		$data['maincate']=$this->maincate->findAll();
		return view('owner/maincate',$data);
	}
	public function maincateInsert()
	{
		$data=[
			'Name'=>$this->request->getpost('Name'),
		];
		if($this->maincate->insert($data)){
			$data['status']=['status'=>1,'message'=>"Successful Inserted"];
		}else{
			$data['status']=['status'=>0,'message'=>"Not Inserted"];
		}
		$data['active']="maincate";
		$data['maincate']=$this->maincate->findAll();
		return view('owner/maincate',$data);
	}
	public function maincateEditForm($id)
	{
		$editData=$this->maincate->where("MainCateId",$id)->find();
		$data['editData']=$editData[0];
		$data['active']="maincate";
		$data['maincate']=$this->maincate->findAll();
		return view('owner/maincate',$data);
	}
	
	public function maincateEdit()
	{
		$data=[
			'Name'=>$this->request->getpost('Name'),
		];
		if($this->maincate->update($this->request->getpost('MainCateId'),$data)){
			$data['status']=['status'=>1,'message'=>"Successful Edited"];
		}else{
			$data['status']=['status'=>0,'message'=>"Not Edited"];
			$editData=$this->maincate->where("MainCateId",$this->request->getpost('MainCateId'))->find();
			$data['editData']=$editData[0];
		}
		$data['active']="maincate";
		$data['maincate']=$this->maincate->findAll();
		return view('owner/maincate',$data);
	}

	public function subcate()
	{
		$data['active']="subcate";
		$data['maincate']=$this->maincate->findAll();
		$data['subcate']=$this->db->table('subcate')
		->select("subcate.*,maincate.Name as 'MainCateName'")
		->join('maincate', 'maincate.MainCateId = subcate.MainCateId')
		->get()
		->getResult();
		return view('owner/subcate',$data);
	}
	public function subcateInsert()
	{
		$validated = $this->validate([
			'Logo' => [
				'uploaded[Logo]',
				'mime_in[Logo,image/jpg,image/jpeg,image/gif,image/png]',
				'max_size[Logo,5120]',
			],
		]);
		if ($validated) {
			$file = $this->request->getFile('Logo');
			$new_filename=$file->getRandomName();
			$file->move(ROOTPATH . 'public/owner/images/category',$new_filename);
			$data=[
				'MainCateId'=>$this->request->getpost('MainCateId'),
				'Name'=>$this->request->getpost('Name'),
				'Logo'=>$new_filename,
				'ProjectOutput'=>$this->request->getpost('ProjectOutput'),
			];
			if($this->subcate->insert($data)){
				$data['status']=['status'=>1,'message'=>"Successful Inserted"];
			}else{
				$data['status']=['status'=>0,'message'=>"Not Inserted"];
			}
		}else{
			$data['status']=['status'=>0,'message'=>"Please Upload jpg,gif and png image and max file size 5MB"];
		}

		$data['active']="subcate";
		$data['maincate']=$this->maincate->findAll();
		$data['subcate']=$this->db->table('subcate')
		->select("subcate.*,maincate.Name as 'MainCateName'")
		->join('maincate', 'maincate.MainCateId = subcate.MainCateId')
		->get()
		->getResult();
		return view('owner/subcate',$data);
	}
	public function subcateEditForm($id)
	{
		$editData=$this->subcate->where("SubCateId",$id)->find();
		$data['editData']=$editData[0];
		$data['active']="subcate";
		$data['maincate']=$this->maincate->findAll();
		$data['subcate']=$this->db->table('subcate')
		->select("subcate.*,maincate.Name as 'MainCateName'")
		->join('maincate', 'maincate.MainCateId = subcate.MainCateId')
		->get()
		->getResult();
		return view('owner/subcate',$data);
	}	
	public function subcateEdit()
	{
		if($this->request->getFile('Logo')==""){
			$data=[
				'MainCateId'=>$this->request->getpost('MainCateId'),
				'Name'=>$this->request->getpost('Name'),
				'ProjectOutput'=>$this->request->getpost('ProjectOutput'),
			];
			if($this->subcate->update($this->request->getpost('SubCateId'),$data)){
				$data['status']=['status'=>1,'message'=>"Successful Edited"];
			}else{
				$data['status']=['status'=>0,'message'=>"Not Edited"];
				$editData=$this->subcate->where("SubCateId",$this->request->getpost('SubCateId'))->find();
				$data['editData']=$editData[0];
			}
		}else{

			$validated = $this->validate([
				'Logo' => [
					'uploaded[Logo]',
					'mime_in[Logo,image/jpg,image/jpeg,image/gif,image/png]',
					'max_size[Logo,5120]',
				],
			]);
			if ($validated) {
				$file = $this->request->getFile('Logo');
				$new_filename=$file->getRandomName();
				$file->move(ROOTPATH . 'public/owner/images/category',$new_filename);
				$data=[
					'MainCateId'=>$this->request->getpost('MainCateId'),
					'Name'=>$this->request->getpost('Name'),
					'Logo'=>$new_filename,
					'ProjectOutput'=>$this->request->getpost('ProjectOutput'),
				];

				if($this->subcate->update($this->request->getpost('SubCateId'),$data)){
					$data['status']=['status'=>1,'message'=>"Successful Edited"];
				}else{
					$data['status']=['status'=>0,'message'=>"Not Edited"];
					$editData=$this->subcate->where("SubCateId",$this->request->getpost('SubCateId'))->find();
					$data['editData']=$editData[0];
				}
			}else{
				$data['status']=['status'=>0,'message'=>"Please Upload jpg,gif and png image and max file size 5MB"];
			}
		}
		$data['active']="subcate";
		$data['maincate']=$this->maincate->findAll();
		$data['subcate']=$this->db->table('subcate')
		->select("subcate.*,maincate.Name as 'MainCateName'")
		->join('maincate', 'maincate.MainCateId = subcate.MainCateId')
		->get()
		->getResult();
		return view('owner/subcate',$data);
	}

	public function feedback()
	{
		$data['active']="feedback";
		$data['feedback']=$this->db->table('feedback')
		->select("feedback.*,customer.FirstName as 'CustomerFirstName',customer.LastName as 'CustomerLastName',customer.EmailId as 'CustomerEmail',customer.Phone as 'CustomerPhone'")
		->join('customer', 'customer.CustomerId = feedback.CustomerId')
		->where('feedback.Status',1)
		->get()
		->getResult();
		return view('owner/feedback',$data);
	}

	public function flightblog()
	{
		$data['active']="flightblog";
		$data['flightblog']=$this->flightblog->findAll();
		return view('owner/flightblog',$data);
	}
	public function flightblogInsert()
	{
		$data=[
			'Version'=>$this->request->getpost('Version'),
			'Title'=>$this->request->getpost('Title'),
			'Description'=>$this->request->getpost('Description'),
		];
		if($this->flightblog->insert($data)){
			$data['status']=['status'=>1,'message'=>"Successful Inserted"];
		}else{
			$data['status']=['status'=>0,'message'=>"Not Inserted"];
		}
		$data['active']="flightblog";
		$data['flightblog']=$this->flightblog->findAll();
		return view('owner/flightblog',$data);
	}
	public function flightblogEditForm($id)
	{
		$editData=$this->flightblog->where("FlightBlogId",$id)->find();
		$data['editData']=$editData[0];
		$data['active']="flightblog";
		$data['flightblog']=$this->flightblog->findAll();
		return view('owner/flightblog',$data);
	}
	
	public function flightblogEdit()
	{
		$data=[
			'Version'=>$this->request->getpost('Version'),
			'Title'=>$this->request->getpost('Title'),
			'Description'=>$this->request->getpost('Description'),
		];
		if($this->flightblog->update($this->request->getpost('FlightBlogId'),$data)){
			$data['status']=['status'=>1,'message'=>"Successful Edited"];
		}else{
			$data['status']=['status'=>0,'message'=>"Not Edited"];
			$editData=$this->flightblog->where("FlightBlogId",$this->request->getpost('FlightBlogId'))->find();
			$data['editData']=$editData[0];
		}
		$data['active']="flightblog";
		$data['flightblog']=$this->flightblog->findAll();
		return view('owner/flightblog',$data);
	}

	public function customer()
	{
		$data['active']="customer";
		$data['customer']=$this->db->table('customer')
		->select("customer.*,country.Name as 'CountryName'")
		->join('country', 'country.CountryId = customer.CountryId')
		->get()
		->getResult();
		return view('owner/customer',$data);
	}

	public function staff()
	{
		$data['active']="staff";
		$data['staff']=$this->owner->findAll();
		return view('owner/staff',$data);
	}
	public function staffInsert()
	{
		$validated = $this->validate([
			'ProfilePic' => [
				'uploaded[ProfilePic]',
				'mime_in[ProfilePic,image/jpg,image/jpeg,image/gif,image/png]',
				'max_size[ProfilePic,5120]',
			],
		]);
		if ($validated) {
			$file = $this->request->getFile('ProfilePic');
			$new_filename=$file->getRandomName();
			$file->move(ROOTPATH . 'public/owner/images/owner',$new_filename);
			$data=[
				'FirstName'=>$this->request->getpost('FirstName'),
				'LastName'=>$this->request->getpost('LastName'),
				'ProfilePic'=>$new_filename,
				'Phone'=>$this->request->getpost('Phone'),
				'EmailId'=>$this->request->getpost('EmailId'),
				'Password'=>base64_encode($this->request->getpost('Password')),
				'Designation'=>$this->request->getpost('Designation'),
			];
			if($this->owner->insert($data)){
				$data['status']=['status'=>1,'message'=>"Successful Inserted"];
			}else{
				$data['status']=['status'=>0,'message'=>"Not Inserted"];
			}
		}else{
			$data['status']=['status'=>0,'message'=>"Please Upload jpg,gif and png image and max file size 5MB"];
		}

		$data['active']="staff";
		$data['staff']=$this->owner->findAll();
		return view('owner/staff',$data);
	}
	public function staffEditForm($id)
	{
		$editData=$this->owner->where("OwnerId",$id)->find();
		$data['editData']=$editData[0];
		$data['active']="staff";
		$data['staff']=$this->owner->findAll();
		return view('owner/staff',$data);
	}	
	public function staffEdit()
	{
		if($this->request->getFile('ProfilePic')==""){
			$data=[
				'FirstName'=>$this->request->getpost('FirstName'),
				'LastName'=>$this->request->getpost('LastName'),
				'Phone'=>$this->request->getpost('Phone'),
				'EmailId'=>$this->request->getpost('EmailId'),
				'Password'=>base64_encode($this->request->getpost('Password')),
				'Designation'=>$this->request->getpost('Designation'),
			];
			if($this->owner->update($this->request->getpost('OwnerId'),$data)){
				$data['status']=['status'=>1,'message'=>"Successful Edited"];
			}else{
				$data['status']=['status'=>0,'message'=>"Not Edited"];
				$editData=$this->owner->where("OwnerId",$this->request->getpost('OwnerId'))->find();
				$data['editData']=$editData[0];
			}
		}else{

			$validated = $this->validate([
				'ProfilePic' => [
					'uploaded[ProfilePic]',
					'mime_in[ProfilePic,image/jpg,image/jpeg,image/gif,image/png]',
					'max_size[ProfilePic,5120]',
				],
			]);
			if ($validated) {
				$file = $this->request->getFile('ProfilePic');
				$new_filename=$file->getRandomName();
				$file->move(ROOTPATH . 'public/owner/images/owner',$new_filename);
				$data=[
						'FirstName'=>$this->request->getpost('FirstName'),
						'LastName'=>$this->request->getpost('LastName'),
						'ProfilePic'=>$new_filename,
						'Phone'=>$this->request->getpost('Phone'),
						'EmailId'=>$this->request->getpost('EmailId'),
						'Password'=>base64_encode($this->request->getpost('Password')),
						'Designation'=>$this->request->getpost('Designation'),
				];
			
				if($this->owner->update($this->request->getpost('OwnerId'),$data)){
					$data['status']=['status'=>1,'message'=>"Successful Edited"];
				}else{
					$data['status']=['status'=>0,'message'=>"Not Edited"];
					$editData=$this->subcate->where("OwnerId",$this->request->getpost('OwnerId'))->find();
					$data['editData']=$editData[0];
				}
			}else{
				$data['status']=['status'=>0,'message'=>"Please Upload jpg,gif and png image and max file size 5MB"];
			}
		}
		
		$data['active']="staff";
		$data['staff']=$this->owner->findAll();
		return view('owner/staff',$data);
	}

	public function profile()
	{
		$data['active']="profile";
		$profile=$this->owner->where("OwnerId",session('OwnerId'))->get()->getResult();
		$data['profile']=$profile[0];
		return view('owner/profile',$data);
	}
	public function profileEdit()
	{
		if($this->request->getFile('ProfilePic')==""){
			$data=[
				'FirstName'=>$this->request->getpost('FirstName'),
				'LastName'=>$this->request->getpost('LastName'),
				'Phone'=>$this->request->getpost('Phone'),
				'Designation'=>$this->request->getpost('Designation'),
			];
			if($this->owner->update(session('OwnerId'),$data)){
				$data['status']=['status'=>1,'message'=>"Successful Edited"];
				$newdata = [
					'FirstName'  => $this->request->getpost('FirstName'),
					'LastName'     => $this->request->getpost('LastName'),
				];
				$this->session->set($newdata);
			}else{
				$data['status']=['status'=>0,'message'=>"Not Edited"];
			}
		}else{

			$validated = $this->validate([
				'ProfilePic' => [
					'uploaded[ProfilePic]',
					'mime_in[ProfilePic,image/jpg,image/jpeg,image/gif,image/png]',
					'max_size[ProfilePic,5120]',
				],
			]);
			if ($validated) {
				$file = $this->request->getFile('ProfilePic');
				$new_filename=$file->getRandomName();
				$file->move(ROOTPATH . 'public/owner/images/owner',$new_filename);
				$data=[
						'FirstName'=>$this->request->getpost('FirstName'),
						'LastName'=>$this->request->getpost('LastName'),
						'ProfilePic'=>$new_filename,
						'Phone'=>$this->request->getpost('Phone'),
						'Designation'=>$this->request->getpost('Designation'),
				];
				if($this->owner->update($this->request->getpost('OwnerId'),$data)){
					$data['status']=['status'=>1,'message'=>"Successful Edited"];
					$newdata = [
						'FirstName'  => $this->request->getpost('FirstName'),
						'LastName'     => $this->request->getpost('LastName'),
						'ProfilePic' => $new_filename,
					];
					$this->session->set($newdata);
				}else{
					$data['status']=['status'=>0,'message'=>"Not Edited"];
				}
			}else{
				$data['status']=['status'=>0,'message'=>"Please Upload jpg,gif and png image and max file size 5MB"];
			}
		}
		
		$data['active']="profile";
		$profile=$this->owner->where("OwnerId",session('OwnerId'))->get()->getResult();
		$data['profile']=$profile[0];
		return view('owner/profile',$data);
	}

	public function changepass()
	{
		$data['active']="changepass";
		return view('owner/changepass',$data);
	}
	public function changepassEdit()
	{
		$opass=base64_encode($this->request->getpost('opass'));
		$npass=base64_encode($this->request->getpost('npass'));
		$cpass=base64_encode($this->request->getpost('cpass'));
		$check=$this->owner->where("OwnerId",session('OwnerId'))->where("Password",$opass)->first();
		if($npass!=$cpass){
			$data['status']=['status'=>0,'message'=>"Miss match new password and confirm password"];
		}elseif(empty($check)){
			$data['status']=['status'=>0,'message'=>"Invalid Old Password"];
		}else{
			$data=[
				'Password'=>$npass,
			];
			if($this->owner->update(session('OwnerId'),$data)){
				$data['status']=['status'=>1,'message'=>"Successful Password Changed"];
			}else{
				$data['status']=['status'=>0,'message'=>"Not Changed"];
			}
		}
		$data['active']="changepass";
		return view('owner/changepass',$data);
	}

	public function question()
	{
		$data['active']="question";
		$data['subcate']=$this->subcate->findAll();
		$data['question']=$this->db->table('subcate_question')
		->select("subcate_question.*,subcate.Name as 'SubCateName'")
		->join('subcate', 'subcate.SubCateId = subcate_question.SubCateId')
		->get()
		->getResult();
		return view('owner/question',$data);
	}
	public function questionInsert()
	{
		$data=[
			'SubCateId'=>$this->request->getpost('SubCateId'),
			'Title'=>$this->request->getpost('Title'),
		];
		if($this->question->insert($data)){
			$data['status']=['status'=>1,'message'=>"Successful Inserted"];
		}else{
			$data['status']=['status'=>0,'message'=>"Not Inserted"];
		}
		$data['active']="question";
		$data['subcate']=$this->subcate->findAll();
		$data['question']=$this->db->table('subcate_question')
		->select("subcate_question.*,subcate.Name as 'SubCateName'")
		->join('subcate', 'subcate.SubCateId = subcate_question.SubCateId')
		->get()
		->getResult();
		return view('owner/question',$data);
	}
	public function questionEditForm($id)
	{
		$editData=$this->question->where("QuestionId",$id)->find();
		$data['editData']=$editData[0];
		$data['active']="question";
		$data['subcate']=$this->subcate->findAll();
		$data['question']=$this->db->table('subcate_question')
		->select("subcate_question.*,subcate.Name as 'SubCateName'")
		->join('subcate', 'subcate.SubCateId = subcate_question.SubCateId')
		->get()
		->getResult();
		return view('owner/question',$data);
	}
	
	public function questionEdit()
	{
		$data=[
			'SubCateId'=>$this->request->getpost('SubCateId'),
			'Title'=>$this->request->getpost('Title'),
		];
		if($this->question->update($this->request->getpost('QuestionId'),$data)){
			$data['status']=['status'=>1,'message'=>"Successful Edited"];
		}else{
			$data['status']=['status'=>0,'message'=>"Not Edited"];
			$editData=$this->question->where("QuestionId",$this->request->getpost('QuestionId'))->find();
			$data['editData']=$editData[0];
		}
		$data['active']="question";
		$data['subcate']=$this->subcate->findAll();
		$data['question']=$this->db->table('subcate_question')
		->select("subcate_question.*,subcate.Name as 'SubCateName'")
		->join('subcate', 'subcate.SubCateId = subcate_question.SubCateId')
		->get()
		->getResult();
		return view('owner/question',$data);
	}
	public function job()
	{
		$data['active']="job";
		$data['job']=$this->db->table('jobs')
		->select("jobs.*,customer.FirstName as 'CustomerFirstName',customer.LastName as 'CustomerLastName',customer.EmailId as 'CustomerEmail',customer.Phone as 'CustomerPhone',subcate.Name as 'SubCateName'")
		->join('customer', 'customer.CustomerId = jobs.CustomerId')
		->join('subcate', 'subcate.SubCateId = jobs.SubCateId')
		->get()
		->getResult();
		return view('owner/job',$data);
	}
	public function jobManage($id){
		$data['active']="job";
		$data['jobassign']=$this->db->table('job_assign_staff')
		->select("job_assign_staff.*,owner.FirstName,owner.LastName,owner.ProfilePic,owner.EmailId,owner.Phone,owner.Designation")
		->join('owner', 'owner.OwnerId = job_assign_staff.OwnerId')
		->where("job_assign_staff.JobId",$id)
		->get()
		->getResult();
		$data['JobId']=$id;
		$data['staff']=$this->owner->where("Type",0)->get()->getResult();	
		$data['job']=$this->job->where("JobId",$id)->first();	
		$data['questionanswer']=$this->db->table('subcate_question')
		->select("job_question_answer.*,subcate_question.*")
		->join('job_question_answer', 'job_question_answer.QuestionId = subcate_question.QuestionId')
		->where('job_question_answer.JobId',$id)
		->get()
		->getResult();
		return view('owner/jobmanage',$data);
	}
	public function jobAssignStaff(){
		$id=$this->request->getpost('JobId');
		$data=[
			'JobId'=>$id,
			'OwnerId'=>$this->request->getpost('OwnerId'),
		];
		if($this->jobassign->insert($data)){
			$data['status']=['status'=>1,'message'=>"Successful Inserted"];
		}else{
			$data['status']=['status'=>0,'message'=>"Not Inserted"];
		}
		$data['active']="job";
		$data['jobassign']=$this->db->table('job_assign_staff')
		->select("job_assign_staff.*,owner.FirstName,owner.LastName,owner.ProfilePic,owner.EmailId,owner.Phone,owner.Designation")
		->join('owner', 'owner.OwnerId = job_assign_staff.OwnerId')
		->where("job_assign_staff.JobId",$id)
		->get()
		->getResult();
		$data['JobId']=$id;
		$data['staff']=$this->owner->where("Type",0)->get()->getResult();	
		$data['job']=$this->job->where("JobId",$id)->first();	
		$data['questionanswer']=$this->db->table('subcate_question')
		->select("job_question_answer.*,subcate_question.*")
		->join('job_question_answer', 'job_question_answer.QuestionId = subcate_question.QuestionId')
		->where('job_question_answer.JobId',$id)
		->get()
		->getResult();
		return view('owner/jobmanage',$data);

	}
	public function jobWork(){
		$id=$this->request->getpost('JobId');
		$validated = $this->validate([
			'work' => [
				'uploaded[work]',
				'max_size[work,51200]',
			],
		]);
		if ($validated) {
			$file = $this->request->getFile('work');
			$new_filename=$file->getRandomName();
			$file->move(ROOTPATH . 'public/owner/images/job/completed',$new_filename);
			$data=[
				'DownloadLink'=>$new_filename,
				'JobCompletedDate'=>date('yy-m-d'),
				'JobStatus'=>3,
			];
			if($this->job->update($id,$data)){
				$data['status2']=['status'=>1,'message'=>"Successful Uploaded Work"];
			}else{
				$data['status2']=['status'=>0,'message'=>"Work Not Uploaded"];
			}
		}else{
			$data['status2']=['status'=>0,'message'=>"Please upload max file size 50MB"];
		}

	
		$data['active']="job";
		$data['jobassign']=$this->db->table('job_assign_staff')
		->select("job_assign_staff.*,owner.FirstName,owner.LastName,owner.ProfilePic,owner.EmailId,owner.Phone,owner.Designation")
		->join('owner', 'owner.OwnerId = job_assign_staff.OwnerId')
		->where("job_assign_staff.JobId",$id)
		->get()
		->getResult();
		$data['JobId']=$id;
		$data['staff']=$this->owner->where("Type",0)->get()->getResult();	
		$data['job']=$this->job->where("JobId",$id)->first();	
		$data['questionanswer']=$this->db->table('subcate_question')
		->select("job_question_answer.*,subcate_question.*")
		->join('job_question_answer', 'job_question_answer.QuestionId = subcate_question.QuestionId')
		->where('job_question_answer.JobId',$id)
		->get()
		->getResult();
		return view('owner/jobmanage',$data);
	}

	public function deleteData(){
		$id=$this->request->getpost('id');
		$table=$this->request->getpost('table');
		if($table=='maincate'){
			if($this->maincate->delete($id)){
				echo true;
			}else{
				echo false;
			}	
		}elseif($table=='subcate'){
			if($this->subcate->delete($id)){
				echo true;
			}else{
				echo false;
			}	
		}elseif($table=='feedback'){
			$data=[
				'Status'=>0,
			];
			if($this->feedback->update($id,$data)){
				echo true;
			}else{
				echo false;
			}	
		}elseif($table=='flightblog'){
			if($this->flightblog->delete($id)){
				echo true;
			}else{
				echo false;
			}	
		}elseif($table=='staff'){
			if($this->owner->delete($id)){
				echo true;
			}else{
				echo false;
			}	
		}elseif($table=='question'){
			if($this->question->delete($id)){
				echo true;
			}else{
				echo false;
			}	
		}elseif($table=='jobassign'){
			if($this->jobassign->delete($id)){
				echo true;
			}else{
				echo false;
			}	
		}
	}
}
