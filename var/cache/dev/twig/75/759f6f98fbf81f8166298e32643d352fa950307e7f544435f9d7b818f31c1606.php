<?php

/* OChomePageBundle:Default:about.html.twig */
class __TwigTemplate_bfb573fa8a6b6661d45c67ff1544085b5268601bd7e6d816566486bfe86b7b43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b196dd02fa3195d77dd6d3ebcd03d5c8649e74f4421f7124a3f12005d05e3bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b196dd02fa3195d77dd6d3ebcd03d5c8649e74f4421f7124a3f12005d05e3bbe->enter($__internal_b196dd02fa3195d77dd6d3ebcd03d5c8649e74f4421f7124a3f12005d05e3bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:about.html.twig"));

        $__internal_4250eb57f864100a3b66cc48f7bf95fa51ace567fca95cc9d8a96b56bbff1cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4250eb57f864100a3b66cc48f7bf95fa51ace567fca95cc9d8a96b56bbff1cf8->enter($__internal_4250eb57f864100a3b66cc48f7bf95fa51ace567fca95cc9d8a96b56bbff1cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:about.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>Default About</title>
</head>
<body>
  <h1>Hello World this is About ! </h1>
</body>
</html>";
        
        $__internal_b196dd02fa3195d77dd6d3ebcd03d5c8649e74f4421f7124a3f12005d05e3bbe->leave($__internal_b196dd02fa3195d77dd6d3ebcd03d5c8649e74f4421f7124a3f12005d05e3bbe_prof);

        
        $__internal_4250eb57f864100a3b66cc48f7bf95fa51ace567fca95cc9d8a96b56bbff1cf8->leave($__internal_4250eb57f864100a3b66cc48f7bf95fa51ace567fca95cc9d8a96b56bbff1cf8_prof);

    }

    public function getTemplateName()
    {
        return "OChomePageBundle:Default:about.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>Default About</title>
</head>
<body>
  <h1>Hello World this is About ! </h1>
</body>
</html>", "OChomePageBundle:Default:about.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\homePageBundle/Resources/views/Default/about.html.twig");
    }
}
