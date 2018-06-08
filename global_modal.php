 <!-- Horizontal form modal -->
					<div id="modal-request" class="modal fade">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header bg-success">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Request Form</h5>
								</div>

								<form action="studio" class="form-horizontal" method="POST" >
									<div class="modal-body">
										<div class="form-group">
											<label class="control-label col-sm-3">Anime Title</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Title" class="form-control" name="request_title">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-3">Other Title</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Other Title" class="form-control" name="request_other_title">
											</div>
										</div>
										<div class="form-group">
										<label class="control-label col-sm-3">Genre</label>
										<div class="col-sm-9">
											<select multiple="" class="select-menu2-color select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="request_genre[]">

											<optgroup label="Genre">
												<?php 

												$SQL_genreList = "SELECT * FROM `genre_type` ORDER BY `genre_type`.`genre_ID` ASC";
												$genre_q = $auth_user->runQuery($SQL_genreList);
												$genre_q->execute();
												$genre_results = $genre_q->fetchAll(PDO::FETCH_ASSOC);

												foreach($genre_results as $data) {
													$genre_ID = $data['genre_ID'];
													$genre_Name = $data['genre_Name'];
													?>
													<option value="<?php echo $genre_ID?>"><?php echo $genre_Name?></option>
													<?php
												    }
												?>
											</optgroup>
											
										</select>
										</div>
										
									</div>

									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-success" name="submit">Submit form</button>
									</div>

								</form>
							</div>
						</div>
					</div>
<!-- /horizontal form modal -->

<!-- Login form -->
<div id="modal-login" class="modal fade" >
	<div class="modal-dialog">
		<div class="modal-content login-form width-400">

			<!-- Form -->
			<form class="modal-body" method="post" id="login-form">
				<div class="text-center">
					<div class="icon-object border-slate-300 text-slate-300" style="padding: 0px; ">	
						<img src="assets/images/user2.png" class="img-circle" height="72" width="72">
					</div>
					<h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
				</div>
				<div class="text-center" id="error">
				 
				 </div>
				<div class="form-group has-feedback has-feedback-left">
					<input type="text" class="form-control" placeholder="Username" name="login_user">
					<div class="form-control-feedback">
						<i class="icon-user text-muted"></i>
					</div>
				</div>

				<div class="form-group has-feedback has-feedback-left">
					<input type="password" class="form-control" placeholder="Password" name="login_password">
					<div class="form-control-feedback">
						<i class="icon-lock2 text-muted"></i>
					</div>
				</div>

				<div class="form-group login-options">
					<div class="row">
						<div class="col-sm-6">
							<label class="checkbox-inline">
								<input type="checkbox" class="styled" checked="checked">
								Remember
							</label>
						</div>

						<div class="col-sm-6 text-right">
							<a href="">Forgot password?</a>
						</div>
					</div>
				</div>

				<div class="form-group">
					<button type="submit" class="btn bg-primary-400 btn-block" name="btn-login">Login <i class="icon-arrow-right14 position-right"></i></button>
					
				</div>
				<div class="form-group">
					<div class="text-center">
					Not a member yet ? <a href="#"  data-toggle="modal" data-target="#modal-signup">Signup</a> 
					</div>
				</div>

			</form>
			<!-- /form -->

		</div>
	</div>
</div>
<!-- /login form -->

 <!-- signup form modal -->
<div id="modal-signup" class="modal fade" >
	<div class="modal-dialog">
		<div class="modal-content login-form width-400">

			<!-- Form -->
			<form class="modal-body" method="post" id="login-form">
				<div class="text-center">
					<div class="icon-object border-slate-300 text-slate-300" style="padding: 0px; ">	
						<img src="assets/images/user2.png" class="img-circle" height="72" width="72">
					</div>
					<h5 class="content-group">Signup <small class="display-block">Your credentials</small></h5>
				<div class="text-center" id="error">
				 
				 </div>
				<div class="form-group has-feedback has-feedback-left">
					<input type="text" class="form-control" placeholder="Username" name="login_user">
					<div class="form-control-feedback">
						<i class="icon-user text-muted"></i>
					</div>
				</div>

				<div class="form-group has-feedback has-feedback-left">
					<input type="password" class="form-control" placeholder="Password" name="login_password">
					<div class="form-control-feedback">
						<i class="icon-lock2 text-muted"></i>
					</div>
				</div>

				<div class="form-group login-options">
					<div class="row">
						<div class="col-sm-6">
							<label class="checkbox-inline">
								<input type="checkbox" class="styled" checked="checked">
								Remember
							</label>
						</div>

						<div class="col-sm-6 text-right">
							<a href="">Forgot password?</a>
						</div>
					</div>
				</div>

				<div class="form-group">
					<button type="submit" class="btn bg-primary-400 btn-block" name="btn-login">Login <i class="icon-arrow-right14 position-right"></i></button>
					
				</div>
				<div class="form-group">
					<div class="text-center">
					Not a member yet ? <a href="#"   data-dismiss="modal">Login</a> 
					</div>
				</div>

			</form>
			<!-- /form -->

		</div>
	</div>
</div>
<!-- /signup form modal -->

