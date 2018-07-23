<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//目录
class Dir extends CI_Controller
{
    public function index()
    {
        $this->load->view('dir');
    }
}
