<?php

/* ManwinCustomerBundle:CustomerManager:index.html.twig */
class __TwigTemplate_86e7d0a41331bea13ab7967559d33f6e extends Twig_Template
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
<ul>
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'customers'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['_key'] => $context['customer']) {
            // line 7
            echo "        <li>
            ";
            // line 8
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, 'customer'), "firstName", array(), "any", false) . " ") . $this->getAttribute($this->getContext($context, 'customer'), "lastName", array(), "any", false)), "html");
            echo "
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "        <li>No customers matching your request</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "    
</ul>

";
    }

    public function getTemplateName()
    {
        return "ManwinCustomerBundle:CustomerManager:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
