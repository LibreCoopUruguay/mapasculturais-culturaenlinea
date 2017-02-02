<?php

return array(

    'app.geoDivisionsHierarchy' => [
            'departamento'        => \MapasCulturais\i::__('Departamento'),        // metadata: geoDepartamento
        ],
        
    'registration.ownerDefinition' => array(
        'required' => true,
        'label' => \MapasCulturais\i::__('Agente responsável pela inscrição'),
        'agentRelationGroupName' => 'owner',
        'description' => 'Agente individual (persona física) con los campos CI y Email Privado completos',
        'type' => 1,
        'requiredProperties' => array('documento', 'emailPrivado')
    ),

);
