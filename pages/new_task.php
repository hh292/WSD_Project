<!DOCTYPE html>

<?php
session_start();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WSD Project - FALL2017</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">   
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="favicon.png">
   
</head>
<body>
<div class="page home-page">
    <!-- Main Navbar-->
    <header class="header">
        <nav class="navbar">
            <!-- Search Box-->
            <div class="search-box">
                <button class="dismiss"><i class="icon-close"></i></button>
                <form id="searchForm" action="#" role="search">
                    <input type="search" placeholder="What are you looking for..." class="form-control">
                </form>
            </div>
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <!-- Navbar Header-->
                    <div class="navbar-header">
                        <!-- Navbar Brand --><a href="https://www.njit.edu/graduatestudies/degree-programs/graduatecertificates/web-systems-development-cert/" class="navbar-brand">
                            <div class="brand-text brand-big"><span>Web System Development </span><strong> ToDo Task Admin </strong></div>
                            <div class="brand-text brand-small"><strong>TD</strong></div></a>
                        <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                    </div>
                    <!-- Navbar Menu -->
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Search-->
                        <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                        <!-- Messages -->
                        <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange">10</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a></li>
                            </ul>
                        </li>
                        <!-- Logout   -->
                        <li class="nav-item">
                            <form action="index.php?page=accounts&action=logout" method="post" id="form3" style="float:right;">
                        <li><button class="btn btn-link navbar-btn" type="submit">Logout</button></li>
                        </form>
                        <!-- My Profile-->
                        <form action="index.php?page=accounts&action=myProf" method="post" id="form4" style="float:right;">
                            <li><span class="glyphicon glyphicon-user"></span><button class="btn btn-link navbar-btn" type="submit">My Profile</button>
                            </li>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h4">Keith Williams</h1>
                    <p>Web Designer</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Main Menu</span>
            <div>
                <ul class="list-unstyled">
                    <div>
                        <li><button class="btn btn-link navbar-btn"><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Home</a></button></li>
                    </div>
                    <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>WSD Assignments Fall 2017 </a>
                        <ul id="dashvariants" class="collapse list-unstyled">
                            <li><a href="https://web.njit.edu/~hh292/Refactor_ActiveRecords/">Active Records</a></li>
                            <li><a href="https://web.njit.edu/~hh292/Project_new/index2.php/">Project1:CSV upload</a></li>
                            <li><a href="https://web.njit.edu/~hh292/Week04_Assignment/">PHP Basic</a></li>
                            <li><a href="#">Page</a></li>
                        </ul>
                    </li>
        </nav>
        <!-- Page Header-->
        <div class="content-inner">
            <!-- Page Header-->
            <header class="page-header">
                <div class="container-fluid">
                    <h2 class="no-margin-bottom">Forms</h2>
                </div>
            </header>
            <!-- Breadcrumb-->
            <div class="breadcrumb-holder container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>"">Home</a></li>
                    <li class="breadcrumb-item active">Forms</li>
                </ul>
            </div>
            <!-- Forms Section-->
            <section class="forms">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Form Elements -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-close">
                                    <div class="dropdown">
                                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                    </div>
                                </div>
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Create Your Task</h3>
                                </div>
                                <div class="card-body">
                                    <div class="line"></div>
                                    <form class="form-horizontal" action="index.php?page=tasks&action=addTask" method="POST">
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Created Date</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Enter Created Date" name="createddate" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Due Date</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Enter Due Date" name="duedate" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Message</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Enter Message" name="message" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label">Status</label>
                                            <div class="col-sm-9 select">
                                                <select name="isdone" class="form-control">
                                                    <option>Done</option>
                                                    <option>Not Done</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="line"></div>
                                            <button type="submit" class="btn btn-primary">Add</button>
                                            <button class="style-switch-button"><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a></li>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Footer-->
            <footer class="main-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Your company &copy; 2017-2019</p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary btn-sm hidden-xs hidden-sm"><i class="fa fa-cog fa-2x"></i></button>
<div id="style-switch" class="collapse">
    <h4 class="mb-3">Select theme colour</h4>
    <form class="mb-3">
        <select name="colour" id="colour" class="form-control">
            <option value="">select colour variant</option>
            <option value="default">violet</option>
            <option value="pink">pink</option>
            <option value="red">red</option>
            <option value="green">green</option>
            <option value="sea">sea</option>
            <option value="blue">blue</option>
        </select>
    </form>
</div>
<!-- Javascript files-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://d19m59y37dris4.cloudfront.net/admin/1-1/vendor/popper.js/umd/popper.min.js"> </script>
<script src="https://d19m59y37dris4.cloudfront.net/admin/1-1/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://d19m59y37dris4.cloudfront.net/admin/1-1/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="https://d19m59y37dris4.cloudfront.net/admin/1-1/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="https://d19m59y37dris4.cloudfront.net/admin/1-1/js/front.js"></script>
</body>
</html>