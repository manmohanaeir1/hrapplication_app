

<?php
require("header.php");
include ('connect.php');

?>
<h2>User </h2>

<div class="signup-form mt-5">
<div class="card" style="width: 25rem;">
<?php if(isset($_SESSION['error'])){ echo $_SESSION['error']; }?>
<form action="login_query.php" method="POST" enctype="multipart/form-data">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" class="form-control"  name="user_name" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
  </div>
  
  <button type="submit" name="login" class="btn btn-primary">Login</button>
  <a href="index.php"> Back</a>

</form>
</div>
</div>