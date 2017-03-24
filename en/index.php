<!DOCTYPE html>
<html>

    <head>
        <title>Marco van Poortvliet</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link type="text/css" rel="stylesheet" href="css/animations.css" />
        <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="google-site-verification" content="msi0IDljkgWpilbJwV3yLL5uLQqu5D5-Gmd7IlALsgI" />
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/init.js"></script>
    </head>

    <body>

        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <div class="container"> <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a> <a href="#top" class="brand-logo black-text">Portfolio</a>
                        <ul class="hide-on-med-and-down right">
                            <li><a href="#overmij">About Me</a></li>
                            <li><a href="#ervaring">Experience</a></li>
                            <li><a href="#projecten">Projects</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="#overmij">About Me</a></li>
            <li><a href="#ervaring">Experience</a></li>
            <li><a href="#projecten">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <div id="top" class="scrollspy parallax-container z-depth-2">
            <div class="parallax"> <img src="img/parallax.jpg"> </div>
            <div class="col l12 center parallax-offset"> <img src="img/photo.jpg" class="profilepic circle responsive-img z-depth-1">
                <h3 class="parallax-name">Marco van Poortvliet</h3>
                <div class="z-depth-1 parallax-title">Software Developer</div>
            </div>
            <div class="col l12 center parallax-offset">
                <a href="https://www.linkedin.com/in/marc0tjevp" target="_blank" class="btn-floating btn-large waves-effect waves white"><i class="fa fa-linkedin"></i></a>
                <a href="#contact" class="btn-floating btn-large waves-effect waves white"><i class="fa fa-envelope-o"></i></a>
                <a href="docs/cv.pdf" target="_blank" class="btn-floating btn-large waves-effect waves white"><i class="fa fa-file-text-o"></i></a> 
                <a href="https://github.com/marc0tjevp" target="_blank" class="btn-floating btn-large waves-effect waves white"><i class="fa fa-github"></i></a>
                <a href="skype:marco.vp" class="btn-floating btn-large waves-effect waves white"><i class="fa fa-skype"></i></a> 
            </div>
            <div class="parallax-offset"></div>
        </div>

        <div id="overmij" class="section scrollspy darkbox">
            <div class="container">
                <div class="section-title center">About me</div>
                <div class="row">
                    <div class="col l6 m6 s12 center">
                        <div class="subtitle">Who am I?</div>					
                        <p>
							My name is Marco van Poortvliet. I'm a student majoring in Software Development who doesn't like standing still. I'm always programming or learning something new. 
							This year I will graduate and start a new study at Avans Hogeschool Breda: information technology.
							
							In my free time I run a small bussiness with <a href="http://giovannikint.nl">Giovanni Kint</a>: Pixl Perfect. This is a pilot to learn more about webdevelopment.
                        </p>
                    </div>
                    <div class="col l6 m6 s12 center">				
                        <div class="subtitle">Skills</div>
                        <p>I have experience with the following languages and frameworks</p>
                        <div class="chip">HTML</div>
                        <div class="chip">CSS</div>
                        <div class="chip">Java</div>
                        <div class="chip">C#</div>
                        <div class="chip">Javascript</div>
                        <div class="chip">LUA</div>
                        <div class="chip">CoffeeScript</div>
                        <div class="chip">SpringMVC</div>
                        <div class="chip">MaterializeCSS</div>
                        <div class="chip">Hibernate</div>
                        <div class="chip">Bootstrap</div>
                        <div class="chip">MySQL</div>
                        <div class="chip">MSSQL</div>
                        <div class="chip">Apache Tomcat</div>
                        <div class="chip">PHP</div>
                        <div class="chip">UML</div>
                        <div class="chip">Bash</div>
                        <div class="chip">Git</div>
                    </div>
                </div>
            </div>
        </div> 

        <div id="ervaring" class="section scrollspy whitebox">
            <div class="container">
                <div class="section-title center">Experience</div>

                <div class="row">

                    <div class="col s12 m12 l6">
                        <div class="card">
                            <div class="card-content grey lighten-4">
                                <div class="row">
                                    <div class="col l3 m4 s4">
                                        <img src="img/scalda.png" class="responsive-img">
                                    </div>
                                    <div class="col l8 m8 s8">
                                        <span class="card-title black-text">Software and Media Development</span>
                                        <p>September 2015 - Now</p>
                                        <p>Scalda College voor Techniek &amp; Design</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l6">

                        <div class="card">
                            <div class="card-content grey lighten-4">
                                <div class="row">
                                    <div class="col l3 m4 s4">
                                        <img src="img/mollerlyceum.png" class="responsive-img">
                                    </div>
                                    <div class="col l8 m8 s8">
                                        <span class="card-title truncate-text black-text">HAVO</span>
                                        <p>September 2012 - June 2015</p>
                                        <p>Mollerlyceum</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col s12 m12 l6">
                        <div class="card">
                            <div class="card-content grey lighten-4">
                                <div class="row">
                                    <div class="col l3 m4 s4">
                                        <img src="img/trust.png" class="responsive-img">
                                    </div>
                                    <div class="col l8 m8 s8">
                                        <span class="card-title black-text">Application Developer Trainee</span>
                                        <p>September 2016 - Now</p>
                                        <p>Trust International B.V.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l6">

                        <div class="card">
                            <div class="card-content grey lighten-4">
                                <div class="row">
                                    <div class="col l3 m4 s4">
                                        <img src="img/pixl2.png" class="responsive-img">
                                    </div>
                                    <div class="col l8 m8 s8">
                                        <span class="card-title truncate-text black-text">Front-End Developer</span>
                                        <p>June 2016 - Now</p>
                                        <p>Pixl Perfect Webdevelopment</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <div id="projecten" class="section scrollspy darkbox">
            <div class="container">
                <div class="section-title center">Projects</div>
                <div class="projectrow row center">
                    <div class="col l3 m6 s12">
                        <div class="hovereffect z-depth-2"> <img class="responsive-img" src="img/pixl.png">
                            <div class="overlay">
                                <h2>Pixl Perfect</h2> <a class="btn-floating white info" href="https://pixlperfect.net" target="_blank"><i class="fa fa-link"></i></a> <a class="btn-floating white info" href="#pixlPerfect"><i class="fa fa-info"></i></a> </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="hovereffect z-depth-2"> <img class="responsive-img" src="img/cars.png">
                            <div class="overlay">
                                <h2>CARS</h2> <a class="btn-floating white info" href="#cars"><i class="fa fa-info"></i></a> </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="hovereffect z-depth-2"> <img class="responsive-img" src="img/eq.jpg">
                            <div class="overlay">
                                <h2>Equirent</h2> <a class="btn-floating white info" href="#equirent"><i class="fa fa-info"></i></a> </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="hovereffect z-depth-2"> <img class="responsive-img" src="img/ak.jpg">
                            <div class="overlay">
                                <h2>Animal Kingdom</h2> <a class="btn-floating white info" href="#animalKingdom"><i class="fa fa-info"></i></a> </div>
                        </div>
                    </div>
                </div>
                <ul class="pagination center">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>
            </div>
        </div>

        <footer id="contact" class="scrollspy page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <div class="footer-title">Contact</div>
                        <?php include 'form.php';?>
                        <div class="mobile-divider"></div>
                    </div>
                    <div class="col l4 offset-l1 s12">
                        <div class="footer-title">Contact Information</div>
                        <p> 
                            <i class="fa fa-map-marker"></i> Ten Ankerweg 14, 4691GW Tholen
                            <br><i class="fa fa-phone"></i> 06 860 008 53
                            <br> <i class="fa fa-skype"></i> Marco.vp
                            <br> <i class="fa fa-envelope"></i> Marc0tjevp@gmail.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container"> Made with <i class="fa fa-coffee" style="margin-left: 8px;"></i> and <i class="fa fa-heart" style="margin-left: 8px;"></i> <a class="grey-text text-lighten-4 right" href="#!">Pixl Perfect Webdevelopment</a> </div>
            </div>
        </footer>

        <!-- Modals -->

        <div id="pixlPerfect" class="modal">
            <div class="modal-content">
                <div class="container">
                    <div class="row">

                        <a class="modal-action modal-close floating btn-flat"><h5>X</h5></a>

                        <div class="col s12 m6">
                            <h4>Pixl Perfect</h4>
                            <p class="light">
                                In de zomervakantie van 2016 hebben <a href="http://giovannikint.nl/">Giovanni Kint</a> en ik dit bedrijf opgericht als pilot. We hebben dit gedaan via de cursus <a href="http://zomerondernemer.nl">ZomerOndernemer</a> gedaan.
                                <br><br>
                                Binnen dit bedrijf maken we websites en webapplicaties voor klanten. Deze klanten zijn vooral kleine bedrijven, ZZP'ers en startende ondernemers.
                            </p>
                            <a class="btn white black-text waves-effect" href="https://pixlperfect.net/" target="_blank">Website bezoeken</a>
                            <a class="btn white black-text waves-effect" href="https://pixlperfect.net/#contact" target="_blank">Contact opnemen</a>
                        </div>
                        <div class="col s12 m6 l6 center">
                            <br>
                            <img class="materialboxed z-depth-2" data-caption="Logo" width="100%" src="img/project/tiles/pixl.png">
                            <br> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="cars" class="modal">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <a class="modal-action modal-close floating btn-flat"><h5>X</h5></a>
                        <h4>CARS</h4>
                    </div>
                </div>
            </div>
        </div>

        <div id="animalKingdom" class="modal">
            <div class="modal-content">

                <div class="container">
                    <div class="row">

                        <a class="modal-action modal-close floating btn-flat"><h5>X</h5></a>

                        <div class="col s12 m6">
                            <h4>Animal Kingdom</h4>
                            <p class="light">Deze opdracht is mijn eerste opdracht, met als doel Java te leren. Het idee is dat je een dierentuin hebt met daarin kooien. Elke kooi bevat een dier. Er zijn ook mensen, die bijvoorbeeld moeten kunnen trouwen. Ook moeten de dieren zich kunnen voortplanten. Deze opdracht duurt het hele jaar, maar ik was 4 maanden eerder klaar. Nadat het Java-gedeelte was afgerond heb ik door middel van SpringMVC een view gemaakt. Hiervoor heb ik me in het Bootstrap Framework verdiept.</p>
                        </div>
                        <div class="col s12 m6 l6 center">
                            <br>
                            <img class="materialboxed z-depth-2" data-caption="Logo" width="100%" src="img/project/photos/ak2.jpg">
                            <br> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 m6 l6 center">
                            <h5>Talen &amp; Frameworks</h5>

                            <br>

                            <div class="chip z-depth-1">
                                <i class="fa fa-coffee" aria-hidden="true"></i> Java
                            </div> 
                            <div class="chip z-depth-1">
                                <i class="fa fa-html5" aria-hidden="true"></i> HTML5
                            </div> 
                            <div class="chip z-depth-1">
                                <i class="fa fa-css3" aria-hidden="true"></i> CSS3
                            </div>
                            <div class="chip z-depth-1">
                                <i class="fa fa-terminal" aria-hidden="true"></i> Javascript
                            </div>
                            <div class="chip z-depth-1">
                                <i class="fa fa-database" aria-hidden="true"></i> MySQL
                            </div>
                            <div class="chip z-depth-1">
                                <i class="fa fa-bold" aria-hidden="true"></i> Bootstrap
                            </div>
                            <div class="chip z-depth-1">
                                <i class="fa fa-code-fork" aria-hidden="true"></i> SpringMVC
                            </div>

                        </div>

                        <div class="col s12 m6 l6 center">
                            <h5>Info</h5>
                            <table class="bordered">
                                <tbody>
                                    <tr>
                                        <td><i class="fa fa-user" aria-hidden="true"></i></td>
                                        <td>Opdrachtgever</td>
                                        <td class="right"><a href="http://scalda.nl/">Scalda Vlissingen<a/></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
                                        <td>Tijdsduur</td>
                                        <td class="right">3 Maanden</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-calendar" aria-hidden="true"></i></td>
                                        <td>Opleverdatum</td>
                                        <td class="right">04-02-2016</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-graduation-cap" aria-hidden="true"></i></td>
                                        <td>Beoordeling</td>
                                        <td class="right">Goed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col s12 center">
                            <h5>Screenshots</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 m6 l3 center"><img class="materialboxed z-depth-2" data-caption="Een voorbeeld van een class in mijn project" width="100%" src="img/project/photos/ak1.png"></div>
                        <div class="col s12 m6 l3 center"><img class="materialboxed z-depth-2" data-caption="Een voorbeeld van een Superclass in mijn project" width="100%" src="img/project/photos/ak3.png"></div>
                        <div class="col s12 m6 l3 center"><img class="materialboxed z-depth-2" data-caption="Animals Overview" width="100%" src="img/project/photos/ak4.png"></div>
                        <div class="col s12 m6 l3 center"><img class="materialboxed z-depth-2" data-caption="Human Properties" width="100%" src="img/project/photos/ak5.png"> </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="equirent" class="modal">
            <div class="modal-content">
                <div class="container">

                    <div class="row">

                        <a class="modal-action modal-close floating btn-flat"><h5>X</h5></a>

                        <div class="col s12 m6">
                            <h4>Equirent</h4>
                            <p class="light">
                                Voorheen werd er in het Technum, een vleugel van Scalda Vlissingen waar machines worden verhuurt, met een aantal Excelsheets gewerkt. 
                                Hierin stonden alle weken van het jaar vermeld, de machines die verhuurd kunnen worden en de uren. 
                                Hier werden de reserveringen geboekt voor het verhuren van machines. 
                                Ook werden er op basis van het totaal aantal uur dat er machines verhuurd zijn kosten berekend. 
                                Voor de avond- en dagbezetting was er een apart document om het overzichtelijk te houden. 
                                Ook hier werden de kosten weer apart berekend, wat dus betekent dat er nog een document nodig was om deze kosten bij elkaar op te tellen. 
                                Aangezien dit in de praktijk steeds meer werk bleek, hebben we op school een applicatie geschreven om dit proces makkelijker te maken.
                            </p>
                        </div>

                        <div class="col s12 m6 l6 center">
                            <img class="materialboxed z-depth-2" data-caption="Logo van de applicatie Equirent" width="100%" src="img/project/tiles/eq.jpg">
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </body>

</html>