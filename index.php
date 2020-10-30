<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <!-- font- awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- custom -->
    <link rel="stylesheet" href="css/index.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="scss/bootstrap.min.css">
    <!-- animate -->
    <link rel="stylesheet" href="scss/animate.min.css">
    <!-- slick -->
    <link rel="stylesheet" href="scss/slick.css">
    <link rel="stylesheet" href="scss/slick-theme.css">
</head>

<body>

<header>
        <nav class="navbar navbar-expand-xl navbar-light ">
            <a class="navbar-brand" href="#">
                <img src="image/lo.png" alt="" class="wow fadeInLeft delay5s" style="width: 160px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Course
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="start.html">Python</a>
                            <a class="dropdown-item" href="start.html">C++</a>
                            <a class="dropdown-item" href="start.html">Java</a>
                            <a class="dropdown-item" href="start.html">My-sql</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- main section start -->

    <!-- slider -->

    <div id="mainslider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mainslider" data-slide-to="0" class="active"></li>
            <li data-target="#mainslider" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 left" style="width: 100%;">
                            <p class="text-center" style="color: white; font-size: 28px;">Made Exam's
                                <span style="background-color: red;">Easy</span>
                            </p>
                            <br>
                            <article class="text-center" style="color: white;">Now the preparation has started and you
                                are following the plan but the result is not as expected. So for that you need to
                                increase your concentration and study effectively for exam.
                            </article>
                            <br>
                            <p class="text-center"><button class="btn"><a href="start.html">Join Us</a></button></p>
                        </div>
                        <div class="col-md-6 " style="width: 100%;">
                            <img src="image/slider2.png" alt="" class="img1">
                        </div>
                    </div>
                </div>

            </div>

            <div class="carousel-item">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 left" style="width: 100%;">
                            <p class="text-center text-uppercase" style="color: white; font-size: 22px;">high quality
                                <span style="background-color: red;">programming</span>
                            </p>
                            <br>
                            <article class="text-center" style="color: white;">Now the preparation has started and you
                                are following the plan but the result is not as expected. So for that you need to
                                increase your concentration and study effectively for exam.
                            </article>
                            <br>
                            <p class="text-center"><button class="btn"><a href="start.html">Get Started</a></button></p>
                        </div>
                        <div class="col-md-6 " style="width: 100%;">
                            <img src="image/slider3.png" alt="" class="img2">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    



    <!-- course -->
    <section id="course">
        <p class=" text-center"><a href="#"><button class="btn"> course</button></a></p>
        <div class="container cousre-slick-slider autoplay">

            <div class="items">
                <div class="imagehoverzoom">
                    <img src="image/bg-sub.png" alt="">
                </div>
                <p class="text-center">Get started <span class="color">ALGORITHMS</span></p>
            </div>

            <div class="items">
                <div class="imagehoverzoom">
                    <img src="image/bg-python.png" alt="">
                </div>
                <p class="text-center">Get started <span class="color">PYTHON</span></p>
            </div>

            <div class="items">
                <div class="imagehoverzoom">
                    <img src="image/bg-java.png" alt="">
                </div>
                <p class="text-center">Get started <span class="color">JAVA</span></p>
            </div>

            <div class="items">
                <div class="imagehoverzoom">
                    <img src="image/bg-c.png" alt="">
                </div>
                <p class="text-center">Get started <span class="color">C++</span></p>
            </div>

            <div class="items">
                <div class="imagehoverzoom">
                    <img src="image/bg-sql.png" alt="">
                </div>
                <p class="text-center">Get started <span class="color">SQL</span></p>
            </div>

        </div>
    </section>


    

    <!-- blog -->

    <section id="blog">
        <!-- <div class="container"> -->
        <div class="row offset-1">
            <div class="col-lg-6 text-left" style="width: 100%;">
                <h2 class="text-uppercase text-center">beacome a <span style="color: white; background-color: red;"> top
                        author
                    </span>
                </h2>
                <h2 class="text-uppercase  text-center">or <span style="color: white; background-color: red;">
                        blogsdope
                    </span>
                </h2>
                <br>

                <p style="font-weight: 600; font-size: 20px;">Are you passionate about learning some cool stuff
                    everyday?</p>
                <p style="font-weight: 600;">Then we bring you a platform where you can read posts about a diverse
                    range of topics on
                    programming and technology, and contribute by writing your own posts about any topic. So start
                    sharing your knowledge with a vast community of programmers and become a top author.</p>
            </div>

            <div class="col-lg-5 imgblog" style="width: 100%;">

                <img src="image/student-thinstart-right.jpg" alt="" width="80%" class="image-fluid">
            </div>
        </div>
    </section>

    <!-- why us -->



    <section id="why">

        <p class="text-uppercase text-center"><a href="#"><button class="btn">but why us</button></a></p>

        <div class="services-container">
            <div class="service-box box1" class="text-center">
                <div class="service-img">
                    <img src="image/card1.png" alt="">
                </div>
                <div class="service-title">
                    <p class="text-center">Strong Foundation</p>
                </div>
                <div class="service-dis">
                    <p class="text-center">Having a good basic concept is necessary in everything, not just
                        learning. And that is our main focus at CodesDope; to lay down the building blocks in
                        coding so that later you can understand new topics and innovate by yourself, once you
                        have completed the course . So, bring your
                        friends into the discussions if you want..
                    </p>
                    <br>
                </div>
            </div>

            <div class="service-box box2">
                <div class="service-img">
                    <img src="image/card3.png" alt="">
                </div>
                <div class="service-title">
                    <p class="text-center">Quality Mentors</p>
                </div>
                <div class="service-dis">
                    <p class="text-center">We have a forum solely for discussing whatever doubts you
                        have during the courses. And remember, never be afraid of raising a doubt, everyone is
                        on the same boat here and the more you ask, the more you will know. So, bring your
                        friends into the discussions if you want.
                    </p>
                    <br>
                </div>
            </div>

            <div class="service-box box3" class="text-center">
                <div class="service-img">
                    <img src="image/card2.png" alt="">
                </div>
                <div class="service-title">
                    <p class="text-center">Discuss and Deduce</p>
                </div>
                <div class="service-dis">
                    <p class="text-center">Whether or not you are able to apply the knowledge you gain
                        here is up to you, but you can be sure that you won't have any difficulty in
                        understanding what is being conveyed in the courses. And even if you do, we have you
                        covered. Your doubts will be cleared by us in no time.
                    </p>
                    <br>
                </div>
            </div>

    </section>
    

    <!-- conttact form  -->

    <div id="contact" class=" my-5" style="background-color:#efefef">
    <p style="font-size: 30px" class="text-center">Contact Form</p>

        <div class=" w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="user" required>
                </div>
                <div class="form-group">
                    <label>Email id</label>
                    <input class="form-control" type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input class="form-control" type="text" name="mobile" required>
                </div>
                <div class="form-group">
                    <label>Comments</label>
                    <textarea name="comments" id="" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-danger">submit</button>
            </form>
        </div>
    </div>
    <!-- conttact form  -->

    <!-- start -->

    <section id="start" style="background-image:">

        <p class="text-uppercase text-center">Upgrade Your Skills With Our <span class="color">Online Test</span></p>
        <a href="#">
            <p class="text-center"><a href="quiz.html"><button class="btn wow flash"> Start Now </button></a></p>
        </a>
    </section>



    <!-- footer -->

    <footer style="background-color: black; color: white;">
        <div class="container">

            <img src="image/lo.png" alt="" style="width:200px" class="my-4">

            <div class="row">
                <div class="col-sm-6">
                    <a href="#top">Home</a>
                    <a href="start.html">Course</a>
                    <a href="about.html">About</a>
                    <a href="#contact">Contact</a>
                </div>
                <div class="col-sm-6">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"> Facebook</i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"> Twiter</i></a>
                    <a href=""><i class="fa fa-google" aria-hidden="true"> Google</i></a>
                    <a href=""><i class="fa fa-whatsapp" aria-hidden="true"> Whatsapp</i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer -->



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- particle.js -->
    <script type="text/javascript" src="js/particles.js"></script>
    <script type="text/javascript" src="js/app.js"></script>


    <!-- wow .js -->
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- typed.js -->
    <script src="js/typed.js"></script>

    <script>
        var typed = new Typed('#typed', {
            strings: ['Ground'],
            typeSpeed: 600,
            backSpeed: 600,
            smartBackspace: true, // this is a default
            loop: false
        });
    </script>



    <!-- slick.min.js -->
    <script src="js/slick.min.js"></script>

    <script>
        $(function () {
            $('.autoplay').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 200,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000,
                centerMode: true,
                centerPadding: '0',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 994,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 746,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 586,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ]
            });

        });
    </script>
</body>

</html>

