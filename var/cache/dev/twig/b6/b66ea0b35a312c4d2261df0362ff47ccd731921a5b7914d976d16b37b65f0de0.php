<?php

/* OChomePageBundle:Default:404.html.twig */
class __TwigTemplate_0ef7198fd7757cd5eccbb49843f8ddb54772dc9837f8f34d2aca05f044bac183 extends Twig_Template
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
        $__internal_ad018adbbc7d298f645cd38fe15bf255d858e6632fd7e449dae004b544baff6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad018adbbc7d298f645cd38fe15bf255d858e6632fd7e449dae004b544baff6a->enter($__internal_ad018adbbc7d298f645cd38fe15bf255d858e6632fd7e449dae004b544baff6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:404.html.twig"));

        $__internal_9dd411323662ac60775f0cec1d065c18be1e6044e3ea3e74a821663ca3125df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd411323662ac60775f0cec1d065c18be1e6044e3ea3e74a821663ca3125df2->enter($__internal_9dd411323662ac60775f0cec1d065c18be1e6044e3ea3e74a821663ca3125df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:404.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>Default 404</title>
</head>
<body>
  <h1>Hello World this is 404 !</h1>
</body>
</html>";
        
        $__internal_ad018adbbc7d298f645cd38fe15bf255d858e6632fd7e449dae004b544baff6a->leave($__internal_ad018adbbc7d298f645cd38fe15bf255d858e6632fd7e449dae004b544baff6a_prof);

        
        $__internal_9dd411323662ac60775f0cec1d065c18be1e6044e3ea3e74a821663ca3125df2->leave($__internal_9dd411323662ac60775f0cec1d065c18be1e6044e3ea3e74a821663ca3125df2_prof);

    }

    public function getTemplateName()
    {
        return "OChomePageBundle:Default:404.html.twig";
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
  <title>Default 404</title>
</head>
<body>
  <h1>Hello World this is 404 !</h1>
</body>
</html>", "OChomePageBundle:Default:404.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\homePageBundle/Resources/views/Default/404.html.twig");
    }
}
