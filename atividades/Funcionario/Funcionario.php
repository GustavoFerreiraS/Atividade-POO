<?php

class Funcionario{
    private $matricula;
    private $nome;
    private $idade;
    private $cargo;
    private $dataAdm;
    private $dataDesligamento;
    private $salario;

    //-------- GETTERS (retorna o valor dos atributos da classe/objeto) PEGAR --------

public function getMatrica(){
    return $this->matricula;

}
public function getNome(){
    return $this->nome;
}
public function getIdade(){
    return $this->idade;
}
public function getCargo(){
    return $this->cargo;    
}
public function getDataAdm(){
    return $this->dataAdm;
}
public function getDataDesligamento(){
    return $this->dataDesligamento;
}
public function getSalario(){
    return $this->salario;
}


// set

public function setMatricula($novaMatricula){
    $this->matricula = $novaMatricula;
}
public function setNome($novoNome){
    $this->nome = $novoNome;
}
public function setIdade($novoIdade){
    $this->idade=$novoIdade;
}
public function setCargo($novoCargo){
    $this->cargo=$novoCargo;
}
public function setDataAdm($novaDataAdm){
    $this->dataAdm=$novaDataAdm;
}
public function setDesligamento($novoDesligamento){
    $this->dataDesligamento=$novoDesligamento;
}
public function setSalario($novoSalario){
    $this->salario = $novoSalario;
}


// outros métados
public function exibirInfo() {
    echo "Nome: {$this->nome}, Idade: {$this->idade}, Cargo: {$this->cargo}";
}
public function alterarCargo($alteracaoCargo){
    if ($this->cargo !=$alteracaoCargo) {
        $this->cargo =$alteracaoCargo;
        echo "Cargo alterado para: {$this->cargo}";
    } else {
        echo "Nada foi alterado, pois o novo cargo é igual ao atual.";

    }
}

}