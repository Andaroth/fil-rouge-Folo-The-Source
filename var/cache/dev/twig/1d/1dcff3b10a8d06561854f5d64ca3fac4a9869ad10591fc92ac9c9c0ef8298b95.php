<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_6ffafccb5db0ee1beb031a0d0bff508688477f4ef2490e9b2fd4efd5b9372b5b extends Twig_Template
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
        $__internal_83f03002dbcb3ca516687d64e9de8b38cde70a7e7fde61c1ebb36a49b05ce6f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f03002dbcb3ca516687d64e9de8b38cde70a7e7fde61c1ebb36a49b05ce6f3->enter($__internal_83f03002dbcb3ca516687d64e9de8b38cde70a7e7fde61c1ebb36a49b05ce6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        $__internal_2e80bef8cb79a180e0b1e15f46a0469aa7697a31987884fee577c99a6dae0cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e80bef8cb79a180e0b1e15f46a0469aa7697a31987884fee577c99a6dae0cdc->enter($__internal_2e80bef8cb79a180e0b1e15f46a0469aa7697a31987884fee577c99a6dae0cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>Premier projet</title>
</head>
<body>
  Hello World ! 
</body>
</html>";
        
        $__internal_83f03002dbcb3ca516687d64e9de8b38cde70a7e7fde61c1ebb36a49b05ce6f3->leave($__internal_83f03002dbcb3ca516687d64e9de8b38cde70a7e7fde61c1ebb36a49b05ce6f3_prof);

        
        $__internal_2e80bef8cb79a180e0b1e15f46a0469aa7697a31987884fee577c99a6dae0cdc->leave($__internal_2e80bef8cb79a180e0b1e15f46a0469aa7697a31987884fee577c99a6dae0cdc_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
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
  <title>Premier projet</title>
</head>
<body>
  Hello World ! 
</body>
</html>", "OCPlatformBundle:Default:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
