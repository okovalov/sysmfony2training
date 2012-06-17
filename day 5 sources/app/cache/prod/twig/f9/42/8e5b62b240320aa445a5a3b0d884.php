<?php

/* ::navigation.html.twig */
class __TwigTemplate_f9428e5b62b240320aa445a5a3b0d884 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<ul id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "\">
\t<li><a href=\"#\">Home</a></li>
\t<li><a href=\"#\">About</a></li>
\t<li><a href=\"#\">Contact</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "::navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
