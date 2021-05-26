<?php

$nome_cliente = $_POST['nome_cliente'];
setcookie ("nome_cookie",$nome_cliente)
$preco_produto = $_POST['preco_produto'];
setcookie ("preco_cookie",$preco_produto)
$quantidade = $_POST['quantidade'];
$total = $preco_produto*$quantidade;

echo 'Oi'.$nome_cliente.'!O Valor Total do Produto é'.$total;

?>