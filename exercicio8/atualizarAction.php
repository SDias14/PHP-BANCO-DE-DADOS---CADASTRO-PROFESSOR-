<?php require_once ('verificarAcesso.php'); ?>
<?php require_once ('cabecalho.php'); ?>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" >
 <?php
require_once 'conexaoBD.php';
 $sql = "UPDATE professor SET nome = '".$_POST['txtnome']."', disciplina = '".
$_POST['txtdisciplina']."'";

 if ($conexao->query($sql) === TRUE) {
 echo '
 <a href="listar.php">
 <h1 class="w3-button w3-
teal">Professor Atualizado com sucesso! </h1>
 </a>
 ';
 $id = mysqli_insert_id($conexao);

 } else {
 echo '
 <a href="listar.php">
 <h1 class="w3-button w3-teal">ERRO! </h1>
 </a>
 ';
 }
 $conexao->close();
 ?>
</div>
<?php require_once ('rodape.php'); ?>
