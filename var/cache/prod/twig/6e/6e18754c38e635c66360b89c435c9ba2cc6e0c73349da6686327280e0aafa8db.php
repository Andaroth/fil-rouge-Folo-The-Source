<?php

/* OChomePageBundle:Default:footer.html.twig */
class __TwigTemplate_200d1ba64da712f8139a8dd6c0b337ffb18e9040b8064dacaee186e42fd425be extends Twig_Template
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
        echo "<footer class=\"page-footer orange darken-1\">
  <div class=\"container\" style=\"text-align: center;\">
    <br>
    <div class=\"row\">
      <div class=\"col s2\">
        <a href=\"http://www.facebook.com/folothesource\">
          <img width=\"50px\" height=\"50px\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/facebook.svg"), "html", null, true);
        echo "\" alt=\"facebook icon\" width=\"15\">
        </a>
      </div>
      <div class=\"col s2\">
        <a href=\"http://twitter.com/namungroup\">
          <img width=\"50px\" height=\"50px\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/twitter.svg"), "html", null, true);
        echo "\" alt=\"twitter icon\" width=\"15\">
        </a>
      </div>
      <div class=\"col s2\">
        <a href=\"https://www.youtube.com/playlist?list=PLJdqS1pVwcEoUKy7zuJ0nC_iXgcVz5wUc\">
          <img width=\"50px\" height=\"50px\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/youtube.svg"), "html", null, true);
        echo "\" alt=\"youtube icon\" width=\"15\">
        </a>
      </div>
      <div class=\"col s2\">
        <a href=\"https://www.flickr.com/photos/namungroup/albums/72157649505355783\">
          <img width=\"50px\" height=\"50px\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/flickr.svg"), "html", null, true);
        echo "\" alt=\"flickr icon\" width=\"15\">
        </a>
      </div>
      <div class=\"col s2\">
        <a href=\"skype: namun.management\">
          <img width=\"50px\" height=\"50px\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/skype.svg"), "html", null, true);
        echo "\" alt=\"skype icon\" width=\"15\">
        </a>
      </div>
      <div class=\"col s2\">
        <a href=\"http://folothesource.com/feed/\">
          <img width=\"50px\" height=\"50px\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/rss.svg"), "html", null, true);
        echo "\" alt=\"rss icon\" width=\"15\">
        </a>
      </div>
      <br><br><br>
    </div>
  </div>
  <div class=\"footer-copyright\">
    <div class=\"container\">
      &copy; Folo-The-Source 2018
      <a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
    </div>
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "OChomePageBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 32,  59 => 27,  51 => 22,  43 => 17,  35 => 12,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OChomePageBundle:Default:footer.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/footer.html.twig");
    }
}
