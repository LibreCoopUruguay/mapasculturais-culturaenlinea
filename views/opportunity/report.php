<?php
use MapasCulturais\Entities\Registration as R;
use MapasCulturais\Entities\Agent;
use MapasCulturais\i;

function echoStatus($registration) {
    switch ($registration->status){
        case R::STATUS_APPROVED:
            i::_e('selecionada');
            break;

        case R::STATUS_NOTAPPROVED:
            i::_e('não selecionada');
            break;

        case R::STATUS_WAITLIST:
            i::_e('suplente');
            break;

        case R::STATUS_INVALID:
            i::_e('inválida');
            break;

        case R::STATUS_SENT:
            i::_e('pendente');
            break;
    }
}

function showIfField($hasField, $showField) {
    if($hasField)
        echo "<th>" . $showField . "</th>";
}

$_properties = $app->config['registration.propertiesToExport'];
$custom_fields = [];
foreach($entity->registrationFieldConfigurations as $field) :
    $custom_fields[$field->displayOrder] = [
        'title' => $field->title,
        'field_name' => $field->getFieldName()
    ];
endforeach;

ksort($custom_fields);
?>
<style>
    tbody td, table th{
        text-align: left !important;
        border:1px solid black !important;
    }
</style>

<table>
    <thead>
        <tr>
            <th> <?php i::_e("Número") ?> </th>

            <?php showIfField($entity->projectName, i::__("Nome do projeto")); ?>

            <th> <?php i::_e("Avaliação") ?> </th>
            <th><?php i::_e("Status") ?></th>
            <th><?php i::_e("Inscrição - Data de envio") ?></th>
            <th><?php i::_e("Inscrição - Hora de envio") ?></th>
            <?php showIfField($entity->registrationCategories, $entity->registrationCategTitle); ?>
				<th> <?php i::_e("Agente") ?> </th>
            <th> <?php i::_e("Email publico") ?> </th>
            <th> <?php i::_e("Email privado") ?> </th>
            <th> <?php i::_e("Telefone Publico") ?> </th>
            <th> <?php i::_e("Telefone 1") ?> </th>
            <th> <?php i::_e("Telefone 2") ?> </th>
            <th><?php i::_e('Anexos') ?></th>

        </tr>
    </thead>
    <tbody>
        <?php foreach($entity->sentRegistrations as $r): ?>
            <tr>
                <td><a href="<?php echo $r->singleUrl; ?>" target="_blank"><?php echo $r->number; ?></a></td>
                <?php if($entity->projectName): ?>
                    <td><?php echo $r->projectName ?></td>
                <?php endif; ?>
                <td><?php echo $r->getEvaluationResultString(); ?></td>
                <td><?php echoStatus($r); ?></td>
                <?php $dataHoraEnvio = $r->sentTimestamp; ?>
                <td><?php echo (!is_null($dataHoraEnvio))? $dataHoraEnvio->format('d-m-Y') : '';?></td>
                <td><?php echo (!is_null($dataHoraEnvio))? $dataHoraEnvio->format('H:i:s'): '';?></td>

                <?php showIfField($entity->registrationCategories, $r->category); ?>

                <?php $agent = $r->owner;  ?>
                <?php if(!empty($agent)): ?>
                    <td><a href="<?php echo $agent->singleUrl; ?>" target="_blank"><?php echo $agent->name; ?></a></td>
                    <td><?php echo $agent->emailPublico; ?></td>
                    <td><?php echo $agent->emailPrivado; ?></td>                   
                    <td><?php echo $agent->telefonePublico; ?></td>
                    <td><?php echo $agent->telefone1; ?></td>
                    <td><?php echo $agent->telefone2; ?></td>
                    
                    <td>
                    <?php if(key_exists('zipArchive', $r->files)): ?>
                        <a href="<?php echo $r->files['zipArchive']->url; ?>"><?php i::_e("zip");?></a>
                     <?php endif; ?>
                </td>

                <?php else: ?>
                    str_repeat('<td></td>', 7);
                <?php endif; ?>

               
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
