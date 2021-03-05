<?php

//Important il faut le namespace
namespace App\Controller;

// J'informe les use que j'ai besoin
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController {



    /**
     * @Route("/hello", name="home" )
     */
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

         // return new Response($string);
         
    }



    /**
     * @Route("/hello/{params}", requirements={"params" = "\d+"}, name="digit")
     */
    function helloNumber($params) {
    /*  
        1. Créer un fichier de template. ✅

        2. Utiliser la méthode render() d'AbstractController qui fera reference à la vue créer ci dessus (point 1) ✅

        3. Passer le params à la vu pour l'afficher ✅

        4. Good luck ! ✅
    */
        return $this->render("hello/helloNumber.html.twig", [
            'number' => $params
        ]);

    }

    /**
     * @Route("/hello/{params}", name="name")
     */
    function helloWithParam($params) {
        return $this->render("hello/helloParams.html.twig", [
            "name" => $params
        ]);
    }

};