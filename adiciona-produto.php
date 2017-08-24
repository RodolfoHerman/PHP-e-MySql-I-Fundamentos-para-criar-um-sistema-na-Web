<?php 
	include("cabecalho.php"); 

	$nome = $_GET['nome'];
	$preco = $_GET['preco'];

?>


<p class="alert-success">
	Produto <?php echo $nome; ?> com o valor de R$<?php echo $preco; ?> adicionado com sucesso !!
</p>

<?php include("rodape.php"); ?>