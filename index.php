<?php

include "contact.php";

?>

<html>

<head>
    <!-- required meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Charlie McCabe | Aspiring Developer, Lifetime Learner</title>

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <!-- font awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- custom styles -->
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                Charlie McCabe
            </a>
            <!-- data-toggler for mobile site -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- visible content of data-toggler -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- link to portfolio page -->
                    <li class="nav-item">
                        <a class="btn btn-primary" href="portfolio.php">Portfolio</a>
                    </li>
                    <!-- contact modal form submission -->
                    <li class="nav-item">
                        <a id="contactBtn" class="btn btn-primary" data-toggle="modal" data-target="#contact-modal">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="jumbo-txt">
                        <h1 class="display-2">Hi, I'm Charlie!</h1>
                        <p class="text-uppercase">
                            A
                            <strong>determined, resourceful &amp; passionate</strong> web developer
                            <strong>in the making</strong>...</p>
                            <hr class="my-4">
                            <p class="font-weight-bold">Be sure to check out my portfolio!</p>
                            <div class="content-center">
                                <!-- link to portfolio page -->
                                <a class="btn btn-primary btn-lg" href="portfolio.php" role="button">Portfolio</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img id="profile-img" src="assets/images/profile.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="errorAlert" class="container"><?php echo $error ?></div>
    <!-- My Skills Section -->
    <div class="container">
        <h2 class="display-3">Thanks for stopping by my site!
            <i id="code-icon" class="fas fa-code"></i>
        </h2>

        <!-- small code icon -->
        <div class="row">
            <div id="icons-ctn" class="col-md-7">
                <!-- break for formatting -->
                <br>
                <!-- html, css, js, php & node icons -->
                <i class="fab fa-html5"></i>
                <i class="fab fa-css3-alt"></i>
                <i class="fab fa-js-square"></i>
                <i class="fab fa-php"></i>
                <i class="fab fa-node"></i>
            </div>
            <div class="col-md-5">
                <div class="right-ctn">
                    <h3 class="display-4">My Skills</h3>
                    <p id="about-txt">I currently work as a
                        <strong>Product Development Manager</strong>, spending the last year designing and overseeing development
                        of a new SAAS product for the
                        <strong>education sector</strong>.</p>
                    <p>The experience of being the lead architech for this project has been incredibly rewarding and I have
                        been lucky to work with a dedicated team of very talented developers.</p>
                    <p>This role however has produced a new itch which I struggled to scratch, until I started an e-learning
                        course on Web Development.</p>
                </div>
            </div>
        </div>
        <p>With my last project now complete, I am determined to move away from my project management role and into the shoes
            of a web-developer, with a company who are keen to invest their time in
            <strong>passionate people with a willingness to learn!</strong>
        </p>
        <p>I still have a great deal to learn, having made just a handful of marketing websites and javascript based mini-applications,
            however with the right guidance I am determined to become a pivotal member in a forward thinking, driven development
            team.
        </p>
        <div class="content-center">
            <p>If you havent done so already, check out my portfolio here!</p>
            <!-- link to portfolio page -->
            <a class="btn btn-primary btn-lg" href="portfolio.php" role="button">Portfolio</a>
        </div>
        <div class="spacer"></div>
    </div>
    <!-- About Me -->
    <div id="aboutme">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <!-- text content - left collumn -->
                    <h3 class="display-4">About Me</h3>
                    <p>I did not pursue a degree when I reached school leaving age, instead opting the enter the world of work.</p>
                    <p>I have held numerous, varied roles throughout my working life - from hospitality, to sales, business
                        operations and project managment.</p>
                    <p>My passion for technology has always aided me within the workplace. This has lead me to designing marketing
                        materials on
                        <strong>photoshop</strong>, editing &amp; assembling marketing videos in
                        <strong>premiere pro</strong> and becoming the go to person for all the office's
                        <strong>excel</strong> needs!</p>
                    <p>When I am not working or studying, I enjoy long walks with my two border collies, playing guitar and
                        building desktop computers.</p>
                </div>
                <!-- carousel images - right collumn -->
                <div class="col-md-5">
                    <!-- bootstrap default -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!-- img 1 -->
                                <img class="d-block w-100 slide-img" src="assets/images/dogs.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <!-- img 2 -->
                                <img class="d-block w-100 slide-img" src="assets/images/guitar.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <!-- img 2 -->
                                <img class="d-block w-100 slide-img" src="assets/images/pc.jpg" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="ft-text">
                <!-- link to CV modal -->
                <a data-toggle="modal" data-target="#cv-modal">
                    <h3 class="display-4">View Curriculum Vitae</h3>
                </a>
            </div>
            <!-- social media font awesome icons -->
            <div class="ft-icons">
                <!-- facebook -->
                <a href="https://www.facebook.com/charlie101m" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <!-- twitter -->
                <a href="https://twitter.com/charlie102m" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <!-- linkedin -->
                <a href="http://www.linkedin.com/in/charlie-mccabe-22b340146" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- MODALS -->
    <!-- cv modal iframe -->
    <div class="modal fade" id="cv-modal" tabindex="-1" role="dialog" aria-labelledby="cvModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Curriculum Vitae</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- iframe full width of modal - #view=FitH to render pdf full size in iframe -->
                    <iframe src="assets/docs/Charlie McCabe CV.pdf#view=FitH" width="100%" style="height:30em"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- contact modal form -->
    <div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="contactModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Get in touch!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post">
                    <div class="modal-body">
                        <!-- contact form -->
                            <div class="form-group">
                                
                                <label for="nameInput">Name</label>
                                <input name="name" type="text" class="form-control" id="nameInput" placeholder="Your name...">
                                <label for="emailInput">Email</label>
                                <input name="email" type="email" class="form-control" id="emailInput" placeholder="Your email...">
                                <label for="subjectInput">Subject</label>
                                <input name="subject" type="text" class="form-control" id="subjectInput" placeholder="Please call me about...">
                                <label for="messageInput">Message</label>
                                <textarea name="message" class="form-control" id="messageInput" rows="5"></textarea>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sec" data-dismiss="modal">Close</button>
                        <input id="submit" type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/validation.js"></script>
</body>

</html>