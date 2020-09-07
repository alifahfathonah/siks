<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Restore extends CI_Controller
{
  function index()
  {
    $data = array(
      'head'  => array('title' => 'Restore'),
      'title' => 'Restore Data',
    );

    if (!$this->ion_auth->logged_in())
    {
      redirect('/auth', 'refresh');
    }

    $this->load->view('restore/restore_index', $data);
  }

  public function proses()
  {
    // code...
    $error_restore = 1;
    $message_restore = "";

    if (isset($_FILES['file']['name'])) {
      $path = $_FILES['file']['tmp_name'];
      $isi_file = file_get_contents($path);
      $string_query = rtrim($isi_file, "\n;");
      $array_query = explode(";", $string_query);
      $error_restore = 0;
      $message_restore = "Restore data berhasil";
      foreach($array_query as $query)
      {
        $status = $this->db->query($query);
        if (!$status)
        {
          $error_restore = 1;
          $message_restore = "Restore data gagal";
        }
      }
      $this->session->set_userdata('error_restore', $error_restore);
      $this->session->set_flashdata('message_restore', $message_restore);
    }

    redirect('restore');
  }
}
