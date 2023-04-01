<?php 
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Crud Operation</title>
</head>
<body>
    <div class="row">
        <div class="col-half">
            <h2 class="reg">Registration form</h2>
            <form action="" method="POST">
                <div class="form-col">
                <input type="text" name="fullname" placeholder="fullname" class="form-custom" required>
                </div>
                <div class="form-col">
                <input type="Email" name="email" placeholder="email" class="form-custom" required>
                </div>
                <div class="form-col">
                <input type="text" name="address" placeholder="address" class="form-custom" required>
                </div>
                <div class="custombutton">
                <input type="submit" name="register" class="btn btn-custom" value="Register">
                </div>
            </form>
            <?php
            if (isset($_POST['register'])) {
                $fullname=$_POST['fullname'];
                $email=$_POST['email'];
                $address=$_POST['address'];

                $insertQuery="INSERT INTO user_data(fullname,email,address) VALUES('$fullname','$email','$address')";
                $passinsert=mysqli_query($conn,$insertQuery);
                if($passinsert){
                    echo '<div>data inserted Successfully to the database</div>';
                    header("Refresh:2; url=index.php");
                }
            }
            ?>

        <!-- edit option and Update code here -->
        <?php
        if (isset($_GET['update'])) {
            $update_id=$_GET['update'];
            $editQ="SELECT * FROM user_data where id='$update_id'";
            $passQ=mysqli_query($conn,$editQ);
            while ($row=mysqli_fetch_assoc($passQ)) {
                $name=$row['fullname'];
                $email=$row['email'];
                $address=$row['address'];
                ?>
                <h2 class="reg">Edit Option</h2>
            <form action="" method="POST">
                <div class="form-col">
                <input type="text" name="fullname" placeholder="fullname" class="form-custom" value="<?php echo $name; ?>">
                </div>
                <div class="form-col">
                <input type="Email" name="email" placeholder="email" class="form-custom" value="<?php echo $email; ?>">
                </div>
                <div class="form-col">
                <input type="text" name="address" placeholder="address" class="form-custom" value="<?php echo $address; ?>">
                </div>
                <div class="custombutton">
                <input type="submit" name="updateInfo" class="btn btn-custom" value="Save Changes">
                </div>
            </form>
                <?php
            }
            if (isset($_POST['updateInfo'])) {
                $fullname=$_POST['fullname'];
                $email=$_POST['email'];
                $address=$_POST['address'];

                $updateQ="UPDATE user_data SET fullname='$fullname',email='$email',address='$address' WHERE id='$update_id'";
                $passU=mysqli_query($conn,$updateQ);
                if($passU){
                    echo '<div>data updated Successfully to the database</div>';
                    header("Refresh:2; url=index.php");
                }
            }
        }
        ?>
        <!-- edit option and Update code end here -->
        </div>
        <div class="col-half">
            <!-- show all user in a table -->
            <table>
                <tr>
                <th>SL.</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
                </tr>
                <?php
                
                $data="SELECT * FROM user_data";
                $passdata=mysqli_query($conn,$data);
                $i=0;
                while ($row=mysqli_fetch_assoc($passdata)) {
                    $user_id=$row['id'];
                    $name=$row['fullname'];
                    $email=$row['email'];
                    $address=$row['address'];
                    $i++;
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $address; ?></td>
                        <td>
                            <div>
                            <a href="index.php?update=<?php echo $user_id; ?>"><i class="fas fa-edit"></i></a>
                            <a href="index.php?delete=<?php echo $user_id;?>"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
            <?php
                }
                //Delete User Code
                if (isset($_GET['delete'])) {
                    $deleteId=$_GET['delete'];
                    $deluser="DELETE FROM user_data WHERE id='$deleteId'";
                    $passDel=mysqli_query($conn,$deluser);
                    if($passDel){
                        header("Location:index.php");
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>