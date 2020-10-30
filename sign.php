<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign</title>
    <link href="css/sign.css" rel="stylesheet">
    <?php include "link/link.php"?>
</head>
<body>

<?php

    include 'dbcon.php';

    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $email =  $_POST['email'];
        $mobile =  $_POST['mobile'];
        $password =  $_POST['password'];
        $cpassword =  $_POST['cpassword'];

        $es = " select * from registration where email = '$email'";
        $eres =mysqli_query($con, $es);
        $enum = mysqli_num_rows($eres);

        if($enum>0){
            ?>
                <script>
                    alert("email already exists ");
                </script>
            <?php
        }else{
            if($password === $cpassword){

                $us = " select * from registration where username = '$username'";
                $ures =mysqli_query($con, $us);
                $unum = mysqli_num_rows($ures);

                if($unum==0){
                    $reg = " insert into registration( username, email, mobile, password, cpassword) values ('$username','$email','$mobile','$password','$cpassword')";                      
                    $iquery = mysqli_query($con , $reg);
                    if($iquery){
                        ?>
                            <script>
                                alert("insert sucessful");
                                location.replace("login.php");
                            </script>
                        <?php
                    }else{
                        ?>
                            <script>
                                alert("insert failed");
                            </script>
                        <?php
                    }
                }else{
                    ?>
                        <script>
                            alert("username already exit");
                        </script>
                    <?php
                }
            }else{
                ?>
                <script>
                    alert("password are not matching");
                </script>
            <?php
            }
        }

    }
// mysqli_close($con) 
?>
  
        <div class="container" style="width: 450px;">
        <h3 class="text-center">Create account here</h3>
        
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <h5 class="text-center">Register Form</h5>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Enter name" name="username" required>
            </div>

            <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input class="input-field" type="email" placeholder="Email" name="email" required>
            </div>

            <div class="input-container">
                <i class="fa fa-mobile icon"></i>
                <input class="input-field" type="number" placeholder="mobile" name="mobile" required>
            </div>

            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Password" name="password" required>
            </div>

            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Reapeat Password" name="cpassword" required>
            </div>
            <a href="login.php" style="color: white;" class="px-3">already have an account</a>
            <button type="submit" class="btn" name="submit">Register</button>
        </form>

            <p class="text-center">or</p>
            <a href="">
                <p><i class="fa fa-facebook">&nbsp;&nbsp;&nbsp; Facebook</i></p>
            </a>
            <a href="">
                <p><i class="fa fa-google">&nbsp;&nbsp;&nbsp; Google</i></p>
            </a>
    </div>
</body>
</html>