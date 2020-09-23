<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Dashboard extends CI_Controller
{

    public function index()
    {

        $this->load->model('T101_spp_model');

        $data = array(
            "byr" => $this->T101_spp_model->getTotalByr(),
            "head"   => array("title" => "Dashboard"),
            "title"  => "Dashboard",
        );
        $this->load->view("dashboard", $data);
    }
}
