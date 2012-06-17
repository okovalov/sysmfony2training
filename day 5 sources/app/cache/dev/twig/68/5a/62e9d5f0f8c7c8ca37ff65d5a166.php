<?php

/* ManwinTrainingBundle:Default:color.html.twig */
class __TwigTemplate_685a62e9d5f0f8c7c8ca37ff65d5a166 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "ManwinTrainingBundle::layout.html.twig";
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo $this->renderParentBlock("title", $context, $blocks);
        echo " to color page! ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getContext($context, 'color')), "html");
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
Our color is ";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, 'color'), "html");
        echo "
";
    }

    public function getTemplateName()
    {
        return "ManwinTrainingBundle:Default:color.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
