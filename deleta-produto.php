<?php include("cabecalho.php"); 
include("conecta.php"); 
include("banco-produto.php"); ?>

<?php
$id = $_POST['id'];
deletaProduto ($conexao, $id);


header("Location:produto-lista.php?removido=true");
die();
?>
