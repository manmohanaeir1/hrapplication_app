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
                            <select name="limit-records" id="limit-records">
                                <option disabled="disabled" selected="selected">---Limit Records---</option>
                                <?php foreach ([10,20,30,40,50] as $limit) : ?>
                                    <option <?php if (isset($_POST["limit-records"]) && $_POST["limit-records"] == $limit) echo "selected" ?> value="<?= $limit; ?>"><?= $limit; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php
                            include('connect.php');
                            $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 5;
                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $start = ($page - 1) * $limit;
                            $result = $con->query("SELECT * FROM hr_jobs LIMIT $start, $limit");
                            $jobs = $result->fetchAll();

                            $result1 = $con->query("SELECT count(job_id) AS id FROM hr_jobs");
                            $jobtCount = $result1->fetchAll();
                            $total = $jobtCount[0]['id'];
                            $pages = ceil($total / $limit);

                            $Previous = $page - 1;
                            $Next = $page + 1;


                            foreach ($jobs as $job) { ?>
                                <li class="list-group-item"><?php echo $job['job_name'] . "-" .  $job['job_code']; ?></li>


                        </ul>
                    <?php
                            } ?>

                    <div class="col-md-10">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li>
                                    <a href="index.php?page=<?= $Previous; ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo; Previous</span>
                                    </a>
                                </li>
                                <?php for ($i = 1; $i <= $pages; $i++) : ?>
                                    <li><a href="index.php?page=<?= $i; ?>"><?= $i; ?></a></li>
                                <?php endfor; ?>
                                <li>
                                    <a href="index.php?page=<?= $Next; ?>" aria-label="Next">
                                        <span aria-hidden="true">Next &raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">

                            <li class="list-group-item  bg-secondary" aria-current="true">Departments</li>
                            <?php
                            include('connect.php');
                            $display = $con->prepare("SELECT * FROM hr_departments ORDER BY dept_id ASC");
                            $display->execute();
                            $fetch = $display->fetchAll();

                            foreach ($fetch as $key => $row) { ?>
                                <li class="list-group-item"><?php echo $row['dept_name']; ?></li>


                        </ul>
                    <?php
                            } ?>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">

                            <li class="list-group-item  bg-secondary" aria-current="true">Managers</li>
                            <?php
                            include('connect.php');
                            $display = $con->prepare("SELECT * FROM hr_manager ORDER BY mgr_id ASC");
                            $display->execute();
                            $fetch = $display->fetchAll();

                            foreach ($fetch as $key => $row) { ?>
                                <li class="list-group-item"><?php echo $row['first_name'] . " " . $row['last_name']; ?></li>


                        </ul>
                    <?php
                            } ?>
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
<script type="text/javascript">
    $(document).ready(function() {
        $("#limit-records").change(function() {
            $('form').submit();
        })
    })
</script>
</body>

</html>