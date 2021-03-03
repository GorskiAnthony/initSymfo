<?php

//Important il faut le namespace
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController {

    function hello() {
        // Avec la méthode Response
        // return new Response("Hello world!");

        // Avec AbstractController
        return $this->render("hello/index.html.twig");
         
    }
};