<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php
//this is how you print something
//print utility\htmlTable::genarateTableFromMultiArray($data);
session_start();
?>
<form action="index.php?page=accounts&action=logout" method="post" id="form3">


    <button type="submit" form="form3" value="logout">Logout</button>
</form>

<form action="index.php?page=tasks&action=addTask" method="POST">

    <div class="container">
        <label><b>Created Date</b></label>
        <input type="text" placeholder="Enter Created date" name="createddate" required></br></br>

        <label><b>Duedate</b></label>
        <input type="text" placeholder="Enter Due date" name="duedate" ></br></br>

        <label><b>Message</b></label>
        <input type="text" placeholder="Enter message" name="message" ></br></br>

        <label><b>isdone</b></label>
        <input type="text" placeholder="Enter isdone" name="isdone"></br></br>

        <button type="submit">Add</button><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a> </br></br>

    </div>


</form>


<script src="js/scripts.js"></script>
</body>
</html>