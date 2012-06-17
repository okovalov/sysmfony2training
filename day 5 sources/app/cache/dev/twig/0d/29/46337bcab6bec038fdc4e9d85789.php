<?php

/* ManwinTrainingBundle:Converter:celsius.xml.twig */
class __TwigTemplate_0d2946337bcab6bec038fdc4e9d85789 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<converter>
\t<celsius>";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, 'celsius'), "html");
        echo "</celsius>
\t<fahrenheit>";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, 'fahrenheit'), "html");
        echo "</fahrenheit>
</converter>";
    }

    public function getTemplateName()
    {
        return "ManwinTrainingBundle:Converter:celsius.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
