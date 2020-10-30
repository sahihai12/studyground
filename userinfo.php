<?php
$con = mysqli_connect('localhost','root','');
 
if($con){
    echo"sucessful";
}else{
    echo"failed";
}

mysqli_select_db($con, 'contact');
$user =$_POST['user'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$comments =$_POST['comments'];

$query = " insert into contactinfo (user , email , mobile ,comments) values('$user','$email','$mobile','$comments')";

mysqli_query($con,$query);
                ?>
                <script>
                    alert("thanks");
                    location.replace("index.php");
                </script>
                <?php


?>