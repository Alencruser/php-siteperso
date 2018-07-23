<?php
include "/../parts/header.php";
?>
<div>
	<p>Voici les informations récoltées : </p>
	<p><?php 
	echo $_POST["user"]." ".$_POST["message"];
	?></p>
</div>
<div><?php 
if(isset($_POST["user"])&& isset($_POST["message"])){
	?>
	<a href="/public"><button class="btn btn-primary">Envoyer ces informations dans le fichier json</button></a>
<?php
$data=array("Utilisateur" =>$_POST["user"],"Message"=>$_POST["message"]);
file_put_contents(__DIR__."/../data/last_message.json",json_encode($data));
}
 ?>
</div>
<?php 
include "/../parts/footer.php"
?>