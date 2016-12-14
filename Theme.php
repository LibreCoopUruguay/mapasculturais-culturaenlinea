<?php

namespace CulturaEnLinea;

use MapasCulturais\Themes\BaseV1;
use MapasCulturais\App;

class Theme extends BaseV1\Theme {

    protected function _init() {
        $app = App::i();
        
        parent::_init();

        
        // Mensagem na página de login/registro
        $app->hook('multipleLocalAuth.loginPage:end', function() {
            echo '<p><font size=3>(*) Sus datos personales (nombre, email)  son almacenados amparados en la Ley 18.831 de protección de datos personales</font></p>';
        });
        
        // Adiciona JS
        $this->enqueueScript('app', 'culturaenlinea', 'js/culturaenlinea.js', array('mapasculturais-customizable'));

    }

    static function getThemeFolder() {
        return __DIR__;
    }
    
    

}
