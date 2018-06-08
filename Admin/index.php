<?php

	require_once("../session.php");
	
	require_once("../class.user.php");
	$auth_user = new USER();
	//checking user level
	chkuser_level();
	// get the action user session 
	$ua_ID = $_SESSION['ua_ID'];
	//check the user in the user list and get his acc_ID
	$stmt = $auth_user->runQuery("SELECT * FROM user_account WHERE ua_ID=:ua_ID");
	$stmt->execute(array(":ua_ID"=>$ua_ID));
	//get and fetch the converted array from query 
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
	function chkuser_level(){

		if (isset($_SESSION['ul_ID'])) {
			if ($_SESSION['ul_ID'] == 4 ) {
			}
			else{
				header("Location: ../index");
			}
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	require_once('g_admin_meta.php');
	?>
	<title>index</title>

	<?php 
	require_once('g_admin_stylesheets.php');
	require_once('g_admin_corejs.php');
	require_once('g_admin_themejs.php');
	?>
<script type="text/javascript">
   // Basic datatable
    $('.datatable-basic').DataTable();
</script>

</head>

<body class="navbar-top">

	<?php 

	require_once('g_admin_mainnav.php')

	?>

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<?php 
			require_once('g_admin_sidebar.php')
			?>


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						<div class="col-lg-12">
	
<div class="panel panel-flat border-top-xlg border-top-warning">
            <div class="panel-heading">
              <h5 class="panel-title">DASHBOARD</h5>
              <br>
            </div>


          </div>

						</div>

	


					<!-- Dashboard content -->
					<div class="row">
						<div class="col-lg-8">

					</div>
					<!-- /dashboard content -->

					<?php 
					require_once('g_admin_footer.php');
					?>


				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>



		            <!-- Vertical form modal -->
					<div id="modal_form_vertical" class="modal fade">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header bg-success">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Record New Resident</h5>
								</div>

								<form action="#">
									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>First name</label>
													<input type="text" placeholder="" class="form-control">
												</div>

												<div class="col-sm-6">
													<label>Middle name</label>
													<input type="text" placeholder="" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>Last name</label>
													<input type="text" placeholder="" class="form-control">
												</div>

												<div class="col-sm-6">
													<label>Suffix name</label>
													<input type="text" placeholder="" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-2">
													<label>Unit/Room/Floor#</label>
													<input type="text" placeholder="Unit/Room/Floor#" class="form-control">
												</div>
												<div class="col-sm-2">
													<label>Building Name</label>
													<input type="text" placeholder="building D, flat #67" class="form-control">
												</div>
												<div class="col-sm-2">
													<label>Lot_No</label>
													<input type="text" placeholder="11" class="form-control">
												</div>
												<div class="col-sm-2">
													<label>Block_No</label>
													<input type="text" placeholder="38" class="form-control">
												</div>
												<div class="col-sm-2">
													<label>Phase_No</label>
													<input type="text" placeholder="2b" class="form-control">
												</div>
												<div class="col-sm-2">
													<label>House No</label>
													<input type="text" placeholder="143" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>State/Province</label>
													<input type="text" placeholder="Cavite" class="form-control">
												</div>

												<div class="col-sm-6">
													<label>City</label>
													<input type="text" placeholder="Indang" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>Barangay</label>
													<input type="text" placeholder="Banaba" class="form-control">
												</div>

												<div class="col-sm-6">
													<label>Purok</label>
													<input type="text" placeholder="Purok 1" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>Email</label>
													<input type="text" placeholder="sample@gmail.com" class="form-control">
													<span class="help-block">name@domain.com</span>
												</div>

												<div class="col-sm-6">
													<label>Phone #</label>
													<input type="text" placeholder="+63-99-9999-9999" data-mask="+63-99-9999-9999" class="form-control">
													<span class="help-block">+63-99-9999-9999</span>
												</div>
											</div>
										</div>
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Submit form</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /vertical form modal -->
