<div class="panel panel-flat ">
	<div class="panel-heading">
		<h6 class="panel-title">TOP ANIME</h6>
		<div class="heading-elements">
			<ul class="icons-list">
        		<li><a data-action="collapse"></a></li>
        	</ul>
    	</div>
	</div>

	<div class="panel-body">
		<div class="tabbable">
			<ul class="nav nav-tabs nav-tabs-highlight">
				<li class="active"><a href="#fade-tab1" data-toggle="tab" class="legitRipple" aria-expanded="true">DAY</a></li>
				<li class=""><a href="#fade-tab2" data-toggle="tab" class="legitRipple" aria-expanded="false">WEEK</a></li>
				<li class=""><a href="#fade-tab3" data-toggle="tab" class="legitRipple" aria-expanded="false">MONTH</a></li>
				<li class=""><a href="#fade-tab4" data-toggle="tab" class="legitRipple" aria-expanded="false">YEAR</a></li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane fade active in" id="fade-tab1">
					<!-- TOP 10 ANIME TABLE FOR TODAY -->
					<div class="table-responsive">
						<table class="table ">
							
							<tbody>
								<?php 
								$z = 1;
								for ($i=0; $i < 10; $i++) 
								{ 
									if ($z == 1) {
									 $icon = "icon-crown";
									}
									else{
									 $icon = "";
										
									}
								?>
								<tr>
									
									<td class="text-center">
										<div><i class="<?php echo $icon?> " style="color: orange"></i></div>
										
										<div><?php echo $z?></div>
									</td>
									<td style="padding: 0px; " >

										<img src="assets/images/overlord.jpg" class="img" alt="" height="102.845" width="67.75"  data-popup="popover-custom" data-placement="left" title="" data-content="asdsasds" data-original-title="Overlord Overlord Overlord Overlord" aria-describedby="popover297651">
									</td>
									<td>
										<div class="text">Overlord Overlord Overlord Overlord</div>
									<div class="media-annotation">
										<span data-popup="tooltip" title="Total view this day" data-original-title="bottom tooltip"><i class="icon-eye8" ></i> 500 </span>
										<span data-popup="tooltip" title="Total Favorite" data-original-title="bottom tooltip"><i class="icon-heart5" ></i> 500 </span>
										
										
									</div>
									
								    </div>
									</td>

								</tr>
								<?php
								$z ++;
								}
								?>
							</tbody>
						</table>
					</div>
					<!-- /TOP 10 ANIME TABLE FOR TODAY -->
					
				</div>

				<div class="tab-pane fade" id="fade-tab2">
					<!-- TOP 10 ANIME TABLE FOR THIS WEEK -->
					<div class="table-responsive">
						<table class="table ">
							
							<tbody>
								<?php 
								$z = 1;
								for ($i=0; $i < 10; $i++) 
								{ 
									if ($z == 1) {
									 $icon = "icon-crown";
									}
									else{
									 $icon = "";
										
									}
								?>
								<tr>
									
									<td class="text-center">
										<div><i class="<?php echo $icon?> " style="color: orange"></i></div>
										
										<div><?php echo $z?></div>
									</td>
									<td style="padding: 0px; " >

										<img src="assets/images/overlord.jpg" class="img" alt="" height="102.845" width="67.75"  data-popup="popover-custom" data-placement="left" title="" data-content="asdsasds" data-original-title="Overlord Overlord Overlord Overlord" aria-describedby="popover297651">
									</td>
									<td>
										<div class="text">Overlord Overlord Overlord Overlord</div>
									<div class="media-annotation">
										<span data-popup="tooltip" title="Total view this week" data-original-title="bottom tooltip"><i class="icon-eye8" ></i> 500 </span>
										<span data-popup="tooltip" title="Total Favorite" data-original-title="bottom tooltip"><i class="icon-heart5" ></i> 500 </span>
										
										
									</div>
									
								    </div>
									</td>

								</tr>
								<?php
								$z ++;
								}
								?>
							</tbody>
						</table>
					</div>
					<!-- /TOP 10 ANIME TABLE FOR THIS WEEK -->
				</div>

				<div class="tab-pane fade" id="fade-tab3">
					<!-- TOP 10 ANIME TABLE FOR THIS MONTH -->
					<div class="table-responsive">
						<table class="table ">
							
							<tbody>
								<?php 
								$z = 1;
								for ($i=0; $i < 10; $i++) 
								{ 
									if ($z == 1) {
									 $icon = "icon-crown";
									}
									else{
									 $icon = "";
										
									}
								?>
								<tr>
									
									<td class="text-center">
										<div><i class="<?php echo $icon?> " style="color: orange"></i></div>
										
										<div><?php echo $z?></div>
									</td>
									<td style="padding: 0px; " >

										<img src="assets/images/overlord.jpg" class="img" alt="" height="102.845" width="67.75"  data-popup="popover-custom" data-placement="left" title="" data-content="" data-original-title="Overlord Overlord Overlord Overlord" aria-describedby="popover297651">
									</td>
									<td>
										<div class="text">Overlord Overlord Overlord Overlord</div>
									<div class="media-annotation">
										<span data-popup="tooltip" title="Total view this month" data-original-title="bottom tooltip"><i class="icon-eye8" ></i> 500 </span>
										<span data-popup="tooltip" title="Total Favorite" data-original-title="bottom tooltip"><i class="icon-heart5" ></i> 500 </span>
										
										
									</div>
									</td>

								</tr>
								<?php
								$z ++;
								}
								?>
							</tbody>
						</table>
					</div>
					<!-- /TOP 10 ANIME TABLE FOR THIS MONTH -->
				</div>
				<div class="tab-pane fade" id="fade-tab4">
					<!-- TOP 10 ANIME TABLE FOR MOST VIEW -->
					<div class="table-responsive">
						<table class="table ">
							
							<tbody>
								<?php 
								$z = 1;
								for ($i=0; $i < 10; $i++) 
								{ 
									if ($z == 1) {
									 $icon = "icon-crown";
									}
									else{
									 $icon = "";
										
									}
								?>
								<tr>
									
									<td class="text-center">
										<div><i class="<?php echo $icon?> " style="color: orange"></i></div>
										
										<div><?php echo $z?></div>
									</td>
									<td style="padding: 0px; " >

										<img src="assets/images/overlord.jpg" class="img" alt="" height="102.845" width="67.75"  data-popup="popover-custom" data-placement="left" title="" data-content="" data-original-title="Overlord Overlord Overlord Overlord" aria-describedby="popover297651">
									</td>
									<td>
										<div class="text">Overlord Overlord Overlord Overlord</div>
									<div class="media-annotation">
										<span data-popup="tooltip" title="Total view this year" data-original-title="bottom tooltip"><i class="icon-eye8" ></i> 500 </span>
										<span data-popup="tooltip" title="Total Favorite" data-original-title="bottom tooltip"><i class="icon-heart5" ></i> 500 </span>
										
										
									</div>
									</td>

								</tr>
								<?php
								$z ++;
								}
								?>
							</tbody>
						</table>
					</div>
					<!-- /TOP 10 ANIME TABLE FOR MOST VIEW -->
				</div>
			</div>
			<!-- /TAB CONTENT-->
		</div>
	</div>
	<!-- /PANNEL BODY-->
</div>