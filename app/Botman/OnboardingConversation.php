<?php
    namespace App\Botman;
    use BotMan\BotMan\Messages\Conversations\Conversation;
    use BotMan\BotMan\Messages\Incoming\Answer;
    use BotMan\BotMan\Messages\Outgoing\Question;
    use BotMan\BotMan\Messages\Outgoing\Actions\Button;

    class OnboardingConversation extends Conversation{
        protected $name;
        protected $number;
        protected $reponse;

        public function nom(){
            $this->ask('Je suis votre assistant sur le site web. Pour commencer, donnez moi votre nom', function(Answer $answer) {
                $this->name = $answer->getText();
                if(preg_match('/^[a-zA-Z]+$/', $this->name)){
                    $this->name = $answer->getText();
                    $this->say("Ravi de vous rencontrer <b style = 'text-transform:uppercase'>".$this->name."</b>.");
                    $this->question();
                }

                else {
                    $this->repeat("Votre réponse <b style = 'text-transform:uppercase'>".$this->name."</b> n'est pas valide..");
                }
            });
        }

        public function question(){
            $this->ask("Comment je peux vous aider ?
            <br>
            <br>
            1 : <b>Nos contacts</b><br>
            2 : <b>Informations de la société</b><br>
            3 : <b>Services de la société</b><br>
            4 : <b>Directeur de la société</b>
            <br><br>
            (Ecrivez le numéro de question seulement !
            ", function(Answer $answer){
                $this->number = $answer->getText();
                if(preg_match('/^[1-9]+$/', $this->number)){
                    $this->number = $answer->getText();
                }

                if($this->number == "1"){
                    $this->say('<b>Adresse e-mail : </b>m.chaabane@adiz-data.io <br>
                                <b>Téléphone : </b>(+216) 20 631 284 <br>   
                                <b>Adresse : </b>Rue 9 avril Bâtiment DKHIL Bureau N°7 Ras Jebel Bizerte Cp:7070 <br> 
                            ');
                    $this->otherQuestion();
                }

                else if($this->number == "2"){
                    $this->say("La mission de Adiz-Data ne se limite pas à fournir des solutions informatiques. Nous aidons nos clients à atteindre l'excellence opérationnelle pour qu'ils puissent se consacrer à leur cœur de métier. Grâce à notre large gamme de services complets, nous nous assurons que nos clients restent à la pointe de l'innovation afin de maximiser leurs chances de réussite.");
                    $this->otherQuestion();
                }

                else if($this->number == "3"){
                    $this->say('<b>ASSISTANCE TÉLÉPHONIQUE 24/24, 7/7</b>
                                <br>
                                <b>CONNAISSANCE APPROFONDIE</b>');
                            $this->otherQuestion();
                }

                else if($this->number == "4"){
                    $this->say('<b>Mohamed Chaabane</b>');
                    $this->otherQuestion();
                }

                else{
                    $this->repeat('Votre réponse est incorrecte ressayer une autre fois');
                }
            });
        }

        public function otherQuestion(){
            $question = Question::create("Vous avez d'autres questions ?")
            ->callbackId('choose_query2')->addButtons([
                Button::create('Oui')->value('yes'),
                Button::create("Non")->value('no'),
            ]);

            $this->ask($question, function (Answer $answer) {
                if ($answer->isInteractiveMessageReply()) {
                    $selectedValue = $answer->getValue();
                    if($selectedValue == "yes"){
                        $this->question();
                    }

                    else{
                        $this->say('<b>Au revoir</b>');
                    }
                }
            });
        }

        public function run(){
            $this->nom();
        }

    }
?>