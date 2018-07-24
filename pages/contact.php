<?php 
include (__DIR__."/../parts/header.php");
?>
<div class="container">
	<form class="" method="POST" action="/../public/save.php">
		<div class="form-group">
			<input class="form-control" type="text" name="user" placeholder="User">
		</div>
		<div class="form-group">
			<textarea class="form-control" name="message" placeholder="Message"></textarea>
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Valider</button>
		</div>
	</form>
</div>
<?php
include (__DIR__."/../parts/footer.php");
?>