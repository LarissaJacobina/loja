<?php include("cabecalho.php");
include("conecta.php");

$id = $_POST['id'];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if(array_key_exists('usado', $_POST)) {
    $usado = "true";
} else {
    $usado = "false";
}


$query = "update produtos set id = {$id} , nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id= {$categoria_id}, usado = {$usado} where id = '{$id}'";
if(mysqli_query($conexao, $query)) {?>
<p class="alert alert-success">Produto <?= $nome;?>, <?= $preco;?> alterado com sucesso!</p>
<?php } else {
	$msg=mysqli_error($conexao);
	?>
<p class="alert alert-warning">Produto não alterado: <?= msg?> </p>
<?php
}
?>
<?php include("rodape.php");?>