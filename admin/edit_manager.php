<a class="btn btn-success" href="#edit<?php echo $row['mgr_id']?>" data-toggle="modal">
    <span class = "glyphicon glyphicon-pencil" aria-hidden = "true">Edit</span>
</a> 
<!-- Modal -->
<div class="modal fade" id="edit<?php echo $row['mgr_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
    <!-- Modal content-->
        <div class="modal-content">
            <div class = "panel panel-primary">
                <div class = "panel-heading">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>UPDATE MANAGER</h4>
                </div>
            </div>
            <div class="modal-body">          
                <form action="edit_manager_query.php" method="POST">
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <span class="input-group-addon">
                    MANAGER Name:
                    </span>
                    <div class="form-line">
                        <input type="hidden" class="form-control" name="mgr_id" value="<?php echo $row['mgr_id']?>">
                        <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>" >
                        <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>" >

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


