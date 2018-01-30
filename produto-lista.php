<?php include("cabecalho.php"); 
 include("conecta.php");
 include("banco-produto.php"); ?>

<?php if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true") { 
?>
 <p class="alert-success">Produto excluido com sucesso.</p>

<?php
}
?>

<!-- Forma usadas as classes do bootstrap "table-striped"(mesclar as cores das linhas) "table-bordered"(colocar borda na tabela)-->
<table class="table table-striped table-bordered">

	<?php 
	$produtos = listaProdutos($conexao);
	?>

	<?php
	foreach ($produtos as $produto) :
	?>

		<tr>
			<td><?= $produto['nome'] ?></td>
			<td><?= $produto['preco'] ?></td>
			<td>
				<a href="deleta-produto.php?id=<?=$produto['id']?>" class="btn btn-danger" >Excluir</a>
			</td>
		</tr>
	
	<?php
	endforeach
	?> 

</table>

<?php include("rodape.php"); ?>