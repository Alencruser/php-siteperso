<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(!isset($_GET['page'])){
		include '/../pages/home.php';
	} else {
		include '/../pages/bio.php';
		include '/../pages/contact.php';
	}
}

function getPart($name){
	include '/../parts/'.$name.'.php';
}
function getUserData() {
	echo json_decode(file_get_contents("/../data/user.json",FILE_USE_INCLUDE_PATH));
}