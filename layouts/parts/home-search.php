<section id="home-intro" class="js-page-menu-item home-entity clearfix">
<div class="branding">
        <!--<span class="tipo">Cultura en línea</span>
        <h1>Culturaenlinea.uy</h1>-->
        <p class="text">
        		Esta es una herramienta que permite conocer el escenario cultural de nuestro país. Es un espacio colaborativo en el que podés registrarte como agente cultural, difundir tus eventos, subir espacios, proyectos, e inscribirte a las convocatorias y concursos publicados
        </p>
        <p class="text" style="font-size:10px !important; line-height:16px;">
				Toda la información ingresada es responsabilidad exclusiva del usuario que la publica. En caso de encontrar información inexacta, fraudulenta u ofensiva comunicalo a través del formulario del sitio.   
        </p>
    </div>    
    
    
    <div class="box">
        <h1><?php echo $app->view->renderMarkdown($this->dict('home: title',false)); ?></h1>        
      <!-- <p class="subtextsearch"><?php echo $app->view->renderMarkdown($this->dict('home: welcome',false)); ?></p> -->
      <p class="subtextsearch">
        		Esta es una herramienta que permite conocer el escenario cultural de nuestro país. Es un espacio colaborativo en el que podés registrarte como agente cultural, difundir tus eventos, subir espacios, proyectos, e inscribirte a las convocatorias y concursos publicados
        </p>
        <p class="subtextsearch" style="font-size:10px !important; line-height:16px;">
				Toda la información ingresada es responsabilidad exclusiva del usuario que la publica. En caso de encontrar información inexacta, fraudulenta u ofensiva comunicalo a través del formulario del sitio.   
        </p>
      
        <form id="home-search-form" class="clearfix" ng-non-bindable>
            <input tabindex="1" id="campo-de-busca" class="search-field" type="text" name="campo-de-busca" placeholder="<?php \MapasCulturais\i::esc_attr_e("Digite uma palavra-chave");?>"/>
            <div id="home-search-filter" class="dropdown" data-searh-url-template="<?php echo $app->createUrl('site','search'); ?>##(global:(enabled:({{entity}}:!t),filterEntity:{{entity}}),{{entity}}:(keyword:'{{keyword}}'))">
                <div class="placeholder"><span class="icon icon-search"></span><?php \MapasCulturais\i::_e("Buscar");?></div>
                <div class="submenu-dropdown">
                    <ul>
                        <?php if($app->isEnabled('events')): ?>
                            <li tabindex="5" id="events-filter"  data-entity="event"><span class="icon icon-event"></span> <?php \MapasCulturais\i::_e("Eventos");?></li>
                        <?php endif; ?>

                        <?php if($app->isEnabled('agents')): ?>
                            <li tabindex="2" id="agents-filter"  data-entity="agent"><span class="icon icon-agent"></span> <?php \MapasCulturais\i::_e("Agentes");?></li>
                        <?php endif; ?>

                        <?php if($app->isEnabled('spaces')): ?>
                            <li tabindex="3" id="spaces-filter"  data-entity="space"><span class="icon icon-space"></span> <?php $this->dict('entities: Spaces') ?></li>
                        <?php endif; ?>

                        <?php if($app->isEnabled('projects')): ?>
                            <li tabindex="4" id="projects-filter" data-entity="project" data-searh-url-template="<?php echo $app->createUrl('site','search'); ?>##(global:(enabled:({{entity}}:!t),filterEntity:{{entity}},viewMode:list),{{entity}}:(keyword:'{{keyword}}'))"><span class="icon icon-project"></span> <?php \MapasCulturais\i::_e("Projetos");?></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </form>
       <!-- <a class="btn btn-accent btn-large" href="<?php echo $app->createUrl('panel') ?>"><?php $this->dict('home: colabore') ?></a>-->
    </div>

    <div class="view-more"><a class="hltip icon icon-select-arrow" href="#home-events" title="<?php \MapasCulturais\i::esc_attr_e("Saiba mais");?>"></a></div>
</section>
