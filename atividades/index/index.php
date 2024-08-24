<?php

require"Pessoa.php";
require"Programador.php";

$programar = new Programador("Diego","PHP");


echo $programar->getNome();

echo $programar::ESPECIE;



