
<!-- Name: Mir Mohaiminul Islam
Id:181-15-2052
section:PC-D
-->

<?php 
include "db.php";
session_start();
?>

<?php 
$errmsg="";
$errmsg1="";
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    if(empty($email) & empty($pass)){
        $errmsg= '<div style="text-align:center">Email and password are required</div>';
    }else if(!preg_match("/^[^@]+@[^@]+$/", $email)){
        $errmsg1='<div style="text-align:center">Email must have an at-sign (@)</div>';
    }
    else{
        $log_query= "SELECT * FROM user_data2 WHERE email='$email'";
        $passlogQuery=mysqli_query($conn,$log_query);
        while ($row=mysqli_fetch_array($passlogQuery)) {
            $_SESSION['email']      =$row['email'];
            $_SESSION['password']     =$row['password'];
    
            if($_SESSION['email'] == $email && $_SESSION['password'] == $pass ){
                header("Location:homepage.php");
              }
            if($_SESSION['password'] != $pass){
                $errmsg= '<div style="text-align:center">Incorrect password</div>';
            }
    
        }
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>login page BookStore</title>
</head>
<body>
    <section>
    <div class="row">
    <h2 class="reg">Book Store Login form</h2>
    <form action="" method="POST">
        <div class="form-col">
            <input type="text" name="email" class="form-custom" placeholder="Email">
        </div>
        <div class="form-col">
            <input type="password" name="pass" class="form-custom" placeholder="pass">
        </div>
        <input type="submit" class="btn btn-custom" value="login" name="login">
    </form>
<?php
echo $errmsg;
echo $errmsg1;
?>
    </div>
    </section>

</body>
</html>
<!-- Name: Mir Mohaiminul Islam
Id:181-15-2052
section:PC-D
-->