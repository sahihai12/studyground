<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/home.css">
    <!-- <link rel="stylesheet" href="scss/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->

    <?php include "link/link.php"?>
</head>
<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 style="color: white;"><img src="image/logo.png" alt=""> &nbsp;Study<span id="typed"
                            style="color: red;"></span></h3>
                </div>
                <div class="col-6">
                    <a href="logout.php"><button><i class="fa fa-sign-out" aria-hidden="true"></i>
                            logout </button></a>
                </div>
            </div>
        </div>
    </header>


    <div id="particles-js">
        <div class="main container" style="color: white;">
            <div class="row ml-5">
                <div class="col-md-6 ">
                    <h3 class="text-center my-2 ">Welcome
                        <span style="color:white; background-color: red;"><?php echo $_SESSION['sname']; ?></span>
                    </h3>
                    <h2 class="text-center my-5"><span style="color:white; background-color: red;">Made</span> Exam's Easy
                    </h2>

                    <article class="text-center my-1 mr-0">
                        Education is the process of facilitating learning, or the acquisition of knowledge, skills,
                        values,
                        beliefs, and habits. Educational methods include teaching, training, storytelling, discussion
                        and
                        directed research. Education frequently takes place under the guidance of educators, however
                        learners can also educate themselves. <br>
                        It measures a test-taker's knowledge, skill, aptitude, physical fitness, or ability or standing
                        in
                        some other topic. It is a set of questions designed to measure those things.In education an
                        examination is a test to show the knowledge and ability of a student.
                    </article>
                    <button class="my-5"><a href="index.php">Get Started</a></button>
                </div>

                <div class="col-md-6 ">
                    <img src="image/Group 45.png" alt="">
                </div>

            </div>
        </div>
    </div>


    <footer style="background-color: black ; color: white;">
        <article class="text-center">Name:Sahil &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; roll_no : 1704051046</article>
    </footer>



    <!-- particle.js -->

    <script type="text/javascript" src="js/particles.js"></script>
    <script type="text/javascript" src="js/app.js"></script>



    <script src="js/typed.js"></script>

    <script>
        var typed = new Typed('#typed', {
            strings: ['Ground'],
            typeSpeed: 600,
            backSpeed: 300,
            smartBackspace: true, // this is a default
            loop: true
        });
    </script>
</body>
</html>