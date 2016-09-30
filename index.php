<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Alessandro <br> Casale Romei</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">HOME</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">ABOUT</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">CONTACT</a>
                    </li>
                    <li>
                        <a href="#">|</a>
                    </li>
                     <li>
                        <a href="#" class="header-footer-social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                     <li>
                        <a href="#" class="header-footer-social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                     <li>
                        <a href="#" class="header-footer-social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">Hello</div>
                <div class="intro-lead-in">Hello I am Alessandro Casale Romei. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
                <a href="#services" class="page-scroll btn btn-xl">Contact</a>
            </div>
        </div>
    </header>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="img/team/4.png" class="img-responsive img-circle" alt="">
                    </div>
                </div>
                <div class="col-md-8 about-me">
                <h2 class="aboutme-align col-md-4 ">About me</h2>
                    <p class="large text-muted about-text_position col-md-10 about-me">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-left">
                    <h2 class="section-heading">Contact</h2>
                    <p class="contact-us_footer">If you like me and my work get in touch and tell me about your next project. I'll reply as soon as possible and I hope it will be a real challenge.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Your Name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                                <div class="col-md-4">
                                    <input type="email" class="form-control" placeholder="Your Email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block"></p>
                                </div>
                                <div class="col-md-4">
                                    <input type="tel" class="form-control" placeholder="Your Phone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block"></p>
                                </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center" style="text-align: left;">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <ul class="more-info_footer">
                        <li><p>Complete Name: Alessandro Cassele Romei</p></li>
                        <li><p>Email: alessandro@gmail.com</p></li>
                        <li><p>Phone: 971 23 233 2345</p></li>
                        <li><p>Home Adress: Great Street, No 6, Dubai</p></li>
                    </ul>
                     <ul class="list-inline more-ingo-footer-inline">
                        <li>
                        <a href="#" class="header-footer-social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                     <li>
                        <a href="#" class="header-footer-social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                     <li>
                        <a href="#" class="header-footer-social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Emirates Graphics 2016</span>
                </div>
                <div class="col-md-4">
                   
                </div>
                <div class="col-md-4">
                     <ul class="list-inline social-footer_logo1">
                        <li>
                        <a href="#" class="header-footer-social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                     <li>
                        <a href="#" class="header-footer-social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                     <li>
                        <a href="#" class="header-footer-social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

 
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
