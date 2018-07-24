<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(!isset($_GET['page'])){
		include(dirname(__FILE__).'/../pages/home.php');
	} else {
		//Le reste du code
	}
}

function getPart($name){
	include(dirname(__FILE__).'/../parts/'.$name.'.php');
}
function getUserData() {
	$i=json_decode(file_get_contents(__DIR__."/../data/user.json"));
	$tabexp = $i->{'experiences'};
	echo "<div class='card container text-center'>";
	echo "<h5 class='card-title'>".$i->{'first_name'}." ".$i->{'name'}."</h5>";
	echo "<h6 class='card-subtitle mb-2 text-muted'>".$i->{'occupation'}."</h6>";
	foreach( $tabexp as &$elem){
		echo"<p class='card-text'>".$elem->{'year'}." - ".$elem->{'company'}."</p>";
	}
	echo "</div>";
}