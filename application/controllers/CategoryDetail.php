<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//分类详情
class CategoryDetail extends CI_Controller
{
    public function index()
    {
        $this->load->view('category_detail');
    }
}
