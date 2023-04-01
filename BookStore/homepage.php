<!-- Name: Mir Mohaiminul Islam
Id:181-15-2052
section:PC-D
-->
<?php
session_start();
include "db.php";
if(empty($_SESSION['email']) || empty($_SESSION['password'])){
    header("Location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Home page</title>
</head>
<body>
    <section class="home">
    <a href="logout.php">Logout</a>
        <div class="row">
            <h2 class="reg">
            Welcome Your Book Sell/Buy Repository.
            </h2>
        </div>
    </section>
    
</body>
</html>
<!-- Name: Mir Mohaiminul Islam
Id:181-15-2052
section:PC-D
-->