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
?>

<form action="index.php?page=accounts&action=register" method="POST">

    <div class="container">
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required></br></br>

        <label><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="fname" required></br></br>

        <label><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lname" required></br></br>

        <label><b>Phone No</b></label>
        <input type="text" placeholder="Enter Phone number" name="phone" required></br></br>

        <label><b>Birthday</b></label>
        <input type="text" placeholder="Enter Birthday" name="bday"></br></br>

        <label><b>Gender</b></label>
        <input type="text" placeholder="Enter Gender" name="gender"></br></br>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required></br></br>

        <button type="submit">Register</button><a href="index.php">Cancel</a></br></br>

    </div>


</form>


<script src="js/scripts.js"></script>
</body>
</html>