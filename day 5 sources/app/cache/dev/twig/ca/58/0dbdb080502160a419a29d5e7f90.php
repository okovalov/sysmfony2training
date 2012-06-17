<?php

/* ManwinTrainingBundle:Converter:celsius.json.twig */
class __TwigTemplate_ca580dbdb080502160a419a29d5e7f90 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "[
\t\"celsius\": ";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, 'celsius'), "html");
        echo ",
\t\"fahrenheit\": ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, 'fahrenheit'), "html");
        echo "
]";
    }

    public function getTemplateName()
    {
        return "ManwinTrainingBundle:Converter:celsius.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
