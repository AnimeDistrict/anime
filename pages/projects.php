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
    $('.datatable-basic').DataTable();
</script>

<div class="content fadein" >



          <!-- Page length options -->
          <div class="panel panel-flat">
            <div class="panel-heading">
              <h5 class="panel-title">Projects</h5>
            </div>

            <div class="panel-body">
              List of barangay special project
            </div>

            <table class="table datatable-basic">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Location</th>
                  <th>Benificiary</th>
                  <th>Costing</th>
                  <th>Started</th>
                  <th class="text-center">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                for ($i=0; $i < 20; $i++) { 
                 ?>
                <tr>
                  <td><a href="#">Enright</a></td>
                  <td>Social Project</td>
                  <td>Traffic Court Referee</td>
                  <td>1,000</td>
                  <td>22 Jun 1972</td>
                  <td class="text-center">
                    <span class="label label-success">Active</span>
                  </td>
                </tr>
                 <?php 
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- /page length options -->
</div>
