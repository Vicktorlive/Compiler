<?php
/**
 * Modelo del compilador
 */
class compilerM extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  public function get_values()
  {
    $query = $this->db->get('lexico');
    return $query->result_array();
  }

  public function set_bd()
  {
    $data = array(
      'Valor' => $this->input->post('insert'),
      'Tipo'  => $this->input->post('tipo')
    );

    return $this->db->insert('lexico',$data);
  }

  public function leer_bd()
  {
    $lexicoOrg   = $this->input->post('leer');
    $lexico      = explode(" ",$this->input->post('leer'));
    $resultarray = array();
    foreach ($lexico as $lexicoC) {

  // $result                  = array($array);
  // }else{
      $this->db->select('*');
      $this->db->from('lexico');
      $this->db->where("Valor ='".$lexicoC."'");
      $query  = $this->db->get();
      $result = $query->result_array();

      array_push($resultarray,$result);
      if ($lexicoC == "while" || $lexicoC == "if" || $lexicoC == "for")
      {
          $in      = strlen($lexicoC);
          $iniciar = $in + 1;
          $first   = substr($lexicoOrg,$iniciar,1);
          $last    = substr($lexicoOrg,-1,1);
          if ($last != ")")
          {
              $array = array(
                'Valor' => 'Null',
                'Tipo'  => "Se esperaba )"
              );
              $result = array($array);
          }
          if ($first != '(')
          {
            $array = array(
              'Valor' => 'Null',
              'Tipo'  => "Se esperaba ("
            );
            $result = array($array);
          }
          array_push($resultarray,$result);
      }
    }
      return $resultarray;
    }

  }

 ?>
