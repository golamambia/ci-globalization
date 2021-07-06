<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {
	public $date;
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->date = date('Y-m-d H:i:s');
	}

	
	
	public function adminValidate($email,$password)
	{    
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('admin_login');
		$result = $query->row();
		if($query->num_rows()==1){
			return $result;
		} 
		return false;		
	}
	/*-----------------fetch data in database -----------------------*/

	function fetch_main_page($table)
	{
		$query = $this->db->get($table);
		$result =$query->row();
			return $result;
				
	}
    /*------------------------Update Data in database -------------------------------------------*/
	function update_data($url,$table)
	{
		
		$this->db->where('id', 1);
        $this->db->update($table, $url);
        echo 'order has successfully been updated';
    }
	function addservice($path,$name,$content,$readmore ,$table)
   {
	   $data = array(
        'icon_image'=>$path,
		'service_name'=>$name,
		'readmore'=>$readmore,
        'content'=>$content
         );

        $this->db->insert($table,$data);
    }
	function addcontact($data ,$table)
   {
        $this->db->insert($table,$data);
    }
	function fetch_contact($table)
	{
		$query = $this->db->get($table);
		$result= $query->result();
			return $result;
				
	}
}