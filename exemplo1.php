<?php
// objeto é a representação de algo real que faça sentido dentro do sistema que está sendo criado
//facilita a reutilização e a modularização do código
//simplifica a manutenção do sistema

class Produto {
  //atributos
  private $descricao;
  private $preco;
  //atributos

  //metodo construtor

  public function __construct($descricao, $preco) {
    $this->descricao = $descricao;
    $this->preco = $preco;
  }

  //metodo construtor

  //metodos
  public function getDetalhes() {
    return "O produto {$this->descricao} custa {$this->preco} reais";
  }

  public function setDescricao($valor) {
    $this->descricao = $valor;
  }
  
  public function getDescricao($valor) {
    $this->descricao = $valor;
  }
  public function setPreco($valor) {
    $this->preco = $valor;
  }

  public function getPreco($valor) {
    $this->preco = $valor;
  }

  //setters: faz as validações para a entreda do valor
  //getters: faz as formatações para a saída do valor
  
  //metodos
}

$p1 = new Produto('Livro', 50);


// var_dump($p1);
// echo $p1->getDetalhes();
?>