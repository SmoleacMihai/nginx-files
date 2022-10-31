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
    <section class="gallery" id="gallery">
        <div class="max-width">
            <div class="gallery-content">
                <h1  class="cardTitle">These are some random photoss from my gallery</h1>
                <div class="gallery-grid">
                    <?php 
                        $photosSources=array(
                            "assets/images/childhood.jpg", 
                            "assets/images/cringe.jpg", 
                            "assets/images/dog.jpg", 
                            "assets/images/dropOfWater.jpg", 
                            "assets/images/ily.jpg", 
                            "assets/images/moon.jpg",
                            "assets/images/myLegs.jpg",
                            "assets/images/rain.jpg",
                            "assets/images/sport.jpg"
                        );
                        
                        $photoTitles=array(
                            "A place from the past", 
                            "An ordinary memory", 
                            "A dog that I considered cute", 
                            "The beauty of nature", 
                            "Something that I found", 
                            "The moon is beautiful",
                            "Point of view",
                            "A rainy day",
                            "Me being stuck"
                        );


                        for ($i=0; $i < count($photosSources); $i++) { 
                            echo "
                            <div class=\"card\">
                                <img src=\"".$photosSources[$i]."\" class=\"cardImg\" alt=\"photo but im actually suffering\">
                                <div>".$photoTitles[$i]."</div>
                            </div>";
                        }
                    ?>
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