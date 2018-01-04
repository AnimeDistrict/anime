<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>ANIME SITE</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
    <link href="css/index_nav.css" rel="stylesheet">
    <link href="css/custom_style.css" rel="stylesheet">
    

</head>

<body>
    <?php 
    include('navbar.php');
    ?>
    <!--Mask-->
    <div class="view hm-black-light">
        <div class="full-bg-img flex-center">
            <ul class="animated fadeInUp">
                <li>
                    <h1 class="h1-responsive font-bold">ANIME SITE</h1></li>
                <li>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </li>
                <li>
                    <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-danger btn-lg" rel="nofollow">Sign up!</a>
                    <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default btn-lg" rel="nofollow">Learn more</a>
                </li>
            </ul>
        </div>
    </div>
    <!--/.Mask-->
    <div class="container">
        <!--Section: Blog v.3-->
<section class="py-4">
        
    <!--Section heading-->
    <h2 class="h1 text-center mb-5">Recent posts</h2>
    <!--Section description-->
    <p class="text-center mb-5 pb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <!--Grid row-->
    <div class="row">

    <!--Grid column-->
    <div class="col-lg-5 col-xl-4 mb-4">
        <!--Featured image-->
        <div class="view overlay hm-white-slight rounded z-depth-1-half hm-zoom" style="width: 350px;height: 233px;">
        <img src="img/overlord.png" class="img-fluid" alt="First sample image">
        <a>
            <div class="mask"></div>
        </a>
        </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
        <h3 class="mb-3 font-bold dark-grey-text">
        <strong><a href="anime-info?title=<?php echo "overlord2";?>">Overlord II Episode 3</a></strong>
        </h3>
        <p class="grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
        possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis aut rerum.</p>
        <p>by
        <a class="font-bold dark-grey-text">RealEscapeString</a>, 26/08/2018</p>
        <a class="btn btn-indigo btn-md" href="watch">Watch</a>
    </div>
    <!--Grid column-->

    </div>
    <!--Grid row-->

    <hr class="mb-5">

    <!--Grid row-->
    <div class="row mt-3">
        <!--Grid column-->
    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
        <h3 class="mb-3 font-bold dark-grey-text">
        <strong><a href="anime-info?title=<?php echo "overlord2";?>">Overlord II Episode 2</a></strong>
        </h3>
        <p class="grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
        corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident et dolorum fuga.</p>
        <p>by
        <a class="font-bold dark-grey-text">RealEscapeString</a>, 24/08/2018</p>
        <a class="btn btn-indigo btn-md" href="watch">Watch</a>
    </div>
    <!--Grid column-->
    <!--Grid column-->
    <div class="col-lg-5 col-xl-4 mb-4">
        <!--Featured image-->
        <div class="view overlay hm-white-slight rounded z-depth-1 hm-zoom" style="width: 350px;height: 233px;">
        <img src="img/overlord.png" class="img-fluid" alt="Second sample image">
        <a>
            <div class="mask"></div>
        </a>
        </div>
    </div>
    <!--Grid column-->

    

    </div>
    <!--Grid row-->

    <hr class="mb-5">

    <!--Grid row-->
    <div class="row">

    <!--Grid column-->
    <div class="col-lg-5 col-xl-4 mb-4">
        <!--Featured image-->
        <div class="view overlay hm-white-slight rounded z-depth-1 hm-zoom" style="width: 350px;height: 233px;">
        <img src="img/overlord.png" class="img-fluid" alt="Third sample image">
        <a>
            <div class="mask"></div>
        </a>
        </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
        <h3 class="mb-3 font-bold dark-grey-text">
        <strong><a href="anime-info?title=<?php echo "overlord2";?>">Overlord II Episode 1</a></strong>
        </h3>
        <p class="grey-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
        eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
        <p>by
        <a class="font-bold dark-grey-text">RealEscapeString</a>, 21/08/2018</p>
        <a class="btn btn-indigo btn-md" href="watch">Watch</a>
    </div>
    <!--Grid column-->

    </div>
    <!--Grid row-->

</section>
<!--Section: Blog v.3-->
            
    </div>
    <?php 
    include('footer.php');
    ?>


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


</body>

</html>

<!-- onload modal container from server -->
<div class="modal-container"></div>