<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{	
		redirect('home/ShowData','refesh');
	}
	
	public function insertAjax(){
			
			if(empty($_POST['id'])){
				
			
					$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
					$this->form_validation->set_rules('name', 'name', 'required');
					//$this->form_validation->set_rules('id', 'id', 'required');
					$msg = array();
					if ($this->form_validation->run() == FALSE)
					{	
						$msg['message'] = validation_errors();
						$msg['code'] = 0;
						echo json_encode($msg); exit;
						
					}
					else {
						
						$name    = trim(strip_tags($_POST['name']));
						$address = trim(strip_tags($_POST['address']));
						$phone   = trim(strip_tags($_POST['phone']));
						$email   = trim(strip_tags($_POST['email']));
						
						date_default_timezone_set("Asia/Ho_Chi_Minh");
						$created_at = date("Y-m-d H:i:s");
						$updated_at = date("Y-m-d H:i:s");
						
						$result=$this->student->insertstudent(NULL, $name, $address, $phone, $email,$created_at,$updated_at);
						
						if($result)
						{
							$msg['message'] = "<p style='color: blue;font-weight:bold;'>Successfully Data Inserted</p>";
							$msg['code'] = 1;
							echo json_encode($msg); exit;
						}
						else {
							
							$msg['message'] = "<p style=''>Insert error</p>";
							$msg['code'] = 0;
							echo json_encode($msg); exit;
						}
				
					}
			}
			else {
				
				$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
				$this->form_validation->set_rules('name', 'name', 'required');
				$this->form_validation->set_rules('id', 'id', 'required');
				
				$msg = array();
				
				if ($this->form_validation->run() == FALSE)
				{
					$msg['message'] = validation_errors();
					$msg['code'] = 0;
					echo json_encode($msg); exit;
				}
				else {
					
					$id = $_POST['id'];
					$name = trim(strip_tags($_POST['name']));
					$address = trim(strip_tags($_POST['address']));
					$phone = trim(strip_tags($_POST['phone']));
					$email = trim(strip_tags($_POST['email']));
				
					$created_at = $_POST['created_at'];
				
					date_default_timezone_set("Asia/Ho_Chi_Minh");
				
					$updated_at = date("Y-m-d H:i:s");
					$result = $this->student->updatestudent($id, $name, $address, $phone, $email,$created_at,$updated_at);
				
					if($result)
					{
					
						$msg['message'] = "<p style='color: blue;font-weight:bold;'>Update data successful</p>";
						$msg['code'] = 0;
						echo json_encode($msg); exit;
					}
					else {
						
						$msg['message'] = "<p style=''>Updated error</p>";
						$msg['code'] = 0;
						echo json_encode($msg); exit;
					}
			}
			
		}
	}	
	
	public function insertstudent()
	{ 
	 		$this->load->view('file/header');
	 	 	$this->load->view('file/menu');
	 	 
			if (isset($_POST['submit']))
			{
				/*
				$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
				$this->form_validation->set_rules('name', 'name', 'required');
				//$this->form_validation->set_rules('id', 'id', 'required');
				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('form');
				}
				else {
					$name    = trim(strip_tags($_POST['name']));
					$address = trim(strip_tags($_POST['address']));
					$phone   = trim(strip_tags($_POST['phone']));
					$email   = trim(strip_tags($_POST['email']));
					
					date_default_timezone_set("Asia/Ho_Chi_Minh");
					$created_at = date("Y-m-d H:i:s");
					$updated_at = date("Y-m-d H:i:s");
					
					$result=$this->student->insertstudent(NULL, $name, $address, $phone, $email,$created_at,$updated_at);
				
					if($result)
					{
						echo "<div class='success'>";
						echo "Successfully Data Inserted";
						echo "</div>";
						//redirect('home/ShowData','refesh');
					}
					else {		
						echo "<div class='success'>";
						echo "Somthins Is Missing";
						echo "</div>";
					}
				
				}
				*/
			}
			else {
				
				$this->load->view('form');
			}
	 
	$this->load->view('file/footer');
		
	}
	
	
public function deleteAjax(){
	
	$id = $_POST['id'];
	settype($id, "int");
	$msg = array();
	if($id){
		
		$r = $this->student->deletestudent($id);
		
		$msg = array();
		
		if($r){
			
			$msg['message'] = "Deleted successful";
			$msg['code'] = 1;
			echo json_encode($msg); exit;
			
		
		}
		else {
			$msg['message'] = "Can Not Delete Data";
			$msg['code'] = 0;
			echo json_encode($msg); exit;
			
		}
	}
	else {
		$msg['message'] = "Record invalid";
		$msg['code'] = 0;
		echo json_encode($msg); exit;
		
	}
	
	
}	


public function DeleteStudent($id)
{
		
	$this->load->view('file/header');
  	$this->load->view('file/menu');
  
  	$r = $this->student->deletestudent($id);
  	
  	if($r){
  		
  		echo "Successfully Deleted Data";
  		redirect('home/ShowData','refesh');
  	}
  	else {
  		
	  echo "Can Not Delete Data";
  	}

  	$result['query']=$this->student->showstudent();
  	$this->load->view('demoview',$result);
  	$this->load->view('file/footer');
 
}
	
 public function ShowData()
 {
     	$result['query'] = $this->student->showstudent();
	 	//echo "<pre>";print_r($result['query']);exit;
	 	$this->load->view('file/header');
	  	$this->load->view('file/menu');
		$this->load->view('demoview',$result);
	 	$this->load->view('file/footer');
 }
 
 public function editstudent($id)
 {
 	$query['data'] = $this->student->showstudentCon($id);
 	//echo "<pre>";print_r($query['data']);exit;
 	
	if (isset($_POST['submit']))
	{
		/*
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('id', 'id', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('file/header');
	  		$this->load->view('file/menu');
			$this->load->view('form', $query);
			$this->load->view('file/footer');
		}
		else {
			
		$id = $_POST['id'];
		$name = trim(strip_tags($_POST['name']));
		$address = trim(strip_tags($_POST['address']));
		$phone = trim(strip_tags($_POST['phone']));
		$email = trim(strip_tags($_POST['email']));
		
		$created_at = $_POST['created_at'];
		
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		
		$updated_at = date("Y-m-d H:i:s");
		$result = $this->student->updatestudent($id, $name, $address, $phone, $email,$created_at,$updated_at);
		
		if($result)
		{
				
				$this->load->view('file/header');
		  		$this->load->view('file/menu');
				echo "<div class='success'>";
				echo "Successfully Updated";
				echo "</div>";
				$this->load->view('file/footer');
				redirect('home/ShowData','refesh');
		}
		else {
				
				$this->load->view('file/header');
		  		$this->load->view('file/menu');
				echo "<div class='error'>";
				echo "Somthins Is Missing";
				echo "</div>";
				$this->load->view('file/footer');
			
		}
	
	
		}
	*/	

	}
	else {
		$this->load->view('file/header');
	  	$this->load->view('file/menu');
		$this->load->view('form', $query);
		$this->load->view('file/footer');
	}
	
		 
 }
	
}
