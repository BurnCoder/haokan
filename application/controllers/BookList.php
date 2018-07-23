<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//书本列表
class BookList extends CI_Controller
{
    public function index()
    {
        $this->load->view('book_list');
    }
}
