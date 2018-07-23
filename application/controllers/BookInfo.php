<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//书本信息
class BookInfo extends CI_Controller
{
    public function index()
    {
        $this->load->view('book_info');
    }
}
