 <!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-fixed">
				
					<div class="sidebar-content"><!-- <div class="sidebar-content"> -->
					<!-- User menu -->
					<div class="sidebar-user-material">
						<div class="category-content">
							<div class="sidebar-user-material-content">
								<a href="#" style="border-radius:50%;">
								<?php 
								$content = new USER();
								$ua_ID = $userRow['ua_ID'];
								$user_data = $content->runQuery("
								SELECT 
								ua.ua_ID,
								ua.ua_username,
								ua.ua_password,
								ua.ua_dateAdded,
								ud.ud_Img,
								ud.ud_fName,
								ud.ud_mName,
								ud.ud_lName,
								ul.ul_Name,
                                us.status_Name
                                FROM `user_account` ua
								LEFT JOIN `user_detail` ud ON ud.ua_ID = ua.ua_ID
								LEFT JOIN user_level ul ON ul.ul_ID = ua.ul_ID
								LEFT JOIN user_status us ON us.status_ID = ua.status_ID
								WHERE ua.ua_ID = $ua_ID");
								$user_data->execute();
								$user_data = $user_data->fetchAll(PDO::FETCH_ASSOC);
								foreach ($user_data as  $value) {
									$image_data = $value['ud_Img'];
									if ($image_data == null) {
									  $encoded_image = "../assets/images/default.png";
									  echo $img = "<img src='$encoded_image' class='img-circle img-responsive' alt=''></img>";
									}
									else{
									  $encoded_image = base64_encode($image_data);
									  echo $img = "<img src='data:image/jpeg;base64,{$encoded_image}' class='img-circle img-responsive' alt=''></img>";
									}

									}
								
								?>
							</a>
								<h6>
								<?php echo $value['ud_fName']." ".$value['ud_mName'].". ".$value['ud_lName']?>
								</h6>
								<h6>
								<?php 
								echo $value['ul_Name'];
								?>
								</h6>
							</div>
														
							<div class="sidebar-user-material-menu">
								<a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
							</div>
						</div>
						
						<div class="navigation-wrapper collapse" id="user-nav">
							<ul class="navigation">
								<li><a href="profile"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
								
								<li class="divider"></li>
								<li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
								<li><a href="../logout?logout=true"><i class="icon-switch2"></i> <span>Logout</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li>
									<a href="account" class="legitRipple"><i class="icon-users"></i> <span>Account</span></a>
								</li>
								<li>
									<a href=""><i class="icon-calculator3"></i> <span>Anime</span></a>
									<ul>
										<li><a href="#" ><i class="icon-list"></i> Newest Anime List</a></li>
										<li><a href="#" ><i class="icon-list"></i> Ongoing Anime List</a></li>
										<li><a href="#" ><i class="icon-list"></i> Schedule Anime List</a></li>
										<li><a href="#" ><i class="icon-list"></i> Most Watch By Genre</a></li>
										<li><a href="#" ><i class="icon-video-camera-slash"></i> Broken  Link</a></li>
									</ul>
								
								</li>
								<li>
									<a href=""><i class="icon-database"></i> <span>Database References List</span></a>
									<ul>#
										<li><a href="#" ><i class="icon-database"></i> Anime Type</a></li>
										<li><a href="#" ><i class="icon-database"></i> Genre</a></li>
										<li><a href="#" ><i class="icon-database"></i> Studio</a></li>
										<li><a href="#" ><i class="icon-database"></i> Season Type</a></li>
										<li><a href="#" ><i class="icon-database"></i> Content Rating System</a></li>
										<li><a href="#" ><i class="icon-database"></i> User Level</a></li>
										<li><a href="#" ><i class="icon-database"></i> User Status</a></li>

										
									</ul>
								
								</li>
								
								
								

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->