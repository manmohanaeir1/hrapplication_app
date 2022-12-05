<a class="btn btn-success" href="#edit<?php echo $row['job_id']?>" data-toggle="modal">
    <span class = "glyphicon glyphicon-pencil" aria-hidden = "true">Edit</span>
</a> 
<!-- Modal -->
<div class="modal fade" id="edit<?php echo $row['job_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
    <!-- Modal content-->
        <div class="modal-content">
            <div class = "panel panel-primary">
                <div class = "panel-heading">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>UPDATE JOB</h4>
                </div>
            </div>
            <div class="modal-body">          
                <form action="edit_job_query.php" method="POST">
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <span class="input-group-addon">
                   JOB Name:
                    </span>
                    <div class="form-line">
                        <input type="hidden" class="form-control" name="job_id" value="<?php echo $row['job_id']?>">
                        <input type="text" class="form-control" name="job_name" value="<?php echo $row['job_name'] ?>" >
                        <input type="text" class="form-control" name="min_salary" value="<?php echo $row['min_salary'] ?>" >
                        <input type="text" class="form-control" name="max_salary" value="<?php echo $row['max_salary'] ?>" >
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-lg" name = "update">Update</button>
            </div>
                </form>
            </div>
        </div>
    </div>
</div>


