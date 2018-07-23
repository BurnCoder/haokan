<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//阅读书本
class ReadBook extends CI_Controller
{
    public function index()
    {
        $this->load->view('read_book');
    }
}
