<?php

function listaProdutos($con) {

	$query = "SELECT * FROM produtos";	
	$resultado = $con->query($query);
	
	$produtos = array();

	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}

	return $produtos;
}

function insereProduto($con, $nome, $preco, $descricao) {
	$query = "INSERT INTO produtos (nome, preco, descricao) VALUES ('{$nome}', '{$preco}', '{$descricao}')";
	return $con->query($query);
}

function removeProduto($con, $id) {
	$query = "DELETE FROM produtos WHERE id = {$id}";
	$con->query($query);
}