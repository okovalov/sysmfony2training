<?php

/* ManwinCustomerBundle:Mail:registration.txt.twig */
class __TwigTemplate_15bebc40ef018f05334f85885f743367 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Hi ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user'), "username", array(), "any", false), "html");
        echo "!

Thanks for registration to our website.
Below are your personal information.

Your password ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user'), "password", array(), "any", false), "html");
        echo "

Your email: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user'), "email", array(), "any", false), "html");
        echo "

";
        // line 10
        if ($this->getAttribute($this->getContext($context, 'user'), "birthdate", array(), "any", false)) {
            // line 11
            echo "Your birthdate: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'user'), "birthdate", array(), "any", false), "d/m/Y"), "html");
        }
        // line 13
        echo "
The website team.";
    }

    public function getTemplateName()
    {
        return "ManwinCustomerBundle:Mail:registration.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
