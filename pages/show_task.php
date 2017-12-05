<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php
//this is how you print something  $data contains the record that was selected on the table.
//print_r($data);
?>

<form action="index.php?page=tasks&action=update&id=<?php echo $data->id; ?> " method="post" id="form1">

<label><b>Owner Email</b></label>
<input type="text" name="owneremail" value="<?php echo $data->owneremail; ?>" required></br></br>

<label><b>Owner ID</b></label>
<input type="text" name="ownerid" value="<?php echo $data->ownerid; ?>"></br></br>

<label><b>Created Date</b></label>
<input type="text" name="createddate" value="<?php echo $data->createddate; ?>"></br></br>

<label><b>Due Date</b></label>
<input type="text" name="duedate" value="<?php echo $data->duedate; ?>"></br></br>

<label><b>Message</b></label>
<input type="text" name="message" value="<?php echo $data->message; ?>"></br></br>

<label><b>isDone</b></label>
<input type="text" name="isdone" value="<?php echo $data->isdone; ?>" ></br></br>


    <button type="submit" form="form1" value="delete">Update</button>
</form>


<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form2">


    <button type="submit" form="form2" value="delete">Delete</button>
</form>




<script src="js/scripts.js"></script>
</body>
</html>