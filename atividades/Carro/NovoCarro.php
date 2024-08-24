<?php
 require_once "Carro.php";

 
//__construct($novoMarca,$novoModelo,$novoAno,$novaCategoria,$novaPontecia,$novaAutomia,$novoLigado)
$fusca = new Carro("Volkswagen","Fusca", 2000, "passeio", 200,500,TRUE);
var_dump($fusca);

$fusca->ligar();

echo "<hr>";

var_dump($fusca);

echo "<hr>";
    
if($fusca->andar(300)){
        echo "Boa viagem!";
}else{
        echo "Coloque mais combustivel ou ligue o carro";
}
    