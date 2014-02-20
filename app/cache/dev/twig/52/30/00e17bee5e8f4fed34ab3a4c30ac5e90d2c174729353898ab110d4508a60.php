<?php

/* TesteBundle:Default:login.html.twig */
class __TwigTemplate_523000e17bee5e8f4fed34ab3a4c30ac5e90d2c174729353898ab110d4508a60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        if ($this->getContext($context, "error")) {
            // line 8
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "        
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Logout</a>
    ";
        } else {
            // line 14
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Login</a>
    ";
        }
        // line 16
        echo "        
    <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 28
        echo "
        <input type=\"submit\" name=\"login\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "TesteBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  74 => 19,  69 => 17,  66 => 16,  60 => 14,  54 => 12,  52 => 11,  49 => 10,  43 => 8,  40 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
