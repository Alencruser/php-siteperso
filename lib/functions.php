<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(!isset($_GET['page'])){
	include(dirname(__FILE__).'/../pages/home.php');
	include(dirname(__FILE__).'/../pages/bio.php');
	include(dirname(__FILE__).'/../pages/contact.php');
	} else {
		
	}
}

function getPart($name){
	include(dirname(__FILE__).'/../parts/'.$name.'.php');
}
function getUserData() {
	var_dump(json_decode(file_get_contents(__DIR__."/../data/user.json")));
}