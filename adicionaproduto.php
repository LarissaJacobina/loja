<?php include("cabecalho.php");
include("conecta.php");
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if(array_key_exists('usado', $_POST)) {
    $usado = "true";
} else {
    $usado = "false";
}


$query = "insert into produtos(nome, preco, descricao,categoria_id, usado) values ('{$nome}' , {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
if(mysqli_query($conexao, $query)) {?>
<p class="alert alert-success">Produto <?= $nome;?>, <?= $preco;?> adicionado com sucesso!</p>
<?php } else {
	$msg=mysqli_error($conexao);
	?>
<p class="alert alert-warning">Produto não adicionado: <?= msg?> </p>
<?php
}
?>
<?php include("rodape.php");?>