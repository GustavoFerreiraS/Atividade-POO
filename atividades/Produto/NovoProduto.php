<?php
    require_once "Produto.php";

    $novoProduto = new Produto;

    $novoProduto->setQuantidadeEstoque(267);

    var_dump($novoProduto);

    echo "<br>Novo saldo após alteração é " . $novoProduto-> alterarEstoque (3);
