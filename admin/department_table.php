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
                                <h4>DEPARTMENTS</h4>
                                <a href="#" data-toggle="modal" data-target="#add_department">
                                    <span class="print btn-default" style="width: auto;">Add Department<span>
                                </a>
                            </div>
                        </div>
                        <div id="print">
                            <div class="body">
                                <table id = "example" class = "stripe" cellspacing = "0" >
                                <thead>
                                    <tr>
                                        <td class="hidden">ID</td>
                                        <td>Department Name</td>
                                        <td width = "200px">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php
                                    include('connect.php');

                                    $display = $con->prepare("SELECT * FROM hr_departments ORDER BY dept_id ASC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();

                                    foreach($fetch as $key => $row) { ?>
                              <td class="hidden"><?php echo $row['dept_id']; ?></td>
                                        <td><?php echo $row['dept_name']; ?></td>

                                        <td>
                                         <?php include('edit_department.php'); ?>
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