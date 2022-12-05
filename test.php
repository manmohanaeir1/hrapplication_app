<div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        Job:
                                                    </span>
                                                    </span>
                                                    <select class="form-control show-tick" name="mgr_id">
                                                        <option></option>
                                                        <?php
                                                        include("connect.php");
                                                        $pos1 = $con->prepare("SELECT * FROM hr_jobs ORDER BY job_id");
                                                        $pos1->execute();
                                                        while ($row1 = $pos1->fetch()) {
                                                            $job_code = $row1['job_code'];
                                                            $job_name = $row1['job_name'];


                                                        ?>
                                                            <option value="<?php echo $row1['job_code']; ?>"><?php echo $row1['job_name'] . '(' . $row1['job_code'] . ')'; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        Manager:
                                                    </span>
                                                    <select class="form-control show-tick" name="mgr_id">
                                                        <option></option>
                                                        <?php
                                                        include("connect.php");
                                                        $pos1 = $con->prepare("SELECT * FROM manager_table ORDER BY mgr_id");
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