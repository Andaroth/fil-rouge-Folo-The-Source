<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_3ca975b46a053a6d1c2df58c1630340e56907e9f47d6acab5de7f8863a461c3f extends Twig_Template
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
        $__internal_b20b6ed2744ec6abddf6c2db150237f0c187979509388602e54ea074100109a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b20b6ed2744ec6abddf6c2db150237f0c187979509388602e54ea074100109a1->enter($__internal_b20b6ed2744ec6abddf6c2db150237f0c187979509388602e54ea074100109a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_a9b716ff236e580cbb8559b47bc6e6b3bb9a68ea3bfd962d00e592c7ecbe8289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b716ff236e580cbb8559b47bc6e6b3bb9a68ea3bfd962d00e592c7ecbe8289->enter($__internal_a9b716ff236e580cbb8559b47bc6e6b3bb9a68ea3bfd962d00e592c7ecbe8289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>Document</title>
</head>
<body>
  <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) + 1), "html", null, true);
        echo "\">Link to here +1 : ";
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) + 1), "html", null, true);
        echo "</a>
</body>
</html>";
        
        $__internal_b20b6ed2744ec6abddf6c2db150237f0c187979509388602e54ea074100109a1->leave($__internal_b20b6ed2744ec6abddf6c2db150237f0c187979509388602e54ea074100109a1_prof);

        
        $__internal_a9b716ff236e580cbb8559b47bc6e6b3bb9a68ea3bfd962d00e592c7ecbe8289->leave($__internal_a9b716ff236e580cbb8559b47bc6e6b3bb9a68ea3bfd962d00e592c7ecbe8289_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  25 => 1,);
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
  <title>Document</title>
</head>
<body>
  <a href=\"{{url}}/{{id+1}}\">Link to here +1 : {{id+1}}</a>
</body>
</html>", "OCPlatformBundle:Advert:view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
