<?php include 'headerPage.php' ?>

<?php
session_start();
?>
<div class="content-inner">
    <!-- Page Header-->
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
                <li class="breadcrumb-item active">Forms</li>
            </ul>
        </div>
        <!-- Dashboard Counts Section-->

        <!-- Dashboard Header Section    -->
        <section class="dashboard-header">
            <div class="container-fluid">
                <div class="row">

                    <?php
                    print utility\htmlTable::generateTableForOneTodo($data);
                    ?>

                    <form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?> " method="post" id="form1" style="float:left;">
                        <div class="col-lg-10"><button class="btn btn-primary text-center" type="submit" form="form1" value="edit">Edit</button></div>
                    </form>


                    <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form2" style="float:right;">
                        <div class="" ><button class="btn btn-primary" type="submit" form="form2" value="delete">Delete</button><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a></div>
                    </form>


                </div>
            </div>
    </div>

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

<script src="js/scripts.js"></script>
</body>
</html>