<?php
$server ="localhost";
$user ="root";
$password ="";
$db = "signup";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
        <script>
            alert("Connectio sucessful");
        </script>
    <?php
}else{
    ?>
        <script>
            alert("Connectio failed");
        </script>
    <?php
}

?>