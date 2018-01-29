<?php include("cabecalho.php"); 
 include("conecta.php");
 include("banco-produto.php"); ?>

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
		</tr>
	
	<?php
	endforeach
	?> 

</table>



<?php include("rodape.php"); ?>