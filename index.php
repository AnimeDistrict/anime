<?php 
include('db.php');
$login_ID = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Watch Anime Online, Watch English / Tagalog / Japanese / Chinese / ETC Anime Online Subbed, Dubbed</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->

	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery_ui/widgets.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery_ui/effects.min.js"></script>
	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/learning.js"></script>

	<script type="text/javascript" src="assets/js/pages/jqueryui_navigation.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->

</head>

<body class="has-detached-right" style="background-color: #21252b; padding-top: 4em;" >
	<style type="text/css">
		.dropdown:hover .dropdown-menu {
    display: block;
}
#listcolumn {
	/*your fixed height*/
   /* height: 300px; */
    -webkit-column-count: 4;
       -moz-column-count: 4;
            column-count: 4; /*3 in those rules is just placeholder -- can be anything*/
            -webkit-column-rule-style: solid;
  -moz-column-rule-style: solid;
  -o-column-rule-style: solid;
  -ms-column-rule-style: solid;
  column-rule-style:  solid;
}

#listcolumn li {
    /*display: inline-block; */
    /*necessary*/
   /* margin: 5px;*/
}
#listcolumn li:hover > a:hover {

	
	background-color: #EF6C00;
	color: white;
	

}
#hoverrr li:hover > a:hover{
		background-color: #EF6C00;
	color: white;
}

.status{
    position: absolute;
    z-index: 1;
    bottom: 0;
    left: 0;
    right: 0;
    color: #eee;
    font-size: .9rem;
    line-height: 20px;
    font-weight: 400;
    font-family: "Nunito Sans",sans-serif;
    overflow: hidden;
}
 .status .ep {
    position: relative;
    float: left;
    z-index: 2;
    padding: 0 3px 0 5px;
    border-bottom: 20px solid #694ba1;
    border-right: 10px solid transparent;
    height: 0;
}

.status .movie{
    float: right;
    padding: 0 1px;
    font-size: .7rem;
    text-transform: uppercase;
    color: #fff;
    position: relative;
    border-bottom: 20px solid #009c9c;
    border-left: 10px solid transparent;
    height: 0;
    z-index: 2;
}
.status .dub{
    float: right;
    padding: 0 1px;
    font-size: .7rem;
    text-transform: uppercase;
    color: #fff;
    position: relative;
    border-bottom: 20px solid #cfb200;
    border-left: 10px solid transparent;
    height: 0;
    z-index: 2;
}
.status .preview {
    float: right;
    padding: 0 1px;
    font-size: .7rem;
    text-transform: uppercase;
    color: #fff;
    position: relative;
    border-bottom: 20px solid #d16300;
    border-left: 10px solid transparent;
    height: 0;
    z-index: 2;
}
.status .ona {
    float: right;
    padding: 0 1px;
    font-size: .7rem;
    text-transform: uppercase;
    color: #fff;
    position: relative;
    border-bottom: 20px solid #0061aa;
    border-left: 10px solid transparent;
    height: 0;
    z-index: 2;
}
.status .movie:after {
    position: absolute;
    content: "";
    right: -10px;
    border-top: 20px solid #009c9c;
    border-left: 0 solid transparent;
    border-right: 10px solid transparent;
    height: 0;
}
.thumbnail{
	background-color: #121923;
	
}
.text-semibold{
	color: white !important;
}

	</style>
	<!-- Main navbar -->
	<div class="navbar-fixed-top navbar-inverse bg-Slate 800">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav ">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle legitRipple" aria-expanded="false">GENRE <span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-menu-left" id="listcolumn" >
						<?php 

						$SQL_genreList = "SELECT * FROM `genre_type` ORDER BY `genre_type`.`genre_ID` ASC";
						$genre_q = $conn->prepare($SQL_genreList);
						$genre_q->execute();
						$genre_results = $genre_q->fetchAll(PDO::FETCH_ASSOC);
						foreach($genre_results as $data) {
							$genre_ID = $data['genre_ID'];
							$genre_Name = $data['genre_Name'];
							?>
							<li><a href="#"><?php echo $genre_Name?></a></li>
							<?php
						    }
						?>
						
					</ul>
				</li>
				<li class="active "><a href="#" class="legitRipple ">NEWEST</a></li>
				<li><a href="#" class="legitRipple">ONGOING</a></li>
				<li><a href="#" class="legitRipple">SCHEDULE</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle legitRipple" aria-expanded="false">TYPE <span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-menu-left" id="hoverrr">
						<?php 

						$SQL_aniTypeList = "SELECT * FROM anime_type";
						$aniType_q = $conn->prepare($SQL_aniTypeList);
						$aniType_q->execute();
						$aniType_results = $aniType_q->fetchAll(PDO::FETCH_ASSOC);
						foreach($aniType_results as $data) {
							$type_ID = $data['type_ID'];
							$type_Name = $data['type_Name'];
							?>
							<li><a href="#"><?php echo $type_Name?></a>
							<?php
						    }
						?>
						
					</ul>
				</li>
				<li><a href="#" class="legitRipple">REQUEST</a></li>
				
				<form class="navbar-form navbar-left">
										<div class="form-group has-feedback">
											<input type="search" class="form-control" placeholder="Search field">
											<div class="form-control-feedback">
												<i class="icon-search4 text-size-base"></i>
											</div>
										</div>
									</form>
			</ul>

			<?php 
			if (isset($login_ID)) {
				?>

			<div class="navbar-right" >
				<p class="navbar-text">Morning, Victoria! </p>
				
				<ul class="nav navbar-nav">				
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-bell2"></i>
							<span class="visible-xs-inline-block position-right">Activity</span>
							<span class="status-mark border-orange-400"></span>
						</a>

						<div class="dropdown-menu dropdown-content">
							<div class="dropdown-content-heading">
								Activity
								<ul class="icons-list">
									<li><a href="#"><i class="icon-menu7"></i></a></li>
								</ul>
							</div>

							<ul class="media-list dropdown-content-body width-350">
								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i class="icon-mention"></i></a>
									</div>

									<div class="media-body">
										<a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
										<div class="media-annotation">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-xs"><i class="icon-paperplane"></i></a>
									</div>
									
									<div class="media-body">
										Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
										<div class="media-annotation">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-blue btn-rounded btn-icon btn-xs"><i class="icon-plus3"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch in <span class="text-semibold">Limitless</span> repository
										<div class="media-annotation">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-purple-300 btn-rounded btn-icon btn-xs"><i class="icon-truck"></i></a>
									</div>
									
									<div class="media-body">
										Shipping cost to the Netherlands has been reduced, database updated
										<div class="media-annotation">Feb 8, 11:30</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-warning-400 btn-rounded btn-icon btn-xs"><i class="icon-bubble8"></i></a>
									</div>
									
									<div class="media-body">
										New review received on <a href="#">Server side integration</a> services
										<div class="media-annotation">Feb 2, 10:20</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs"><i class="icon-spinner11"></i></a>
									</div>
									
									<div class="media-body">
										<strong>January, 2016</strong> - 1320 new users, 3284 orders, $49,390 revenue
										<div class="media-annotation">Feb 1, 05:46</div>
									</div>
								</li>
							</ul>
						</div>
					</li>

										
				</ul>
			</div>
			<?php	
			}
			else{
				?>
			<div class="navbar-right">
				<p class="navbar-text"><span class="label bg-slate-700"><span class="icon-user"></span> Member Login</span></p>
			</div>
				<?php
			}
			?>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- //main sidenav here-->


			<!-- Main content -->
			<div class="content-wrapper" style="width: 70%;">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4>CAROUSEL</h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->

			
				<!-- Content area -->
				<div class="content" >

							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">RECENTLY UPDATED</h6>
									
								</div>

								<div class="panel-body">
									<div class="jui-tabs-basic">
										<ul>
											<li><a href="#tabs-basic-1">New Episode</a></li>
											<li><a href="#tabs-basic-2">Ongoing Series</a></li>
											<li><a href="#tabs-basic-3">New Series</a></li>
										</ul>
										<div id="tabs-basic-1">
											<!-- List -->
							<div class="row">
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow">
												<span>
													<a href="watch/" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep"> Ep 20/22 </div>
											  <div class="preview"> Ona</div>
											  <!-- <div class="dub">DUB</div>  -->
											  <div class="movie">Movie</div> 
											</div>
										</div>
									
								    	<div class="caption text-center">
								    		<h6 class="text-semibold no-margin">Overlord 
								    			
								    			<small class="display-block"><a href="studio/">MADHOUSE</a></small>
								    		</h6>
								    		<hr >
								    		<div >
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
							</div>
							<!-- /list -->
										</div>
										<div id="tabs-basic-2">
											DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
										</div>
										<div id="tabs-basic-3">
											Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
										</div>
									</div>
								</div>
							</div>
							


							


					


					

				</div>
				<!-- /content area -->

			</div>
			<div style="width: 30%;" class="content-wrapper">
				<div class="content">
								<div class="panel bg-purple-300" >
								<div class="panel-heading">
									<h6 class="panel-title">CHAT<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body" style="height: 550px; width: 350px;">
									  <script id="cid0020000175623823704" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 100%;height: 100%;">{"handle":"1313asdasd","arch":"js","styles":{"a":"000000","c":"FFFFFF","d":"FFFFFF","f":27,"i":27,"k":"000000","l":"bbbbbb","m":"000000","n":"FFFFFF","o":27,"p":"10","q":"e0e0e0","fwtickm":1}}</script>
								</div>
							</div>
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">TOP ANIME</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="jui-tabs-basic">
										<ul>
											<li><a href="#tabs-basic-1">Day</a></li>
											<li><a href="#tabs-basic-2">Week</a></li>
											<li><a href="#tabs-basic-3">Month</a></li>
										</ul>
										<div id="tabs-basic-1">
											Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
										</div>
										<div id="tabs-basic-2">
											DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
										</div>
										<div id="tabs-basic-3">
											Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
										</div>
									</div>
								</div>
							</div>
			</div>
			<!-- /main content -->

		</div>
		<?php 
			include('footer.php');
		?>
		<!-- /page content -->

	</div>
	<!-- /page container -->


	<!-- Course preview modal -->
	<div class="modal fade" id="course_preview" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h6 class="modal-title">Course preview</h6>
				</div>

				<div class="modal-body">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Take this course</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /course preview modal -->

</body>
</html>
