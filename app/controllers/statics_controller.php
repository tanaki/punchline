<?php
class StaticsController extends AppController {

	var $name = 'Statics';
        var $uses = array();

	function comingSoon() {
            $this->layout = "body";
            switch( $this->here ) {
                case "/punchline-session" :
                    $this->set("title", "session");
                    $this->set("subtitle", "punchline");
                break;
                case "/galeries-photo" :
                    $this->set("title", "photos");
                    $this->set("subtitle", "galerie");
                break;
                case "/evenements-a-venir" :
                default :
                    $this->set("title", "a-venir");
                    $this->set("subtitle", "evenements");
                break;
            }
	}
}
