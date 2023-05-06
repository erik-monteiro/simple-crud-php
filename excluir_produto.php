<?php

require_once("config/config.php");
require_once("includes/header.php");
require_once("includes/classes/Produto.php");

if (isset($_POST['excluirProduto'])) {
    $produto = new Produto($mysql);
    $produto->excluirProduto($_POST['id']);

    header("Location: index.php");
	exit();
}

?>

<body>
    <div class="container mt-3">
        <h3>Confirmar exclusão</h3>
        <form method="POST" action="excluir_produto.php">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <p> Realmente deseja excluir o produto?</p>
            <button type="submit" name="excluirProduto" class="btn btn-primary">Excluir</button>
        </form>
    </div>
</body>