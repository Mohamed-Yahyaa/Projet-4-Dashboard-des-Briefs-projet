<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller {

     function formateur (){
        $Groupes = formateur ::all();
        return $Groupes ;
     }

    
  

  
     function Groupe($id)
    {
        //
     
        $Groupes = groupes::select("*","groupes.id as idGroupe")
        ->where('Formateur_id',$id)
        ->join('formateur', 'groupes.Formateur_id', '=', 'formateur.id')
        ->join('annee_formation', 'groupes.Annee_formation_id', '=', 'annee_formation.id')
        ->orderBy('annee_formation.Annee_scolaire','desc')
        ->first();


        $IdBrief = apprenant_preparation_tach::select( "preparation_brief.Nom_du_brief",'preparation_brief.id as id')
            ->join('apprenant', 'apprenant_preparation_tache.Apprenant_id', '=','apprenant.id')
            ->join('preparation_tache', 'apprenant_preparation_tache.Preparation_tache_id', '=','preparation_tache.id')
            ->join('apprenant_preparation_brief', 'apprenant_preparation_tache.Apprenant_P_Brief_id', '=','apprenant_preparation_brief.id')
            ->join('preparation_brief', 'apprenant_preparation_brief.Preparation_brief_id', '=','preparation_brief.id')
            ->join('groupes_preparation_brief','apprenant_preparation_brief.id','=','groupes_preparation_brief.Apprenant_preparation_brief_id')
            ->where([
                ['groupes_preparation_brief.Groupe_id',$Groupes->idGroupe],
                ])
            ->groupBy("Nom_du_brief")
            ->groupBy("preparation_brief.id")
            ->orderBy('preparation_brief.id','desc')
                ->first();
    }



  
}
