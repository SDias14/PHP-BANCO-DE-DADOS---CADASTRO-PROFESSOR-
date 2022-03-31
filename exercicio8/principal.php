<?php require_once ('verificarAcesso.php');?>
<?php require_once ('cabecalho.php'); ?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-displaytopright">
<form action="logoutAction.php" class="w3-container" method='post'>
<button name="btnLogout" class="w3-button w3-red w3-cell w3-roundlarge w3-right w3-margin-right">
<i class="w3-xxlarge fa fa-times-rectangle"> </i> Logout
</button>
</form>
</div>

<div class="w3-padding w3-text-grey w3-half w3-display-middle w3-center">
 <h1 class="w3-center w3-teal w3-round-large w3-
margin">Escola João de Deus</h1>
 <div class="w3-row">
 <div class="w3-col w3-button w3-teal w3-cell " style="width:45%;">
 <a href="cadastro.php" style="text-decoration: none;">
 <i class=" fa fa-user-plus" style="font-size: 8.5em"></i>
 <p style="font-size: 1em">Adicionar Professor </p>
 </a>
 </div> 
 
 <div class="w3-col w3-button w3-teal w3-cell w3-
center" style="width:45%;">
 <a href="listar.php" style="text-decoration: none;">
 <i class="fa fa-id-card" style="font-size: 8.5em"></i>
 <p style="font-size: 1em">Listar Professores</p>
 </a>
 </div>
 </div>
 <?php require_once ('rodape.php'); ?>