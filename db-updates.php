<?php
$app = MapasCulturais\App::i();
$em = $app->em;
$conn = $em->getConnection();

return array(
    'acessibilidade-value' => function() use($conn){
        $conn->executeQuery("
            UPDATE space_meta SET value = 'Sí' WHERE value = 'Sim'
        ");
    },
    'update-geo-departamento' => function() use($conn){
        $conn->executeQuery("
            UPDATE agent_meta SET key = 'geo_departamento' WHERE key = 'geoDepartamento'
        ");
        $conn->executeQuery("
            UPDATE space_meta SET key = 'geo_departamento' WHERE key = 'geoDepartamento'
        ");
    }
);
