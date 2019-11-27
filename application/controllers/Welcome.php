<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
        $this->load->view('header');
        $this->load->view('body');

        $this->load->model("Test_model");
        $this->load->library("pagination");
        $config['base_url'] = base_url() . 'project';
        $config['uri_segement'] = 3;
        $config['per_page'] = 5;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = '&gt;';       
        $config['prev_link'] = '&gt;';    
        $config['num_link'] = 1;
        

        $page = $this->uri->segment(3,0);
        $data["select_data"] = $this->Test_model->select_data($config['per_page'], $page);
        $config['total_rows'] = $this->Test_model->getTotalrows();
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('Test_view', $data);
        $this->load->view('js');
    }
    public function insert_project()
    {
        // echo 'hello world';
            $this->load->model("Test_model");
            $data = array(
                "projectCode" => $this->input->post("projectCode"),
                "projectName" => $this->input->post("projectName"),
                "budget" => $this->input->post("budget"),
                "startDate" => $this->input->post("startD"),
                "endDate" => $this->input->post("endD")
            );
            $this->Test_model->insert($data);

            redirect(base_url() . "inserted");
        } 
    public function inserted()
    {
        $this->project();
    }
}
