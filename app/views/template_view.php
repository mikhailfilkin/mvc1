<!-- шаблон -> общей для всех страниц разметкой-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zipper - Responsive HTML Template</title>
        <!--
        
        Template 2084 Zipper
        
        http://www.tooplate.com/view/2084-zipper
        
        -->
        <!-- load stylesheets -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
        <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
        <link rel="stylesheet" href="css/tooplate-style.css">                                   <!-- Templatemo style -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
    </head>

    <body>

        <div class="container-fluid">
            <!-- Navigation -->        
            <div class="tm-nav">
                <nav class="navbar">

                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar"></button> <!-- &#9776; ☰ -->
                    <div class="collapse navbar-toggleable-sm text-xs-center tm-navbar" id="tmNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item active selected">
                                <a class="nav-link current" href="/home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/testimonials">Testimonials</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <?php include 'app/views/' . $content_view; ?>


        </div>

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>  <!-- Single page nav (https://github.com/ChrisWojcik/single-page-nav) -->

        <script>

            // Check scroll position and add/remove background to navbar
            function checkScrollPosition() {

                if ($(window).width() < 767) {
                    $(".tm-nav").removeClass("scroll");
                    return;
                }

                if ($(window).scrollTop() > 50) {
                    $(".tm-nav").addClass("scroll");
                } else {
                    $(".tm-nav").removeClass("scroll");
                }
            }

            $(document).ready(function () {
                // Single page nav
                $('.tm-nav').singlePageNav({
                    offset: 57,
                    filter: ':not(.external)',
                    updateHash: true
                });

                checkScrollPosition();

                // navbar
                $('.navbar-toggle').click(function () {
                    $('.main-menu').toggleClass('show');
                });

                $('.main-menu a').click(function () {
                    $('.main-menu').removeClass('show');
                });
            });

            $(window).on("scroll", function () {
                checkScrollPosition();
            });

            $('#tmNavbar a').click(function () {
                $('#tmNavbar').collapse('hide');
            });

        </script>             

    </body>
</html>