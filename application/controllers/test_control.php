<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_control extends CI_Controller {
   function user_action()
   {
       if($_POST["action"] == "Add")
       {
           $insert_data = array(
            'projectCode' =>$this->input->post('projectCode'),
            'projectName' =>$this->input->post('projectName'),
            'budget'      =>$this->input->post('budget'),
            'total_dur'   =>$this->input->post('total')
           );
           $this->load->model('test_model');
           $this->test_model->insert($insert_data);
           echo 'Data Inserted';
       }
   }
   
}