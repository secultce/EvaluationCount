<?php
use MapasCulturais\App;
use MapasCulturais\i;

$route = App::i()->createUrl('evaluationCount', 'count', ['id'=>$entity->id]);

?>

<div class="row align-items-center">
    <div class="col">
      Total de Avaliações
    </div>
    <div class="col">
      One of three columns
    </div>

</div>