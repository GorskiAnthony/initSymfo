<?php

//Important il faut le namespace
namespace App\Controller;

// J'informe les use que j'ai besoin
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController {

    function hello(Request $request) {
        // Avec la méthode Response
        // return new Response("Hello world!");

        // Avec AbstractController
        // $user = "utilisateurs";
        // $userName = ["tony", "patrick", "richard", "bob"];

        // return $this->render("hello/exemple.html.twig", [
        //     'title' => $user,
        //     'array' => $userName
        // ]);
        return $this->render("hello/index.html.twig");

        // Manipulation Request / Response
        // var_dump($request->query);
        // die;
        /**
         * 
         * Requete : http://127.0.0.1:8000/hello?param1=test
         * 
         * Détail :
         * 
         * - http://127.0.0.1:8000  => Adresse du server
         * - /hello                 => La route
         * - ?param1=test           => c'est notre paramètre
         * 
         */

         // Affichage des paramètres
        //  $params = $request->query->all();
        //  $string = "Les paramètres sont : <br />";
        //  foreach($params as $key => $value) {
        //      $string = $string . ' - ' . $key . ' : ' . $value . '<br />';
        //  }

        //  return new Response($string);
         
    }
};