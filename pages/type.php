
<?php 
$req_type = $page_data[2];
require_once("class.user.php");
$auth_user  = new USER();

?>
<div class="panel panel-flat fadein">
	<div class="panel-heading">
		<h6 class="panel-title"><?php echo $req_type;?></h6>
	</div>
	
	<div class="panel-body">
									<div class="tabbable tab-content-bordered">
										<ul class="nav nav-tabs nav-tabs-highlight">
											<li class="active"><a href="#bordered-tab1" data-toggle="tab" class="legitRipple" aria-expanded="true" >New Episode</a></li>
											<li class=""><a href="#bordered-tab2" data-toggle="tab" class="legitRipple" aria-expanded="false" >Ongoing Series</a></li>
											<li class=""><a href="#bordered-tab3" data-toggle="tab" class="legitRipple" aria-expanded="false" >New Series</a></li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane has-padding  active" id="bordered-tab1">
												

												<div class="row">
													
								
								<?php 
								$sql_fetch_anime= "
								SELECT 
								ani_title.anime_ID,
								ani_title.anime_title,
								ani_title.anime_img,
								st.status_Desc,
								ani_desc.desc_synopsis,
								ani_desc.desc_background,
								ani_desc.desc_aired,
								ani_desc.desc_aired_end,
								ani_desc.desc_total_episode,
								ani_desc.desc_Duration,
								asrs.source_Name,
								aty.type_Name,
								crs.crs_ID,
								crs.crs_Symbol_Img,
								crs.crs_Abbreviation,
								crs.crs_Name,
								crs.crs_Description,
								 (
								 SELECT (GROUP_CONCAT(gt.genre_Name)) FROM anime_genre ag
								LEFT JOIN genre_type gt ON gt.genre_ID = ag.genre_ID
								 ) genre
								 ,
								(
								SELECT (GROUP_CONCAT(sl.studio_Name)) FROM `anime_description_licensor` adl 
								LEFT JOIN studio_list sl ON sl.studio_ID = adl.studio_ID
								WHERE adl.desc_ID = ani_desc.desc_ID
								) licensor,
								(
								SELECT (GROUP_CONCAT(sl.studio_Name)) FROM `anime_description_studio` ads 
								LEFT JOIN studio_list sl ON sl.studio_ID = ads.studio_ID
								WHERE ads.desc_ID = ani_desc.desc_ID
								) studio,
								 season.season_Name,
								 lt.lang_name
								FROM anime_title ani_title
								LEFT JOIN anime_description ani_desc ON ani_desc.anime_ID  = ani_title.anime_ID
								LEFT JOIN anime_source asrs ON asrs.source_ID = ani_desc.source_ID
								LEFT JOIN anime_type aty ON aty.type_ID = ani_desc.type_ID
								LEFT JOIN content_rating_system crs ON crs.crs_ID = ani_desc.crs_ID
								LEFT JOIN status_type st ON st.status_ID = ani_title.status_ID 
								LEFT JOIN season_type season ON season.season_ID = ani_desc.season_ID
								LEFT JOIN language_type lt ON lt.lang_ID = ani_desc.lang_ID
								LIMIT 16
								";
								$fetch_ani_q = $auth_user->runQuery($sql_fetch_anime);
								$fetch_ani_q->execute();
								$fetch_ani_qresult = $fetch_ani_q->fetchAll(PDO::FETCH_ASSOC);
								$i = 0;
								foreach($fetch_ani_qresult as $data) {
								$anime_ID = $data['anime_ID'];
								$anime_title = $data['anime_title'];
								$anime_img = $data['anime_img'];
								$status_Desc = $data['status_Desc'];
								$desc_synopsis = $data['desc_synopsis'];
								$desc_background = $data['desc_background'];
								$desc_aired = $data['desc_aired'];
								$desc_aired_end = $data['desc_aired_end'];
								$desc_total_epis = $data['desc_total_episode'];
								$desc_Duration = $data['desc_Duration'];
								$source_Name = $data['source_Name'];
								$type_Name = $data['type_Name'];
								$crs_ID = $data['crs_ID'];
								$crs_Symbol_Img = $data['crs_Symbol_Img'];
								$crs_Abbreviation = $data['crs_Abbreviation'];
								$crs_Name = $data['crs_Name'];
								$crs_Description = $data['crs_Description'];
								$licensor =  $data['licensor'];
								$studio   =  $data['studio'];
								$lang_name   =  $data['lang_name'];
								$licensor_explode = explode(',', $licensor);
								$studio_explode = explode(',', $studio);
								if ($type_Name == "TV Series") {
									$type_Name = "series";
								}
								$type_Name = strtolower($type_Name);
									$dub = "Japanese";
									$epi_num  = "01";
									?>
									<div class="col-lg-3 col-md-6">
									<div class="thumbnail no-padding">
										
										<div class="thumb">
											<img src="assets/images/overlord.jpg" alt="" >
											<div class="caption-overflow" style="">
												<span>
													<a href="watch?anime=<?php echo $anime_title?>-<?php echo $anime_ID?>/dub-<?php echo $dub?>/episode-<?php echo $epi_num+$i?>" class="btn  btn-icon btn-xs" data-popup="lightbox"  style="background-color: white"><i class="icon-play3" style="color: black;" ></i></a>
													
												</span>
											</div>
											<div class="status"> 
												
											  <div class="ep" > Ep 13<?php if(!empty($desc_total_epis)){echo "/".$desc_total_epis;}?></div>
											  <div class="<?php echo $type_Name ?>"><?php  if ($type_Name == "series") {
											  	echo "TV Series";
											  }
											  else{
											  	echo $type_Name;
											  } ?>
											  </div> 
											  <div class="dub"><?php echo $lang_name?> Dub</div> 
											</div>
										</div>
									
								    	<div class="caption text-center" style="min-height: 150px; max-height: 150px;">
								    		<h6 class="text-semibold no-margin">
								    		<div style="overflow: hidden; min-height: 50px; max-height: 50px; font-size: 12px;">
								    				 <a href="anime?anime_ID=<?php echo $anime_ID?>" ><?php echo $anime_title?></a>	
								    		</div>
								    		<div style="overflow: hidden; min-height: 20px; max-height: 20px;">

								    			<small class="display-block studio_link" >
								    				<?php 
								    				if (!empty($studio_explode)) {
								    					foreach ($studio_explode as $key => $value) {
										    			?>
										    			<a href="studio?studio_Name=<?php echo $value?>" ><?php echo $value?></a>
										    			<?php
										    		}
								    				}
								    				else{
								    					?>
										    			<a href="studio" ></a>
										    			<?php
								    				}
										    		
										    		?>
								    				
								    			</small>
								    		</div>	
								    		</h6>
								    		<hr >
								    		<div style=" margin-top: -10px;">
									    		<ul class="icons-list mt-15" >
							                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
							                    	<li><a href="#" data-popup="tooltip" title="youtube" data-container="body"><i class="icon-youtube"></i></a></li>
						                    	</ul>
								    		</div>
							    			
								    	</div>
							    	</div>
								</div>
									<?php
								}
								?>
												</div>
											</div>

											<div class="tab-pane has-padding fade" id="bordered-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane has-padding fade" id="bordered-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>
										</div>
									</div>
								</div>
</div>