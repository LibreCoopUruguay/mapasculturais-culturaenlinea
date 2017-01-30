<?php

return array(

    'app.geoDivisionsHierarchy' => [
            'departamento'        => \MapasCulturais\i::__('Departamento'),        // metadata: geoDepartamento
        ],
        
    'registration.ownerDefinition' => array(
        'required' => true,
        'label' => \MapasCulturais\i::__('Agente responsável pela inscrição'),
        'agentRelationGroupName' => 'owner',
        'description' => \MapasCulturais\i::__('Agente individual (pessoa física) com os campos CPF, Data de Nascimento/Fundação, Email Privado e Telefone 1 obrigatoriamente preenchidos'),
        'type' => 1,
        'requiredProperties' => array('documento', 'dataDeNascimento', 'emailPrivado', 'telefone1')
    ),

);
