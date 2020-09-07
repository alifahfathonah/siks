<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backup extends CI_Controller {

  function index()
  {
    $this->load->dbutil();

    $nama_file = $this->session->userdata('kodesekolah') . '_' . date('YmdHis') . '.sql';
    $prefs = array(
        'format'        => 'txt',
        'filename'      => $nama_file,
        'add_drop'      => TRUE,
        'add_insert'    => TRUE,
        'newline'       => "\n",
        'foreign_key_checks' => false,
    );
    $backup = $this->dbutil->backup($prefs);

    $this->load->helper('file');
    write_file('/'.$nama_file.'', $backup);

    $this->load->helper('download');
    force_download($nama_file, $backup);
  }

}
