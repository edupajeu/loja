<?php include("cabecalho.php"); 
include("conecta.php"); 
include("banco-produto.php"); ?>

<?php
$id = $_GET['id'];
deletaProduto ($conexao, $id);


header("Location:produto-lista.php?removido=true");
die();
?>
