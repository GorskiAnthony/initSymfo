<?php

// namespace
namespace App\Entity;

class User {
    /**
     * 2 propriétés
     * - nom => $name
     * - email => $email
     */

    /**
     * PUBLIC : Accessible de partout
    * PROTECTED : Accessible à l'intérieur de la classe mère et les classes filles
    * PRIVATE : Accessible que dans la classe.
    */

    /**
     * Ici, nous allons déclarers en PROTECTED nos variables et ajouter des getter/setter pour accèder à nos propriétés.
     */

    protected $name;
    protected $email;

    // Getter du name qui retourne le name.
    public function getName() {
        return $this->name;
    }

    // Setter du name, on indique que la variable name = $name passé en paramètre
    public function setName($name) {
        $this->name = $name;
    }
    
    // Getter de l'email qui retourne l'email.
    public function getEmail(){
        return $this->email;
    }

    //Setter de l'email
    public function setEmail($email){
        $this->email = $email;
    }
}