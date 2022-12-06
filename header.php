<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HR APPLICATION SYSTEM</title>
    <!-- Bootstrap Core Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                    <a class="navbar-brand " href="index.php">HR APPLICATION SYSTEM</a>

                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="navbar-header">


                <ul class="dropdown-menu">
                    <li>
                        <a class="me" href="logout.php" onclick="if(confirm('Logging out, Thank you and see you soon Admin!') == 0){return false;}"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
   
</body>

</html>