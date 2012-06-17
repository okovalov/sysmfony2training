<?php

/* ManwinCustomerBundle:Default:index.html.twig */
class __TwigTemplate_7e0e41c762ae775a4c6c198e375f5479 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
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

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
password: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, 'password'), "html");
        echo "!
<br/>
encoded: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, 'encoded'), "html");
        echo "
<br/>
res: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, 'res'), "html");
        echo "
<br/>
";
    }

    public function getTemplateName()
    {
        return "ManwinCustomerBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
