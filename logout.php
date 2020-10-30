<?php
session_start();
session_destroy();
    ?>
        <script>
            alert("you are logout");
            location.replace("login.php");
        </script>
    <?php
?>