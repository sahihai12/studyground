<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="css/login.css" rel="stylesheet">
    <?php include "link/link.php"?>
</head>
<body>
<?php
include 'dbcon.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];

        $name_search =" select * from registration where username = '$name'";
        $query = mysqli_query($con , $name_search);

        $name_count = mysqli_num_rows($query);


         

        if($name_count>0){
            $s =" select * from registration where username ='$name' && password = '$password'";
            $result = mysqli_query($con, $s);
            $num = mysqli_num_rows($result);

            if($num == 1){
                $_SESSION['sname'] = $name;
                ?>
                <script>
                    alert("correct password");
                    location.replace("home.php");
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Enter a correct password");
                </script>
            <?php
            }
        }else{
            ?>
                <script>
                    alert("you are not registered")
                </script>
            <?php
        }

    }
?>

<div class="container" style="width: 450px;">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <img src="image/login.png" alt="" style="width: 25%;">
            <div class="input-container upper">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Username" name="name" required>
            </div>
            <div class="input-container">
                <i class="fa fa-lock icon"></i>
                <input class="input-field" type="text" placeholder="password" name="password" required>
            </div>
            <a href="sign.php" style="color: white;" class="px-3">don't have an account</a>
            <button type="submit" class="btn" name='submit'>login</button>
        </form>
        <p class="text-center">or</p>
        <a href="">
            <p><i class="fa fa-facebook">&nbsp;&nbsp;&nbsp;login with Facebook</i></p>
        </a>
        <a href="">
            <p><i class="fa fa-google">&nbsp;&nbsp;&nbsp;login with Google</i></p>
        </a>
    </div>
</body>
</html>