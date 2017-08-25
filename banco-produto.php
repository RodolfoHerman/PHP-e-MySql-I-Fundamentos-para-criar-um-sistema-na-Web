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

function insereProduto($con, $nome, $preco) {
	$query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', '{$preco}')";
	return $con->query($query);
}