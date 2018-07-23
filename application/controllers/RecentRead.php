<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//最近阅读
class RecentRead extends CI_Controller
{
    public function index()
    {
        $this->load->view('recent_read');
    }
}
