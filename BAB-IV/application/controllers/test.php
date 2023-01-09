<?php
defined('BASEPATH') or exit('No direct script access allowed');

class test extends CI_Controller
{
  public function index()
  {
    $data = array(
      'title' => 'UNIVERSITAS ISLAM LAMONGAN',
      'message' => 'Selamat Datang di Universitas Islam Lamongan'
    );
    $this->load->view('test_view', $data);
  }
  public function hello()
  {
    echo "ini method hello";
  }
  public function greeting($nama, $asal)
  {
    echo "hai $nama dari $asal";
  }

  public function hitung($nil1, $nil2, $nil3)
  {
    $jum = $nil1 + $nil2 + $nil3;
    $rata = $jum / 3;
    echo "Rata-rata dari $nil1, $nil2, $nil3 adalah $rata";
  }
}
