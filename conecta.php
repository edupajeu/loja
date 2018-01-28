<!-- Criei o phpmyadmin, pois o usuário root esta com problemas-->

<?php
  $conexao = mysqli_connect('localhost', 'phpmyadmin', 'some_pass', 'loja');
?>