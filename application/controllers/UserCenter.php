<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//用户中心
class UserCenter extends CI_Controller
{
    public function index()
    {
        $this->load->view('user_center');
    }
}
