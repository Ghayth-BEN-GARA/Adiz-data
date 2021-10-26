<!doctype html>
    <html lang = "en" class = "no-js">
        <head>
            <meta charset = "utf-8">
	        <title>Adiz-data | Forum</title>
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
                                    <li><a href = "{{url('/')}}#home">Accueil</a></li>
                                    <li><a href = "{{url('/')}}#reserver">Réserver en ligne</a></li>
                                    <li><a href = "{{url('/')}}#about">à propos</a></li>
                                    <li><a href = "{{url('/')}}#services">Services</a></li> 
                                    <li><a href = "{{url('/')}}#history">Obtenir un devis</a></li> 
                                    <li><a href = "{{url('/')}}#clients">Clients</a></li>
                                    <li><a href = "{{url('/')}}#contact">Contact</a></li>
                                    <div class = "dropdown">
                                        <li class = "active"><a href = "#">Plus</a></li>
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
            <section id = "page-header" class = "parallax">
                <div class = "overlay"></div>
			    <div class = "container">
				    <h1>Forum technologie</h1>
                    <div class = "breadcrumb">
                        <ul>
                            <li>
                                <a href = "#">Explorez ce forum pour tout ce qui concerne la technologie, comme les tendances ou les conseils.</a>
                            </li>
                        </ul>
				    </div>
			    </div>
		    </section>
            <section class = "section">
                <div class = "container">
                    <div class = "row">
                    <div class = "title-box text-center">
                            <h2 class = "title" id = "typo-designer">Forum de discussion</h2>
                        </div>
                        <div class = "col-md-12 col-sm-8">
                            <div class = "post-content">	
                                <div class = "comment-list" id = "border-id">
                                    <div id = "list-btn">
                                        <button class = "poste-create" onclick = "showListButton()">Créer un nouveau post<i class = "fa fa-angle-down ic"></i></button>
                                        <div id = "list-content">
                                            <a href = "#" class = "item-btn">
                                                <i class = "fa fa-comments"></i>
                                                <span class = "tt">Lancer une discussion</span>
                                                <br><br>
                                                <span id = "txt">Discuter avec d'autres membres.</span>
                                            </a>
                                            <hr>
                                            <a href = "#" class = "item-btn">
                                                <i class = "fa fa-question-circle"></i>
                                                <span class = "tt">Poser une question</span>
                                                <br><br>
                                                <span id = "txt">Obtenez des réponses directes.</span>
                                            </span>
                                        </div>
                                    </div>
								    <ol>
									    <li class = "comment">
										    <div class = "single_comment first-comment">
                                                <div class = "comment-avatar">
                                                    <div class = "avatar">
                                                        <img src = "images/blog/avatar1.jpg" alt = "">
                                                    </div>
                                                </div>
                                                <div class = "comment-content">
                                                    <div class = "comment-name"><a href = "#">John Doe</a><span>-</span><a href = "#" class = "comment-reply">Reply</a></div>
                                                    <div class = "comment-desc">18 November, 2014 at 12:48 pm</div>                                
                                                    <div class = "comment-text">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in molestie neque, eget posuere risus. In mauris orci, imperdiet quis hendrerit eget, dapibus sed nisi.. 
                                                        </p>
                                                    </div>
                                                </div>
										    </div>
									    </li>
									    <li class = "comment">					
										    <div class = "single_comment">
											    <div class = "comment-avatar">
                                                    <div class = "avatar">
                                                        <img src = "images/blog/avatar2.jpg" alt = "">
                                                    </div>
											    </div>
											    <div class = "comment-content">
												    <div class = "comment-name"><a href = "#">John Doe</a><span>-</span><a href = "#" class = "comment-reply">Reply</a></div>
												    <div class = "comment-desc">19 November, 2014 at 10:21 pm</div>
                                                    <div class = "comment-text">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in molestie neque, eget posuere risus. In mauris orci, imperdiet quis hendrerit eget, dapibus sed nisi.. 
                                                        </p>
                                                    </div>
											    </div>
										    </div>										
									    </li>
                                        <li class = "comment">					
										    <div class = "single_comment">
											    <div class = "comment-avatar">
                                                    <div class = "avatar">
                                                        <img src = "images/blog/avatar2.jpg" alt = "">
                                                    </div>
											    </div>
											    <div class = "comment-content">
												    <div class = "comment-name"><a href = "#">John Doe</a><span>-</span><a href = "#" class = "comment-reply">Reply</a></div>
												    <div class = "comment-desc">19 November, 2014 at 10:21 pm</div>
                                                    <div class = "comment-text">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in molestie neque, eget posuere risus. In mauris orci, imperdiet quis hendrerit eget, dapibus sed nisi.. 
                                                        </p>
                                                    </div>
											    </div>
										    </div>										
									    </li>
								    </ol>
							    </div>
                            </div>
                        </div>
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
