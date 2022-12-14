<?php
session_start();

include("header1.php");
?>

<?php
if (isset($_SESSION['user_name'])) { ?>
    <div class="logout-button" style="float: right;">
    <a href="logout.php" class="btn btn-danger ">Logout</a>
</div>
<section class="content">

    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>ALL HR APPLICATIONS </h4>
                            <!-- <a href="add_hr_employees.php">
                                    <input type="button" value="Add Personnel" class="print btn-default" style="margin-right: 80px; width: auto;">
                                </a> -->
                            <a href="print_all.php">
                                <input type="button" value="Print" class="print">
                            </a>
                        </div>
                    </div>
                    <div id="print">
                        <div class="scroll">
                            <div class="body">
                                <table id="example" class="stripe" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td class="hidden">ID</td>
                                            <td>Name</td>
                                            <td>Email</td>
                                            <td>Salary</td>
                                            <td>Hire Date</td>
                                            <td>Phone</td>
                                            <td>Job</td>
                                            <td>Manager</td>
                                            <td>Department</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        include('connect.php');
                                        $username = $_SESSION['user_name'];

                                        $display = $con->prepare("SELECT * FROM `hr_employees` 
                                    LEFT JOIN hr_jobs ON hr_employees.job_id = hr_jobs.job_id 
                                    LEFT JOIN hr_manager ON hr_employees.mgr_id = hr_manager.mgr_id  
                                    LEFT JOIN hr_departments ON hr_employees.dept_id = hr_departments.dept_id WHERE user_name ='$username'; 
                                    ORDER BY per_id ASC");

                                        $display->execute();

                                        $fetch = $display->fetchAll();

                                        foreach ($fetch as $key => $row) {

                                        ?>
                                            <tr>
                                                <td class="hidden"><?php echo $row['per_id']; ?></td>
                                                <td><?php echo $row['per_firstname'] . ", " . $row['per_lastname']; ?></td>
                                                <td><?php echo $row['per_email']; ?></td>
                                                <td><?php echo $row['per_salary']; ?></td>
                                                <td><?php echo $row['per_hire_data']; ?></td>
                                                <td><?php echo $row['per_phone']; ?></td>
                                                <td values="<?php echo $row['job_id']; ?>"><?php echo $row['job_name'] . " " . $row['job_code']; ?></td>
                                                <td values="<?php echo $row['mgr_id']; ?>"><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
                                                <td values="<?php echo $row['dept_id']; ?>"><?php echo $row['dept_name']; ?></td>

                                                <td>
                                                    <a class="btn btn-danger btn-sm" href="edit_hr_application.php?per_id=<?php echo $row['per_id']?>">
                                                        <span class="glyphicon glyphicon-write" name="hire" aria-hidden="true">Edit</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
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
	<?php } else {

		header('location:login.php');
	}
?>


<script src="plugins/js/jquery-1.js"></script>
<script src="plugins/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<?php
include("script.php");
?>