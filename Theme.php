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
        
        // Adiciona CSS
        $this->enqueueStyle('app', 'culturaenlinea', 'css/culturaenlinea.css', array('main'));
        
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
        		'home: title' =>' ',
            'home: welcome' => 'Culturaenlinea.uy  permite conocer el escenario cultural de nuestro país. Es un espacio colaborativo en el que podés registrarte como agente cultural, difundir tus eventos, subir espacios, proyectos, e inscribirte a las convocatorias y concursos publicados.',
            'home: colabore' => 'Iniciar sesión',
            'home: agents' => 'Artistas, gestores, productores, colectivos, etc. Es la red de actores involucrados en el sector cultural del país. Registrate y asociá tu agente con tus eventos, proyectos y espacios culturales.',
            'home: spaces' => 'Son los espacios físicos donde se desarrollan las actividades artísticas y culturales generadas por los agentes. Se georreferencian y podés subir fotos, videos, actividades, todo lo que allí se desarrolle.',
            'home: projects' => 'Incluye proyectos culturales, ciclos, exposiciones, talleres, convocatorias y otras acciones desarrolladas en un marco común.',
            'home: events' => 'Podés registrar tu evento, darlo a conocer y ver otros que te interesen.',
        ];
    }
    
    protected function _getFilters(){
        $en_estado_filter = [
            'fieldType' => 'checklist',
            'label' => 'Departamento',
            'placeholder' => 'Seleccione los Departamentos',
            'filter' => [
                'param' => 'En_Estado',
                'value' => 'IN({val})'
            ]
        ];
        
        $ent_filters = parent::_getFilters();
        
        $mod_filters = [];
        
        foreach ($ent_filters as $entity => $filters) {
            $mod_filters[$entity] = [];
            if (in_array($entity, ['space', 'agent'])){
                $mod_filters[$entity][] = $en_estado_filter;
            }
            foreach ($filters as $filter)
                if (!(isset($filter['fieldType']) && $filter['fieldType'] === 'checkbox-verified'))
                    $mod_filters[$entity][] = $filter;
                    
            
        }
        
        return $mod_filters;
        
    }
    

}
