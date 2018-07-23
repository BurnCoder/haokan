<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//签到
class SignIn extends CI_Controller
{
    public function index()
    {
        $this->load->view('sign_in');
    }
}
