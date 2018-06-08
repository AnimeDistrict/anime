<?php

	require_once("../session.php");
	
	require_once("../class.user.php");
	$auth_user = new USER();
	
	// get the action user session 
	$ua_ID = $_SESSION['ua_ID'];
	//check the user in the user list and get his acc_ID
	$stmt = $auth_user->runQuery("SELECT * FROM user_account WHERE ua_ID=:ua_ID");
	$stmt->execute(array(":ua_ID"=>$ua_ID));
	//get and fetch the converted array from query 
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

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

							
<?php 
									$content = new USER();


									?>
<div class="panel panel-flat border-top-xlg border-top-warning">
            <div class="panel-heading">
              <h5 class="panel-title">Account List</h5>
              <br>
              <?php 
              if($_SESSION['ul_ID']  == 4){
              	?>
              	<button type="button" class="btn btn-success btn-sm legitRipple" data-toggle="modal" data-target="#modal_form_vertical"><i class="icon-user-plus position-right"></i> Add User</button>
              	<?php
              }?>
              
            </div>

             <table class="table datatable-basic">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                  <th>Status</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                 $sql = $content->runQuery("
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
					LEFT JOIN user_status us ON us.status_ID = ua.status_ID");

				$sql->execute();
				$detail = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach($detail as $row) {
                 ?>
                <tr>
                  <td><?php echo $row['ud_fName']?></td>
                  <td><?php echo $row['ud_mName']?></td>
                  <td><?php echo $row['ud_lName']?></td>
                  <td><?php echo $row['ua_username']?></td>
                  <td>
                  <?php 
                   if($row['status_Name'] == "Disable")
                   {
                   	echo'<span class="label label-warning">'.$row['status_Name'].'</span>';
                   }
                   else if ($row['status_Name'] == "Ban"){
                   	echo'<span class="label label-danger">'.$row['status_Name'].'</span>';
                   }
                   else{
                   	echo '<span class="label label-success">'.$row['status_Name'].'</span>';
                   }
                  ?></td>
                  
                  <td class="text-center" >

                <div class="btn-group">
                            <button type="button" class="btn bg-teal-400 btn-labeled dropdown-toggle" data-toggle="dropdown"><b><i class="icon-gear"></i></b> ACTION <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                    <li><a data-id="<?php echo $row['ua_ID']?>" data-toggle="modal" data-target="#modal-view"><i class="icon-eye"></i> VIEW</a></li>
                    <?php if($_SESSION['ul_ID']  == 4){
                    	?>
                    <li><a data-id="<?php echo $row['ua_ID']?>" data-toggle="modal" data-target="#modal-edit"><i class="icon-pencil7"></i> EDIT</a></li>
                    <li><a data-id="<?php echo $row['ua_ID']?>" data-toggle="modal" data-target="#modal-delete"><i class="icon-close2"></i> DELETE</a></li>
                    	<?php
                    }?>
                    
                  </ul>
                </div>
                  </td>
                </tr>
                 <?php 
                }
                ?>
              </tbody>
            </table>
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
									<h5 class="modal-title">Add Official Account</h5>
								</div>

								<form action="#">
									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<select class="form-control">
														<?php 
$official_form = $content->runQuery("SELECT rd.res_fName,rd.res_mName,rd.res_lName,rs.suffix,rp.position_Name,(IF(bod.commitee_assignID IS NOT NULL , (SELECT position_Name FROM ref_position WHERE position_ID =  bod.commitee_assignID), '')) as Kagawad_committee FROM `brgy_official_detail`  bod
INNER JOIN resident_detail rd ON bod.res_ID = rd.res_ID 
LEFT JOIN ref_suffixname rs ON rd.suffix_ID = rs.suffix_ID
INNER JOIN ref_position rp ON rd.position_ID = rp.position_ID
WHERE bod.visibility = 1 ORDER BY rp.position_ID");
$official_form->execute();
$official_form_detail = $official_form->fetchAll(PDO::FETCH_ASSOC);
foreach($official_form_detail as $data) {
     
     ?>
     <option><?php echo $data['res_fName']." ".$data['res_mName'].". ".$data['res_lName']." ".$data['suffix']?></option>
     <?php
}
														?>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Username</label>
													<input type="text" placeholder="Username" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>Password</label>
													<input type="text" placeholder="Password" class="form-control">
												</div>

												<div class="col-sm-6">
													<label>Re-password</label>
													<input type="text" placeholder="Re-password" class="form-control">
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


<div id="modal-view" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h5 class="modal-title">View</h5>
			</div>

			<form action="#">
				<div class="modal-body">
					view
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
				</div>

			</form>
		</div>
	</div>
</div>

<div id="modal-edit" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-warning">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h5 class="modal-title">Edit</h5>
			</div>

			<form action="#">
				<div class="modal-body">
					view
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Submit form</button>
				</div>

			</form>
		</div>
	</div>
</div>

<div id="modal-delete" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-danger">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h5 class="modal-title">Delete</h5>
			</div>

			<form action="#">
				<div class="modal-body text-center">
					<div class="btn-group ">
						<button type="submit" class="btn btn-warning">Confirm</button>
						<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
					</div>
				</div>

				<div class="modal-footer">
					
				</div>

			</form>
		</div>
	</div>
</div>
		           