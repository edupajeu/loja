<?php include("cabecalho.php"); ?>

<?php    

$nome = $_GET["nome"];
$preco = $_GET["preco"];    
$conexao = mysqli_connect('localhost', 'root', '', 'loja');

function insereProduto($conexao, $nome, $preco) {
        $query = "insert into produtos (nome, preco) values ('{$nome}', '{$preco}')";
        return mysqli_query($conexao, $query);
}
  
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