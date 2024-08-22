<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />


        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio website complete</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Amani</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#project" class="nav__link">Project</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Amani</span><br>Computer Engineer</h1>

                    <a href="#" class="button">Contact</a>
                    <div class="home__social">
                        <a href="" class="home__social-icon"><i class='bx bx-mail-send'></i> <span class="social-text">amanidhaoaudi@gmail.com</span></a>
                        <a href="https://www.linkedin.com/in/amani-dhaouadi-324810236/" class="home__social-icon"><i class='bx bx-phone' ></i> <span class="social-text">Amani Dhaouadi</span></a>
                        <a href="https://github.com/Amanidhaouadi" class="home__social-icon"><i class='bx bxl-github' ></i> <span class="social-text"> Amanidhaouadi</span></a>
                    </div>
    
                </div>

                
                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            <image class="home__blob-img" x="50" y="60" href="assets/img/profilamani.png"/>
                        </g>
                    </svg>
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/amani.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I'am Amani</h2>
                        <p class="about__text">Holder of a Bachelor's degree in Computer Systems Engineering, I am a dedicated, dynamic professional with a passion for innovation and emerging technologies. My portfolio showcases my academic journey, emphasizing skills such as the design and development of computer systems, proficiency in programming languages, solving complex problems, and optimizing application performance. Noteworthy among my accomplishments is a capstone project illustrating my commitment to excellence. Explore my portfolio to delve into my academic and personal projects, reflecting my versatility and eagerness to contribute to innovative endeavors. Driven by a passion for tackling technical challenges, I am open to new opportunities and collaborations. Feel free to reach out to learn more about my background and explore potential collaborations.
                        </p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">I'm skilled in C, Python, Java, Android Studio for mobile app development, and hardware platforms like Arduino Uno, ESP32, ESP32 CAM, STM32, and FPGA. Proficient in Edge Impulse for machine learning tasks and experienced with cloud computing using Microsoft Azure.</p>
                        <div class="skills__data">
                            <div class="skills__names">
                               
                                <span class="skills__name"> C, Python, Java</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <span class="skills__name">Android Studio</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                
                                <span class="skills__name">Arduino Uno, ESP32,  ESP32 CAM,  STM32, FPGA</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                            
                                <span class="skills__name">Edge Impulse</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                               
                                <span class="skills__name">Microsoft Azure.</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="assets/img/iot.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== project =====-->
            <section class="project section" id="project">
                <h2 class="section-title">Project</h2>

                <div class="project__container bd-grid">
                  
                    <div class="project__project">
                        <h3 class="project__title">Projet Fin d'Année : 'Smart T-Shirt'</h3>
                        <p class="project__description"> Pull intelligent équipé de plusieurs capteurs qui permet au médecin 
                            de contrôler l’état sanitaire du patient à distance.</p>
                    </div>
            
                    
                    <div class="project__project">
                        <h3 class="project__title">Détecteur d'accident</h3>
                        <p class="project__description"> Utilisation d'un détecteur de gaz, un accéléromètres ADXL345, 
                            un module GSM GPRS GPS SIM808 qui fonctionne comme communicateur GSM et récepteur GPS.</p>
                    </div>
            
                   
                     <div class="project__project">
                        <h3 class="project__title">Projet PFE : Lunette intelligente pour aveugles</h3>
                        <p class="project__description">  Création d'un modèle d'apprentissage automatique de détection d'objet              avec l'outil Edge Impulse (TinyML).
                            Détection d'objet avec la carte ESP32 CAM.
                            Synthèse vocale avec la carte ESP32.</p>
                    </div>
            
                </div>
            </section>
            

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <form action="myMessage()" class="contact__form" method="POST">
                        <input type="text" placeholder="Name" class="contact__input" id ="descripttion">
                        <input type="mail" placeholder="Email" class="contact__input" id="mail">
                        <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>
                        <input type="button" value="submit" class="contact__button button" action="myMessage()">
                    </form>
                </div>
            </section>
            <?php
            function myMessage(){
$_serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "messages_bd";
$connection = mysqli_connect($_serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

   if (isset($_POST['messages_bd'])) {
       if (!empty($_POST['mail']) && !empty($_POST['desc'])) {
           $mail = $_POST['mail'];
           $desc = $_POST['desc'];
           $req = $bdd->prepare('INSERT INTO messages_bd (mail, descripttion) VALUES (?, ?)');
           $res = $req->execute([$mail, $desc]);
           if ($res) {
               echo "Data inserted successfully";
           } 
           else {
               echo "Error inserting data";
        }
    }
}
 }
?>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Amani Dhaouadi</p>
            <div class="footer__social">
                <a href="#" class="footer__icon">
                    <i class='bx bxl-facebook'></i>
                    <span class="footer__icon-text">Ame Ni</span>
                </a>
                <a href="#" class="footer__icon">
                    <i class='bx bxl-instagram'></i>
                    <span class="footer__icon-text">amani.3950</span>
                </a>
                <a href="#" class="footer__icon">
                    <i class='bx bxl-linkedin'></i>
                    <span class="footer__icon-text">amani dhaouadi</span>
                </a>
            </div>
        </footer>
        
        


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>

     
    </body>
</html>




