<?php

/* OChomePageBundle:Default:begin.html.twig */
class __TwigTemplate_95d9468ec3c3e354d7c9da52117f5ba62b20858471decb56f13e1675836a749c extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Folo The Source";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "OChomePageBundle:Default:begin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  53 => 9,  48 => 8,  45 => 7,  39 => 5,  34 => 12,  32 => 7,  27 => 5,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OChomePageBundle:Default:begin.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/begin.html.twig");
    }
}
