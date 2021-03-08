<?php
// namespace
namespace App\Controller;

use App\Entity\User;
//j'import mon form user
use App\Form\UserType;

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
        /**         
         * 1er façon de faire avec le form dans le controller !== pas recommandé 
         * 
        */
        // $form = $this->createFormBuilder($user)
        //     // J'ajoute les champs avec la méthode 'add'
        //     ->add('name', TextType::class)
        //     ->add('email', EmailType::class)
        //     ->add("save", SubmitType::class)
        //     ->getForm();

        /**
         * 2eme façon de faire en utilisant le fichier UserType.php
         */

         $form = $this->createForm(UserType::class, $user);

        /** La gestion du form */
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $userInfo = $form->getData();

            // Je récupère l'entityManager avec la commande suivante 
            $entityManager = $this->getDoctrine()->getManager();

            // Je prepare les datas pour les persister en BDD
            $entityManager->persist($userInfo);

            // On pousse nos info en BDD
            $entityManager->flush();

           return new Response("Le formulaire a bien été soumis et validé !");
        }

        /** Fin de la gestion du form */
        return $this->render("form/form.html.twig", [
            'form' => $form->createView()
        ]);
    }
    
}