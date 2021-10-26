<!doctype html>
    <html lang = "en" class = "no-js">
        <head>
            <meta charset = "utf-8">
	        <title>Adiz-data | Meilleurs services</title>
            <meta name = "author" content = "Adiz-data">
            <meta name = "keywords" content = "adiz-data">
            <meta name = "description" content = "Le site officiel de la société adiz-data">		
            <meta name = "viewport" content = "width=device-width, initial-scale=1, maximum-scale=1">
            <link rel = "icon" href = "{{asset('images/favicon.png')}}">
            <link rel = "stylesheet" href = "{{asset('css/bootstrap.min.css')}}">
            <link rel = "stylesheet" href = "{{asset('css/font-awesome.css')}}">
            <link rel = "stylesheet" href = "{{asset('js/owl-carousel/owl.carousel.css')}}">
            <link rel = "stylesheet" href = "{{asset('js/owl-carousel/owl.theme.css')}}">
            <link rel = "stylesheet" href = "{{asset('js/owl-carousel/owl.transitions.css')}}">
            <link rel = "stylesheet" href = "{{asset('css/magnific-popup.css')}}">
            <link rel = "stylesheet" href = "{{asset('css/animate.css')}}">
            <link rel = "stylesheet" href = "{{asset('css/etlinefont.css')}}">
            <link rel = "stylesheet" href = "{{asset('css/style.css')}}">
        </head>
        <body  data-spy = "scroll" data-target = "#main-menu">
            <div id = "pageloader">   
                <div class = "loader">
                    <img src = "{{asset('images/progress.gif')}}" alt = 'loader' />
                </div>
            </div>
            <header id = "header">  
			    <div class = "container">
				    <div class = "row">
					    <div class = "col-sm-12">
						    <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#main-menu">
							    <span class = "sr-only">Toggle navigation</span>
								<span class = "fa fa-bars"></span>
								<span class = "icon-bar"></span>
								<span class = "icon-bar"></span>
							</button>
							<div class = "logo-nav">
							    <a href = "{{url('/')}}">
									<span class = "nom-societe">Adiz-data</span>
								</a>
							</div>
							<div class = "clear-toggle"></div>
							<div id = "main-menu" class = "collapse scroll navbar-right">
							    <ul class = "nav">
								    <li class = "active"><a href = "#home">Accueil</a></li>
                                    <li><a href = "#reserver">Réserver en ligne</a></li>
									<li><a href = "#about">à propos</a></li>
                                    <li><a href = "#services">Services</a></li> 
                                    <li><a href = "#history">Obtenir un devis</a></li> 
                                    <li><a href = "#clients">Clients</a></li>
                                    <li><a href = "#contact">Contact</a></li>
                                    <div class = "dropdown">
                                        <li><a href = "#">Plus</a></li>
                                            <div class = "dropdown-content">
                                                <li><a href = "#">Emplois</a></li>
                                                <li><a href = "#">Visites et événnements</a></li>
                                                <li><a href = "#">Blank</a></li>
                                                <li><a href = "{{url('forum')}}">Forum</a></li>
                                                <li><a href = "{{url('membre')}}">Membre</a></li>
                                            </div>
                                    </div>	
                                    <li><a href = "{{url('login')}}">Login</a></li>						    
								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>  
            <section id = "home" class = "home">
                <div class = "slider-overlay"></div>
                <div class = "flexslider">
                    <ul class = "slides scroll">
                        <li class = "first">
                            <div class = "slider-text-wrapper">  
                                <div class = "container">
                                    <div class = "big">ADIZ-DATA : Meilleurs services</div>          
                                    <div class = "small">Des services informatiques <br> <br>intelligents.</div>
                                    <a href = "#works" class = "middle btn btn-white">Nos solutions à votre service</a>
                                </div>       
                            </div>
                            <img src = "{{asset('images/slider/1.jpg')}}" alt = "Slide 1">
                        </li>
                        <li class = "secondary">
                            <div class = "slider-text-wrapper"> 
                                <div class = "container">                       
                                    <div class = "big">ADIZ-DATA : Meilleurs services</div>          
                                    <div class = "small">Des services informatiques <br> <br>intelligents.</div>
                                    <a href = "#works" class = " middle btn btn-white">Nos solutions à votre service</a>
                                </div>
                            </div>
                            <img src = "{{asset('images/slider/2.jpg')}}" alt = "Slide 2">
                        </li>
                        <li class = "third">
                            <div class = "slider-text-wrapper"> 
                                <div class = "container">                              
                                    <div class = "big">ADIZ-DATA : Meilleurs services</div>          
                                    <div class = "small">Des services informatiques <br> <br>intelligents.</div>
                                    <a href = "#works" class = "middle btn btn-white">Nos solutions à votre service</a>
                                </div>
                            </div>
                            <img src = "{{asset('images/slider/3.jpg')}}" alt = "Slide 3">
                        </li>
                    </ul>
                </div>
            </section>  
            <br><br><br><br><br><br>
            <div class = "container">
                    <div class = "row">
                        <div class = "title-box text-center">
                            <h2 class = "title" id = "typo-designer">Rencontrez nos clients</h2>
                        </div>
                        <div class = "post-desc">
                            <h4 class = "personal-title text-center">Des partenariats axés sur la réussite</h4>
                        </div>
                        <div class = "clients-carousel">
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c1.png')}}" alt = "Client 1"/>
                                    </figure>
                                </a>
                            </div>
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c2.png')}}" alt = " Client 2"/>
                                    </figure>
                                </a>
                            </div>
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c3.png')}}" alt = " Client 3"/>
                                    </figure>
                                </a>
                            </div>
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c4.png')}}" alt = " Client 4"/>
                                    </figure>
                                </a>
                            </div>
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c5.png')}}" alt = " Client 5"/>
                                    </figure>
                                </a>
                            </div>
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c6.png')}}" alt = " Client 6"/>
                                    </figure>
                                </a>
                            </div>
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c7.png')}}" alt = "Client 7"/>
                                    </figure>
                                </a>
                            </div>
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c8.png')}}" alt = " Client 8"/>
                                    </figure>
                                </a>
                            </div>
		                </div>
                    </div>
                </div>
            <section id = "reserver" class = "section">
                <div class = "container">
                    <div class = "row">
                        <div class = "title-box text-center">
                            <h2 class = "title" id = "typo-designer">Nos services</h2>
                        </div>
                        <div class = "col-md-4">
                            <div class = "services-box">
                                <div class = "services-icon" style = "background-image: url('../images/services/s1.png');  background-repeat: no-repeat; background-size:cover;"></div> 
                                <div class = "services-desc">
                                    <h4>Gestion des infrastructures</h4>
                                    <p>1h<br>19,99$US</p>
                                    <button type = "submit" class = "btn btn-green" id = "hover-button">Réserver</button>
                                </div>
                            </div>
                        </div>
                        <div class = "col-md-4">
                            <div class = "services-box">
                                <div class = "services-icon" style = "background-image: url('../images/services/s2.png');  background-repeat: no-repeat; background-size:cover;"></div> 
                                <div class = "services-desc">
                                    <h4>Services de réseaux</h4>
                                    <p>1h<br>19,99$US</p>
                                    <button type = "submit" class = "btn btn-green" id = "hover-button">Réserver</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section  id = "about" class = "section">
                <div class = "container">
                    <div class = "title-box text-center white">
                        <h2 class = "blue" id = "typo-designer">A porpos de ADIZ-DATA</h2>
                    </div>
                    <div class = "row"> 
                        <div class = "col-md-12">
					        <div class = "content-tab-1">
						        <div class = "tab-content-main">
								    <div class = "container">
									    <div class = "tab-content">
										    <div class = "tab-pane active in" id = "tab-content-1">	
                                                <div class = "col-md-6 margin-bottom-30">
                                                    <div class = "tab1-features">
                                                        <div class = "info">
                                                            <h4>Des services informatiques sur mesure</h4>
                                                            <p>La mission de Adiz-Data ne se limite pas à fournir des solutions informatiques. Nous aidons nos clients à atteindre l'excellence opérationnelle pour qu'ils puissent se consacrer à leur cœur de métier. Grâce à notre large gamme de services complets, nous nous assurons que nos clients restent à la pointe de l'innovation afin de maximiser leurs chances de réussite.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class = "col-md-6">
                                                    <div class = "tab-carousel">
                                                        <div class = "item"><img src = "{{asset('images/parallax/image.jpg')}}" alt = "Work 1"></div>
                                                    </div>
                                                </div>                                            
										    </div>
									    </div>
								    </div>
						        </div>
					        </div>
				        </div>
                    </div> 
                </div>
            </section>
            <section id = "services" class = "section">
                <div class = "container">
                    <div class = "row">
                        <div class = "title-box text-center">
                            <h2 class = "title" id = "typo-designer">Fonctionnalités</h2>
                        </div>
                        <div class = "post-desc">
                            <h4 class = "personal-title" id = "center">Toutes vos attentes dépassées</h4>
                        </div>
                        <div class = "tab-pane" id = "tab-content-2">
                            <div class = "col-md-4">
                                <div class = "tab2-services-box">
                                    <div class = "media">
                                        <img src = "{{asset('images/fonctionalites/fonc1.png')}}"  alt = "services"/>
                                    </div>
                                    <div class = "services-info">
                                        <h4>Assistance téléphonique 24/24, 7/7</h4>
                                        <p>La crème de la crème</p>
                                        <br>
                                        <button type = "submit" class = "btn btn-green" id = "hover-button">Contact</button>
                                    </div> 
                                </div>
                            </div>
                            <div class = "col-md-4">
                                <div class = "tab2-services-box">
                                    <div class = "media">
                                        <img src = "{{asset('images/fonctionalites/fonc2.png')}}"  alt = "services"/>
                                    </div>
                                    <div class = "services-info">
                                        <h4>Connaissance approfondie</h4>
                                        <p>Une qualité inégalée</p>
                                        <br>
                                        <button type = "submit" class = "btn btn-green" id = "hover-button">Contact</button>
                                    </div> 
                                </div>
                            </div>	
						</div>
                    </div>
                </div>
            </section> 
            <section id = "history" class = "section parallax">
		        <div class = "overlay"></div>
                <div class = "container">
                    <div class = "title-box text-center white">
                        <h2 class = "title" id = "typo-designer">Obtenir un devis</h2>
                    </div>
                    <div class = "comments-section">								
						<h4 style = "color:white;">Intéressé par nos services ? Remplissez simplement le formulaire ci-dessous et un membre de notre équipe vous contactera au plus vite.</h4>
						<br>		
                        <div class = "comment-form">
							<form method = "POST">
                                <div class = "row">
                                    <div class = "col-md-6">
                                        <input type = "text" class = "form-control" placeholder = "Prénom" id = "prenom" required>
                                    </div>
                                    <div class = "col-md-6">
                                        <input type = "text" class = "form-control" placeholder = "Nom de la famille" id = "nom" required>
                                    </div>
                                    <div class = "col-md-6">
                                        <input type = "email" class = "form-control" placeholder = "E-mail" id = "email" required>
                                    </div>
                                    <div class = "col-md-6">
                                        <input type = "tel" class = "form-control" placeholder = "Téléphone" id = "tel" required>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class = "form-control" placeholder = "Commentaires" rows = "7" required></textarea>
                                    </div>
                                    <div class = "col-md-12" id = "center">
                                        <button type = "submit" class = "btn btn-green">Envoyer</button>
                                    </div>
                                </div>
                            </form>
						</div>						
					</div>               
                </div>
	        </section>
            <section id = "clients" class = "section">
                <div class = "container">
                    <div class = "row">
                        <div class = "title-box text-center">
                            <h2 class = "title" id = "typo-designer">Nos clients</h2>
                        </div>
                        <div class = "post-desc">
                            <h4 class = "personal-title">Une relation privilégiée</h4>
                        </div>
                        <div class = "clients-carousel">
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c1.png')}}" alt = "Client 1"/>
                                    </figure>
                                </a>
                            </div>
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c2.png')}}" alt = " Client 2"/>
                                    </figure>
                                </a>
                            </div>
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c3.png')}}" alt = " Client 3"/>
                                    </figure>
                                </a>
                            </div>
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c4.png')}}" alt = " Client 4"/>
                                    </figure>
                                </a>
                            </div>
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c5.png')}}" alt = " Client 5"/>
                                    </figure>
                                </a>
                            </div>
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c6.png')}}" alt = " Client 6"/>
                                    </figure>
                                </a>
                            </div>
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c7.png')}}" alt = "Client 7"/>
                                    </figure>
                                </a>
                            </div>
                            <div class = "item">
                                <a href = "#">
                                    <figure>
                                        <img src = "{{asset('images/clients-logo/c8.png')}}" alt = " Client 8"/>
                                    </figure>
                                </a>
                            </div>
		                </div>
                    </div>
                </div>
            </section> 
            <section id = "contact" class = "section parallax">
                <div class = "overlay"></div>
                <div class = "container">
                    <div class = "row">
                        <div class = "title-box text-center white">
                            <h2 class = "title" id = "typo-designer">Nous contacter</h2>
                        </div>
                    </div>
                    <div class = "col-md-8 col-md-offset-2 contact-form">
                        <div class = "contact-info text-center">
                            <p>Rue 9 avril Bâtiment DKHIL Bureau N°7 Ras Jebel Bizerte Cp:7070</p>
                            <p>m.chaabane@adiz-data.io</p>
                            <p>(+216) 20 631 284</p>
                        </div>
                        <form method = "POST" name = "f" id = "f" action = "#">
                            <div class = "row">
                                <div class = "col-md-4">
                                    <input type = "text" class = "form-control" id = "nom" placeholder = "Saisissez votre nom.." required>
                                </div>
                                <div class = "col-md-4">
                                    <input type = "text" class = "form-control" id = "prenom" placeholder = "Saisissez votre prénom.." required>
                                </div>
                                <div class = "col-md-4">
                                    <input type = "text" class = "form-control" id = "adresse" placeholder = "Saisissez votre adresse.." required>
                                </div>
                                <div class = "col-md-4">
                                    <input type = "email" class = "form-control" id = "email" placeholder = "Saisissez votre e-mail.." required>
                                </div>
                                <div class = "col-md-4">
                                    <input type = "tel" class = "form-control" id = "mobile" placeholder = "Saisissez votre numéro.." required>
                                </div>
                                <div class = "col-md-4">
                                    <input type = "text" class = "form-control" id = "objet" placeholder = "Saisissez votre objet.." required>
                                </div>
                                <div class = "col-md-12">
                                    <textarea class = "form-control" id = "message" rows = "7" placeholder = "Rédigez votre message içi.." required></textarea>
                                </div>
                                <div class = "col-md-12 text-right">
                                    <button type = "submit" class = "btn btn-green">ENVOYER</button>
                                </div>
                            </div>
                        </form>
                    </div>              
                </div>
            </section>
            <footer>
                <div class = "container">
                    <div class = "row">
                        <div class = "col-md-6 col-sm-6 col-xs-6">
                            <div class = "copyright"><p>Copyright © <span id = "year"></span> Créer par : <a href = "#">ADIZ-DATA</a></p></div>
                        </div>
                        <div class = "col-md-6 col-sm-6 col-xs-6">
                            <div class = "social-icons">
                                <ul>
                                    <li><a href = "https://www.facebook.com/wix"><i class = "fa fa-facebook"></i></a></li>
                                    <li><a href = "https://twitter.com/Wix"><i class = "fa fa-twitter"></i></a></li>
                                    <li><a href = "https://www.linkedin.com/company/wix-com"><i class = "fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <a href = "#" class = "scrollup"><i class = "fa fa-chevron-up"></i></a>
            <script src = "{{asset('js/jquery-1.11.1.min.js')}}"></script>
            <script src = "{{asset('js/bootstrap.min.js')}}"></script> 
            <script src = "{{asset('js/owl-carousel/owl.carousel.js')}}"></script>
            <script src = "{{asset('js/jquery.flexslider-min.js')}}"></script>
            <script src = "{{asset('js/jquery.magnific-popup.min.js')}}"></script>
            <script src = "{{asset('js/easing.js')}}"></script>
            <script src = "{{asset('js/jquery.easypiechart.js')}}"></script>
            <script src = "{{asset('js/jquery.appear.js')}}"></script>
            <script src = "{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
            <script src = "{{asset('js/jquery.mixitup.min.js')}}"></script>
            <script src = "{{asset('js/custom.js')}}"></script>
            <script src = "{{asset('js/widget.js')}}"></script>
            <script src = "{{asset('js/functions.js')}}"></script>
        </body>
    </html>
