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
        
        $this->addSearchQueryFields('En_Municipio,En_Estado');
        
        $app->hook('template(site.search.space-infobox-new-fields-before):end', function() {
            echo '<div ng-if="space.En_Municipio"><span class="label">Ciudad:</span> {{openEntity.space.En_Municipio}}</div>';
            echo '<div ng-if="space.En_Estado"><span class="label">Departamento:</span> {{openEntity.space.En_Estado}}</div>';
        });
        
        $app->hook('template(site.search.list.space.meta):end', function() {
            echo '<div ng-if="space.En_Municipio"><span class="label">Ciudad:</span> {{space.En_Municipio}}</div>';
            echo '<div ng-if="space.En_Estado"><span class="label">Departamento:</span> {{space.En_Estado}}</div>';
        });
        
    }

    static function getThemeFolder() {
        return __DIR__;
    }
    
    static function _getTexts(){
        $app = App::i();

        return [
            'home: welcome' => 'Culturaenlinea.uy es una herramienta colaborativa en la cual tanto los ciudadanos como los actores culturales pueden cargar información visible para todo el que acceda al mapa. Permite conocer el escenario cultural de nuestro país, así como también cargar eventos, espacios culturales y realizar convocatorias de los diversos llamados realizados por esta secretaría entre otros.'
        ];
    }
    

}
