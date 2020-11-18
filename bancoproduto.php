<?php
function listaprodutos($conexao) {
	$produtos = array();
	$resultado = mysqli_query($conexao, "select p.*, c.nome 
	as categoria_nome from produtos as p join categorias 
	as c on c.id=p.categoria_id");
	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
}
	return $produtos;
}

function buscaProduto($conexao, $id) {
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function removeproduto($conexao, $id) {
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);
	}
	
