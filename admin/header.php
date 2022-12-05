<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
<!--    <meta http-equiv="refresh" content="1"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Employees Profiling</title>
 <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="plugins/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <style type="text/css">
    
    .navbar-right {
        margin-left:1200px;

    }
    
    </style>
</head>
<body class="theme-red">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid" style="background-color:blue;">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="home.php" style="color: #fff;">EMPLOYEES PROFILING</a>
                <ul class = "nav navbar-right"> 
                <li class = "dropdown">
                    <a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#" style="color: #fff;">
                        <span class = "glyphicon glyphicon-user" style="color: #fff;"></span>
                        <b class = "caret"></b>
                    </a>
                <ul class = "dropdown-menu">
                    <li>
                        <a class = "me" href = "logout.php" onclick="if(confirm('Logging out, Thank you and see you soon Admin!') == 0){return false;}"><i class = "glyphicon glyphicon-log-out"></i> Logout</a>
                    </li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">DASHBOARD</li>
                    <li>
                        <a href="home.php">
                            <i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;Home
                        </a>
                    </li>
                   
                            <li>
                               <a href="all_hr_employees.php">
                               <i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp; 
                                Employee Menu    </a>
                            </li>
                            <li>
                               <a href="job_table.php">
                               <i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp; 
                               Job Menu  </a>
                            </li>
                            <li>
                               <a href="manager_table.php">
                               <i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp; 
                               Manager Menu   </a>
                            </li>
                            <li>
                               <a href="department_table.php">
                               <i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp; 
                               Department Menu  </a>
                            </li>

                    </li>                   
                  
                </ul><br><br><br>
                <div class="dtime">
                    <div class="alert alert-info">
                        <i class="icon-calendar"></i>
                        <?php
                        $today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($today));
                        echo $new;
                        ?>
                    </div>
                 </div>
              
            </div>

        </aside>
    </section>

            <?php include("add_manager_modal.php"); ?>
            <?php include("add_department_modal.php"); ?>



