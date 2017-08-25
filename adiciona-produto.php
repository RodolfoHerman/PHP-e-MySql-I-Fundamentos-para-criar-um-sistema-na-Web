<?php
	include("conecta.php"); 
	include("banco-produto.php");
	include("cabecalho.php");


	$nome = $_GET['nome'];
	$preco = $_GET['preco'];
?>

<?php if(insereProduto($con, $nome, $preco)): ?>
	<p class="text-success">
		Produto <?php echo $nome; ?> com o valor de R$<?php echo $preco; ?> adicionado com sucesso !!
	</p>	
<?php else: ?>
	<p class="text-danger">
		Produto <?php echo $nome; ?> com o valor de R$<?php echo $preco; ?> não foi adicionado. Erro: <?php echo $con->error; ?>
	</p>
<?php endif; ?>


<?php $con->close(); ?>
<?php include("rodape.php"); ?>