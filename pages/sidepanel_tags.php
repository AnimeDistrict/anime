<?php 
if (isset($page_data[2])) {
	$req_tags = $page_data[2];
	?>
	<div class="panel panel-white">
	<div class="panel-heading">
		<h6 class="panel-title">TAGS</h6>
	</div>
	
	<div class="panel-body">
		<ul class="list-inline list-inline-condensed no-margin-bottom">
				
				<?php 


				foreach ($genre_explode as $key => $genre_value) 
				{
				?>
				<li>
					<a href="#" data-id="Genre/Name/<?php echo $genre_value?>" id="getPage">
						<span class="label border-left-success label-striped content-group"><?php echo $genre_value?></span>
					</a>
				</li>
				<?php
				}
				?>
			</ul>
	</div>
</div>
	<?php
}
else{
	

}
?>

