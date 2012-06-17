<?php

/* ManwinPageBundle:Default:index.html.twig */
class __TwigTemplate_75c9aef126d352a1b3d6980bc33ad624 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "::base.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 7
        $context['name'] = "Hugo";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("About us"), "html");
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("About us"), "html");
        echo "</h1>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("My name is %name%", array("%name%" => $this->getContext($context, 'name')), "about", "fr"), "html");
        // line 18
        echo "
    </p>
    <p>
        ";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("My name is %name%", array("%name%" => "Fabien", ), "about", "fr");
        // line 24
        echo "    </p>
        

";
    }

    public function getTemplateName()
    {
        return "ManwinPageBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
