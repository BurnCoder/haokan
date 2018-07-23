<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//充值
class Pay extends CI_Controller
{
    public function index()
    {
        $this->load->view('pay');
    }
}
