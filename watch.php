<?php 
include('db.php');
include('function_class.php');
$title = $_REQUEST['title'];
$lang = $_REQUEST['lang'];
$ep = $_REQUEST['ep'];
if ($title or $ep or $lang) {
  
}
else{
    header('Location: not-found');   
}


//sql query of all anime list
$SQL_aniList = "SELECT * FROM anime_list WHERE anime_name = '$title'";
$anime_q = $conn->prepare($SQL_aniList);
$anime_q->execute();
$anime_results = $anime_q->fetch(PDO::FETCH_ASSOC);
    $anime_ID = $anime_results['anime_ID'];
    $anime_name = $anime_results['anime_name'];
    $anime_img = $anime_results['anime_img'];
    $anime_date = $anime_results['anime_date'];
    $anime_status = $anime_results['anime_status'];
$anime->language_type($lang);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo $anime_name." Episode".$ep;?></title>

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

  <main>

        <!--Main layout-->
        <div class="container">
            <div class="row">

                <!--Sidebar-->
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">

                  
                    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
                        <h4>Chat Section</h4>
                        <br>
                        <div class="card">
                            <div class="card-body z-depth-1" style="height: 550px; width: 350px; background-color: #263238; ">
                               <script id="cid0020000175623823704" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 100%;height: 100%;">{"handle":"1313asdasd","arch":"js","styles":{"a":"000000","c":"FFFFFF","d":"FFFFFF","f":27,"i":27,"k":"000000","l":"bbbbbb","m":"000000","n":"FFFFFF","o":27,"p":"10","q":"e0e0e0","fwtickm":1}}</script>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Sidebar-->
<?php 
    $SQL_aniMir= "SELECT * FROM `anime_mirror` WHERE `mirror_ep_ID` = '".$anime->episode_id($anime_ID,$ep)."' AND `mirror_lang` = '".$lang."' ORDER BY `anime_mirror`.`mirror_ID` ASC";
    $mirror_q = $conn->prepare($SQL_aniMir);
    $mirror_q->execute();
    $mirror_results = $mirror_q->fetchAll(PDO::FETCH_ASSOC);


    $SQL_priMir= "SELECT * FROM `anime_mirror` WHERE `mirror_ep_ID` = '".$anime->episode_id($anime_ID,$ep)."' AND `mirror_lang` = '".$lang."' AND `mirror_source` like 'MP4%'";
    $pri_mirror_q = $conn->prepare($SQL_priMir);
    $pri_mirror_q->execute();
    $pri_mirror_results = $pri_mirror_q->fetchAll(PDO::FETCH_ASSOC);
    foreach($pri_mirror_results as $data) {

     $pri_mirror_link = $data['mirror_link'];
    }
   
?>
                <!--Main column-->
                <div class="col-lg-8">

                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s">
                        <div class="col-lg-12">
                            <div class="divider-new">
                                <h2 class="h2-responsive"><?php echo $anime_name." Episode ".$ep;?></h2>
                            </div>
                            <div class="card p-3 mb-4" style="background-color: #2E2E2E;">
                                <div class="card-block">      
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="<?php echo $pri_mirror_link;?>" allowfullscreen></iframe>
                                    </div>

                                <button type="button" class="btn btn-grad waves-effect ">Previous</button>
                                <button type="button" class="btn btn-grad  waves-effect pull-right">Next</button>
                                </div>
                            </div>
                            
                            <h1>Genre</h1>
                            <ul class="tags">
                              <li><a href="#" class="tag">Adventure Fiction</a></li>
                              <li><a href="#" class="tag">Fantasy</a></li>
                            </ul>
                        </div>

                    </div>
                    <!--/.First row-->
                    
                    <hr class="extra-margins">

                    <!--Second row-->
                    <div class="row">
                 
                       
                    </div>
                    <!--/.Second row-->

                </div>
                <!--/.Main column-->
                <div class="col-lg-12">
                           <!--Table-->
                        
                    <table class="table table-striped table-bordered " id="mirrorTable">

                        <!--Table head-->
                        <thead class="mdb-color darken-3">
                            <tr class="text-white">
                                <th>Uploader</th>
                                <th>Mirror</th>
                                <th>Type &amp; Language</th>
                            </tr>
                        </thead>
                        <!--Table head-->

                        <!--Table body-->
                        
                        <tbody>
                            <?php 
                            foreach($mirror_results as $data) {
                                $mirror_ID = $data['mirror_ID'];
                                $mirror_res = $data['mirror_res'];
                                $mirror_source = $data['mirror_source'];
                                $mirror_type = $data['mirror_type'];
                                $mirror_link = $data['mirror_link'];
                                ?>
                                <tr>
                                <th scope="row"><a href="#!">realescapestring</a></th>
                                <td><a href="<?php echo  $mirror_link;?>" target="_blank"><?php echo $mirror_source;?></a></td>
                                <td class="tags1"><div class="tag1"><?php echo $anime->mirror_Type($mirror_type);?></div><div class="tag1"><?php echo $anime->language_type($lang);?></div></td>

                                </tr>
                                <?php
                            }
                           
                            ?>
                            
                            <!-- <tr>
                                <th scope="row"><a href="#!">realescapestring</a></th>
                                <td>GOOGLE DRIVE</td>
                                <td class="tags1"><div class="tag1">SUBBED</div></td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#!">realescapestring</a></th>
                                <td>OPENLOAD</td>
                                <td class="tags1"><div class="tag1">DUB</div></td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#!">realescapestring</a></th>
                                <td>M4P UPLOAD</td>
                                <td class="tags1"><div class="tag1">RAW</div></td>
                            </tr> -->
                        </tbody>
                        <!--Table body-->
                    </table>
                <!--Table-->
                </div>
                <div class="col-lg-12">
                    
                    <hr class="extra-margins">
                    <div class="row t" style="height: 500px; background-color: #212121; color: white;">
                        <h1> for discuss chat</h1>
                    </div>
                </div>


            </div>
        </div>
        <!--/.Main layout-->

    </main>
 <?php 
 include('footer.php');
 include('general_script.php');
 ?>

</body>

</html>
<!-- onload modal container from server -->
<div class="modal-container"></div>

                
<script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
            $('#mirrorTable').DataTable({
                "bLengthChange": false,
                "searching": false
                
            });
            $('select').addClass('mdb-select');
            $('.mdb-select').material_select();
        });
         
                 
</script>