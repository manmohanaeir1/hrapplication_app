<?php
require("header.php");
?>

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card text-center active">
                    <div class="card-header bg-info">
                        JOBS DESCRIPTION

                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="list-group">
                                
                                    <li class="list-group-item  bg-secondary" aria-current="true">Jobs items</li>
                                    <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM hr_jobs ORDER BY job_id ASC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();

                                    foreach($fetch as $key => $row) { ?>
                                    <li class="list-group-item"><?php echo $row['job_name'] ."-".  $row['job_code']; ?></li>
                                    
                                    
                                </ul>
                                <?php 
                                     }?>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-group">
                                
                                    <li class="list-group-item  bg-secondary" aria-current="true">Departments</li>
                                    <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM hr_departments ORDER BY dept_id ASC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();

                                    foreach($fetch as $key => $row) { ?>
                                    <li class="list-group-item"><?php echo $row['dept_name']; ?></li>
                                    
                                    
                                </ul>
                                <?php 
                                     }?>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-group">
                                
                                    <li class="list-group-item  bg-secondary" aria-current="true">Managers</li>
                                    <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM hr_manager ORDER BY mgr_id ASC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();

                                    foreach($fetch as $key => $row) { ?>
                                    <li class="list-group-item"><?php echo $row['first_name'] ." ". $row['last_name']; ?></li>
                                    
                                    
                                </ul>
                                <?php 
                                     }?>
                            </div>
                            <div class="card text-center mt-4">
                                <div class="card-header">
                                    HR APPLICATION FORM
                                </div>
                                <div class="card-body">
                                    <p class="card-text">First you need to signup.</p>
                                    <a href="signup.php" class="btn btn-primary">Register</a>
                                    <a href="login.php" class="btn btn-primary">Apply Application</a>

                                </div>
                                <div class="card-body">
                                    <a href="admin/" class="btn btn-primary">Administrator</a>

                                </div>
                            </div>

                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
        <div class="footer">
            <h4 style="text-align: center;  ">Saurav Bhatt - 301227876 COMP214 2022
            </h4>
        </div>
    </div>
</body>

</html>