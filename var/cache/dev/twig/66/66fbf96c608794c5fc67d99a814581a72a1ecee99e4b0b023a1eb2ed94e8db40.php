<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_743c897e6d52530ac27ea37dcf34600727bbc290d312ac05d13225f8d4601518 extends Twig_Template
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
        $__internal_90228457d09ebb644348c3bf5ef9b79e0d39169ca2f9d7b9df125936f6271584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90228457d09ebb644348c3bf5ef9b79e0d39169ca2f9d7b9df125936f6271584->enter($__internal_90228457d09ebb644348c3bf5ef9b79e0d39169ca2f9d7b9df125936f6271584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_ca4e8ac9239ba612c8503f58c10884b344e30e2885d1de8f22142afd7dda747e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4e8ac9239ba612c8503f58c10884b344e30e2885d1de8f22142afd7dda747e->enter($__internal_ca4e8ac9239ba612c8503f58c10884b344e30e2885d1de8f22142afd7dda747e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["hello"]) ? $context["hello"] : $this->getContext($context, "hello")), "html", null, true);
        echo "</title>
</head>
<body>
  <p>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["hello"]) ? $context["hello"] : $this->getContext($context, "hello")), "html", null, true);
        echo "</p>
</body>
</html>";
        
        $__internal_90228457d09ebb644348c3bf5ef9b79e0d39169ca2f9d7b9df125936f6271584->leave($__internal_90228457d09ebb644348c3bf5ef9b79e0d39169ca2f9d7b9df125936f6271584_prof);

        
        $__internal_ca4e8ac9239ba612c8503f58c10884b344e30e2885d1de8f22142afd7dda747e->leave($__internal_ca4e8ac9239ba612c8503f58c10884b344e30e2885d1de8f22142afd7dda747e_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 5,  25 => 1,);
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
  <title>{{hello}}</title>
</head>
<body>
  <p>{{hello}}</p>
</body>
</html>", "OCPlatformBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
