
<?php 


if (isset($page_data[2])) {
	$req_anime = $page_data[2];
}

require_once("class.user.php");

$auth_user  = new USER();

if (isset($req_anime)) {
	$sql_fetch_animelist = "
	SELECT * FROM `anime_title` WHERE  anime_ID = '$req_anime'";
	$fetch_animelist_q = $auth_user->runQuery($sql_fetch_animelist);
	$fetch_animelist_q->execute();
	$fetch_animelist_q_result = $fetch_animelist_q->fetchAll(PDO::FETCH_ASSOC);
	
	foreach($fetch_animelist_q_result as $data) {
		$anime_title = $data['anime_title'];
	}

	?>
<div class="panel panel-flat fadein">
	<div class="panel-heading">
		<h6 class="panel-title"><?php echo ucfirst($anime_title)?></h6>
	</div>
	
	<div class="panel-body">
	sdfsdf
	</div>
</div>
	<?php
}
else{

	?>
<!-- anime Sitemap -->
<div class="panel panel-flat fadein" id="sitemap" >
	<div class="panel-heading">
		<h5 class="panel-title">Anime List</h5>
	</div>

	<div class="panel-body" style="color: black;">
		<div class="row">
			
				<?php 
				$sql_fetch_animelist = "
				SELECT * FROM `anime_title`  
				ORDER BY `anime_title`.`anime_title` ASC";
				$fetch_animelist_q = $auth_user->runQuery($sql_fetch_animelist);
				$fetch_animelist_q->execute();
				$fetch_animelist_q_result = $fetch_animelist_q->fetchAll(PDO::FETCH_ASSOC);
				
				foreach($fetch_animelist_q_result as $data) {
				$anime_title = $data['anime_title'];
				$anime_ID = $data['anime_ID'];
				$alpabeth = substr($anime_title ,0,1);

				 ?>
				 <div class="col-sm-6 col-lg-3">
				 	<div class="content-group">
					<h6 class="text-semibold"><?php
					echo $alpabeth
					?></h6>
					<hr>
					<ul class="list list-unstyled">
						<li><a href="#" data-id="anime/Name/<?php echo $anime_ID?>" id="getPage"><?php echo ucfirst($anime_title)?></a></li>
					</ul>
				</div>

				</div>

				 	<?php
				 } 


				?>
			
		</div>
	</div>
</div>
<!-- /anime  sitemap -->
	<?php
}
?>
