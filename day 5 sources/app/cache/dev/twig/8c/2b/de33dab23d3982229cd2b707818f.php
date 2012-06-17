<?php

/* ManwinTrainingBundle:Default:index.html.twig */
class __TwigTemplate_8c2bde33dab23d3982229cd2b707818f extends Twig_Template
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
        echo " to ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getContext($context, 'name')), "html");
        echo "'s personal page";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo $this->env->getExtension('manwin_text')->paragraph($this->env->getExtension('manwin_text')->truncate("Put that string into a paragraph", 15), array("class" => "foobar"));
        // line 13
        echo "

";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, 'my_global'), "html");
        echo "

<p>
\tHello <strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "</strong>!
\t<br/><br/>
\tyou are on ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("greet", array("name" => $this->getContext($context, 'name'))), "html");
        echo "
</p>

<p>
\talso <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("greet", array("name" => "Albert")), "html");
        echo "\">Greet Albert!</a> greet Albert!
</p>

";
    }

    public function getTemplateName()
    {
        return "ManwinTrainingBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
