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
        $__internal_785fb9b681f66cf869d892ffb20268bd2f9ec3513b91f3db42ac8c1b7ff3c77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785fb9b681f66cf869d892ffb20268bd2f9ec3513b91f3db42ac8c1b7ff3c77d->enter($__internal_785fb9b681f66cf869d892ffb20268bd2f9ec3513b91f3db42ac8c1b7ff3c77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:begin.html.twig"));

        $__internal_c0a3461b203ae460ad8cbe8807c2d3535476374b22d5cb068815785e8ded77c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a3461b203ae460ad8cbe8807c2d3535476374b22d5cb068815785e8ded77c3->enter($__internal_c0a3461b203ae460ad8cbe8807c2d3535476374b22d5cb068815785e8ded77c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:begin.html.twig"));

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
        
        $__internal_785fb9b681f66cf869d892ffb20268bd2f9ec3513b91f3db42ac8c1b7ff3c77d->leave($__internal_785fb9b681f66cf869d892ffb20268bd2f9ec3513b91f3db42ac8c1b7ff3c77d_prof);

        
        $__internal_c0a3461b203ae460ad8cbe8807c2d3535476374b22d5cb068815785e8ded77c3->leave($__internal_c0a3461b203ae460ad8cbe8807c2d3535476374b22d5cb068815785e8ded77c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f67ecf3a68c1ed4313a56a5a43b560715b4fd54c37646be9e195ae54f0a301a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f67ecf3a68c1ed4313a56a5a43b560715b4fd54c37646be9e195ae54f0a301a->enter($__internal_7f67ecf3a68c1ed4313a56a5a43b560715b4fd54c37646be9e195ae54f0a301a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b1261c1c440613d69df0ec93eccbab18ae19f50748493ff80fec33c41087d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1261c1c440613d69df0ec93eccbab18ae19f50748493ff80fec33c41087d15->enter($__internal_2b1261c1c440613d69df0ec93eccbab18ae19f50748493ff80fec33c41087d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Folo The Source";
        
        $__internal_2b1261c1c440613d69df0ec93eccbab18ae19f50748493ff80fec33c41087d15->leave($__internal_2b1261c1c440613d69df0ec93eccbab18ae19f50748493ff80fec33c41087d15_prof);

        
        $__internal_7f67ecf3a68c1ed4313a56a5a43b560715b4fd54c37646be9e195ae54f0a301a->leave($__internal_7f67ecf3a68c1ed4313a56a5a43b560715b4fd54c37646be9e195ae54f0a301a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8228ccaf9d05670e47c502d76e006e481a4664e0d4bec7e581bf8318062a4481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8228ccaf9d05670e47c502d76e006e481a4664e0d4bec7e581bf8318062a4481->enter($__internal_8228ccaf9d05670e47c502d76e006e481a4664e0d4bec7e581bf8318062a4481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_20a6e4999cffaabfd1177056a34f292c72ca6f20140004c1664597b94a702395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a6e4999cffaabfd1177056a34f292c72ca6f20140004c1664597b94a702395->enter($__internal_20a6e4999cffaabfd1177056a34f292c72ca6f20140004c1664597b94a702395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_20a6e4999cffaabfd1177056a34f292c72ca6f20140004c1664597b94a702395->leave($__internal_20a6e4999cffaabfd1177056a34f292c72ca6f20140004c1664597b94a702395_prof);

        
        $__internal_8228ccaf9d05670e47c502d76e006e481a4664e0d4bec7e581bf8318062a4481->leave($__internal_8228ccaf9d05670e47c502d76e006e481a4664e0d4bec7e581bf8318062a4481_prof);

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
<body>", "OChomePageBundle:Default:begin.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/begin.html.twig");
    }
}
