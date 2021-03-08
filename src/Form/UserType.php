<?php
// src/Form/UserType.php

// namespace
namespace App\Form;

// import des uses
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType {

  public function buildForm(FormBuilderInterface $builder, array $options){
      $builder
        ->add('name', TextType::class, [
          "label" => "Votre nom",
        ])
        ->add('email', EmailType::class)
        ->add('password', PasswordType::class);
  }
}
