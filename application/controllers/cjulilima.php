<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cjulilima extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->session->checkNoSession();
		//$this->session->checkSessionExpired();
		//$this->load->view("sample_template_v");
		$this->load->model("mjulilima_model");
		//$this->load->view("vjulilimasatu");
		//$this->load->view("vjulilimadua");
		//tes;
	}

	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->model('mjulilima_model');
		
		//$data["test1"] = "Controllers text 1";
		//$data["test2"] = "Controllers text 2";
		//$data['modelmjl'] = $this->mjulilima_model->test1();
		//$this->load->view("vjulilimasatu", $data);

		//echo $this->mjulilima_model->test1();
		//$this->load->model("mjulilima_model");
		//$data["fetch_data"] = $this->mjulilima_model->fetch_data();
		//$this->load->view("vjulilimasatu");
		$data['content_view'] = $this->load->view("vjulilimasatu", '',true);
		$this->load->view('sample_template_v', $data);
	}

	public function vdua(){
		$data["fetch_data"] = $this->mjulilima_model->fetch_data();
		$data_content['content_view'] = $this->load->view("vjulilimadua", $data,true);
		$this->load->view('sample_template_v',$data_content);
	}

	public function form_validation(){
		//echo "test";
		$this->load->library('form_validation');
		$this->form_validation->set_rules("npm", "NPM", 'required|numeric');
		$this->form_validation->set_rules("nama", "Nama", 'required|alpha');

		if($this->form_validation->run()){
			//true
			//$data= array(
			//	"npm"	=>$this->input->post("npm"),
			//	"nama"	=>$this->input->post("nama")
			//);
			//$this->load->model("mjulilima_model");
			$this->mjulilima_model->insert_data($data);
			redirect(base_url() . "cjulilima/inserted");
		}
		else{
			#false
			$this->index();
		}
	}

	public function inserted(){
		$this->index();
	}
}
?>