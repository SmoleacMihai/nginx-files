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
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
              <div class="column left">
                  <img src="assets/images/AboutMihai.svg" alt="Mihai">
              </div>
              <div class="column right">
                <div class="text">I'm Smoleac Mihai and I am a <span class="whoIAm"></span></div>
                <p>I'm a young man from a country called Moldova. From young ages I was interested in electronics, well mostly games, but then I learned about how do you make games, I was astonished from how it all works. I was obsessed with the idea to make a game myself. To code something that others will want to use themselves and enjoy it just like I did.</p>
                <a href="assets/forDownload/cv.docx" download="cv">Download CV</a>
              </div>
            </div>
        </div>
    </section>
    <footer>
        <span>Created By Smoleac Mihai | <span class="far fa-copyright"></span>2022 All rights reserved.</span>
    </footer>
<script src="assets/js/script.js"></script>
</body>
</html>
    
    