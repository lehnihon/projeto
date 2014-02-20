<?php
namespace Teste\TesteBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Teste\TesteBundle\Entity\User;
use Teste\TesteBundle\Form\RegisterFormType;

class RegisterController extends Controller{
    
    /**
     * @Route("/register", name="user_register")
     * @Template()
     */
    public function registerAction(Request $request){
        $defaultData = new User();
        $defaultData->setUsername("Preencha o nome");
        $form = $this->createForm(
                    new RegisterFormType(),
                    $defaultData
                );             
        if("POST"==$request->getMethod()){
            $form->bind($request);
            if($form->isValid()){
                $user = $form->getData();               
                $manager = $this->getDoctrine()->getEntityManager();
                $manager->persist($user);
                $manager->flush();
                             
                return $this->redirect($this->generateUrl("login"));
            }
            
        }
        return array("form"=>$form->createView());
    }
}