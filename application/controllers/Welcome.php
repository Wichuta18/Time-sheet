<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('body');
		$this->load->view('js');
	}
	public function project()
	{
        $this->load->model("Test_model");
        $data["select_data"]= $this->Test_model->select_data();
		$this->load->view('header');
		$this->load->view('body');
        $this->load->view('Test_view', $data);
		$this->load->view('js');
	}
	public function form_validation(){
        // echo 'hello world';
        $this->load->library('form_validation');
        $this->form_validation->set_rules("projectCode","projectCode",
        'required');
        $this->form_validation->set_rules("projectName","projectName",
        'required|alpha');
        $this->form_validation->set_rules("budget","budget",
        'required');
        $this->form_validation->set_rules("total","total",
        'required');

        if($this->form_validation->run()){
            //true
            $this->load->model("Test_model");
            $data = array(
                "projectCode" =>$this->input->post("projectCode"),
                "projectName" =>$this->input->post("projectName"),
                "budget" =>$this->input->post("budget"),
                "total_dur" =>$this->input->post("total")
            );
            $this->Test_model->insert($data);

            redirect(base_url() . "inserted");

        }
        else{
            redirect(base_url() . "form_validation");
        }
    }
    public function inserted(){
        $this->project();
    }
}
