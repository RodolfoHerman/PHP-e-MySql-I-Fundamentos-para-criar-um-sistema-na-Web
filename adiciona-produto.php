<?php 
	include("cabecalho.php"); 

	$nome = $_GET['nome'];
	$preco = $_GET['preco'];

	$query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', '{$preco}')";

	$con = new mysqli("127.0.0.1", "root", "admin", "loja");

?>

<?php if($con->query($query)): ?>
	<p class="alert-success">
		Produto <?php echo $nome; ?> com o valor de R$<?php echo $preco; ?> adicionado com sucesso !!
	</p>	
<?php else: ?>
	<p class="alert-danger">
		Produto <?php echo $nome; ?> com o valor de R$<?php echo $preco; ?> não foi adicionado !!
	</p>
<?php endif; ?>


<?php $con->close(); ?>
<?php include("rodape.php"); ?>