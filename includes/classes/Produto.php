<?php

class Produto
{
	private mysqli $mysql;

	public function __construct(mysqli $mysql) {
		$this->mysql = $mysql;
	}

    public function inserirProduto($descricao, $quantidade, $valor) {
        $sql = "INSERT INTO produtos (descricao, quantidade, valor) VALUES (?, ?, ?)";
        $stmt = $this->mysql->prepare($sql);
		$stmt->bind_param('sid', $descricao, $quantidade, $valor);
		$stmt->execute();    
    }

    public function excluirProduto(string $id) {
        $sql = $this->mysql->prepare('DELETE FROM produtos WHERE id = ?');
        $sql->bind_param('s', $id);
        $sql->execute();
    }

    public function editarProduto(string $id, $descricao, $quantidade, $valor) {
        $sql = "UPDATE produtos SET descricao = ?, quantidade = ?, valor = ? WHERE id = ?";
        $stmt = $this->mysql->prepare($sql);
        $stmt->bind_param('sids', $descricao, $quantidade, $valor, $id);
        $stmt->execute();
    }

    public function exibirProdutos() {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->mysql->query($sql);
        $produtos = $stmt->fetch_all(MYSQLI_ASSOC);
        return $produtos;
    }

    public function encontrarPorId(string $id) {
        $produto = $this->mysql->prepare('SELECT * FROM produtos WHERE id = ?');
        $produto -> bind_param('s', $id);
        $produto -> execute();
        $prod = $produto->get_result()->fetch_assoc();
        return $prod;
    }

   
}




?>