
<?php 


if (isset($page_data[2])) {
	$req_genre = $page_data[2];
}

require_once("class.user.php");

$auth_user  = new USER();

if (isset($req_genre)) {
	?>
<div class="panel panel-flat fadein">
	<div class="panel-heading">
		<h6 class="panel-title"><?php echo $req_genre;?></h6>
	</div>
	
	<div class="panel-body">
	sdfsdf
	</div>
</div>
	<?php
}
else{

	?>
<div class="panel panel-flat fadein">
	<div class="panel-heading">
		<h6 class="panel-title">default</h6>
	</div>
	
	<div class="panel-body">
	sdfsdf
	</div>
</div>
	<?php
}
?>
