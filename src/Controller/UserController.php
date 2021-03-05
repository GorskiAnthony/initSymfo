<?php
// namespace
namespace App\Controller;

// J'importe ce dont j'ai besoin
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

// mise en forme Formulaire
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController {
    /**
     * @Route("/user", name="addUser") 
     */
    function createUser(Request $request) {
        // ici on créer une instance d'un utilisateur
        $user = new User();

        // Je créer une variable "form" dans lequel ily aura notre formulaire.
        // createFormBuilder vient AbstractController et s'occupe de notre formulaire
        // Dans le form, on lui passe l'instance de $user.
        $form = $this->createFormBuilder($user)
            // J'ajoute les champs avec la méthode 'add'
            ->add('name', TextType::class)
            ->add('email', EmailType::class)
            ->add("save", SubmitType::class)
            ->getForm();


        /** La gestion du form */
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
           return new Response("Le formulaire a bien été soumis et validé !");
        }
       

        /** Fin de la gestion du form */


        return $this->render("form/form.html.twig", [
            'form' => $form->createView()
        ]);
    }
    
}