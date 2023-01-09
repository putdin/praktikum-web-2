<?php
class form extends CI_Controller
{
  public function index()
  {
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nim', 'nim', 'trim|required|max_length[10]');
    $this->form_validation->set_rules('nama', 'nama', 'trim|required|max_length[50]');
    $this->form_validation->set_rules('umur', 'umur', 'trim|required|integer|greater_than[20]|less_than[30]');


    // $this->form_validation->set_rules('password', 'password', 'required');
    // $this->form_validation->set_rules('passwordconf', 'password confirmation', 'required');
    // $this->form_validation->set_rules('email', 'email', 'required');


    if ($this->form_validation->run() == FALSE) {
      $this->load->view('myform');
    } else {
      $this->load->view('formsucces');
    }
  }
}
