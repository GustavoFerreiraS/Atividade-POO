<?php

    class ContaBancaria{
        private $numero;
        private $saldo;
        private $nomeTitular;
        private $cpfTitular;
        private $email;

        

    //-------- GETTERS (retorna o valor dos atributos da classe/objeto) PEGAR --------

    public function getNumero(){
        return $this->numero;
    }
    public function getSaldo(){
        return $this->saldo;
    }

    public function getNomeTitular(){
        return $this->nomeTitular;
    }
    public function getCpfTitular(){
        return $this->email;
    }

    //-------- SETTERS (alteram o valor dos atributos da classe/objeto) --------

    public function setNumero($novoNumero){
        $this->numero = $novoNumero;
    }

    public function setSaldo($novoSaldo){
        $this->saldo = $novoSaldo;
    }
    public function setNomeTitular($novoNomeTitular){
        $this->nomeTitular=$novoNomeTitular;
    }
    public function setCpfTitular($novoCpfTitular){
        $this->cpfTitular=$novoCpfTitular;
    }

    //------ Outros métodos ------

    public function depositarValor($valorDeposito){
        $this->saldo = $this->saldo + $valorDeposito;
        return $this->saldo;

    }
    

}