<?php
require("header.php");
?>
<div class="signup-form mt-5">


<div class="card" style="width: 25rem;">
<form action="signup_query.php" method="POST" enctype="multipart/form-data">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" class="form-control"  name="user_name" required>
  </div>
  <div class="mb-3 g-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1"required>
    
  </div>
  
  <button type="submit" name="signup" class="btn btn-primary">Signup</button>
  <a href="index.php"> Back</a>

</form>
</div>
</div>
