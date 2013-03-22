<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->database();

	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function login ()
	{
		if ( isset ( $_POST['username'] ) )
		{
			echo $_POST['username'];
			return;
		}
		$data ['title'] = "Informal Flights :: Login";
		$this->load->view ( 'auth/login' , $data );
	}
	public function register ()
	{
		if ( isset ( $_POST['username'] ) )
		{
			echo $_POST['username'];
			return;
		}
		$data ['title'] = "Informal Flights :: Register";
		$this->load->view ( 'auth/register' , $data );
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
