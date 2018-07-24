<?php 
include (__DIR__."/../parts/header.php");
?>
<div class="container"><center><h5>
	<?php 
	$i=json_decode(file_get_contents(__DIR__."/../data/last_message.json"));
	foreach($i as $s){
		echo $s."<br>";
	}
	 ?>
</h5></center></div>
<?php 
include (__DIR__."/../parts/footer.ejs") ?>