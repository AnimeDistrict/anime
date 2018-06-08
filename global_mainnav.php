
	<!-- Main navbar -->
	<div class="navbar navbar-inverse ">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"  data-id="index" id="getPage"><?php echo $config_page_header;?></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>

			</ul>
			<ul class="nav navbar-nav navbar-left" id="navigation">

				<li>
					<a href=""  data-id="anime/" id="getPage">
						ANIME LIST
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle legitRipple" data-toggle="dropdown" aria-expanded="false">GENRE<span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-menu" id="listcolumn">
						<?php 
						$SQL_genreList = "SELECT * FROM `genre_type` ORDER BY `genre_type`.`genre_ID` ASC";
						$genre_q = $auth_user->runQuery($SQL_genreList);
						$genre_q->execute();
						$genre_results = $genre_q->fetchAll(PDO::FETCH_ASSOC);
						foreach($genre_results as $data) {
							$genre_ID = $data['genre_ID'];
							$genre_Name = $data['genre_Name'];
							?>
							<li><a href="#"  data-id="Genre/Name/<?php echo $genre_Name?>" id="getPage"><?php echo $genre_Name?></a></li>
							<?php
						    }
						?>
					</ul>
				</li>
				<li>
					<a href=""  data-id="Newest/" id="getPage">
						NEWEST
					</a>
				</li>
				<li>
					<a href=""  data-id="Ongoing/" id="getPage">
						ONGOING
					</a>
				</li>
				<li>
					<a href=""  data-id="Schedule/" id="getPage">
						SCHEDULE
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle legitRipple" data-toggle="dropdown" aria-expanded="false">TYPE <span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-menu-left" id="hoverrr">
						<?php 
						$SQL_aniTypeList = "SELECT * FROM anime_type";
						$aniType_q =  $auth_user->runQuery($SQL_aniTypeList);
						$aniType_q->execute();
						$aniType_results = $aniType_q->fetchAll(PDO::FETCH_ASSOC);
						foreach($aniType_results as $data) {
							$type_ID = $data['type_ID'];
							$type_Name = $data['type_Name'];
							?>
							<li><a href="#"  data-id="Type/Name/<?php echo $type_Name?>" id="getPage" ><?php echo $type_Name?></a></li>
							<?php
						    }
						?>
					</ul>
				</li>
				<li>
					<a  href="#" class="legitRipple" data-toggle="modal" data-target="#modal-request">
						REQUEST
					</a>
				</li>
				<li>
					<a href=""  data-id="Studio/" id="getPage">
						STUDIO
					</a>
				</li>
				<form class="navbar-form navbar-left">
					<div class="form-group has-feedback">
						<input type="search" class="form-control" placeholder="Search field">
						<div class="form-control-feedback">
							<i class="icon-search4 text-size-base"></i>
						</div>
					</div>
				</form>

			</ul>
		</div>
	
			
		
		<div class="navbar-collapse collapse" id="navbar-mobile">

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<?php
					if (isset($_SESSION['ua_ID'])) {
						?>
					<a class="dropdown-toggle legitRipple" data-toggle="dropdown" aria-expanded="false">
						<img src="assets/images/placeholder.jpg" alt="">
						<span><?php echo $_SESSION['ua_username'] ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
						<li><a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="logout?logout=true"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
						<?php 
					}
					else{
						?>
						<li>
							<a class="dropdown-toggle" data-toggle="modal" data-target="#modal-login">
								<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> </span>Login
							</a>
						</li>
						<?php
					}
					
					?>
					
				</li>
				
			</ul>
		</div>
	</div>
	<!-- /main navbar -->