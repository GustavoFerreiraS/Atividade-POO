<?php
    require_once "ContaBancaria.php";

    $novaConta = new ContaBancaria;

    //var_dump($novaConta);

    $novaConta->setSaldo(1999.56);

    var_dump($novaConta);

    echo "<br>Novo saldo após depósito é " . $novaConta->depositarValor(1200.44);


    