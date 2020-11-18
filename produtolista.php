<?php include("cabecalho.php");
include("conecta.php");
include("bancoproduto.php");?>
<?php
	if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true") {
		?>
		<p class="alert alert-success">Produto apagado com sucesso.</p>
	<?php
	}
?>

<table class="table table-striped table-bordered"> 

	<?php
$produtos = listaprodutos($conexao);
foreach($produtos as $produto) {
?>
	<tr>
		<td><?= $produto['nome']?></td>
		<td><?= $produto['preco']?></td>
		<td><?= substr($produto['descricao'], 0, 40)?></td>
		<td><?= $produto['categoria_nome']?></td>
        <td><a class="btn btn-primary" href="produtoalteraformulario.php?id=<?=$produto['id']?>">alterar</a>
		<td>
			<form action="removeproduto.php" method="post">
			<input type="hidden" name="id" value="<?= $produto['id']?>">
			<button class="btn btn-danger"> remover </button>
			</form>
		</td>
		</td>
	</tr>
<?php
	}
?>
</table>
<?php include("rodape.php");?>