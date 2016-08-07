<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Cabinet extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('cabinet/cabinet');
        $this->load->view('footer');
    }
}