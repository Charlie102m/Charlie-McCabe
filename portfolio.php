<?php

include "contact.php";

?>

<html>

<head>
    <!-- required meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Charlie McCabe | Portfolio</title>

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <!-- font awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- custom styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/portfolio.css">


</head>

<body>

    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
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
                        <a id="cvBtn" class="btn btn-primary" data-toggle="modal" data-target="#cv-modal">View CV</a>
                    </li>
                    <!-- contact modal form submission -->
                    <li class="nav-item">
                        <a id="contactBtn" class="btn btn-primary" data-toggle="modal" data-target="#contact-modal">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- page heading section -->
    <div class="header">
        <div class="container">
            <h1 class="display-3">Welcome to my portfolio!</h1>
            <div class="spacer-30"></div>
            <p class="headerText">In my pursuit to learn web development, I have created several websites and javascript apps to test my new found
                skills!
                <br>My prefered stack is APACHE, however I am also in the process of experimenting with node.js.
                <br>I am regularly updating this site with my most recent projects, so be sure to visit often!</p>
            </div>
        </div>
        <div id="errorAlert" class="container"><?php echo $error ?></div>
    <!-- card section -->
    <div class="container">
        <div class="card-columns mainBody">
            <a href="http://www.theglazeyplace.co.uk" target="_blank">
                <div class="card">
                    <img class="card-img-top img-thumbnail" src="assets/images/theglazeyplace.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">The Glazey Place</h5>
                        <p class="card-text">My first commission! The Glazey Place is a vibrant ceramics studio, who required a complete rebuild
                            of their marketing site. I now host and maintain this site with regular content updates.</p>
                    </div>
                </div>
            </a>
            <a href="http://www.click-happy.co.uk" target="_blank">
                <div class="card">
                    <img class="card-img-top img-thumbnail" src="assets/images/clickhappy.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Click Happy</h5>
                        <p class="card-text">A prime opportunity to experiment with my new javascript skills, Click Happy is a teaching resource
                            aimed at aiding child development in Eary Years. There is a strong focus on keeping the iterface
                            clean, simple and very child friendly.</p>
                    </div>
                </div>
            </a>
            <a href="http://www.hubsuite.net" target="_blank">
                <div class="card">
                    <img class="card-img-top img-thumbnail" src="assets/images/hubsuite.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">HubSuite</h5>
                        <p class="card-text">Whether you are looking for PERSONAL, PROFESSIONAL or ENTERPRISE use - HubSuite has the tools for
                            you, all in one place! </p>
                    </div>
                </div>
            </a>
            <a href="https://www.dynamicdesignlabs.com/" target="_blank">
                <div class="card">
                    <img class="card-img-top img-thumbnail" src="assets/images/DDL_logo.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Dynamic Design Labs</h5>
                        <p class="card-text">A clean corporate marketing site template, created with bootstrap 4.</p>
                    </div>
                </div>
            </a>
            <a href="assets/projects/Image Grid/index.html">
                <div class="card">
                    <img class="card-img-top img-thumbnail" src="assets/images/imagegallery.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Image Gallery</h5>
                        <p class="card-text">Not my product concept, however a good template for a simple landing page which I created as part of my e-learning course.</p>
                    </div>
                </div>
            </a>
            <a href="assets/projects/Purrfect/index.html">
                <div class="card">
                    <img class="card-img-top img-thumbnail" src="assets/images/catsite.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Purrfect</h5>
                        <p class="card-text">A template portfolio site I created for the pasionate photographer looking to display their work in a clean and professional format.</p>
                    </div>
                </div>
            </a>
            <a href="assets/projects/Portfolio/portfolio.html">
                <div class="card">
                    <img class="card-img-top img-thumbnail" src="assets/images/photogrid.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Photo Grid</h5>
                        <p class="card-text">Another portfolio site, far more simple without any frameworks, simple HTML &amp; CSS</p>
                    </div>
                </div>
            </a>
            <a href="assets/projects/Colour Game/colour-game.html">
                <div class="card">
                    <img class="card-img-top img-thumbnail" src="assets/images/colourgame.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">RGB Colo(u)r Game</h5>
                        <p class="card-text">An earlier javascript colour game I created as part of my learning. A great exercise for the budding web-developer!</p>
                    </div>
                </div>
            </a>
            <a href="assets/projects/Todo App/index.html">
                <div class="card">
                    <img class="card-img-top img-thumbnail" src="assets/images/todo.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Todo App</h5>
                        <p class="card-text">A simple javascript exercise with the potential to be developed into a full database backed application</p>
                    </div>
                </div>
            </a>
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
                    <iframe src="assets/docs/charlie mccabe cv.pdf#view=FitH" width="100%" style="height:30em"></iframe>
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
                        <input id="input" type="submit" class="btn btn-primary" value="Submit" data-backdrop="static">
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