<?php

require_once("config/config.php");
require_once("includes/header.php");
require_once("includes/classes/Produto.php");

if (isset($_POST['editarProduto'])) {
    $produto = new Produto($mysql);
    $produto->editarProduto($_POST['id'], $_POST['descricao'], $_POST['quantidade'], $_POST['valor']);

    header("Location: index.php");
	exit();
}

$produto = new Produto($mysql);
$prod = $produto->encontrarPorId($_GET['id']);

?>

<body>
    <div class="container mt-3">
        <h3>Editar um produto</h3>
        <form method="POST" action="editar_produto.php">
            <input type="hidden" name="id" value="<?php echo $prod['id']?>"/>
            <div class="mb-3">
                <label for="">Descrição</label>
                <input type="text" class="form-control" name="descricao" value="<?php echo $prod['descricao']; ?>">
            </div>
            <div class="mb-3">
                <label for="">Quantidade</label>
                <input type="text" class="form-control" name="quantidade" value="<?php echo $prod['quantidade']; ?>">
            </div>
            <div class="mb-3">
                <label for="">Valor</label>
                <input type="text" class="form-control" name="valor" value="<?php echo $prod['valor']; ?>">
            </div>
            <button type="submit" name="editarProduto" class="btn btn-primary">Editar</button>
        </form>
    </div>
</body>