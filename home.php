<?php
session_start();
require("header1.php");

include('connect.php');
?>


<div class="logout-button" style="float: right;">
    <a href="logout.php" class="btn btn-danger ">Logout</a>
</div>
<div class="welcome">
    <h1 align="center"><?php echo $_SESSION['success']; ?></h1>
    <h2 align="center">Welcome to the home page <?php echo $_SESSION['name']; ?></h2>

</div>


<div class="form">
    <link href="style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
            <!-- Input Group -->
            <form action="add_hr_application_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>PERSONNEL INFORMATION</h4>
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
                                                        <input type="text" class="form-control" name="per_firstname" placeholder="First Name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        LastName:
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="per_lastname" placeholder="Last Name"required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        Email:
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" name="per_email"required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        Salary:
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="int" class="form-control" name="per_salary"required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        Hire Date:
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="date" class="form-control" name="per_hire_data" placeholder=""required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        Phone:
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="number" class="form-control" name="per_phone" required>
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
                                                        <option></option>
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
                                                        <option></option>
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
                                                        <option></option>
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