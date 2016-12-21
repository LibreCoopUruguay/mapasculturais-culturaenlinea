<?php
$app = MapasCulturais\App::i();
$em = $app->em;
$conn = $em->getConnection();

return array(
    'acessibilidade-value' => function() use($conn){
        $conn->executeQuery("
            UPDATE space_meta SET value = 'Sí' WHERE value = 'Sim'
        ");
    }
);
