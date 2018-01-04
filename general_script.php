 <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    	
    	new WOW().init();
    	$('.dropdown-toggle').dropdown()

    	
		    // ===== Scroll to Top ==== 
		$(window).scroll(function() {
		    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
		        $('#return-to-top').fadeIn(200);    // Fade in the arrow
		    } else {
		        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
		    }
		});
		$('#return-to-top').click(function() {      // When arrow is clicked
		    $('body,html').animate({
		        scrollTop : 0                       // Scroll to top of body
		    }, 500);
		});


		$(document).ready(function(){
		 var url = "modal.php";
		 jQuery('#PolicyModal_server').click(function(e) {
		     $('.modal-container').load(url+"#Policy",function(result){
		 $('#Policy').modal({show:true});
		 });
		 });

		 jQuery('#CopyrightModal_server').click(function(e) {
		     $('.modal-container').load(url+"#Copyright",function(result){
		 $('#Copyright').modal({show:true});
		 });
		 });

		 jQuery('#StatusModal_server').click(function(e) {
		     $('.modal-container').load(url+"#Status",function(result){
		 $('#Status').modal({show:true});
		 });
		 });

		 });
    </script>

