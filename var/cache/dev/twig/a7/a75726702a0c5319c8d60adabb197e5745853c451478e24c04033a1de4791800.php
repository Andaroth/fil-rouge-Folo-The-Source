<?php

/* OChomePageBundle:Default:begin.html.twig */
class __TwigTemplate_ad00b656b70f9e079b6534cc25aedfb22dc6050cf34fedf230b8d731a50d4ffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82e0156b0aea843d9bfcd96166be091033bba8ed5c2bdcaebd646cb159f3bded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e0156b0aea843d9bfcd96166be091033bba8ed5c2bdcaebd646cb159f3bded->enter($__internal_82e0156b0aea843d9bfcd96166be091033bba8ed5c2bdcaebd646cb159f3bded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:begin.html.twig"));

        $__internal_e495aea02ae361b416ed3224637becd31dca54b541c3cf1531b1a14738299878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e495aea02ae361b416ed3224637becd31dca54b541c3cf1531b1a14738299878->enter($__internal_e495aea02ae361b416ed3224637becd31dca54b541c3cf1531b1a14738299878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:begin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
  ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
<body>";
        
        $__internal_82e0156b0aea843d9bfcd96166be091033bba8ed5c2bdcaebd646cb159f3bded->leave($__internal_82e0156b0aea843d9bfcd96166be091033bba8ed5c2bdcaebd646cb159f3bded_prof);

        
        $__internal_e495aea02ae361b416ed3224637becd31dca54b541c3cf1531b1a14738299878->leave($__internal_e495aea02ae361b416ed3224637becd31dca54b541c3cf1531b1a14738299878_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_85a328aba36d5456cf3d1319e3236b5ccdc44490c1eb0178dc0b6ca00b0f5ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a328aba36d5456cf3d1319e3236b5ccdc44490c1eb0178dc0b6ca00b0f5ad2->enter($__internal_85a328aba36d5456cf3d1319e3236b5ccdc44490c1eb0178dc0b6ca00b0f5ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c4428a1518598db9e5c4609b1c479d0ac07f5bab0c9f363522f7ed59f22ac774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4428a1518598db9e5c4609b1c479d0ac07f5bab0c9f363522f7ed59f22ac774->enter($__internal_c4428a1518598db9e5c4609b1c479d0ac07f5bab0c9f363522f7ed59f22ac774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Folo The Source";
        
        $__internal_c4428a1518598db9e5c4609b1c479d0ac07f5bab0c9f363522f7ed59f22ac774->leave($__internal_c4428a1518598db9e5c4609b1c479d0ac07f5bab0c9f363522f7ed59f22ac774_prof);

        
        $__internal_85a328aba36d5456cf3d1319e3236b5ccdc44490c1eb0178dc0b6ca00b0f5ad2->leave($__internal_85a328aba36d5456cf3d1319e3236b5ccdc44490c1eb0178dc0b6ca00b0f5ad2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92319feb0c0239789f4e4c0282abc8d328df641d8cd7df8d3dc1e94e9960d59d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92319feb0c0239789f4e4c0282abc8d328df641d8cd7df8d3dc1e94e9960d59d->enter($__internal_92319feb0c0239789f4e4c0282abc8d328df641d8cd7df8d3dc1e94e9960d59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2a0b2a10444ca1c3f2e5dc4344f361ac468319822a977326729abb2af008d6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0b2a10444ca1c3f2e5dc4344f361ac468319822a977326729abb2af008d6a2->enter($__internal_2a0b2a10444ca1c3f2e5dc4344f361ac468319822a977326729abb2af008d6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fonts.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_2a0b2a10444ca1c3f2e5dc4344f361ac468319822a977326729abb2af008d6a2->leave($__internal_2a0b2a10444ca1c3f2e5dc4344f361ac468319822a977326729abb2af008d6a2_prof);

        
        $__internal_92319feb0c0239789f4e4c0282abc8d328df641d8cd7df8d3dc1e94e9960d59d->leave($__internal_92319feb0c0239789f4e4c0282abc8d328df641d8cd7df8d3dc1e94e9960d59d_prof);

    }

    public function getTemplateName()
    {
        return "OChomePageBundle:Default:begin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 10,  83 => 9,  78 => 8,  69 => 7,  51 => 5,  40 => 12,  38 => 7,  33 => 5,  27 => 1,);
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
  <title>{% block title %}Folo The Source{% endblock %}</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
  {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/fonts.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/materialize.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
  {% endblock %}
</head>
<body>", "OChomePageBundle:Default:begin.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\homePageBundle/Resources/views/Default/begin.html.twig");
    }
}
