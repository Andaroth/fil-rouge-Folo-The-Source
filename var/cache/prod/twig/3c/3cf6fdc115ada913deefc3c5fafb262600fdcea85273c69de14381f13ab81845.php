<?php

/* OChomePageBundle:Default:topbar.html.twig */
class __TwigTemplate_4013b111fef8771c81098ab64691a3c2f344d17abb96fc904396c1beeb042024 extends Twig_Template
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
        // line 1
        echo "<nav class=\"black\">
    <div class=\"nav-wrapper container\">
      <a href=\"#\" class=\"brand-logo\"><span class=\"nomobile\">Folo The </span>Source</a>
      <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
        <li><a href=\"./\">Home</a></li>
        <li><a href=\"./events\">Events</a></li>
        <li><a href=\"./gallery\">Gallery</a></li>
        <li><a href=\"./contact\">Contact</a></li>
      </ul>
    </div>
  </nav>
";
    }

    public function getTemplateName()
    {
        return "OChomePageBundle:Default:topbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OChomePageBundle:Default:topbar.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/topbar.html.twig");
    }
}
