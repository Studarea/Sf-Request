<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class PagesController

{
    /**
     * @Route("/name", name="page_name")
     *
     *  je récuprère l'instance de la classe Request que je demande
     *  a Symfony de mettre dans une variable
     *
     *  la classe Request de Symfony me permet de récuprérer toutes les infos
     *  possibles sur l'utilisateur (variables GET, POST... cookies)
     */

    public function name(Request $request)
    {

        // La classe Request de Symfony possède des méthodes et
        // des propriétés pour récupérer les données de la requête.
        // Pour les variables GET, il faut utiliser la propriété query.

        
        $name = $request->query->get('firstname');

        var_dump ($name);
        die;
    }

}
