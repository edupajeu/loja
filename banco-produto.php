<!-- Aqui se encontram a funçoes de controle de produtos-->

<?php 
 
 function listaProdutos($conexao)
 {
 	$produtos = array();
 	$resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id");


    while ($produto = mysqli_fetch_assoc($resultado)) {
         	array_push($produtos, $produto);
 }      
 
  return $produtos;

 }

   
function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id) {
        $query = "insert into produtos (nome, preco, descricao, categoria_id) values ('{$nome}', {$preco}, '{$descricao}', {categoria_id})";
        $resultadoDaInsercao = mysqli_query($conexao, $query);
        return $resultadoDaInsercao;
}

function deletaProduto($conexao, $id) {
		$query ="delete from produtos where id = {$id}";
		return mysqli_query($conexao,$query);
}

?>   