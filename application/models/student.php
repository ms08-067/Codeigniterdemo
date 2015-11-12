<?php
class student extends CI_Model
{
	
	public function insertstudent($id, $name, $address, $phone, $email,$created_at,$updated_at)
	{
		$data = array('id' => $id, 'name'=>$name, 'address'=>$address, 'phone'=>$phone, 'email'=>$email, 'created_at'=>$created_at, 'updated_at'=>$updated_at);
		return($this->db->insert('tbl_user',$data));
	}
	
	public function deletestudent($id)
	{
		$this->db->where('id', $id);
		return($this->db->delete('tbl_user'));
	}

	public function updatestudent($id, $name, $address, $phone, $email, $created_at, $updated_at)
	{
		$data = array('name'=>$name, 'address'=>$address, 'phone'=>$phone, 'email'=>$email,'created_at'=>$created_at, 'updated_at'=>$updated_at );
		//echo "<pre>";print_r($data);exit;
		$this->db->where('id', $id);
		return($this->db->update('tbl_user',$data));
	}
	
	
	public function showstudent()
	{
		$query= $this->db->order_by("id", "desc")->get('tbl_user');
		return $query->result();

	}
	
	public function showstudentCon($id)
	{
		$this->db->where('id', $id);
		$result=$this->db->get('tbl_user');;
		return $result->row_array();
	}
	
}


?>