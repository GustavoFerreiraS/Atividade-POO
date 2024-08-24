<?php

/*O método ligar() define o atributo $ligado para TRUE, assim como o desligar() define o atributo $ligado para FALSE.
• O método anda() recebe um valor inteiro referente à quilometragem de um determinado trajeto. Se o objeto CARRO
estiver ligado e a autonomia deste objeto for maior ou igual à quilometragem do trajeto, então o método retorna TRUE,
caso contrário, retorna FALSE.*/

    class Carro{
        private $marca;//define a marcar do carro
        private $modelo; //define o modelo do carro
        private $ano; //define o ano de fabricação do carro
        private $categoria;//define a categoria: passeio
        private $potencia;//define a pontencia do carro
        private $autonomia;//define a automomia do carro
        private $ligado;//define se o carro está ligado
        

        public function __construct($novoMarca,$novoModelo,$novoAno,$novaCategoria,$novaPontecia,$novaAutomia,$novoLigado){
             $this->marca=$novoMarca;
             $this->modelo=$novoModelo; 
             $this->ano=$novoAno; 
             $this->categoria=$novaCategoria;
             $this->potencia=$novaPontecia;
             $this->autonomia=$novaAutomia;
             $this->ligado=$novoLigado;
            
        }

        //---------- GETTERS ------------
        //retorna o valor do atributo do objeto
        public function getMarca(){
            return $this->marca;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function getAno(){
            return $this->ano;
        }
        public function getCategoria(){
            return $this->categoria;
        }
        public function getPontecia(){
            return $this->potencia;
        }
        public function getAutonomia(){
            return $this->autonomia;
        }
        public function getLigado(){
            return $this->ligado;
        }
       
        //---------- SETTERS ------------
        //altera o valor do atributo do objeto

        public function setMarca($novoMarca){
            $this->marca=$novoMarca;
        }
        public function setModelo($novoModelo){
            $this->modelo=$novoModelo;
        }
        public function setAno($novoAno){
            $this->ano=$novoAno;
        }
        public function setCategoria($novaCategoria){
            $this->categoria=$novaCategoria;
        }
        public function setPontecia($novoPontecia){
            $this->potencia=$novoPontecia;
        }
        public function setAutonomia($novoAutonomia){
            $this->autonomia=$novoAutonomia;
        }
        public function setLigado($novoLigado){
            $this->ligado=$novoLigado;
        }
        
        

        //----- Outros Métodos da Classe Carro --------
        
        
        public function ligar(){
            $this->ligado=TRUE;

        }

        public function desligado(){
            $this->ligado=FALSE;

        }
        public function andar($quilometragem){
            if($this->ligado==TRUE && $this->autonomia>=$quilometragem){
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }
