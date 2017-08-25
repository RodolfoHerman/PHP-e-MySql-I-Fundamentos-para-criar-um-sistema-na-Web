<?php 
	include("conecta.php");
	include("cabecalho.php");

	$query = "SELECT * FROM produtos";

	$resultado = $con->query($query);

	while($produto = mysqli_fetch_assoc($resultado)) {
		echo $produto['nome'] . "<br/>";
	}


?>




<?php include("rodape.php"); ?>