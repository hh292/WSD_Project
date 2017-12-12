<?php include 'headerPage.php' ?>

<?php
//this is how you print something  $data contains the record that was selected on the table.
//print_r($data);
session_start();
?>




    <?php print utility\htmlTable::generateTableForOneTodo($data);
  //  print_r($data);
    ?>
<form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?> " method="post" id="form1" style="float:left;">
    <div class="col-lg-10"><button class="btn btn-primary text-center" type="submit" form="form1" value="edit">Edit</button></div>
</form>


<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form2" style="float:left;">


    <div ><button class="btn btn-primary" type="submit" form="form2" value="delete">Delete</button><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a></div>
</form>




<script src="js/scripts.js"></script>
</body>
</html>