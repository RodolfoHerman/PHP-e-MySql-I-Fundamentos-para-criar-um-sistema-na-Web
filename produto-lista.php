<?php 
	include("conecta.php");
	include("banco-produto.php");
	include("cabecalho.php");

	if(array_key_exists('removido', $_GET) && $_GET['removido'] == TRUE) {
		echo "<p class='text-success'>Produto {$_GET['id']} removido !!</p>";
	}
?>

<table class="table table-striped table-hover table-bordered">
	<?php foreach(listaProdutos($con) as $produto): ?>
		<tr>
			<td><?php echo $produto['nome']; ?></td>
			<td><?php echo $produto['preco']; ?></td>
			<td><a href="remove-produto.php?id=<?php echo $produto['id']; ?>" class="text-danger">Remover</a></td>
		</tr>
	<?php endforeach; ?>
</table>


<?php include("rodape.php"); ?>