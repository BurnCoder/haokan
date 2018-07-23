<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//充值记录
class PayRecord extends CI_Controller
{
    public function index()
    {
        $this->load->view('pay_record');
    }
}
