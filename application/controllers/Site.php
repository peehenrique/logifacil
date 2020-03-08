<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['view'] = 'themes/new/resultado';

    $this->load->view('themes/new/index', $data);
  }

}
