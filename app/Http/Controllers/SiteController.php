<?php
    namespace App\Http\Controllers;
    use App\Botman\OnboardingConversation;

    class SiteController extends Controller{

        public function ouvrirIndex(){
            return view('index');
        }

        public function chatBot(){
            $botman = app('botman');

            $botman->hears('{message}', function ($botman, $message) {
                $botman->startConversation(new OnboardingConversation);
            });
            
            $botman->listen();
        }

        public function ouvrirLogin(){
            return view('login');
        }

        public function ouvrirForget(){
            return view('forget-password');
        }

        public function ouvrirSignup(){
            return view('signup');
        }

        public function ouvrirForum(){
            return view('forum');
        }

        public function ouvrirMembre(){
            return view('membre');
        }
    }
?>