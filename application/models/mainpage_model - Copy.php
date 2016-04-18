<?php 

class Mail_model extends CI_Model {

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

	public function inquiry_email($member){
	$message = $this->message_top();
	$message .='
		<p>
			You just received a message from: <br>
			Name: '.$member['name'].' <br>
			Company: '.$member['company'].' <br>
			Email: '.$member['email'].' <br>
		</p>
		<div style="margin:20px;padding:20px;background:whitesmoke;font-size:14px;line-height:18px;font-weight:200;color:#333">
		'.$member['message'].'
		</div>
		';

	$message .= $this->message_bottom();
	return $this->sendemail($member['email'], $member['first-name'] + $member['last-name'],$message,'info@arintfitting.com','Inquiry Arint Fitting');
	}

	public function newsletter_signup($postData){
		$response['status'] = 400;
		$response['message'] = 'Could not create company'; 
		
		$dataArray = array(
			'email' => $postData['email'],
		);
		$response['status'] = $this->db->insert('companies',$dataArray) ? 200:400;
		if($response['status'] == 200){
			$response['message'] = 'Company Created';
			$response['data'] = $this->db->insert_id();
		}
		return $response;
	}

	public function get_company_info($companyId){
		
		$query = $this->db->query("SELECT C.*,M.first FROM projectspaces.companies C WHERE ROWNUM <='.$NumberId.' AND M.memberId=C.adminId AND C.companyId='.$companyId.'");
		return $query->row_array();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */