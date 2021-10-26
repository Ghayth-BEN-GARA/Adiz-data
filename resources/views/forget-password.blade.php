<!doctype html>
    <html lang = "en" class = "no-js">
        <head>
            <meta charset = "utf-8">
	        <title>Adiz-data | Récupérer le compte</title>
            <meta name = "author" content = "Adiz-data">
            <meta name = "keywords" content = "adiz-data">
            <meta name = "description" content = "Le site officiel de la société adiz-data">		
            <meta name = "viewport" content = "width=device-width, initial-scale=1, maximum-scale=1">
            <link rel = "icon" href = "{{asset('images/favicon.png')}}">
            <link rel = "stylesheet" href = "{{asset('css/font-awesome.css')}}">
            <link rel = "stylesheet" href = "{{asset('authentification/css/style.css')}}">
            <link rel = "stylesheet" href = "{{asset('authentification/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
        </head>
        <body>
            <div class = "main">
                <section class = "sign-in">
                    <div class = "container">
                        <div class = "signin-content">
                            <div class = "signin-image">
                                <figure><img src = "{{asset('authentification/images/signin-image.jpg')}}" alt = "Image de login"></figure>
                            </div>
                            <div class = "signin-form">
                                <h2 class = "form-title">Récupération</h2>
                                <a href = "#" class = "signup-image-link no-ligne">Veuillez saisir votre adresse e-mail</a>
                                <br>
                                <form method = "POST" class = "register-form" id = "login-form">
                                    <div class = "form-group">
                                        <label for = "email"><i class = "fa fa-envelope"></i></label>
                                        <input type = "email" name = "email" id = "email" placeholder = "Votre e-mail.." required/>
                                    </div>
                                    <div class = "form-group form-button">
                                        <input type = "submit" name = "signin" id = "signin" class = "form-submit" value = "Récupérer le compte"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <a href = "{{url('/')}}" class = "signup-image-link no-ligne center">Retour au site</a>
                    </div>
                </section>
            </div>
            <script src = "{{asset('authentification/vendor/jquery/jquery.min.js')}}"></script>
            <script src = "{{asset('authentification/js/main.js')}}"></script>
        </body>
    </html>
