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
    <!-- Home -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-hello">Hello, my name is</div>
                <div class="text-name">Smoleac Mihai</div>
                <div class="text-can">And I can <span class="typing"></span></div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>
    
    <!-- Services -->
    <!-- <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Design</div>
                        <p>Using Figma and other programs I am able to bring your design to life, by giving it shape and forms.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Analyse</div>
                        <p>I can analyse any code or program and find an effective solution that will make everyone happy.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Code</div>
                        <p>Coding is one of my earliest hobby, I like doing it for fun and I think I can do it for you too.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My skills & experiences.</div>
                    <p>The first programing language that I learned about was Pascal, because they were teaching it at school, when I learned that it was pretty much useless, except the fact that you learn alghoritmic thinking in there. At the moment I'm studying at the USARB university, and developing as a programer.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>80%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>50%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>0%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>0%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Python</span>
                            <span>15%</span>
                        </div>
                        <div class="line py"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team" id="team">
        <div class="max-width">
            <h2 class="title">My Team</h2>
            <div class="carousel owl-carousel">
                  <div class="card">
                    <div class="box">
                         <img src="assets/images/profile-1.png" alt="Ilona">
                         <div class="text">Frasiniuc Ilona</div>
                         <p>A proffesional fullstack developer that gets everything done.</p>
                    </div>
                 </div> 
                 <div class="card">
                    <div class="box">
                         <img src="assets/images/profile-2.jpg" alt="Me">
                         <div class="text">Smoleac Mihai</div>
                         <p>Thats me, you probably have already read about me above.</p>
                    </div>
                 </div>
                 <div class="card">
                    <div class="box">
                         <img src="assets/images/profile-3.png" alt="Dima">
                         <div class="text">Cojocari Dmitri</div>
                         <p>Backend developer, that plays chess for a big part of his life.</p>
                    </div>
                 </div>
                 <div class="card">
                    <div class="box">
                         <img src="assets/images/profile-6.png" alt="Dorin">
                         <div class="text">Gavriliță Dorin</div>
                         <p>A professional dietolog that will give you a diet.</p>
                    </div>
                 </div>
                 <div class="card">
                    <div class="box">
                         <img src="assets/images/profile-4.png" alt="Daniel">
                         <div class="text">Golban Daniel</div>
                         <p>Translator of Deutsch language. He knows what he's doing.</p>
                    </div>
                 </div>
                 <div class="card">
                    <div class="box">
                         <img src="assets/images/profile-5.png" alt="Marina">
                         <div class="text">Buinovschi Marina</div>
                         <p>A geography teacher that will improve your mood.</p>
                    </div>
                 </div>
            </div>
        </div>
    </section>
    <section class="projects" id="projects">
        <div class="max-width">
            <h2 class="title">My projects</h2>
            <div class="projects-content">
                <div class="text">1. MenthalCare</div>
                <p>The website that I poresented at university, I choosed this theme because I haved a period in life where my menthal state was in a very bad condition. Thankfully I already passed that period of life.</p>
                <a href="https://menthalcarebootstrap.web.app/index.html">Take a look</a>
                <div class="text">2. OrarUSARB</div>
                <p>This is a website that is supposed to be a evaluation of our skills at university, I made it in one day, so don't judge it, I know it looks bad.</p>
                <a href="https://orarusarb-ac775.web.app/">Take a look</a>
            </div>
        </div>
    </section>
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
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textArea">
                            <textarea cols="30" rows="10" placeholder="Describe project.." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Send message</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
   
    <footer>
        <span>Created By Smoleac Mihai | <span class="far fa-copyright"></span>2022 All rights reserved.</span>
    </footer> -->
<script src="assets/js/script.js"></script>
</body>
</html>