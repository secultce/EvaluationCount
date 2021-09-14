<?php 
namespace EvaluationCount;

use MapasCulturais\App;
use MapasCulturais\Entities;
use MapasCulturais\i;

class Plugin extends \MapasCulturais\Plugin {

    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    public function _init()
    {
        $app = App::i();

        $app->hook('template(opportunity.edit.evaluations-config):end', function() use($app){
            $opportunity = $this->controller->requestedEntity;
            $type_evaluation = $opportunity->evaluationMethodConfiguration->getDefinition()->slug;

            if($type_evaluation == 'documentary' || $type_evaluation == 'technical'){
                $opportunity = $this->controller->requestedEntity;
                $this->part('form/total-table', ['entity' => $opportunity]);
            }
        });
    }

    public function register()
    {
        $app = App::i();
        $app->registerController('evaluationCount', 'EvaluationCount\Controllers\EvaluationCount');
    }
}

?>