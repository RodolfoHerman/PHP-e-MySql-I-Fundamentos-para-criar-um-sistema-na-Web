<?php 
	include("conecta.php");
	include("banco-produto.php");
	include("cabecalho.php");
?>

<table class="table table-striped table-hover table-bordered">
	<?php foreach(listaProdutos($con) as $produto): ?>
		<tr>
			<td><?php echo $produto['nome']; ?></td>
			<td><?php echo $produto['preco']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>


<?php include("rodape.php"); ?>