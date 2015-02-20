<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('CardModel');
    // $this->load->model('RaceModel');
  }

  public function index()
  {
    redirect('boardcast');
  }

  public function boardcast()
  {
    $this->twig->display('boardcast/boardcast.html', $this->data);
  }

  public function duelmasters()
  {
    $this->data['races'] = $this->CardModel->get_all_race();
    $this->data['civilizations'] = $this->CardModel->get_all_civilization();
    $this->data['cardtype'] = $this->CardModel->get_all_cardtype();

    // debug($this->CardModel->get_cards());
    $this->twig->display('duelmasters/duelmasters.html', $this->data);
  }

  public function model_debug()
  {
    
  }

  public function testing()
  {
    $json['status'] = 'success';
    $json['result_message'] = 'Data come back';
    echo json_encode($json);
  }
}