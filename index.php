<?php
session_start();
require_once("class.user.php");
require_once("class.ip.php");
require_once("global_config.php");
$auth_user = new USER();
$auth_IP = new IP();
if($auth_user->is_loggedin()!="")
{
	chkuser_level();
}

if(isset($_POST['btn-login']))
{
	$login_user = strip_tags($_POST['login_user']);
	$login_password = strip_tags($_POST['login_password']);
		
	if($auth_user->doLogin($login_user,$login_password))
	{
		chkuser_level();
	}
	else
	{
		$error = "Wrong Username/Password!";
	}	
}
 function chkuser_level(){

		if (isset($_SESSION['ul_ID'])) {
			if ($_SESSION['ul_ID'] == 4 ) {
				header("Location: admin/index");
			}
			else{
				
			}
		}
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	require_once('global_meta.php');
	?>

	<title>Index</title>

	<?php 
	require_once('global_stylesheets.php');
	require_once('global_corejs.php');
	require_once('global_themejs.php');
	?>
	<style type="text/css">
		
	</style>

</head>

<body class="login-container ">

	<?php 

	// $stmt = $conn
	require_once('global_mainnav.php');

	?>


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">


				<!-- Content area -->
				<div class="content">


					<!-- Form inside modals -->
					<div class="content">

						<div class="row">
							<div class="col-lg-8">								
								<div id="page-content" style="max-width: 782px; min-width: 782px; float: right" >
				
									<?php
									require_once('pages/index.php');
									?>

								</div>
							</div>
							<div class="col-lg-4">
								<div class="" style="max-width: 338px; min-width: 338px; margin-left: 25px; float: left">
								<?php 

								include('pages/sidepanel_tags.php');
								include('pages/sidepanel_share.php');
								include('pages/sidepanel_top_anime.php');
								include('pages/sidepanel_pagecount.php');
								?>
								</div>
							</div>
						</div>
					</div>
					<!-- /form inside modals -->
				


		            

					<?php 
					require_once('global_footer.php');
					?>


<script>
	//AJAX CALL EACH PAGE CONTENT EVERY NAVIGATON WAS CLICK 
$(document).ready(function(){
  
  $(document).on('click', '#getPage', function(e){
    
    e.preventDefault();
    
    var uid = $(this).data('id');   // it will get id of clicked row

    $('#dynamic-content').html(''); // leave it blank before ajax call
  
    
    $.ajax({
      url: 'getPagecontent.php',
      type: 'POST',
      data: 'id='+uid,
      dataType: 'html'
    })
    .done(function(data){
      console.log(data);  
      $('#page-content').html('');    
      $('#page-content').html(data); // load response 
    })
    .fail(function(){
      $('#page-content').html('Something went wrong, Please try again...');
    });
    
  });
  
});


</script>
<?php 
include('global_modal.php');
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





