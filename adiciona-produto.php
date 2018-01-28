<?php include("cabecalho.php"); 
include("conecta.php"); 
include("banco-produto.php"); ?>

<?php    

$nome = $_GET["nome"];
$preco = $_GET["preco"];    
?>

<!-- Chamada da função de insercao de produto-->

<?php  
if (insereProduto($conexao, $nome, $preco)) { ?> 
   <!-- Mensagem de sucesso -->
   <p class="alert-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>

<?php } else { 
     $msg = mysqli_error($conexao);

?>
   <!-- Mensagem de erro ao adicionar produto -->
        <p class="alert-danger"> Produto <?= $nome; ?> não adicionado! Erro: <?= $msg ?> </p>
    
<?php
}
?>

<?php include("rodape.php"); ?>