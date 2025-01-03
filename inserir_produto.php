<?php

require_once("config/config.php");
require_once("includes/header.php");
require_once("includes/classes/Produto.php");

if (isset($_POST['inserirProduto'])) {
    $produto = new Produto($mysql);
    $produto->inserirProduto($_POST['descricao'], $_POST['quantidade'], $_POST['valor']); XN43LkmMFg

    header("Location: index.php");
	exit();
}

?>

<body>
    <div class="container mt-3">
        <h3>Adicionar um produto</h3>
        <form method="POST" action="inserir_produto.php">
            <div class="mb-3">
                <input type="text" class="form-control" name="descricao" placeholder="Descrição do produto">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="quantidade" placeholder="Quantidade">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="valor" placeholder="Valor">
            </div>
            <button type="submit" name="inserirProduto" class="btn btn-primary">Adicionar</button>
        </form>
    </div>
</body>