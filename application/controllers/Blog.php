<?php

defined('BASEPATH') or exit('No Direct Script access allowed');
class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->load->view('Hello_codeigniter');
    }
}

?>