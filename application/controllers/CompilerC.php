<?php
/**
 * Controlador para Compilador
 */
class CompilerC extends CI_Controller
{
  public function __construct(){
    parent:: __construct();
    $this->load->model('compilerM');
  }


  public function view($page ='home')
  {
    if(! file_exists(APPPATH.'views/compiler/'.$page.'.php'))
    {
      show_404();
    }

    $data['title'] = ucfirst($page);

    $this->load->view('templates/header',$data);
    $this->load->view('compiler/'.$page,$data);
    $this->load->view('templates/footer',$data);
  }

  public function viewValues($page = 'values')
  {

    $data['title']  = ucfirst($page);
    $data['lexico'] = $this->compilerM->get_values();

    $this->load->view('templates/header',$data);
    $this->load->view('compiler/values',$data);
    $this->load->view('templates/footer',$data);
  }

   /**
    * Form create new DB entry
    * @return [type] [description]
    */
  public function create()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Insertar en la BD';

    $this->form_validation->set_rules('insert','Insert','required');

    if($this->form_validation->run() === FALSE)
    {
      $this->load->view('templates/header',$data);
      $this->load->view('compiler/create',$data);
      $this->load->view('templates/footer',$data);
    }
    else {
    //  $this->compilerM->set_bd();
      $this->compilerM->set_bd();
      //$this->load->view('compiler/successbd');
    }
  }

  public function read($page = 'read'){
    $data['title'] = ucfirst($page);

    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Leer';

    $this->form_validation->set_rules('leer','Leer','required');

    if($this->form_validation->run() === FALSE)
    {
      $this->load->view('templates/header',$data);
      $this->load->view('compiler/read',$data);
      $this->load->view('templates/footer',$data);
    }
    else {
      $data['result']= $this->compilerM->leer_bd();
      $this->load->view('templates/header');
      $this->load->view('compiler/read',$data);
      $this->load->view('templates/footer');
    }

  }
}
