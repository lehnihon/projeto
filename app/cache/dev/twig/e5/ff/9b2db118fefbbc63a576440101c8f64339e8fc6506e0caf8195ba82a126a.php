<?php

/* TesteBundle:Register:register.html.twig */
class __TwigTemplate_e5ff9b2db118fefbbc63a576440101c8f64339e8fc6506e0caf8195ba82a126a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <h1>Registro do usuário</h1>

    <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("user_register");
        echo "\" method=\"POST\">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        <input type=\"submit\" value=\"Enviar\" />
    </form>

";
    }

    public function getTemplateName()
    {
        return "TesteBundle:Register:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
