<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//首页
class HomePage extends CI_Controller
{
    public function index()
    {
        $type = trim($this->input->get('type')) ?: 'girl';

        $this->load->view('home_page', ['type' => $type]);
    }
}
