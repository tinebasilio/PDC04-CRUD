<?php 
//die('w');
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['email'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>User Page</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <h2>Welcome user!</h2>

     <h1>Hello, <?php echo $_SESSION['email']; ?></h1>

     <h1>First Name: <?php echo $_SESSION['first_name'];?></h1>
     <h1>Last Name: <?php echo $_SESSION['last_name'];?></h1>
     <a href="logout.php">Logout</a>

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>