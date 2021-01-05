<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="css/style.css">

    <title>Portfolio</title>
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary" role="navigation">
            <a class="navbar-brand" href="#"><h1 id="logo">RB</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#index">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#competence">Compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cv">CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projets">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#veille">Veille Technologique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    
    <div class="slide parallax" id="index">
        <div class="anim ligne1" data-movex="50" data-movey="50"></div>
        <div class="anim ligne2" data-movex="40" data-movey="40"></div>
        <div class="anim ligne3" data-movex="30" data-movey="30"></div>
        <div class="anim cercle1" data-movex="20" data-movey="20"></div>
        <div class="anim cercle2" data-movex="10" data-movey="10"></div>
     
        <div class="container">
            <div class="alert alert-light text-center shadow">
                <div class="row">
                    <div class="col">
                        <img src="https://picsum.photos/300/300" class="rounded-circle " alt="Lorem picsum">
                    </div>
                    <div class="col text">
                        <h1 class="display-3 mt-2 text-dark">Bonjour,</h1>
                        <p class="lead text-dark">Je m'appelle Romuald Blondiaux</p>
                        <p class="lead text-dark">Je suis des cours pour devenir</p>
                        <h1 class="text-dark">Web Developer</h1>
                    </div>
                </div>
            </div> 
        </div>             
    </div>

    <div class="slide2" id="competence">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="card bg-light mb-3 shadow">
                        <div class="card-header bg-primary text-center">
                            <h3>Compétences web et design</h3>
                        </div>
                        <div class="card-body"> 
                            <ul class="ml-4" id="app">

                                <div class="row justify-content-between">
                                    <div class="col-12 col-md-3">
                                        <li class="competence" v-for="competence in filter1" :key="competence.name">{{competence.name}}
                                            <ul>
                                                <li class="ml-4" v-for="children in competence.children">{{children.name}}
                                                    <ul>
                                                        <li class="ml-4" v-for="childrens in children.childrens">{{childrens.name}}</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </div>

                                    <div class="col-12 col-md-5">
                                        <li class="competence" v-for="competence in filter2" :key="competence.name">{{competence.name}}
                                            <ul>
                                                <li class="ml-4" v-for="children in competence.children">{{children.name}}
                                                    <ul>
                                                        <li class="ml-4" v-for="childrens in children.childrens">{{childrens.name}}</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <li class="competence" v-for="competence in filter3" :key="competence.name">{{competence.name}}
                                            <ul>
                                                <li class="ml-4" v-for="children in competence.children">{{children.name}}
                                                    <ul>
                                                        <li class="ml-4" v-for="childrens in children.childrens">{{childrens.name}}</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </div>   
                                </div>
                            </ul>                    
                        </div>
                    </div>
                </div>   
            </div>
        </div>   
    </div>

    <div class="slide3" id="cv">
        <div class="container">
            <div class="alert alert-info shadow">
                <h1>Web Developer</h1>  
                <p>Je suis actuellement en seconde année Web developer, je suis ravi de pouvoir mettre mes nouvelles compétences dans le domaine du codage et du développement. je sais aussi bien travaillé seul et en équipe. Résistant au stress, ponctuelle, rigoureux et méthodique sont quelque une des valeurs qui me corresponds parfaitement.</p>
                <div>
                    <h3>Cliquer sur les boutons pour en savoir plus </h3>
                    <button type="button" id="btn1" class="btn btn-primary mb-1">Etudes & Formations</button> 
                    <button type="button" id="btn2" class="btn btn-primary mb-1">Experience</button>
                    <button type="button" id="btn3" class="btn btn-primary mb-1">Connaissances</button>
                    <button type="button" id="btn4" class="btn btn-primary mb-1">Langues</button>
                    <button type="button" id="btn5" class="btn btn-primary mb-1">Personalité</button>
                    <button type="button" id="btn6" class="btn btn-primary mb-1">Loisirs</button>
                    <button type="button" id="btn7" class="btn btn-primary mb-1">Permis</button>
                </div>
                
            </div>

            <div class="row">
                <div class="col-lg-7 mb-3"> 
                    <div class="alert alert-info shadow" id="view1">
                        <h3><i class="fas fa-folder-open"></i>Etudes & Formations</h3>
                            <ul id="info1">
                                <li>
                                    <p>Formation 2019 - 2021</p>
                                    <p>Cours EPSE de Web developer</p>
                                </li>
                                <li>
                                    <p>Formation 2012 - 2023</p>
                                    <p>Cours EPSE de bureautique, photoshop CS6 et Office 2010</p>
                                </li>
                                <li>
                                    <p>Etudes 1995 - 1996</p>
                                    <p>Diplôme CESS option : Electromécanique + Qualification</p>
                                </li>
                            </ul>
                    </div>

                    <div class="alert alert-info shadow">
                        <h3><i class="fab fa-usb"></i>Experience Professionnelle</h3>
                            <ul id="info2">
                                <li>
                                    <p><span class="underline">M.E.A. :</span> Ouvrier tôlier 2015 - 2018</p>
                                    <p>Création et assemblage de meuble métallique.</p>
                                </li>
                                <li>
                                    <p><span class="underline">P.G.I. SECURITY :</span> Agent de gardiennage 2013 - 2014</p>
                                    <p>Contrôle d'acces et surveillance sur chantier.</p>
                                </li>
                                <li>
                                    <p><span class="underline">B POST :</span> Facteur 2011</p>
                                    <p>Distribution du courrier, colis et journaux.</p>
                                </li>
                                <li>
                                    <p><span class="underline">G BLOCK :</span> Ouvrier tôlier 2011</p>
                                    <p>fabrication de porte coupe feu en métal.</p>
                                </li>
                                <li>
                                    <p><span class="underline">REMYTOLE S.A. :</span> Ouvrier plieur 2007 - 2011</p>
                                    <p>Opérateur sur presse plieuse, cariste et ouvrier de maintenance.</p>
                                </li>
                                <li>
                                    <p><span class="underline">M.E.A. :</span> Ouvrier tôlier 2001- 2006</p>
                                    <p>Création et assemblage de meuble métallique.</p>
                                </li>
                                <li>
                                    <p><span class="underline">SECURIS :</span> Agent de gardiennage 2000</p>
                                    <p>Contrôle d'acces et surveillance sur batiments public et privé.</p>
                                </li>
                                <li>
                                    <p><span class="underline">C.M.I. :</span> Ouvrier 1999 - 2000</p>
                                    <p>Remise en etat de la basse et haute tension sur les locomotives.</p>
                                </li>
                                <li>
                                    <p><span class="underline">A.C.V. :</span> Ouvrier 1997 - 1999</p>
                                    <p>Cisaillage et préparation des pièces pour assemblage de chaudière.</p>
                                </li>
                                <li>
                                    <p><span class="underline">DIAMANT BOART :</span>Ouvrier 1996 - 1997</p>
                                    <p>Fabrication de disque diamant et contrôle qualité.</p>
                                </li>
                            </ul>
                    </div>
                </div>
                
                <div class="col">
                    <div class="alert alert-info shadow">
                        <h3><i class="fas fa-save"></i>Connaissances informatiques</h3>
                        <ul id="info3">
                            <li>
                                <div class="row">
                                    <div class="col"><p>Windows 10 : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col"><p>Office 365 : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="far fa-circle"></i></div>
                                </div>                              
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col"><p> Photoshop CC 2019 : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="far fa-circle"></i><i class="far fa-circle"></i><i class="far fa-circle"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col"><p> Programation web : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="far fa-circle"></i><i class="far fa-circle"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col"><p> Design : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="far fa-circle"></i><i class="far fa-circle"></i></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="alert alert-info shadow">
                        <h3><i class="fas fa-globe"></i>Langues</h3>
                        <ul id="info4">
                            <li>
                                <div class="row">
                                    <div class="col"><p>Français : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="far fa-circle"></i></div>
                                </div> 
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col"><p>Anglais : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="far fa-circle"></i><i class="far fa-circle"></i><i class="far fa-circle"></i></div>
                                </div>    
                            </li>
                        </ul>
                    </div>
                    <div class="alert alert-info shadow">
                        <h3><i class="fas fa-comment-alt"></i>Personalité</h3>
                        <ul id="info5">
                            <li>
                                <div class="row">
                                    <div class="col"><p>Serviable : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i></div>
                                </div>     
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col"><p>Ponctuelle : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i></div>
                                </div>     
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col"><p>Curieux : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="far fa-circle"></i></div>
                                </div>     
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col"><p>Créatif : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="far fa-circle"></i></div>
                                </div>     
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col"><p>Contientieux : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="far fa-circle"></i><i class="far fa-circle"></i></div>
                                </div>     
                            </li>
                        </ul>
                    </div>
                    <div class="alert alert-info shadow">
                        <h3><i class="fas fa-icons"></i>Loisirs</h3>
                        <ul id="info6">
                            <li>
                                <div class="row">
                                    <div class="col"><p>Informatique : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i></div>
                                </div>     
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col"><p>Musique : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="far fa-circle"></i></div>
                                </div>    
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col"><p>Cinéma : </p></div>
                                    <div class="col"><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="far fa-circle"></i></div>
                                </div>    
                            </li>
                        </ul>
                    </div>
                    <div class="alert alert-info shadow">
                        <h3><i class="fas fa-car"></i>Permis</h3>
                        <ul id="info7">
                            <li>
                                <div class="row">
                                    <div class="col"><p>Type B + Vehicule.</p></div>
                                </div>     
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide4" id="projets">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="galleriePhoto alert alert-info">
                        <div class="projet mb-3">
                            <h2>Symfony Immo Loc</h2>
                        </div>
                        <div class="gallery owl-carousel">
                            <div class="image"><img class="imgSmall" src="images/ImmoLoc/ImmoLoc - Homepage.png" alt=""></div>
                            <div class="image"><img class="imgSmall" src="images/ImmoLoc/ImmoLoc - Nos annonces.png" alt=""></div>
                            <div class="image"><img class="imgSmall" src="images/ImmoLoc/ImmoLoc - Annonce detail.png" alt=""></div> 
                        </div>
                        <div class="legende mt-3">
                            <p>Projet pour classe sur Symfony</p> 
                            <ul>
                                <li class="ml-5">creation d'une bdd pour la location de chambre d'hôtes.</li>
                                <li class="ml-5">Responsive et utilisation de bootstrap.</li>
                            </ul>
                        </div>
                        <div class="btn btn-primary styleB"><a href="https://github.com/romualdblondiaux/immoloc">Lien Git</a></div>         
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="galleriePhoto alert alert-info">
                        <div class="projet mb-3">
                            <h2>Symfony Garage</h2>
                        </div>
                        <div class="gallery owl-carousel">
                            <div class="image"><img class="imgSmall" src="images/garage/Mon Garage-Homepage.png" alt=""></div>
                            <div class="image"><img class="imgSmall" src="images/garage/Mon Garage-ventes.png" alt=""></div>
                            <div class="image"><img class="imgSmall" src="images/garage/Mon Garage-Création.png" alt=""></div> 
                            <div class="image"><img class="imgSmall" src="images/garage/Mon Garage-Annonce.png" alt=""></div>
                        </div>
                        <div class="legende mt-3">
                            <p>Projet pour examen de Symfony</p> 
                            <ul>
                                <li class="ml-5">creation d'une bdd pour la vente de voiture.</li>
                                <li class="ml-5">Responsive et utilisation de bootstrap.</li>
                            </ul>
                        </div>
                        <div class="btn btn-primary styleB"><a href="https://github.com/romualdblondiaux/Garage">Lien Git</a></div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="galleriePhoto alert alert-info">
                        <div class="projet mb-3">
                            <h2>Examen 1er Année</h2>
                        </div>
                        <div class="gallery owl-carousel">
                            <div class="image"><img class="imgSmall" src="images/Festival/Examen-Home.jpg" alt=""></div>
                            <div class="image"><img class="imgSmall" src="images/Festival/Examen-Info.png" alt=""></div>
                            <div class="image"><img class="imgSmall" src="images/Festival/Examen-DJ.png" alt=""></div> 
                            <div class="image"><img class="imgSmall" src="images/Festival/Examen-Live.png" alt=""></div>
                            <div class="image"><img class="imgSmall" src="images/Festival/Examen-Contact.png" alt=""></div>
                        </div>
                        <div class="legende mt-3">
                            <p>Projet pour examen de Web Statique</p> 
                            <ul>
                                <li class="ml-5">creation d'un site de festival.</li>
                                <li class="ml-5">Responsive pour tablette et smatphone.</li>
                                <li class="ml-5">utilisation de HTML5 & CSS3.</li>
                            </ul>
                        </div>
                        <div class="btn btn-primary styleB"><a href="https://github.com/romualdblondiaux/Exam-2019-2020-Festival">Lien Git</a></div>
                        <div class="btn btn-primary styleB"><a href="https://romuald.webdevepse.be">Lien Web</a></div>
                        
                    </div>
                </div>
            </div>
        </div> 
        
        <div id="overlay"></div>
        <div id="overlayContent">
            <div>
                <img  id="imgBig" src="" alt="" width="1000" />
            </div>
            <h5 class="InfoZoom text-white">clic sur l'image pour la fermer</h5>
        </div>
    </div> 
    
    <div class="slide5" id="veille">
        <div class="container">
            <div class="col-12 mb-5">
                <H1 class="text-white">Projet de ma veille technologique</H1>
            </div>
            
            <div class="row align-items-center">
                <div class="col-12  col-md-5">
                    <div class="versus mt-1" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"><img src="images/Veille/symfony.png" alt=""></div>
                </div>
                <div class="col-12 col-md-2">
                    <H1 class="versusText mt-1">OU</H1>
                </div>
                <div class="col-12 col-md-5" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
                    <div class="versus mt-1"><img src="images/Veille/php8.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide6 fond" id="contact">
        <div class="anim ligne4"></div>
        <div class="anim ligne5"></div>
        <div class="anim ligne6"></div>
        <div class="anim cercle3"></div>
        <div class="anim cercle4"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="maps mt-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2527.365151104142!2d4.038142715716515!3d50.69460807950978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3b17e4d9c19a3%3A0x79487af9539a14ac!2sRue%20du%20Cur%C3%A9%2013%2C%207850%20Enghien!5e0!3m2!1sfr!2sbe!4v1609293083697!5m2!1sfr!2sbe" width="100%" height="400px" frameborder="0" style="box-shadow:10px 10px 20px black" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="contact bg-white mt-3">
                        <h1 class="pl-3 pt-3 titre">Contact :</h1>
                        <div id="app3">
                            <p class="pl-3" v-for="(value, name) in object">
                          <strong>{{name }}:</strong> {{ value }}.
                            </p>
                            <p class="style pl-3"><i class="fas fa-envelope"></i><a href="mailto:romuald.blondiaux@gmail.com">Contactez-moi</a></p>
                        
                            <p class="style pl-3"><i class="fab fa-git-square"></i><a href="https://github.com/romualdblondiaux">Mon Git</a></p>
                        </div>    
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <footer>
        <div class="footer bg-primary">
            <p>Romuald Blondiaux &copy EPSE 2020/2021</p>  
        </div>  
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/javascript.js"></script>
</body>
</html>