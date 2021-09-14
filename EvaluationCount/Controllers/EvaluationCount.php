<?php

namespace EvaluationCount\Controllers;

use MapasCulturais\App;
use MapasCulturais\Controller;
use MapasCulturais\i;

class EvaluationCount extends Controller
{
    public function ALL_count() 
    {
        $app = App::i();

        $opportunityId = (int) $this->data['id'];
        $inscription = $this->data['publishInscription'];
        $opportunity =  $app->repo("Opportunity")->find($opportunityId);

        
        
    }
}

?>