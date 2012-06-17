<?php

/* ManwinTrainingBundle:Default:counter.html.twig */
class __TwigTemplate_85c4e0cd96198b41992f577e1844efc0 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("{0} None is connected!|
{1} Only one is connected|
]1,Inf] There are %counter% people connected", $this->getContext($context, 'counter'), array("%counter%" => $this->getContext($context, 'counter'), ), "messages");
    }

    public function getTemplateName()
    {
        return "ManwinTrainingBundle:Default:counter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
