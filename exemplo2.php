<?php
// objeto é a representação de algo real que faça sentido dentro do sistema que está sendo criado
//facilita a reutilização e a modularização do código
//simplifica a manutenção do sistema

class Fabricante {
  private $nome;

  public function getNome() {
    return $this->nome;
  }
}

class Produto {
  private $descricao;
  private $preco;
  private $fabricante;

  public function __construct($descricao, $preco, Fabricante $fabricante) {
    $this->descricao = $descricao;
    $this->preco = $preco;
    $this->fabricante = $fabricante;
  }


  public function getDetalhes() {
    return "O produto {$this->descricao} custa {$this->preco} reais. Fabricante: {$this->fabricante->getNome()}";
  }

  
}
$f1 = new Fabricante('Editora B');
$p1 = new Produto('Livro', 50, $f1);


// var_dump($p1);
echo $p1->getDetalhes();
?>