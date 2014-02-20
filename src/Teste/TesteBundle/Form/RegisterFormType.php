<?php
namespace Teste\TesteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegisterFormType extends AbstractType{
    public function getName() {
        return "user_register";
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder               
            ->add("username","text")
            ->add("password","repeated",array("type" => "password"));
    }     
    
}
