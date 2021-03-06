<?php
class User_man extends CI_Model {

	private $table_name = 'users';
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
    	function is_logged_in()
	{
		return $this->session->userdata('logged_in');
	}
	
	function logout ()
	{
		$this->session->sess_destroy();
	}

	function login( $username , $password )
	{
		if ( ($details = $this->get_user_by_email($username) ) == NULL )
			return false; //user doesnot exist
		if ($this->check_pass ($details->password , $password))
		{
			$newdata = array(
				   'name'  => $details->full_name,
				   'email'     => $details->username,
				   'logged_in' => TRUE,
				   'admin' => $details->admin
			       );
			$this->session->set_userdata($newdata);
			return true; // logged in successfully
		}
		return false; //username and password is incorrect
	}
	
	function email_user ($to , $message)
	{
		$email_config = Array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => '465',
		    'smtp_user' => 'last.fast.blast@gmail.com',
		    'smtp_pass' => 'qwerty123456zxcvb',
		    'mailtype'  => 'html',
		    'starttls'  => true,
		    'newline'   => "\r\n"
		);

		$this->load->library('email', $email_config);

		$this->email->from('aman11dhanpat@gmail.com', 'Informal Flights');
		$this->email->to($to);
		$this->email->subject('Registration Details');
		$this->email->message($message);

		$this->email->send();
	}	
	
	function make_random_pass()
	{
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
	    $pass = array(); //remember to declare $pass as an array
	    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	    for ($i = 0; $i < 8; $i++) {
		$n = rand(0, $alphaLength);
		$pass[] = $alphabet[$n];
	    }
	    return implode($pass);
	}
	
	function make_pass($val)
	{
		return md5 ($val);
	}
	
	function check_pass ($pass , $val)
	{
		return ( $pass == md5 ($val) );
	}
	
	function check_user ($email , $pass)
	{
		if ( ($data = $this->get_user_by_email ( $email ) ) == NULL)
			return false;
		if ($this->check_pass ($data->password , $pass))
		{
			return true;
		}
		return false;
	}
	function change_pass ($email , $pass)
	{
		if ( ($data = $this->get_user_by_email ( $email ) ) == NULL)
			return false;
		$this->db->query("UPDATE users SET password = '" . $this->make_pass($pass) . "' WHERE username='" . $email . "';");
		return true;
	}
	
	function change_name ($email , $name)
	{
		if ( ($data = $this->get_user_by_email ( $email ) ) == NULL)
			return false;
		$this->db->query("UPDATE users SET full_name = '" . $name . "' WHERE username='" . $email . "';");
		return true;
	}
	
	function register ( $user , $name )
	{
		$pass = $this->make_random_pass();
		$data = array(
		   'username' => $user ,
		   'password' => $this->make_pass($pass) ,
		   'full_name' => $name
		);

		$this->db->insert('users', $data);
		if ($this->is_username_available($user) )
			return "";
		return $pass;
	}
	function is_username_available($username)
	{
		$this->db->select('1', FALSE);
		$this->db->where('LOWER(username)=', strtolower($username));

		$query = $this->db->get("users");
		return $query->num_rows() == 0;
	}
	function get_user_by_email($email)
	{
		//$this->db->select('1', FALSE);
		$this->db->where('LOWER(username)=', strtolower($email));

		$query = $this->db->get($this->table_name);
		if ($query->num_rows() == 1) return $query->row();
		return NULL;
	}

}
?>
