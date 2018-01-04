<?php 
include('db.php'); 
include('function_class.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Anime Series</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
    <link href="css/gen_nav.css" rel="stylesheet">
    <link href="css/custom_style.css" rel="stylesheet">
    

</head>

<body>

    
<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <?php 
    include('navbar.php');
    ?>

    <div class="container">
        <!--Section: Blog v.3-->
<section class="py-4">
        
    <!--Section heading-->
    <h2 class="h1 text-center mb-5">Anime Info</h2>
    <!--Section description-->
    <p class="text-center mb-5 pb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <!--Grid row-->
    <div class="row">

    

<?php 
//sql query of all anime list
$SQL_aniList = "SELECT * FROM anime_list";
$anime_q = $conn->prepare($SQL_aniList);
$anime_q->execute();
$anime_results = $anime_q->fetchAll(PDO::FETCH_ASSOC);
    foreach($anime_results as $data) {
        $anime_ID = $data['anime_ID'];
        $anime_name = $data['anime_name'];
        $anime_img = $data['anime_img'];
        $anime_date = $data['anime_date'];
        $anime_status = $data['anime_status'];
       ?>
       <!--Grid column-->
        <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
            <div class="view overlay hm-white-slight rounded z-depth-1-half" style="width: 350px;height: 233px;">
            <img src="img/overlord.png" class="img" alt="First sample image">
            <a>
                <div class="mask"></div>
            </a>
            </div>
        </div>
        <!--Grid column-->
       <!--Grid column-->
        <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
            <h3 class="mb-3 font-bold dark-grey-text">
            <strong><a href="anime-info?title=<?php  echo $anime_name; ?>"><?php echo $anime_name;?></a></strong>
            </h3>
            <p class="grey-text"><?php echo $anime->description($anime_ID); ?></p>
            <p><a class="font-bold dark-grey-text">Added:</a> <?php echo date( "M jS, Y", strtotime( "$anime_date")). "<strong> at </strong>".date( 'h:i A', strtotime( "$anime_date")); ?> </p>
            
        </div>
        <!--Grid column-->
       <?php
        
    }
?>
    

    </div>
    
    
    <hr class="mb-5">

</section>
<!--Section: Blog v.3-->
            
    </div>

    <?php 
    include('footer.php');

    include('general_script.php');
    ?>



</body>

</html>

<!-- onload modal container from server -->
<div class="modal-container"></div>