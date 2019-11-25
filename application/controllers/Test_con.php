<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_con extends CI_Controller {
    public function index(){
        $this->load->view('Test_view');
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

            redirect(base_url() . "test_con/inserted");

        }
        else{
            $this->index();
        }
    }
    public function inserted(){
        $this->index();
    }
}