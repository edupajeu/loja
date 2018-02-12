<?php include("cabecalho.php"); 
 include("conecta.php");
 include("banco-produto.php"); ?>

<?php if(array_key_exists("removido", $_POST) && $_POST["removido"]=="true") { 
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
			<td><?= substr($produto['descricao'], 0, 40) ?></td>
			<td><?= $produto['categoria_nome'] ?></td>
			<td>
				<form action="deleta-produto.php?" method="post" >
					<input type="hidden" name="id" value="<?=$produto['id']?>"/>
					<button class="btn btn-danger">Excluir</button> 
				</form>
			</td>
		</tr>
	
	<?php
	endforeach
	?> 

</table>

<?php include("rodape.php"); ?>