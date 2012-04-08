<?php

/* HomeBundle:Default:index.html.twig */
class __TwigTemplate_e45fdaf51c143fdcb0675577817716ee extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "HomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
