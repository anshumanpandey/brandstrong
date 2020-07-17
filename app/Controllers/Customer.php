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
use App\Models\Country;
use App\Models\QuestionAnswer;

class Customer extends BaseController
{
	var $owner='';
	var $maincate='';
	var $country='';
	var $subcate='';
	var $feedback='';
	var $flightblog='';
	var $customer='';
	var $question='';
	var $job='';
	var $jobassets='';
	var $jobassign='';
	var $questionanswer='';
	var $session='';
	var	$db='';
	public function __construct() {
		helper('form');
		$this->session = \Config\Services::session();
		$this->owner=new ModelOwner();
		$this->maincate=new MainCate();
		$this->country=new Country();
		$this->subcate=new SubCate();
		$this->feedback=new Feedback();
		$this->flightblog=new FlightBlog();
		$this->customer=new ModelCustomer();
		$this->question=new Question();
		$this->job=new Job();
		$this->jobassign=new JobAssign();
		$this->jobassets=new JobAssets();
		$this->questionanswer=new QuestionAnswer();
		$this->db=\Config\Database::connect();
	}
	public function login()
	{
		return view('customer/login');
	}
	public function signup()
	{
		$data['country']=$this->country->findAll();
		return view('customer/signup',$data);
	}
	public function signupData()
	{
		$pass=$this->request->getpost('pass');
		$cpass=$this->request->getpost('cpass');
		$check=$this->customer->where("UserName",$this->request->getpost('UserName'))->first();
		if($pass!=$cpass){
			$data['status']=['status'=>0,'message'=>"Miss match new password and confirm password"];
		}elseif(!empty($check)){
			$data['status']=['status'=>0,'message'=>"User Name Is Already Exists"];
		}else{
			$data=[
				'FirstName'=>$this->request->getpost('FirstName'),
				'LastName'=>$this->request->getpost('LastName'),
				'Company'=>$this->request->getpost('Company'),
				'EmailId'=>$this->request->getpost('EmailId'),
				'Phone'=>$this->request->getpost('Phone'),
				'TimeZone'=>$this->request->getpost('TimeZone'),
				'UserName'=>$this->request->getpost('UserName'),
				'Password'=>base64_encode($this->request->getpost('pass')),
				'CountryId'=>$this->request->getpost('CountryId'),
			];
			if($this->customer->insert($data)){
				$data['status']=['status'=>1,'message'=>"Successful Created New Account"];
			}else{
				$data['status']=['status'=>0,'message'=>"Not Inserted"];
			}
		}
		$data['country']=$this->country->findAll();
		return view('customer/signup',$data);
	}
	public function logout()
	{
		$this->session->destroy();
		return redirect()->to(base_url().'/');
	}
	public function checkLogin()
	{
		$check=$this->customer->where("UserName",$this->request->getpost('username'))->where("Password",base64_encode($this->request->getpost('password')))->first();
		if(empty($check)){
			$data['status']=['status'=>0,'message'=>"Invalid user name and password"];
		}else{
			$newdata = [
				'CustomerFirstName'  => $check->FirstName,
				'CustomerLastName'     => $check->LastName,
				'CustomerId' => $check->CustomerId,
				'CustomerProfilePic' => $check->ProfilePic,
			];
			$this->session->set($newdata);
		//	echo "Aaaaaaaaaaaaaa".$this->session->get('FirstName');
			return redirect()->to(base_url().'/dashboard');
			$data['status']=['status'=>1,'message'=>"Successful Login"];
		}
		return view('customer/login',$data);
	}
	public function checkforget()
	{
		$check=$this->customer->where("UserName",$this->request->getpost('username'))->where("EmailId",$this->request->getpost('EmailId'))->first();
		if(empty($check)){
			$data['status']=['status'=>0,'message'=>"Invalid user name and Email id"];
		}else{
			$otp=rand(100000,999999);
			$newdata = [
				'ForgetCustomerId' => $check->CustomerId,
				'Forgetotp' => $otp,
			];
			$this->session->set($newdata);
			echo view('mail_send/email_send.php');
				 sendmail($this->request->getpost('EmailId'), "<div style='margin: 0px 10%;text-align: center;'>
		<div style='background:rgba(250,67,67,0.9);color:white;padding: 15px 30px;font-size:16px;text-align: center;cursor: pointer;margin:10px auto;'>Lobby</div>
		  Hi,<br/>
		  We got a request to reset your Lobby Website password.
		    <br/><br/> <font style='font-size:18px;'>OTP : ".session('Forgetotp')."</font><br/>
		If you ignore this message, your password won't be changed.
		</div>", 'Lobby | Reset Password');
			$data['status']=['status'=>1,'message'=>"Please Check Your Email"];
			return view('customer/otp',$data);
		}
		return view('customer/forget',$data);
	}
	public function checkotp()
	{
		if(session('Forgetotp')!=$this->request->getpost('otp')){
			$data['status']=['status'=>0,'message'=>"Invalid OTP"];
		}else{
			$data['status']=['status'=>1,'message'=>"Otp Is Verifed"];
			return view('customer/newpass',$data);
		}
		return view('customer/otp',$data);
	}
	public function newpass()
	{
		$npass=base64_encode($this->request->getpost('npass'));
		$cpass=base64_encode($this->request->getpost('cpass'));
		if($npass!=$cpass){
			$data['status']=['status'=>0,'message'=>"Miss match new password and confirm password"];
		}else{
			$data=[
				'Password'=>$npass,
			];
			if($this->customer->update(session('ForgetCustomerId'),$data)){
				$data['status']=['status'=>1,'message'=>"Successful Password Changed"];
				return view('customer/login',$data);
			}else{
				$data['status']=['status'=>0,'message'=>"Try Again"];
			}
		}
		return view('customer/newpass',$data);
	}
	public function forget(){
		return view('customer/forget');		
	}
	public function mail(){
		echo view('mail_send/email_send.php');
		 sendmail("kakadiyaatman@gmail.com", "<div style='margin: 0px 10%;text-align: center;'>
<div style='background:rgba(250,67,67,0.9);color:white;padding: 15px 30px;font-size:16px;text-align: center;cursor: pointer;margin:10px auto;'><i>Lobby</i></div>
  Hi,<br/>
  We got a request to reset your Lobby Website password.
    <br/><br/> <font style='font-size:18px;'>OTP : </font><br/>
If you ignore this message, your password won't be changed.
</div>", 'atman kakadiya');

	}
	public function dashboard()
	{
		$data['active']="dashboard";
		$data['ActiveJob']=$this->db->table('jobs')
		->select("jobs.*,subcate.Name as 'SubCateName'")
		->join('subcate', 'subcate.SubCateId = jobs.SubCateId')
		->where("CustomerId",session('CustomerId'))
		->where("JobStatus",1)
		->where("Hanger",0)
		->get()
		->getResult();
		$data['QueueJob']=$this->db->table('jobs')
		->select("jobs.*,subcate.Name as 'SubCateName'")
		->join('subcate', 'subcate.SubCateId = jobs.SubCateId')
		->where("CustomerId",session('CustomerId'))
		->where("JobStatus",2)
		->where("Hanger",0)
		->get()
		->getResult();
		$data['CompletedJob']=$this->db->table('jobs')
		->select("jobs.*,subcate.Name as 'SubCateName'")
		->join('subcate', 'subcate.SubCateId = jobs.SubCateId')
		->where("CustomerId",session('CustomerId'))
		->where("JobStatus",3)
		->where("Hanger",0)
		->get()
		->getResult();
		return view('customer/dashboard',$data);
	}
	public function jobs()
	{
		$data['active']="jobs";
		$data['Job']=$this->db->table('jobs')
		->select("jobs.*,subcate.Name as 'SubCateName'")
		->join('subcate', 'subcate.SubCateId = jobs.SubCateId')
		->where("CustomerId",session('CustomerId'))
		->where("Hanger",0)
		->get()
		->getResult();
		return view('customer/jobs',$data);
	}
	public function jobsStatus($id)
	{
		$data['active']="jobs";
		$data['Job']=$this->db->table('jobs')
		->select("jobs.*,subcate.Name as 'SubCateName'")
		->join('subcate', 'subcate.SubCateId = jobs.SubCateId')
		->where("CustomerId",session('CustomerId'))
		->where("Hanger",0)
		->get()
		->getResult();
		if($id==1){
			$data['status']=['status'=>1,'message'=>"Successful Request Submited"];
		}elseif($id==0){
			$data['status']=['status'=>0,'message'=>"Try Again"];
		}
		return view('customer/jobs',$data);
	}
	public function jobsStatusChange($id,$status)
	{
		if($status==1){
			$data=[
				'JobStatus'=>1,
				'Hanger'=>0,
			];
			if($this->job->update($id,$data)){
				$data['status']=['status'=>1,'message'=>"Job Status Successful Changed"];
			}else{
				$data['status']=['status'=>0,'message'=>"Try Again"];
			}
			$data['active']="jobs";
			$data['Job']=$this->db->table('jobs')
			->select("jobs.*,subcate.Name as 'SubCateName'")
			->join('subcate', 'subcate.SubCateId = jobs.SubCateId')
			->where("CustomerId",session('CustomerId'))
			->where("Hanger",0)
			->get()
			->getResult();
			return view('customer/jobs',$data);
		}elseif($status==2){
			$data=[
				'JobStatus'=>2,
				'Hanger'=>0,
			];
			if($this->job->update($id,$data)){
				$data['status']=['status'=>1,'message'=>"Job Status Successful Changed"];
			}else{
				$data['status']=['status'=>0,'message'=>"Try Again"];
			}
			$data['active']="jobs";
			$data['Job']=$this->db->table('jobs')
			->select("jobs.*,subcate.Name as 'SubCateName'")
			->join('subcate', 'subcate.SubCateId = jobs.SubCateId')
			->where("CustomerId",session('CustomerId'))
			->where("Hanger",0)
			->get()
			->getResult();
			return view('customer/jobs',$data);
		}elseif($status==3){
			$data=[
				'Hanger'=>1,
			];
			if($this->job->update($id,$data)){
				$data['status']=['status'=>1,'message'=>"Job Status Successful Changed"];
			}else{
				$data['status']=['status'=>0,'message'=>"Try Again"];
			}
			$data['active']="hangar";
			$data['Hangar']=$this->db->table('jobs')
			->select("jobs.*,subcate.Name as 'SubCateName'")
			->join('subcate', 'subcate.SubCateId = jobs.SubCateId')
			->where("CustomerId",session('CustomerId'))
			->where("Hanger",1)
			->get()
			->getResult();
			return view('customer/hangar',$data);
		}elseif($status==4){
			$this->job->delete($id);
			return redirect()->to(base_url('jobs'));
		}elseif($status==5){
			$singlejob=$this->job->where("JobId",$id)->first();
			$data=[
				'CustomerId'=>session('CustomerId'),
				'SubCateId'=>$singlejob->SubCateId,
				'Title'=>$singlejob->Title,
				'Description'=>$singlejob->Description,
				'SpecialRequest'=>$singlejob->SpecialRequest,
				'ProjectOutput'=>$singlejob->ProjectOutput,
				'Hanger'=>$singlejob->Hanger,
				'JobStatus'=>1,
			];
			if($this->job->insert($data)){
				$data['status']=['status'=>1,'message'=>"Successful Request Submited"];
			}else{
				$data['status']=['status'=>0,'message'=>"Try Again"];
			}
			
			$singlejobassets=$this->jobassets->where("JobId",$id)->get()->getResult();
		$last_id = $this->job->where("CustomerId",session('CustomerId'))->selectMax('JobId')->first();
			foreach ($singlejobassets as $item) {
		
				$data=[
					'CustomerId'=>session('CustomerId'),
					'JobId'=>$last_id->JobId,
					'File'=>$item->File,
				];
				$this->jobassets->insert($data);
			}
			$data['active']="jobs";
			$data['Job']=$this->db->table('jobs')
			->select("jobs.*,subcate.Name as 'SubCateName'")
			->join('subcate', 'subcate.SubCateId = jobs.SubCateId')
			->where("CustomerId",session('CustomerId'))
			->where("Hanger",0)
			->get()
			->getResult();
			return view('customer/jobs',$data);
		}
	}
	public function jobsDetails($id)
	{
		$job=$this->db->table('jobs')
		->select("jobs.*,subcate.Name as 'SubCateName'")
		->join('subcate', 'subcate.SubCateId = jobs.SubCateId')
		->where("jobs.JobId",$id)
		->get()
		->getResult();
		$data['Job']=$job[0];
		$data['questionanswer']=$this->db->table('subcate_question')
		->select("job_question_answer.*,subcate_question.*")
		->join('job_question_answer', 'job_question_answer.QuestionId = subcate_question.QuestionId')
		->where('job_question_answer.JobId',$id)
		->get()
		->getResult();
		$data['jobassign']=$this->db->table('job_assign_staff')
		->select("job_assign_staff.*,owner.FirstName,owner.LastName,owner.ProfilePic,owner.EmailId,owner.Phone,owner.Designation")
		->join('owner', 'owner.OwnerId = job_assign_staff.OwnerId')
		->where("job_assign_staff.JobId",$id)
		->get()
		->getResult();
		return view('customer/job-details',$data);
	}
	public function hangar()
	{
		$data['active']="hangar";
		$data['Hangar']=$this->db->table('jobs')
		->select("jobs.*,subcate.Name as 'SubCateName'")
		->join('subcate', 'subcate.SubCateId = jobs.SubCateId')
		->where("CustomerId",session('CustomerId'))
		->where("Hanger",1)
		->get()
		->getResult();
		return view('customer/hangar',$data);
	}
	public function hangarStatus($id)
	{
		$data['active']="hangar";
		$data['Hangar']=$this->db->table('jobs')
		->select("jobs.*,subcate.Name as 'SubCateName'")
		->join('subcate', 'subcate.SubCateId = jobs.SubCateId')
		->where("CustomerId",session('CustomerId'))
		->where("Hanger",1)
		->get()
		->getResult();
		if($id==1){
			$data['status']=['status'=>1,'message'=>"Successful Request Submited"];
		}elseif($id==0){
			$data['status']=['status'=>0,'message'=>"Try Again"];
		}
		return view('customer/hangar',$data);
	}
	public function feedback()
	{
		$data['active']="feedback";
		$data['feedback']=$this->feedback->where("CustomerId",session('CustomerId'))->get()->getResult();
		return view('customer/feedback',$data);
	}
	public function feedbackForm()
	{
		$data['active']="feedback";
		return view('customer/feedback-form',$data);
	}
	public function feedbackData()
	{

		if($this->request->getFile('File')==""){
			$data=[
				'CustomerId'=>session('CustomerId'),
				'Title'=>$this->request->getpost('Title'),
				'Note'=>$this->request->getpost('Note'),
				'Tags'=>$this->request->getpost('Tags'),
			];
			if($this->feedback->insert($data)){
				$data['status']=['status'=>1,'message'=>"Successful Inserted"];
			}else{
				$data['status']=['status'=>0,'message'=>"Not Inserted"];
			}
		}else{

			$validated = $this->validate([
				'File' => [
					'uploaded[File]',
					'max_size[File,10240]',
				],
			]);
			if ($validated) {
				$file = $this->request->getFile('File');
				$new_filename=$file->getRandomName();
				$file->move(ROOTPATH . 'public/owner/images/feedback',$new_filename);
				$data=[
					'CustomerId'=>session('CustomerId'),
					'Title'=>$this->request->getpost('Title'),
					'Note'=>$this->request->getpost('Note'),
					'File'=>$new_filename,
					'Tags'=>$this->request->getpost('Tags'),
				];
				if($this->feedback->insert($data)){
					$data['status']=['status'=>1,'message'=>"Successful Inserted"];
				}else{
					$data['status']=['status'=>0,'message'=>"Not Inserted"];
				}
			}else{
				$data['status']=['status'=>0,'message'=>"Please Upload max file size 10MB"];
			}
		}
		return redirect()->to(base_url().'/feedback');
	}
	public function request()
	{
		$data['maincate']=$this->maincate->findAll();
		$data['subcate']=$this->subcate->findAll();
		return view('customer/request',$data);
	}
	public function requestInfo($id)
	{
		$data['subcate']=$this->subcate->where("SubCateId",$id)->first();
		$data['question']=$this->question->where("SubCateId",$id)->get()->getResult();
		return view('customer/request-info',$data);
	}
	public function requestInsert(){
		if(empty($this->request->getpost('ProjectOutput'))){
			$ProjectOutput="";
		}else{
			$ProjectOutput=implode(",",$this->request->getpost('ProjectOutput'));
		}
		if($this->request->getpost('submit')=="Hangar"){
			$data=[
				'CustomerId'=>session('CustomerId'),
				'SubCateId'=>$this->request->getpost('SubCateId'),
				'Title'=>$this->request->getpost('Title'),
				'Description'=>$this->request->getpost('Description'),
				'SpecialRequest'=>$this->request->getpost('SpecialRequest'),
				'ProjectOutput'=>$ProjectOutput,
				'Hanger'=>1,
				'JobStatus'=>1,
			];
			if($this->job->insert($data)){
				$job_status=1;
			}else{
				$job_status=2;
			}

		}elseif($this->request->getpost('submit')=="RequestNow"){
			$data=[
				'CustomerId'=>session('CustomerId'),
				'SubCateId'=>$this->request->getpost('SubCateId'),
				'Title'=>$this->request->getpost('Title'),
				'Description'=>$this->request->getpost('Description'),
				'SpecialRequest'=>$this->request->getpost('SpecialRequest'),
				'ProjectOutput'=>$ProjectOutput,
				'Hanger'=>0,
				'JobStatus'=>1,
			];
			if($this->job->insert($data)){
				$job_status=3;
			}else{
				$job_status=4;
			}
		}
		$last_id = $this->job->where("CustomerId",session('CustomerId'))->selectMax('JobId')->first();

		$answer=$this->request->getpost('answer');
		$QuestionId=$this->request->getpost('QuestionId');
		for($i=0;$i<count($QuestionId);$i++){
				$data=[
					'JobId'=>$last_id->JobId,
					'QuestionId'=>$QuestionId[$i],
					'Answer'=>$answer[$i],
				];
				$this->questionanswer->insert($data);
		}
		if($_FILES['File']['name'][0]!=""){
			
			for($i=0;$i<count($_FILES['File']['name']);$i++) {
				$file=$this->request->getFile('File.'.$i);
				$new_filename=$file->getRandomName();
				$file->move(ROOTPATH . 'public/owner/images/job/assets',$new_filename);
				$data=[
					'CustomerId'=>session('CustomerId'),
					'JobId'=>$last_id->JobId,
					'File'=>$new_filename,
				];
				$this->jobassets->insert($data);
			}
		}

		if($job_status==1){
			return redirect()->to(base_url().'/hangar/1');
			
		}elseif($job_status==2){
			return redirect()->to(base_url().'/hangar/0');
			
		}elseif($job_status==3){
			return redirect()->to(base_url().'/jobs/1');

		}elseif($job_status==4){
			return redirect()->to(base_url().'/jobs/0');

		}
		
	}
	public function requestEditForm($id)
	{
		$data['EditJob']=$this->job->where("JobId",$id)->first();
		$data['subcate']=$this->subcate->where("SubCateId",$data['EditJob']->SubCateId)->first();
		return view('customer/request-info',$data);
	}
	public function requestEdit(){
		$id=$this->request->getpost('JobId');
		if(empty($this->request->getpost('ProjectOutput'))){
			$ProjectOutput="";
		}else{
			$ProjectOutput=implode(",",$this->request->getpost('ProjectOutput'));
		}
			$data=[
				'Title'=>$this->request->getpost('Title'),
				'Description'=>$this->request->getpost('Description'),
				'SpecialRequest'=>$this->request->getpost('SpecialRequest'),
				'ProjectOutput'=>$ProjectOutput,
			];
			if($this->job->update($id,$data)){
				$data['status']=['status'=>1,'message'=>"Successful Job Edited"];
			}else{
				$data['status']=['status'=>0,'message'=>"Not Edited"];
			}
		if($_FILES['File']['name'][0]!=""){
			$this->db->table('job_assets')->where("JobId",$id)->delete();
			for($i=0;$i<count($_FILES['File']['name']);$i++) {
				$file=$this->request->getFile('File.'.$i);
				$new_filename=$file->getRandomName();
				$file->move(ROOTPATH . 'public/owner/images/job/assets',$new_filename);
				$data=[
					'CustomerId'=>session('CustomerId'),
					'JobId'=>$id,
					'File'=>$new_filename,
				];
				$this->jobassets->insert($data);
			}
		}
		$job=$this->db->table('jobs')
		->select("jobs.*,subcate.Name as 'SubCateName'")
		->join('subcate', 'subcate.SubCateId = jobs.SubCateId')
		->where("jobs.JobId",$id)
		->get()
		->getResult();
		$data['Job']=$job[0];
		$data['questionanswer']=$this->db->table('subcate_question')
		->select("job_question_answer.*,subcate_question.*")
		->join('job_question_answer', 'job_question_answer.QuestionId = subcate_question.QuestionId')
		->where('job_question_answer.JobId',$id)
		->get()
		->getResult();
		$data['jobassign']=$this->db->table('job_assign_staff')
		->select("job_assign_staff.*,owner.FirstName,owner.LastName,owner.ProfilePic,owner.EmailId,owner.Phone,owner.Designation")
		->join('owner', 'owner.OwnerId = job_assign_staff.OwnerId')
		->where("job_assign_staff.JobId",$id)
		->get()
		->getResult();
		return view('customer/job-details',$data);
	}
	public function profile()
	{
		$profile=$this->db->table('customer')
		->select("customer.*,country.Name as 'CountryName'")
		->join('country', 'country.CountryId = customer.CountryId')
		->where("CustomerId",session('CustomerId'))
		->get()
		->getResult();
		$data['profile']=$profile[0];
		return view('customer/profile',$data);
	}
	public function profileEditForm()
	{
		$profile=$this->db->table('customer')
		->select("customer.*,country.Name as 'CountryName'")
		->join('country', 'country.CountryId = customer.CountryId')
		->where("CustomerId",session('CustomerId'))
		->get()
		->getResult();
		$data['country']=$this->country->findAll();
		$data['profile']=$profile[0];
		return view('customer/profile-edit',$data);
	}
	public function profileEdit()
	{
		if($this->request->getFile('ProfilePic')==""){
			$data=[
				'FirstName'=>$this->request->getpost('FirstName'),
				'LastName'=>$this->request->getpost('LastName'),
				'Company'=>$this->request->getpost('Company'),
				'TimeZone'=>$this->request->getpost('TimeZone'),
				'Phone'=>$this->request->getpost('Phone'),
				'EmailId'=>$this->request->getpost('EmailId'),
				'BOD'=>$this->request->getpost('BOD'),
				'Position'=>$this->request->getpost('Position'),
				'Address'=>$this->request->getpost('Address'),
				'City'=>$this->request->getpost('City'),
				'CountryId'=>$this->request->getpost('CountryId'),
			];
			if($this->customer->update(session('CustomerId'),$data)){
				$data['status']=['status'=>1,'message'=>"Successful Edited"];
			}else{
				$data['status']=['status'=>0,'message'=>"Not Edited"];
				$profile=$this->db->table('customer')
				->select("customer.*,country.Name as 'CountryName'")
				->join('country', 'country.CountryId = customer.CountryId')
				->where("CustomerId",session('CustomerId'))
				->get()
				->getResult();
				$data['country']=$this->country->findAll();
				$data['profile']=$profile[0];
				return view('customer/profile-edit',$data);
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
				$file->move(ROOTPATH . 'public/owner/images/customer',$new_filename);
				$data=[
					'FirstName'=>$this->request->getpost('FirstName'),
					'LastName'=>$this->request->getpost('LastName'),
					'Company'=>$this->request->getpost('Company'),
					'ProfilePic'=>$new_filename,
					'TimeZone'=>$this->request->getpost('TimeZone'),
					'Phone'=>$this->request->getpost('Phone'),
					'EmailId'=>$this->request->getpost('EmailId'),
					'BOD'=>$this->request->getpost('BOD'),
					'Position'=>$this->request->getpost('Position'),
					'Address'=>$this->request->getpost('Address'),
					'City'=>$this->request->getpost('City'),
					'CountryId'=>$this->request->getpost('CountryId'),
				];
				if($this->customer->update(session('CustomerId'),$data)){
					$data['status']=['status'=>1,'message'=>"Successful Edited"];
				}else{
					$data['status']=['status'=>0,'message'=>"Not Edited"];
					$profile=$this->db->table('customer')
					->select("customer.*,country.Name as 'CountryName'")
					->join('country', 'country.CountryId = customer.CountryId')
					->where("CustomerId",session('CustomerId'))
					->get()
					->getResult();
					$data['country']=$this->country->findAll();
					$data['profile']=$profile[0];
					return view('customer/profile-edit',$data);
				}
			}else{
				$data['status']=['status'=>0,'message'=>"Please Upload jpg,gif and png image and max file size 5MB"];
				$profile=$this->db->table('customer')
					->select("customer.*,country.Name as 'CountryName'")
					->join('country', 'country.CountryId = customer.CountryId')
					->where("CustomerId",session('CustomerId'))
					->get()
					->getResult();
					$data['country']=$this->country->findAll();
					$data['profile']=$profile[0];
					return view('customer/profile-edit',$data);
			}
		}
		$profile=$this->db->table('customer')
		->select("customer.*,country.Name as 'CountryName'")
		->join('country', 'country.CountryId = customer.CountryId')
		->where("CustomerId",session('CustomerId'))
		->get()
		->getResult();
		$data['profile']=$profile[0];
		return view('customer/profile',$data);
	}
	public function flightblog()
	{
		$data['flightblog']=$this->flightblog->orderBy('FlightBlogId','Desc')->findAll();
		return view('customer/flightblog',$data);
	}
	public function notificationSettings()
	{
		return view('customer/notification_settings');
	}
	public function upgrades()
	{
		return view('customer/upgrades');
	}

    public function payment()
    {
        
		//require_once('application/libraries/stripe-php/init.php');
		require_once 'vendor/autoload.php';

     
        $stripeSecret = 'sk_test_HhxyRxk4c5NKiesy0OmkuztJ00spfFLR25';        
        $stripe = new \Stripe\StripeClient($stripeSecret);
        try {
			$paymentMethod = $stripe->paymentMethods->create([
				'type' => 'card',
				'card' => [
					'number' => '4242424242424242',
					'exp_month' => 7,
					'exp_year' => 2021,
					'cvc' => '314',
				],
			]);
			echo '<pre>';
			print_r($paymentMethod);
			echo '</pre>';

			$customer = $stripe->customers->create([
				'name' => 'Test customer',
				'email' => 'test@gmail.com',
				'description' => 'My First Test Customer (created for API docs)',
				'payment_method' => $paymentMethod->id,
				'invoice_settings' => array (
					'default_payment_method' => $paymentMethod->id
				)
			]);
			echo '<pre>';
			print_r($customer);
			echo '</pre>';

			$subscriptions = $stripe->subscriptions->create([
				'customer' => $customer->id,
				'items' => array(
					array(
						'plan' => 'price_1H5mg0Ikc0DnWOSShs8A5RBI', 
						'quantity' => 1 
					)
				)
			]);
			echo '<pre>';
			print_r($subscriptions);
			echo '</pre>';


        } catch (\Throwable $th) {
			echo '<pre>';
			print_r($th);
			echo '</pre>';die;

            echo json_decode($th->getMessage());
        }
	}
	
	public function changepass()
	{
		return view('customer/changepass');
	}
	public function changepassEdit()
	{
		$opass=base64_encode($this->request->getpost('opass'));
		$npass=base64_encode($this->request->getpost('npass'));
		$cpass=base64_encode($this->request->getpost('cpass'));
		$check=$this->customer->where("CustomerId",session('CustomerId'))->where("Password",$opass)->first();
		if($npass!=$cpass){
			$data['status']=['status'=>0,'message'=>"Miss match new password and confirm password"];
		}elseif(empty($check)){
			$data['status']=['status'=>0,'message'=>"Invalid Old Password"];
		}else{
			$data=[
				'Password'=>$npass,
			];
			if($this->customer->update(session('CustomerId'),$data)){
				$data['status']=['status'=>1,'message'=>"Successful Password Changed"];
			}else{
				$data['status']=['status'=>0,'message'=>"Not Changed"];
			}
		}
		return view('customer/changepass',$data);
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

	public function deleteData(){
		$id=$this->request->getpost('id');
		$table=$this->request->getpost('table');
		if($table=='feedback'){
			if($this->feedback->delete($id)){
				echo true;
			}else{
				echo false;
			}	
		}
	}

}
