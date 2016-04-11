<?php 

class Mainpage_model extends CI_Model {

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
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_services() {
		$query = $this->db->get('services');
		return $query->result_array();
	} 

	public function get_solutions() {
		$query = $this->db->get('solutions');
		return $query->result_array();
	}

	public function get_articles() {
		$query = $this->db->get('articles');
		return $query->result_array();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */