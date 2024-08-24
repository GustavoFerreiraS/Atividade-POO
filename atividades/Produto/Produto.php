<?php
 
class Produto {
    private $codigo;
    private $nome;
    private $descricao;
    private $preco;
    private $categoria;
    private $quantidadeEstoque;


 //-------- GETTERS (retorna o valor dos atributos da classe/objeto) PEGAR --------

public function getCodigo(){
    return $this->codigo;
}
public function getNome(){
    return $this->nome;
}
public function getDescricao(){
    return $this->descricao;
}
public function getPreco(){
    return $this->preco;
}
public function getCategoria(){
    return $this->categoria;
}
public function getQuantidadeEstoque(){
    return $this->quantidadeEstoque;
}


//-------- SETTERS (alteram o valor dos atributos da classe/objeto) --------

public function setCodico($novoCodico){
    $this->codigo=$novoCodico;
}
public function setNome($novoNome){
    $this->nome=$novoNome;
}
public function setDescricao($novoDescricao){
    $this->descricao=$novoDescricao;

}
public function setPreco($novoPreco){
    $this->preco=$novoPreco;
}
public function setCategoria($novoCategoria){
    $this->categoria=$novoCategoria;
}
public function setQuantidadeEstoque($novaQuantidadeEstoque){
    $this->quantidadeEstoque=$novaQuantidadeEstoque;
}
//------ Outros métodos ------

public function alterarEstoque($mudaEsqueto){
    $this->quantidadeEstoque = $this->quantidadeEstoque + $mudaEsqueto;
    return $this->quantidadeEstoque;
}

}
