<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon-32x32.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <title>Smoleac Mihai Portfolio</title>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <?php
        include "./components/NavBar.component.php";
        echo NavBar();
    ?> 
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Feel interested ? Why don't send me a email and we can discuss how can we be usefull for each other.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Smoleac Mihai</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Adress</div>
                                <div class="sub-title">Moldova, Bălți</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">mihaismoleac2002@gmail.com</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-phone-alt"></i>
                            <div class="info">
                                <div class="head">Tel.</div>
                                <div class="sub-title">+(373)67584839</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="handleFormSubmit.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" name="name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" name="email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" name="subject" required>
                        </div>
                        <div class="field textArea">
                            <textarea cols="30" rows="10" placeholder="Describe project.." name="message" required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Send message</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer>
        <span>Created By Smoleac Mihai | <span class="far fa-copyright"></span>2022 All rights reserved.</span>
    </footer>
    <?php
        
    ?>
<script src="assets/js/script.js"></script>
</body>
</html>