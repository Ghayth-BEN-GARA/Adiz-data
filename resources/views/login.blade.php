<!doctype html>
    <html lang = "en" class = "no-js">
        <head>
            <meta charset = "utf-8">
	        <title>Adiz-data | S'authentifier</title>
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
                                <a href = "{{url('signup')}}" class = "signup-image-link">Nouveau sur ce site ? <b>S'inscrire</b></a>
                            </div>
                            <div class = "signin-form">
                                <h2 class = "form-title">Se connecter</h2>
                                <form method = "POST" class = "register-form" id = "login-form">
                                    <div class="form-group">
                                        <label for = "email"><i class = "fa fa-envelope"></i></label>
                                        <input type = "email" name = "email" id = "email" placeholder = "Votre e-mail.." required/>
                                    </div>
                                    <div class = "form-group">
                                        <label for = "password"><i class = "fa fa-lock "></i></label>
                                        <input type = "password" name = "password" id = "password" placeholder = "Votre password.." required/>
                                    </div>
                                    <a href = "{{url('forget-password')}}" class = "signup-image-link no-ligne">Mot de passe oublié ?</a>
                                    <br>
                                    <div class = "form-group">
                                        <input type = "checkbox" name = "remember-me" id = "remember-me" class = "agree-term" />
                                        <label for = "remember-me" class = "label-agree-term"><span><span></span></span>Se souvient de moi</label>
                                    </div>
                                    <div class = "form-group form-button">
                                        <input type = "submit" name = "signin" id = "signin" class = "form-submit" value = "Se connecter"/>
                                    </div>
                                </form>
                                <div class = "social-login">
                                    <span class = "social-label">Ou connectez-vous avec</span>
                                    <ul class = "socials">
                                        <li><a href = "#"><i class = "display-flex-center zmdi zmdi-facebook"></i></a></li>
                                        <li><a href = "#"><i class = "display-flex-center zmdi zmdi-google"></i></a></li>
                                    </ul>
                                </div>
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
