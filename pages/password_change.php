<?php include 'headerPage.php' ?>


<div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Password Update</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>"">Home</a></li>
            <li class="breadcrumb-item active">Password Update</li>
        </ul>
    </div>
    <!-- Dashboard Counts Section-->
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="line"></div>
                            <form class="form-horizontal" action="index.php?page=accounts&action=updatePass&id=<?php echo $data->id; ?> " method="post" id="form1">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Enter Your Current Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="currentPass" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Enter New Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="newPass1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Re-enter Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="newPass2">
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="col-lg-4">
                                    <div class="col-lg-2"><button class="btn btn-primary" type="submit" form="form1" value="save">Update Password</button><a href="index.php?page=accounts&action=showProf">Cancel</a></div>
                            </form>
                            <script src="js/scripts.js"></script>
                            </body>
                 </html>