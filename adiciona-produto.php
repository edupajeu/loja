<?php include("cabecalho.php"); 
include("conecta.php"); 
include("banco-produto.php"); 
include("banco-categoria")
?>

<?php    

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];      
?>

<!-- Chamada da função de insercao de produto-->

<?php  
if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)) { ?> 
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