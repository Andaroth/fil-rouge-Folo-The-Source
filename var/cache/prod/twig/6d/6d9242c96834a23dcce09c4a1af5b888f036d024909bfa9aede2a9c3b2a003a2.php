<?php

/* OChomePageBundle:Default:end.html.twig */
class __TwigTemplate_3a8b2b1b2d79339b478de5e4adeaf1e491179540ae032d45cdc12aa63d282580 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 6
        echo "</body>
</html>";
    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        // line 2
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "OChomePageBundle:Default:end.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  35 => 3,  30 => 2,  27 => 1,  22 => 6,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OChomePageBundle:Default:end.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/end.html.twig");
    }
}
