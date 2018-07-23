<?php 
include (__DIR__."/../parts/header.php");
?>
<div><h5>
	<?php 
	 var_dump(json_decode(file_get_contents(__DIR__."/../data/last_message.json")));
	 ?>
</h5></div>
<?php 
include (__DIR__."/../parts/footer.ejs") ?>