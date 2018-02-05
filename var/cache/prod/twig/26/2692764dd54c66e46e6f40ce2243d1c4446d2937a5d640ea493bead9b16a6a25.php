<?php

/* OChomePageBundle:Default:test.html.twig */
class __TwigTemplate_09f442d2e0d89e4319889b0e1f6822d69b99c3747e387f18f99dcb2567127d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("OChomePageBundle:Default:begin.html.twig", "OChomePageBundle:Default:test.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("OChomePageBundle:Default:topbar.html.twig", "OChomePageBundle:Default:test.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 11
        $this->loadTemplate("OChomePageBundle:Default:footer.html.twig", "OChomePageBundle:Default:test.html.twig", 11)->display($context);
        // line 12
        $this->loadTemplate("OChomePageBundle:Default:end.html.twig", "OChomePageBundle:Default:test.html.twig", 12)->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
  <div class=\"card\">
    <h2>Test</h2>
    <p>Bonjour</p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OChomePageBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  28 => 12,  26 => 11,  24 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OChomePageBundle:Default:test.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/test.html.twig");
    }
}
