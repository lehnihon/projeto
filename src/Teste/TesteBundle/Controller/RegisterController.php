<?php
namespace Teste\TesteBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Teste\TesteBundle\Entity\User;
use Teste\TesteBundle\Form\RegisterFormType;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

class RegisterController extends Controller implements ContainerAwareInterface{
    
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
                
                $user->setPassword($this->encodePassword($user,"123"));
                $manager = $this->getDoctrine()->getEntityManager();
                $manager->persist($user);
                $manager->flush();
                             
                return $this->redirect($this->generateUrl("login"));
            }
            
        }
        return array("form"=>$form->createView());
    }
    
    private function encodePassword($user, $plainPassword){
        $encoder = $this->container->get("security.encoder_factory")
                ->getEncoder($user);
        return $encoder->encodePassword($plainPassword,$user->getSalt());
    }
}