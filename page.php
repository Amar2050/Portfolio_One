 <main onclick="closingNav()">  
        <!-- About -->
        <article id="about"   class="container m-auto pb-5 pt-5 mt-5 mb-5">
            <h2  class="text-center pt-5 pb-5 mt-5 mb-3">Qui suis-je ?</h2>
            <p class="text-center"><strong>Développeur web</strong> vivant à <strong>Marseille</strong>, dynamique et ambitieux, travaillons ensemble
                dès aujourd'hui !
            </p>
            <br>      
            <!-- Nav Tabs -->
                <ul class="nav nav-tabs d-flex justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active  text-danger" data-toggle="tab" href="#personnal">Hard & Soft Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" data-toggle="tab" href="#technos">Technos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-danger" data-toggle="tab" href="#langages">Langages</a>
                    </li>
                </ul>   
            <!-- Tab Panes -->
                <div class="tab-content pt-3 pb-3">      
                    <div id="personnal" class="container active tab-pane text-center correctionMargin"><br>
                        <h5 class="text-center">Hard Skills</h5>
                        <p><i class="fas fa-award text-info"></i> Titre Professionnel Nationale Niveau 3 (BTS/BAC+2) en tant
                        Developpeur web et web mobile Full Stack <br>+<br>Autodidaxie : Youtube, Udemy, Sololearn, OpenClassRooms...
                        <br><i class="fas fa-award text-info"></i> Certificats Obtenus 
                        <br>(visibles sur Linkedin <a href="https://www.linkedin.com/in/amar-boutayeb-920369177/" target="_blank"><i class="fab fa-linkedin"></i></a>)
                        </p>
                        <h5 class="text-center">Soft Skills</h5>
                        <ul>
                            <li class="list-group-item listBW">Bon communicant avec sens du relationnel</li>
                            <li class="list-group-item listBW">Bilingue Anglais</li>
                            <li class="list-group-item listBW">Capacité à résoudre des problèmes</li>
                            <li class="list-group-item listBW">Néophile & Curieux</li>
                            <li class="list-group-item listBW">Imaginatif & Créatif</li>
                            <li class="list-group-item listBW">Autodidacte</li>
                            <li class="list-group-item listBW">Téléportation <i class="far fa-smile-wink"></i></li>
                        </ul>
                    </div>

                    <div id="technos" class="container tab-pane text-center"><br>
                        <ul>
                            <li class="list-group-item listBW"><i class="fab fa-git-square"> GIT</i></li>
                            <li class="list-group-item listBW"><i class="fab fa-wordpress"> WordPress</i> </li>
                            <li class="list-group-item listBW"><i class="fab fa-symfony"> Symfony 4</i></li>
                            <li class="list-group-item listBW"><i class="fab fa-bootstrap"> Bootstrap</i></li>
                        </ul>
                    </div>
                    
                    <div id="langages" class="container tab-pane text-center"><br>
                        <ul>
                            <li class="list-group-item listBW">HTML</li>
                            <li class="list-group-item listBW">CSS</li>
                            <li class="list-group-item listBW">Javascript</li>
                            <li class="list-group-item listBW">PhP</li>
                            <li class="list-group-item listBW">SQL</li>
                        </ul>
                    </div>        
                </div>
        </article>        
        <!-- End About -->

        <!-- Projects -->
            <div id="projects" class=" project-bg bg-danger mt-5 mb-5 pb-2 pt-2 d-flex justify-content-center align-item-center">
                    <!-- Div border and responsive -->
                    <div class=" border rounded shadow pb-5 pt-5 mt-0 col-12 col-sm-10 col-md-7 col-lg-6 col-xl-5 m-auto bg-primary">
                        <h2 class="text-white text-center mb-5">Mes Réalisations</h2>
                        <!-- Carousel Projects picture -->
                        <div >
                            <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselCaptions" data-slide-to="1"></li>
                                    <li data-target="#carouselCaptions" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="./assets/img/betassetscreen.png" class="d-block w-100" alt="bet asset screenshot">
                                        <div class="carousel-caption text-danger bg-dark grow">
                                            <!-- Button trigger modal -->
                                            <a data-toggle="modal" data-target="#betassetModal">
                                                <h3 class="text-white">BET ASSET</h3>
                                                <p class="text-white">WordPress <i class="fas fa-search text-success"></i></p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/img/portfolioscreen.jpg" class="d-block w-100" alt="this website screenshot">
                                        <div class="carousel-caption text-danger bg-dark grow">
                                            <!-- Button trigger modal -->
                                            <a data-toggle="modal" data-target="#portfolioModal">
                                                <h3 class="text-white">Mon Portfolio</h3>
                                                <p class="text-white">From Scratch <i class="fas fa-search text-success"></i></p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./assets/img/symfony.jpg" class="d-block w-100" alt="symfony logo">
                                        <div class="carousel-caption text-danger bg-dark grow">
                                            <!-- Button trigger modal -->
                                            <a data-toggle="modal" data-target="#personalModal">
                                                <h3 class="text-white">Projets Symfony</h3>
                                                <p class="text-white">Symfony 4 <i class="fas fa-search text-success"></i></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Bet Asset-->
                    <div class="modal" id="betassetModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="betassetModalCenteredLabel">BET ASSET</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Projet: Développement du site web et web mobile BET ASSET</p>
                                    <ul>
                                        <li>Accompagnement client</li>
                                        <li>Maquettage d’application</li>
                                        <li>Elaboration d’une interface web et web mobile adaptable et dynamique</li>
                                        <li>Réalisation d’un thème sur mesure, sur une solution de gestion de contenu (CMS)</li>
                                        <li>Hébergement et mise en ligne</li>
                                        <li>Configuration et mise en place des composants de sécurité</li>
                                        <li>Initiation du client a l’interface back office et à l’administration de son application web</li>
                                    </ul>
                                    
                                    <p>Environnement technique :</p>
                                    <p>Langages:</p>
                                    <ul>
                                        <li>HTML5</li>
                                        <li>CSS3</li>
                                        <li>JavaScript</li>
                                        <li>PHP</li>
                                    </ul>
                                    <p>Framework, CMS : Bootstrap, WordPress</p>
                                    <p>Wamp Server(Apache , Php, PhpMyAdmin)</p>
                                    <a href="https://www.bet-asset.fr/" target="_blank">Rendu : www.bet-asset.fr</a>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal My Portfolio-->
                    <div class="modal" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="portfolioModalCenteredLabel">Mon Portfolio</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Projet: Réalisation de mon portfolio from scratch</p>
                                    <ul>
                                        <li>Mise en place d’un formulaire de contact et de sa sécurisation</li>
                                        <li>Utilisation d’un client FTP (Filezilla)</li>
                                        <li>Design Mobile first</li>
                                        <li>Solution responsive optimale: Panneau, Modale, Caroussel...</li>
                                        <li>Press F12 and check this out <i class="far fa-grin-alt"></i></li>
                                    </ul>
                                    <p>Environnement technique :</p>
                                    <p>Langages:</p>
                                    <ul>
                                        <li>HTML5</li>
                                        <li>CSS3</li>
                                        <li>JavaScript</li>
                                        <li>PHP</li>
                                    </ul>
                                    <p>Framework, CMS : Bootstrap(CDN)</p>
                                    <p>Wamp Server(Apache , Php, PhpMyAdmin)</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Personnal Projects-->
                    <div class="modal" id="personalModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="personalModalCenteredLabel">Projets Symfony</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <p>Projet d'introduction: Réalisation d’une ébauche (html sans css) d’un réseau social/blog coté backend from scratch</p>
                                <ul>
                                    <li>Réalisation d’une fonction de login</li>
                                    <li>Protection de pages via login et redirections afin de simuler des pages protéger</li>
                                    <li>Architecture MVC</li>
                                    <li>Application de POO pour la création d’utilisateurs notamment</li>
                                    <li>Hébergement et mise en ligne</li>
                                    <li>Gestion des sessions et cookies pour les reconnexions automatiques via cookies et alertes contextuelles</li>
                                </ul>
                                <p>Projet: Réalisation d’un blog sous Symfony</p>
                                <ul>
                                    <li>Module Security, sécurisation des utilisateurs et encryptage mot de passe (b-crypt)</li>
                                    <li>ORM Doctrine, création des tables en bdd et relations via CLI (Command Line Interface)</li>
                                    <li>Architecture MVC plus élaborée</li>
                                    <li>Utilisation de fixtures pour générer des jeux de fausses données</li>
                                    <li>Découverte du langage TWIG pour la vue</li>
                                    <li>Gestion des scripts de migrations</li>
                                </ul>
                                <p>Projet: Réalisation d’un site style AirBnB (hôtellerie)</p>
                                <ul>
                                    <li>Réalisation d’une interface back-office (plateforme d’administration)</li>
                                    <li>Formulaires imbriqués</li>
                                    <li>DQL (requêtes sur objets Doctrine)</li>
                                    <li>WebPack Encore Symfony (Webpack, modules avec dépendances vers ‘static assets’)</li>
                                    <li>Avis client, système de notation</li>
                                    <li>Calendrier de réservation dynamique</li>
                                </ul>
                                
                                <p>Environnement technique :</p>
                                <p>Langages:</p>
                                <ul>
                                    <li>HTML5</li>
                                    <li>CSS3</li>
                                    <li>JavaScript</li>
                                    <li>TWIG</li>
                                    <li>PHP</li>
                                    <li>SQL</li>
                                    <li>DQL</li>

                                </ul>
                                <p>Framework, CMS : Bootstrap, Symfony</p>
                                <p>Wamp Server(Apache , Php, PhpMyAdmin)</p>
                                <p>Projects en local, repositories sur GitHub</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        <!-- End Projects -->

    