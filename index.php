<?php

require_once("config/config.php");
require_once("includes/header.php");
require_once("includes/classes/Produto.php");

$produto = new Produto($mysql);
$produtos = $produto->exibirProdutos();

?>

<body>
    <div class="container">
        <h3 class="text-center mt-3">Listagem de Produtos</h3>

        <?php foreach($produtos as $produto): ?>
            <div class="card mt-3">
                <h5 class="card-header"><?php echo $produto['descricao']; ?></h5>
                <div class="card-body">
                    <h5 class="card-title">Quantidade do produto: <?php echo $produto['quantidade']; ?></h5>
                    <p class="card-text">Valor: R$ <?php echo number_format($produto['valor'], 2, ',', '.'); ?></p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary" href="editar_produto.php?id=<?php echo $produto['id']; ?>">Editar</a>
                    <a class="btn btn-danger" href="excluir_produto.php?id=<?php echo $produto['id']; ?>">Excluir</a>
                </div>
            </div>
        <?php endforeach ?>

        <center><a class="btn btn-success mt-3" href="inserir_produto.php">Inserir novo produto</button></center>

    </div>
    
</body>
</html>