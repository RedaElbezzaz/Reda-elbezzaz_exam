<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icon -->
    <link rel="icon" href="Images/icon.png" type="image/icon type">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css"/>
    <!-- Bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- css link -->
    <link rel="stylesheet" href="Css/Styles.css">
    <!-- icon -->
    <link rel="icon" href="Images/icon.png" type="image/icon type">

    <title>Portfolio</title>
</head>

<body>
    <header class="header" id="header">
        <div class="col-ld">
            <h1 class="col-md-6" id="h1_name">  <span class="sp-pt"> Portfolio </span> <br> <span class="sp-rd"> REDA EL BEZZAZ </span>
            </h1>
            <img src="Images/redaphoto.png" class="col-lg-1" id="img-prt">
        </div>
    </header>

    <main>
        <ul class="ul">
            <li id="li">
              <a href="#" data-div-id="content-1" onclick="changeDivContent(this)" class="link">Accueil</a>
            </li>
            <li id="li">
              <a href="#" data-div-id="content-2" onclick="changeDivContent(this)" class="link">Mes Realisations</a>
            </li>
            <li id="li">
              <a href="#" data-div-id="content-3" onclick="changeDivContent(this)" class="link">C.V</a>
            </li>
            <li id="li">
              <a href="#" data-div-id="content-4" onclick="changeDivContent(this)" class="link">Contact</a>
            </li>
          </ul>

          
          <div class="cnt" id="content">

            <div id="content-1" class="content-div">

              <div class="div_accueil">

                <p class="text_accueil">
                  Je m'appele Reda El Bezzaz J'ai 20 ans et je suis actuellement en 
                  Licence Proffessionnel en Development Web Et Mobile à 
                  l'Université Ibn Tofail (UIT) .
                </p> 
                <br>
                <p class="text_accueil">
                  Je suis un développeur informatique expérimenté avec une solide 
                  formation en informatique. J'ai une grande expérience dans le 
                  développement de logiciels, y compris la programmation en utilisant 
                  des langages tels que HTML, CSS, JavaScript, PHP, JSP, Servlet, Python,
                  JavaEE, C++, MySQL, Oracle. J'ai travaillé sur de nombreux projets, 
                  allant des applications web aux systèmes d'entreprise en passant 
                  par les jeux vidéo.
                </p>
                <br>
                <div class="img_accueil">
                    <div class="ll1" title="HTML"><img src="Images/HTML.png"></div>
                    <div class="ll1" title="CSS"><img src="Images/Css.png"></div>
                    <div class="ll1" title="JavaScript"><img src="Images/JavaScript.png"></div>
                    <div class="ll1" title="Bootstrap"><img src="Images/Bootstrap.png"></div>
                    <div class="ll1" title="VueJs"><img src="Images/VueJs.png"></div>
                    <div class="ll1" title="ReactJs"><img src="Images/ReactJs.png"></div>
                    <div class="ll1" title="Python"><img src="Images/Python.png"></div>
                    <div class="ll1" title="php"><img src="Images/php.png"></div>
                    <div class="ll1" title="Java"><img src="Images/Java.png"></div>
                    <div class="ll1" title="NodeJs"><img src="Images/NodeJs.png"></div>
                    <div class="ll1" title="C#"><img src="Images/Csharp.png"></div>
                    <div class="ll1" title="Ruby"><img src="Images/Jquery.png"></div>
                    <div class="ll1" title="laravel"><img src="Images/laravel.png"></div> 
                    <div class="ll1" title="Oracle"><img src="Images/oracle.png"></div>
                  
                </div>
            
                
              </div>
              
            </div>

            <div id="content-2" class="content-div" style="display:none">
                <div class="div_real">
                    <ul class="ul">
                      <li id="li">
                        <a href="#" data-div-id="realisations" onclick="changeDivRealisation(this)" class="linkr">Mes Realisations</a>
                      </li>
                      <li>
                        <a href="#" data-div-id="competences" onclick="changeDivRealisation(this)" class="linkr">Mes Competences</a>
                      </li id="li">
                    </ul>
            
                    <div id="realisations" class="cnt1">
                        
                        <h4>Web Developement</h4>
                        

                        <div class="row d-flex justify-content-center">
                            <p class="text_accueil">
                                Ce Project Contient Un site E-Commerce d'un magasin qui vent tour les produits
                                informatique et presisament les Smartphone et les ordinateurs bureau et portable 
                                et voici quelque image de ce projet:
                            </p>
                            <img class="col-md-5" style="border: 1px solid black; border-radius: 10px; height: 300px;"  src="Images/IMG-1.png" alt=""></img>
    
                            <img class="col-md-5" style="border: 1px solid black; border-radius: 10px; height: 300px; margin-left: 10px;"src="Images/IMG-2.png" alt=""></img>
                        </div> 
                        
                        <br><Br>
                        
                        <div class="row d-flex justify-content-center">
                            <p class="text_accueil">
                                Ce Project Contient Un site Meteo d'une ferme que son proprieter veut visualiser
                                les informations de meteo instanner au but d'avoir un bon rendement et voici quelque 
                                image de ce projet:
                            </p>
                            <img class="col-md-5" style="border: 1px solid black; border-radius: 10px; margin-top: 10px; height: 300px;"  src="Images/IMG-5.png" alt=""></img>
    
                            <img class="col-md-5" style="border: 1px solid black; border-radius: 10px; height: 300px; margin-top: 10px; margin-left: 10px;"src="Images/IMG-6.png" alt=""></img>
                        </div>    
                        <br><br>

                        <h4>Software Developement</h4>
                        
                        <div class="row d-flex justify-content-center">
                            <p class="text_accueil">
                                Ces deux project son des application desktop pour la gestion par exemple 
                                gerer un stock d'une pharmacie et une autre de gestion d'entreprise et voici quelque
                                image de ces projets: 
                            </p>
                            <img class="col-md-5" style="border: 1px solid black; border-radius: 10px; height: 300px;"  src="Images/IMG-11.png" alt=""></img>
    
                            <img class="col-md-5" style="border: 1px solid black; border-radius: 10px; height: 300px; margin-left: 10px;"src="Images/IMG-12.jpg" alt=""></img>

                            
                        </div>

                        
                        <br><br>    

                        <h4>Mobile Developement</h4>
                        <div class="row d-flex justify-content-center">
                            <p class="text_accueil">
                                Ce Project Contient Une application mobile qui contient un prototype
                                d'une application boncaire pour les client qui sert a gerer leurs comptes
                                et voici quelque image de ce projet:
                            </p>

                            <img class="col-md-2" style=" border-radius: 10px; height: 300px;"  src="Images/IMG-7.jpg" alt=""></img>
    
                            <img class="col-md-2" style=" border-radius: 10px; height: 300px; margin-left: 10px;"src="Images/IMG-9.jpg" alt=""></img>

                            <img class="col-md-2" style="border-radius: 10px; height: 300px; margin-left: 10px;"src="Images/IMG-10.jpg" alt=""></img>

                        </div>

                    </div>


                    <div id="competences" class="cnt1" style="display:none">
                
                      <p class="text_real">
                        Mes compétences incluent des compétences clés telles que la résolution de problèmes, 
                        la compréhension des exigences des utilisateurs, la capacité à travailler en équipe, 
                        etc.].
                        Je suis également passionné par le développement web, le 
                        développement mobile ou le développement de jeux, etc, et je suis toujours 
                        à la recherche de nouveaux défis et de nouvelles opportunités pour 
                        développer mes compétences.
                      </p>
                
                    </div>
                </div>    
            </div>
            
            <div id="content-3" class="content-div" style="display:none"> 
             <div class="div_accueil" id="CGF">    
        
                <main class="l-main bd-container">
                    <!-- All elements within this div, is generated in PDF -->
                    <div class="resume" id="area-cv">
                        <div class="resume__left">
                            <!-- HOME -->
                            <section class="home" id="home">
                                <div class="home_containter section bd-grid">
                                    <div class="home_data bd-grid">
                                        <img src="Images/redaphoto.png" alt="" class="home_img center">
                                        <h1 class="home_title">Reda ElBezzaz</h1>
                                        <h3 class="home_profession">FullStack Web Developer</h3>
                                        <!-- Button to generate and download the pdf. Available for desktop. -->
                                        <div>
                                            <a download="" href="pdf/Reda-Elbezzaz-Cv.pdf" class="home_button-movil">Download</a>
                                        </div>
                                    </div>
                                    <div class="home_address bd-grid">
                                        <span class="home_information">
                                            <i class="bx bx-map"> &nbsp; </i> Sale, Morocco 
                                        </span>
                                        <span class="home_information">
                                            <i class="bx bx-envelope"> &nbsp; </i> redasala95@gmail.com
                                        </span>
                                        <span class="home_information">
                                            <i class="bx bx-phone"> &nbsp; </i> +212 (0)6 10 23 32 46
                                        </span>
                                    </div>
                                </div>
                                
                                <!-- Theme change button -->
                                <i class="bx bx-moon change-theme" title="Theme" id="theme-button"></i>
                                <!-- Button to generate and download the pdf. Available for desktop -->
                                <i class="bx bx-download generate-pdf" title="Generate PDF" id="resume-button"></i>
                            </section>          
                            
                            <!-- SOCIAL -->
                            <section class="social section">
                                <h2 class="section-title">SOCIAL</h2>
                                <div class="social_container bd-grid">
                                    <a href="https://www.linkedin.com/in/reda_elbezzaz/" target="_blank" class="social_link">
                                        <i class="bx bxl-linkedin-square social_icon"></i> @reda_elbezzaz
                                    </a>
                                    <a href="https://github.com/reda_elbezzaz/" target="_blank" class="social_link">
                                        <i class="bx bxl-github social_icon"></i> @reda_elbezzaz
                                    </a>
                                    <a href="https://twitter.com/reda_elbezzaz" target="_blank" class="social_link">
                                        <i class="bx bxl-twitter social_icon"></i> @reda_elbezzaz
                                    </a>
                                </div>
                            </section>
                            <!-- PROFILE -->
                            <section class="profile section" id="profile">
                                <h2 class="section-title">Profile</h2>
                                <p class="profile_description">
                                    Motivé, Autonome et avec un savoir écouter développé, j’ai une forte 
                                volonté de réussir mon insertion professionnelle dans une entreprise 
                                engagé. Avec passion et diversité, prête à relever les défis et challenges.
        
                                </p>
                            </section>
                            
                            <!-- EDUCATION -->
                            <section class="education section" id="education">
                                <h2 class="section-title">Education</h2>
                                <div class="education_container bd-grid">
                                    <div class="education_content">
                                        <div class="education_time">
                                            <span class="education_rounder"></span>
                                            <span class="education_line"></span>
                                        </div>
                                        <div class="education_data bd-grid">
                                            <h3 class="education_title">License Dév. Web et Mobile</h3>
                                            <span class="education_studies">Université Ibn Tofail</span>
                                            <span class="education_year">2019 - 2020</span>
                                        </div>
                                    </div>
                                    <div class="education_content">
                                        <div class="education_time">
                                            <span class="education_rounder"></span>
                                            <span class="education_line"></span>
                                        </div>
                                        <div class="education_data bd-grid">
                                            <h3 class="education_title">ISTA NTIC HAY RIAD RABAT</h3>
                                            <span class="education_studies">Technicien Spécialisé en 
                                                                    Développement Informatique</span>
                                            <span class="education_year">2020 - 2022</span>
                                        </div>
                                    </div>
                                    <div class="education_content">
                                        <div class="education_time">
                                            <span class="education_rounder"></span>
                                            <!-- <span class="education_line"></span> -->
                                        </div>
                                        <div class="education_data bd-grid">
                                            <h3 class="education_title">Baccalauréat Sciences SVT</h3>
                                            <span class="education_studies">Lycee ABBAS MIFTAH</span>
                                            <span class="education_year">2019 - 2020</span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- SKILLS  -->
                            <section class="skills section" id="skills">
                                <h2 class="section-title">Skills</h2>
                                <div class="skills_content bd-grid">
                                    <ul class="skills_data">
                                        <li class="skills_name">
                                            <span class="skills_circle"></span> HTML
                                        </li>
                                        <li class="skills_name">
                                            <span class="skills_circle"></span> CSS
                                        </li>
                                        <li class="skills_name">
                                            <span class="skills_circle"></span> BOOTSTRAP
                                        </li>
                                        <li class="skills_name">
                                            <span class="skills_circle"></span> JAVASCRIPT
                                        </li>
                                    </ul>
                                    <ul class="skills_data">
                                        <li class="skills_name">
                                            <span class="skills_circle"></span>PHP
                                        </li>
                                        <li class="skills_name">
                                            <span class="skills_circle"></span>MYSQL
                                        </li>
                                        <li class="skills_name">
                                            <span class="skills_circle"></span>LARAVEL
                                        </li>
                                        <li class="skills_name">
                                            <span class="skills_circle"></span>PYTHON
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                        <div class="resume__right">
                            <!-- EXPERIENCE -->
                            <section class="experience section" id="experience">
                                <h2 class="section-title">Experience</h2>
                                <div class="experience_container bd-grid">
                                    <div class="experience_content">
                                        <div class="experience_time">
                                            <span class="experience_rounder"></span>
                                            <span class="experience_line"></span>
                                        </div>
                                        <div class="experience_data bd-grid">
                                            <h3 class="experience_title">Stage chez ECS informatique</h3>
                                            <span class="experience_company">Mars 2022 - Avril 2022 | Développement Informatique </span>
                                            <p class="experience_description">
                                                La société ECS Informatique, créé en 1988,Après avoir acquis de l'expérience, Il dessert ses services partout dans le maroc. il s'est fixée comme objectif d’accompagner les administrations et entreprises dans l’élaboration et le développement de leur système d’information. Elle entend ainsi répondre à leur besoin, les servir au mieux, et créer un véritable partenariat avec sa clientèle.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="experience_content">
                                        <div class="experience_time">
                                            <span class="experience_rounder"></span>
                                            <!-- <span class="experience_line"></span> -->
                                        </div>
                                        <div class="experience_data bd-grid">
                                            <h3 class="experience_title">Stage chez GesTop</h3>
                                            <span class="experience_company">Juillet 2022 - October 2022 | Développement Informatique</span>
                                            <p class="experience_description">
                                            GesTop une entreprise dynamique et innovante dédiée à fournir des produits et services de qualité supérieure à nos clients. Leurs équipe est composée de professionnels hautement qualifiés qui s'engagent à l'excellence.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- CERTIFICATES -->
                            <section class="certificate section" id="certificate">
                                <h2 class="section-title">Certificates</h2>
                                <div class="certificate_container bd-grid">
                                    <div class="certificate_content">
                                        <h3 class="certificate_title">Scrum Foundation Professional - 2023</h3>
                                        <p class="certificate_description">
                                            développé et maintenu par les fondateurs de Scrum - Ken Schwaber et Jeff Sutherland. Il contient la définition de Scrum, y compris les rôles, les événements, les artefacts et les règles qui les lient ensemble.
                                        </p>
                                    </div>
                                    <div class="certificate_content">
                                        <h3 class="certificate_title">Cybersecurity by Cisco - 2022</h3>
                                        <p class="certificate_description">
                                            Concepts et importance de la Cyber Sécurité, Les impacts des différents 
                                            types de cyber-attaques et les techniques pour se protéger des cyber-attaques.
                                        </p>
                                    </div>
                                    <div class="certificate_content">
                                        <h3 class="certificate_title"> Microsoft Office 2016 - 2022</h3>
                                        <p class="certificate_description">
                                            Certificate of Microsoft Office 2016 Specialist by Certiport
                                        </p>
                                    </div>
                                    <div class="certificate_content">
                                        <h3 class="certificate_title">IT Essentials (Essentials informatiques) by Cisco - 2021 </h3>
                                        <p class="certificate_description">
                                            Application des compétences et des procédures pour installer, configurer et dépanner des ordinateurs, des appareils mobiles et des logiciels.
                                        </p>
                                    </div>
                                </div>
                            </section>
                        
                            <!-- LANGUAGES -->
                            <section class="languages section">
                                <h2 class="section-title">Languages</h2>
                                <div class="languages_container">
                                    <ul class="languages_content bd-grid">
                                        <li class="languages_name">
                                            <span class="languages_circle"></span> English | B1
                                        </li>
                                        <li class="languages_name">
                                            <span class="languages_circle"></span> Francais | B2
                                        </li>
                                        <li class="languages_name">
                                            <span class="languages_circle"></span> Arabe | C1
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            
                            <!-- INTERESTS -->
                            <section class="interests section">
                                <h2 class="section-title">Interests</h2>
                                <div class="interests_container bd-grid">
                                    <div class="interests_content">
                                        <i class='bx bx-code-alt interests_icon'></i>
                                        <span class="interests_name">Coding</span>
                                    </div>
                                    <div class="interests_content">
                                        <i class='bx bxs-music interests_icon' ></i>
                                        <span class="interests_name">Music</span>
                                    </div>
                                    <div class="interests_content">
                                        <i class='bx bxs-coffee-togo interests_icon' ></i>
                                        <span class="interests_name">Coffee</span>
                                    </div>
                                    <div class="interests_content">
                                        <i class="bx bxs-plane-alt interests_icon"></i>
                                        <span class="interests_name">Traveling</span>
                                    </div>
                                    <div class="interests_content">
                                        <i class="bx bxs-camera interests_icon "></i>
                                        <span class="interests_name">Photography</span>
                                    </div>
                                    <div class="interests_content">
                                        <i class='bx bx-dumbbell  interests_icon'></i>
                                        <span class="interests_name">GYM</span>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div> 
                           
                </main> 

                <div id="btn-cv">
                    <a id="a-cv" download="" href="pdf/Reda-Elbezzaz-Cv.pdf">Download</a>
                    <a id="a-cv" href="" onclick="printDiv()">Print</a>
                </div>
                

            </div> 



            </div>
            <div id="content-4" class="content-div" style="display:none">
            
                <div id="fh5co-main">
                    <div class="fh5co-narrow-content animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                                    
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-1">
                                            <h1>Send Email</h1>
                                        </div>
                              
                                    </div>
                            <br /><br />
                                    <form action="send.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-12 col-md-offset-1">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-bottom: 15px;">
                                                            <input type="text" class="form-control" placeholder="name" name="name">
                                                        </div>
                                                        <div class="form-group" style="margin-bottom: 15px;">
                                                            <input type="text" class="form-control" placeholder="email" name="email">
                                                        </div>
                                                        <div class="form-group" style="margin-bottom: 15px;">
                                                            <input type="text" class="form-control" placeholder="subject" name="subject">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-bottom: 15px;">
                                                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                                        </div>
                                                        <div class="form-group" style="margin-bottom: 15px;">
                                                        <button type="submit" class="btn btn-primary btn-md" name="send">Send Message</button>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 d-flex justify-content-center">
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3298.098024316744!2d-6.587061784605322!3d34.246042280553624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda759f000000001%3A0xb0f2670fb7c990f7!2sIbn%20Tofail%20University!5e0!3m2!1sen!2sma!4v1674155587436!5m2!1sen!2sma" width="900" height="450" style="border:2px solid grey; margin:50px; border-radius: 10px;"></iframe>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                    </div>

            </div>
        </div>





    </main>

    <footer class="row well" id="ftr">
        <nav class="col-md-6">
            copyright &COPY;
            

        </nav>
        <p class="col-md-6 pull-right text-right">
            <a href="#">me contacter :</a> | <a href="#"></a>
                <a href="https://www.linkedin.com/in/reda_elbezzaz/" target="_blank" class="social_link">
                    <i class="bx bxl-linkedin-square social_icon"></i> @reda_elbezzaz
                </a>
                <a href="https://github.com/reda_elbezzaz/" target="_blank" class="social_link">
                    <i class="bx bxl-github social_icon"></i> @reda_elbezzaz
                </a>
                <a href="https://twitter.com/reda_elbezzaz" target="_blank" class="social_link">
                    <i class="bx bxl-twitter social_icon"></i> @reda_elbezzaz
                </a>  |
        </p>
    </footer>
</body>


<script src="JavaScript/index.js"></script>
<script src="JavaScript/jquery-3.6.0.js"></script>
<script src="JavaScript/html2pdf.bundle.min.js"></script>
<script>
    function printDiv() {
        var divContents = document.getElementById("CGF").innerHTML;
        var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body > <h1>Div contents are <br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
    }
</script>    
<script>

</script>
</html>
