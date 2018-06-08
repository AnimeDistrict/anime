<?php 
require_once("class.user.php");

$content = new USER();

$sql = $content->runQuery("SELECT * FROM `special_projects` ORDER BY proj_Start ASC");
$sql->execute();
$detail = $sql->fetchAll(PDO::FETCH_ASSOC);
 
foreach($detail as $row) {
     $row['proj_Title'];
}

?>
<script type="text/javascript">
   // Basic datatable
    $('#datatable-account').DataTable();
     $('#datatable-resident').DataTable();
</script>

<div class="content fadein" >




</div>

<div id="modal-view" class="modal fade" >
  <div class="modal-dialog">
    <div class="modal-content">
    	<div class="modal-header bg-info">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h5 class="modal-title">View Resident Detail</h5>
		</div>
      <form class="modal-body" method="post" id="login-form">
      VIEW
      </form>
    </div>
  </div>
</div>
<div id="modal-edit" class="modal fade" >
  <div class="modal-dialog">
    <div class="modal-content">
    	<div class="modal-header bg-warning">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h5 class="modal-title">Edit Resident Detail</h5>
		</div>
      <form class="modal-body" method="post" id="login-form">
      EDIT
      </form>
    </div>
  </div>
</div>
<div id="modal-delete" class="modal fade" >
  <div class="modal-dialog">
    <div class="modal-content ">
    	<div class="modal-header bg-danger">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h5 class="modal-title">Delete Resident Detail</h5>
		</div>
      <form class="modal-body" method="post" id="login-form">
      DELETE
      </form>
    </div>
  </div>
</div>



 <!-- Vertical form modal -->
					<div id="modal_form_vertical" class="modal fade">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header bg-success">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Add New Resident Record</h5>
								</div>

								<form action="#">
									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>First name</label>
													<input type="text" placeholder="Eugene" class="form-control">
												</div>

												<div class="col-sm-6">
													<label>Middle name</label>
													<input type="text" placeholder="Kopyov" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>Last name</label>
													<input type="text" placeholder="Eugene" class="form-control">
												</div>

												<div class="col-sm-6">
													<label>Suffix Name</label>
													<input type="text" placeholder="Jr,I,III" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>Gender</label>
													<?php 

$ref_gender_sql = $content->runQuery("SELECT * FROM ref_gender");
  $ref_gender_sql->execute();
  $ref_gender_sql_detail = $ref_gender_sql->fetchAll(PDO::FETCH_ASSOC);
													?>
													<select class="form-control">
														<option disabled="">Select</option>
<?php 
foreach($ref_gender_sql_detail as $rg)
{
?>
<option value="<?php echo$rg['gender_ID']?>"><?php echo $rg['gender_Name']?></option>
<?php
}
?>
													</select>
												</div>

												<div class="col-sm-6">
													<label>Marital</label>
													<?php 

$ref_marital_status_sql = $content->runQuery("SELECT * FROM ref_marital_status");
  $ref_marital_status_sql->execute();
  $marital_status_detail = $ref_marital_status_sql->fetchAll(PDO::FETCH_ASSOC);
													?>
													<select class="form-control">
														<option disabled="">Select</option>
<?php 
foreach($marital_status_detail as $ms)
{
?>
<option value="<?php echo$ms['marital_Name']?>"><?php echo $ms['marital_Name']?></option>
<?php
}
?>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-2">
													<label>Unit Room/Floor Num</label>
													<input type="text" placeholder="Unit Room/Floor Num" class="form-control">
												</div>
												<div class="col-sm-2">
													<label>Building Name</label>
													<input type="text" placeholder="Building Name" class="form-control">
												</div>
												<div class="col-sm-2">
													<label>Lot No</label>
													<input type="text" placeholder="Lot No" class="form-control">
												</div>
												<div class="col-sm-2">
													<label>Block No</label>
													<input type="text" placeholder="Block No" class="form-control">
												</div>
												<div class="col-sm-2">
													<label>Phase No</label>
													<input type="text" placeholder="Phase No" class="form-control">
												</div>
												<div class="col-sm-2">
													<label>House No</label>
													<input type="text" placeholder="House No" class="form-control">
												</div>

											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>Street Name</label>
													<input type="text" placeholder="Street Name" class="form-control">
												</div>
												<div class="col-sm-6">
													<label>Subdivision</label>
													<input type="text" placeholder="Subdivision" class="form-control">
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
													<input type="text" placeholder="Purok I" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>Email</label>
													<input type="text" placeholder="mail@gmail.com" class="form-control">
													<span class="help-block">name@domain.com</span>
												</div>

												<div class="col-sm-6">
													<label>Phone #</label>
													<input type="text" placeholder="+63-999-999-9999" data-mask="+63-999-999-9999" class="form-control">
													<span class="help-block">+99-99-9999-9999</span>
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