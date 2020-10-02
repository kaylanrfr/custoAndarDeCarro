<?php
if ($_POST['kmlitro'] != "" and $_POST['kmdis'] != "" and $_POST['modelo'] != "" and $_POST['gas'] != "") {

  $novoCarroOptions = array('kmlitro' => $_POST['kmlitro'], 'kmdis' => $_POST['kmdis'], 'modelo' => $_POST['modelo'], 'gas' => $_POST['gas']);



  class Carro
  {
    public $kmlitro;
    public $kmdis;
    public $modelo;
    public $gas;
    public function __construct($options)
    {
      $this->kmlitro = $options['kmlitro'];
      $this->kmdis   =  $options['kmdis'];
      $this->modelo  =  $options['modelo'];
      $this->gas  =  $options['gas'];
    }
  }

  class custoViagem
  {
    public $carro;
    public function __construct($carro)
    {
      $this->carro = $carro;
    }
    public function calcular()
    {
      $val = ($this->carro->kmdis / $this->carro->kmlitro) * $this->carro->gas;
      return $val;
    }
  }




  $novoCarro = new Carro($novoCarroOptions);
  $novoCusto = new custoViagem($novoCarro);
  $display = ("Para o " . $novoCarro->modelo . " o preço da viagem em reais foi de:  R$" . sprintf("%.2f", $novoCusto->calcular()) . "<br>");
  session_start();
  $_SESSION["print"] = $display;
  header('Location: index.php');
} else {
  header('Location: index.php');
}
