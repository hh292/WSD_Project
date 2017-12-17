<?php include 'headerPage.php' ?>

<?php
//this is how you print something  $data contains the record that was selected on the table.
//print_r($data);
session_start();
?>
<div class="content-inner">
      
        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">Edit Task</h2>
            </div>
        </header>
        <!-- Breadcrumb-->
        <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>"">Home</a></li>
                <li class="breadcrumb-item active">Edit Task</li>
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
                                    <form class="form-horizontal" action="index.php?page=tasks&action=update&id=<?php echo $data->id; ?> " method="post" id="form1">
                                    <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Owner Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"name="owneremail" value="<?php echo $data->owneremail; ?>" readonly required disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Owner Id</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="ownerid" value="<?php echo $data->ownerid; ?>" readonly required disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Created Date</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="createddate" value="<?php echo $data->createddate; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Due Date</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="duedate" value="<?php echo $data->duedate; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Message</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"name="message" value="<?php echo $data->message; ?>">
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
                            <div class="col-lg-4">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button class="style-switch-button"><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a></div>


                                    
                    </form>


                    <script src="js/scripts.js"></script>
                    </body>
                    </html>