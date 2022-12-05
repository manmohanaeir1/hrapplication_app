
<a href="#" data-toggle="modal" data-target="#add_job">
                                    <span class="print btn-default" style="width: auto;">Add JOB<span>
                                </a><section>
    <div class="modal fade" id="add_job" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class = "panel panel-primary">
                    <div class = "panel-heading">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>ADD JOB </h4>
                    </div>
                </div>
                <div class="modal-header">
                </div>
                <form action="add_job_query.php" method="POST">
                <div class="modal-body">
                    <div class="input-group">
                        <span class="input-group-addon">
                        Job Name:
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="job_name" placeholder="Job  Name" required>
                        </div>
                        <div class="form-line">
                            <input type="text" class="form-control" name="job_code" placeholder="Job  Code" required>
                        </div>
                        <div class="form-line">
                            <input type="text" class="form-control" name="min_salary" placeholder="Minimum Salary" required>
                        </div>
                        <div class="form-line">
                            <input type="text" class="form-control" name="max_salary" placeholder="Maximum Salary" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-lg" name = "save">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>