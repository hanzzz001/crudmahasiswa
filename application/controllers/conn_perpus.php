<?php

defined('BASEPATH') or exit('No Direct Script access allowed');
class conn_perpus extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('perpustakaan');
    }
    public function index()
    {
        $this->perpustakaan->buku();
    }
}

?>