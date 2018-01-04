
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>About</title>

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
 <!--Section: Team v.1-->
 <section class="section team-section pb-5">
        
        <!--Section heading-->
        <h2 class="h1 text-center py-5">About</h2>
        <!--Section description-->
        <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
            esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

        <!-- Grid row -->
        <div class="row text-center">

            <!-- Grid column -->
            <div class="col-lg-6 col-md-6 mb-r">
                <div class="card card-body">
                    <div class="avatar mt-3">
                        <img src="img/user1.png" class="rounded-circle" alt="First sample avatar image">
                    </div>
                    <h5 class="font-bold">
                        <strong>agaric1</strong>
                    </h5>
                    <p class="grey-text">Financer</p>

                  
                </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-6 col-md-6 mb-r">
                <div class="card card-body">
                    <div class="avatar mt-3">
                        <img src="img/user2.png" class="rounded-circle" alt="First sample avatar image">
                    </div>
                    <h5 class="font-bold">
                        <strong>RealEscapeString</strong>
                    </h5>
                    <p class="grey-text">Web developer</p>

                   <!--  <ul class="list-unstyled">
                        <a class="icons-sm fb-ic">
                            <i class="fa fa-facebook blue-text"> </i>
                        </a>
                        <a class="icons-sm ins-ic">
                            <i class="fa fa-instagram blue-text"> </i>
                        </a>
                    </ul> -->
                </div>
            </div>
            <!-- Grid column -->

          
        </div>
        <!-- Grid row -->

    
    <hr class="mb-5">
    </section>
    <!--Section: Team v.1-->
            
    </div>
    <?php 
    include('footer.php');

    include('general_script.php');
    ?>


   


</body>

</html>

<!-- onload modal container from server -->
<div class="modal-container"></div>