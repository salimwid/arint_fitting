<?php

class Mainpage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mainpage_model');
	}
	public function index(){
		$data['title'] = 'Arint Premium Fitting - Architectural Fitting Distributor';
		$data['page'] = $this;
		$data['services'] = $this->mainpage_model->get_services();
		$data['solutions'] = $this->mainpage_model->get_solutions();
		$data['articles'] = $this->mainpage_model->get_articles();

		$data['meta'] = 
			'<meta name="description" content="Arint Premium Fitting is a high-end architectural fitting distributor." />
			<link rel="shortcut icon" href="http://www.arintfitting.com/favicon.ico?" type="image/x-icon" type="image/x-icon">
			<link rel="icon" href="http://www.arintfitting.com/favicon.ico?" type="image/x-icon">
			<meta property="og:locale" content="en_US" />
			<meta property="og:type" content="article" />
			<meta property="og:title" content="Arint Premium Fitting - Architectural Fitting Distributor" />
			<meta property="description" content="Arint Premium Fitting is the leading high-end architectural fitting distributor in Indonesia. We provide full services to developers, home owners, and contractors from free specification consulting to after sales services and warranty." />
			<meta property="og:image" content="http://arintfitting.com/application/assets/img/share_img.jpg" />
			<meta property="og:url" content="http://www.arintfitting.com/" />
			<meta property="og:site_name" content="Arint Premium Fitting - Architectural Fitting Distributor" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<meta name="copyright" content="The content of this website is created for Arint Premium Fitting only. Do not commercialize or copy without permission.">
			<meta name="description" content="Arint Premium Fitting is the leading high-end architectural fitting distributor in Indonesia. We provide full services to developers, home owners, and contractors from free specification consulting to after sales services and warranty.">
			<meta name="keywords" content="arint premium fitting, architectural fitting, home renovation, building, arint, fitting, dorma, dorma sales, architectural, house, build, services">
			<meta name="robots" content="index, follow">';
		$data['f_meta'] = 
			'<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		    <link rel="stylesheet" type="text/css" href= "http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css">
		    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
			<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
			<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI8Gl5ygc8SYdmUwLUX5vjlAUzyWRgvwk&callback=initMap" async defer>
			</script>
			<script src="map-arint.js"></script>
			<link rel="stylesheet" href="styles.css" />';

		$this->load->view('main/header', $data);
		$this->load->view('main/mainpage', $data);
		$this->load->view('main/footer', $data);
	}
}
