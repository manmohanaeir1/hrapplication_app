<?php
session_start();
require("header1.php");

include('connect.php');

include('connect.php');
$display = $con->prepare("SELECT * FROM `hr_employees` 
LEFT JOIN hr_jobs ON hr_employees.job_id = hr_jobs.job_id 
LEFT JOIN hr_manager ON hr_employees.mgr_id = hr_manager.mgr_id  
LEFT JOIN hr_departments ON hr_employees.dept_id = hr_departments.dept_id WHERE per_id='{$_GET['per_id']}'");

$display->execute();

$fetch = $display->fetchAll();

foreach ($fetch as $key => $row) {


    $per_id =   $row['per_id'];
    $per_lastname = $row['per_lastname'];
    $per_firstname = $row['per_firstname'];
    $per_email = $row['per_email'];
    $per_salary = $row['per_salary'];
    $per_phone = $row['per_phone'];
    $job_id = $row['job_id'];
    $job_name = $row['job_name'];
    $mgr_id = $row['mgr_id'];
    $first_name =  $row['first_name'];
    $last_name =  $row['last_name'];
    $dept_id =     $row['dept_id'];
    $dept_name =$row['dept_name'];
}                                   
?>


<div class="logout-button" style="float: right;">
    <a href="logout.php" class="btn btn-danger ">Logout</a>
</div>


<div class="form">
    <link href="style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
            <!-- Input Group -->
            <form action="edit_hr_application_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>EDIT PERSONNEL INFORMATION</h4>
                                </div>
                            </div>
                            <div class="body">
                                <div class="container-fluid" style="background-color: #ddd;">
                                    <div class="demo-masked-input">
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        FirstName:
                                                    </span>
                                                    <div class="form-line">

                                                        <input type="text" class="form-control" name="per_firstname" placeholder="First Name" value="<?php echo $row['per_firstname']; ?> " required>
                                                        <input type="hidden" class="form-control" name="per_id" placeholder="First Name" value="<?php echo $row['per_id']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        LastName:
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="per_lastname" placeholder="Last Name" value="<?php echo $row['per_lastname']; ?> " required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        Email:
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" name="per_email" placeholder="Email" value="<?php echo $row['per_email']; ?> " required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        Salary:
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="int" class="form-control" name="per_salary" placeholder="Salary" value="<?php echo $row['per_salary']; ?> " required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        Hire Date:
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="date" class="form-control" name="per_hire_data" placeholder="Hire Date" value="<?php echo $row['per_hire_data']; ?> " >

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        Phone:
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="int" class="form-control" name="per_phone" placeholder="Phone" value="<?php echo $row['per_phone']; ?> " required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        Job:
                                                    </span>
                                                    </span>
                                                    <select class="form-control show-tick" name="job_id" required>
                                                        <option value="<?php echo $row['job_id']; ?> "><?php echo $job_name; ?></option>
                                                        <?php
                                                        include("connect.php");
                                                        $pos1 = $con->prepare("SELECT * FROM hr_jobs ORDER BY job_id");
                                                        $pos1->execute();
                                                        while ($row1 = $pos1->fetch()) {
                                                            $job_id = $row1['job_id'];
                                                            $job_code = $row1['job_code'];
                                                            $job_name = $row1['job_name'];


                                                        ?>
                                                            <option value="<?php echo $row1['job_id']; ?>"><?php echo $row1['job_name'] . '(' . $row1['job_code'] . ')'; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        Manager:
                                                    </span>
                                                    <select class="form-control show-tick" name="mgr_id" required>
                                                        <option value="<?php echo $row['mgr_id']; ?> "><?php echo $first_name . $last_name; ?></option>
                                                        <?php
                                                        include("connect.php");
                                                        $pos1 = $con->prepare("SELECT * FROM hr_manager ORDER BY mgr_id");
                                                        $pos1->execute();
                                                        while ($row1 = $pos1->fetch()) {
                                                            $first_name = $row1['first_name'];
                                                            $last_name = $row1['last_name'];


                                                        ?>
                                                            <option value="<?php echo $row1['mgr_id']; ?>"><?php echo $row1['first_name'] . $row1['last_name']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        Department:
                                                    </span>
                                                    <select class="form-control show-tick" name="dept_id" required>
                                                        <option value="<?php echo $row['dept_id']; ?> "><?php echo $dept_name; ?></option>
                                                        <?php
                                                        include("connect.php");
                                                        $department = $con->prepare("SELECT * FROM 	hr_departments ORDER BY dept_id");
                                                        $department->execute();
                                                        while ($row1 = $department->fetch()) {
                                                            $dept_name = $row1['dept_name'];
                                                        ?>
                                                            <option value="<?php echo $row1['dept_id']; ?>"><?php echo $row1['dept_name']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" name="save" value="SAVE" class="btn btn-success" style="float:right; margin-top: -30px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </div>

        </form>
        <!-- #END# Input Group -->
</div>
</section>


</div>