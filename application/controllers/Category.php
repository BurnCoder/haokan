<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//分类
class Category extends CI_Controller
{
    public function index()
    {
        $this->load->view('category');
    }
}
