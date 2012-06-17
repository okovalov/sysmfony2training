<?php

/* ManwinCommentBundle:Default:show.html.twig */
class __TwigTemplate_3cb548b400dc4cc0cb73f85f44e49935 extends Twig_Template
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

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Comment this page";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
        <p>
            Your comment is:
             ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'comment'), "content", array(), "any", false), "html");
        echo "
        </p>


";
    }

    public function getTemplateName()
    {
        return "ManwinCommentBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
