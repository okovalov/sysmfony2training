<?php

/* ::base.html.twig */
class __TwigTemplate_96f88ef54e8e58895c85c7736a68db7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
    </head>
    <body>
    \t<div id=\"header\">
    \t";
        // line 11
        $this->env->loadTemplate("::navigation.html.twig")->display(array("id" => "menu_head"));
        // line 15
        echo "    \t</div>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        
    \t<div id=\"footer\">
    \t";
        // line 20
        echo $this->env->getExtension('actions')->renderAction("ManwinTrainingBundle:Default:counter", array("foo" => "bar"), array("standalone" => true));
        // line 25
        echo "    \t";
        $this->env->loadTemplate("::navigation.html.twig")->display(array("id" => "menu_foot"));
        // line 26
        echo "    \t</div>
        
        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
