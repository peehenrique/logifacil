<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('buscar_model');
  }

  public function index()
  {
    $data['clientes'] = NULL;
    $data['view'] = NULL;

    if ($this->input->get('codigo_rastreio')) {
      $data['clientes'] = $this->buscar_model->getBusca($this->input->get('codigo_rastreio'));
      $data['view'] = 'themes/new/resultado';
    }

    $this->load->view('themes/new/index', $data);
  }

}
