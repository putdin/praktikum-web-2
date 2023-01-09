<?php
defined('BASEPATH') or exit('No direct script access allowed');

class hello extends CI_Controller
{
  public function index()
  {
    $data['univ'] = "Universitas Islam Lamongan";
    $data['nama'] = "Moh Saifuddin";
    $data['nim'] = "112010130";
    $this->load->view('hello_view', $data);
  }
}
