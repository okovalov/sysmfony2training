<?php

/* ManwinTrainingBundle:Converter:celsius.html.twig */
class __TwigTemplate_08aa7bd60968aa37422cede128f22fcd extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Celsius ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'celsius'), "html");
        echo "<br/>
Fahrenheit>";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, 'fahrenheit'), "html");
        echo "<br/>
";
    }

    public function getTemplateName()
    {
        return "ManwinTrainingBundle:Converter:celsius.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
