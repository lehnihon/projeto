<?php

namespace Teste\TesteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
  
    /**
     * @Template()
     * @Route("teste/{name}", name="index")
     * @param type $name
     * @return type
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
    /**
     * @Template()
     * @Route("/login", name="login")
     * @return type
     */    
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        );
    }
    

  
    /** 
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction(){}

}