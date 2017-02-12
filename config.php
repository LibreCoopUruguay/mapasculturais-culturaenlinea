<?php

return array(

    'app.geoDivisionsHierarchy' => [
            '_departamento'        => \MapasCulturais\i::__('Departamento'),        // metadata: geoDepartamento
        ],
        
    'registration.ownerDefinition' => array(
        'required' => true,
        'label' => \MapasCulturais\i::__('Agente responsável pela inscrição'),
        'agentRelationGroupName' => 'owner',
        'description' => 'Agente individual (persona física) con los campos CI y Email Privado completos',
        'type' => 1,
        'requiredProperties' => array('documento', 'emailPrivado')
    ),
    
    
    // TODO: remover isto daqui depois que refatorar o config
    'app.entityPropertiesLabels' => array(
        '@default' => array(
            'id' => \MapasCulturais\i::__('Id'),
            'name' => \MapasCulturais\i::__('Nome'),
            'createTimestamp' => \MapasCulturais\i::__('Data de Criação'),
            'updateTimestamp' => \MapasCulturais\i::__('Data de Atualização'),
            'shortDescription' => \MapasCulturais\i::__('Descrição Curta'),
            'longDescription' => \MapasCulturais\i::__('Descrição Longa'),
            'certificateText' => \MapasCulturais\i::__('Conteúdo da Impressão do Certificado'),
            'validPeriod'	=> \MapasCulturais\i::__('Período de Validade'),
            'status' => \MapasCulturais\i::__('Status')
        ),

        //        'MapasCulturais\Entities\Agent' => array()
    ),

);
