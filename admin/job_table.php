<?php  
session_start();

if (isset($_SESSION['admin_user'])) {  
    include("header.php");
?>
 <section class="content">

        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>JOBS </h4>
                                <?php include("add_job_modal.php"); ?>
                            </div>
                        </div>
                        <div id="print">
                            <div class="body">
                                <table id = "example" class = "stripe" cellspacing = "0" >
                                <thead>
                                    <tr>
                                        <td class="hidden">ID</td>
                                        <td>JOB Code</td>
                                        <td>JOB Name</td>
                                        <td>Minimum Salary</td>
                                        <td>Maximum Salary</td>
                                        <td width = "200px">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM hr_jobs ORDER BY job_id ASC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();

                                    foreach($fetch as $key => $row) { ?>
                                <tr>
                                        <td class="hidden"><?php echo $row['job_id']; ?></td>
                                        <td><?php echo $row['job_code']; ?></td>
                                        <td><?php echo $row['job_name']; ?></td>
                                        <td><?php echo $row['min_salary']; ?></td>
                                        <td><?php echo $row['max_salary']; ?></td>

                                        <td>
                                            <?php include("edit_job.php") ?>
                                        </td>
                                    </tr>                                     
                                     <?php 
                                     }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             </div>
         </div>
    </div>
</section>
<div class="container">
        <div class="footer">
            <h4 style="text-align: center;  ">Saurav Bhatt - 301227876 COMP214 2022
            </h4>
        </div>
    </div>
<?php
} else {
    header('location:logout.php');
}
?>
   
<script src="plugins/js/jquery-1.js"></script>
<script src="plugins/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
<?php 
include("script.php");
?>