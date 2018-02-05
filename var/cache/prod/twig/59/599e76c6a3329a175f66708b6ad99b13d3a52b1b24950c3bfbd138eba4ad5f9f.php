<?php

/* OChomePageBundle:Default:gallery.html.twig */
class __TwigTemplate_3682518c189df5668ee6f678a4be9bef2bc3425b4154def9aa894cd9a5909dd7 extends Twig_Template
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
        $this->loadTemplate("OChomePageBundle:Default:begin.html.twig", "OChomePageBundle:Default:gallery.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("OChomePageBundle:Default:topbar.html.twig", "OChomePageBundle:Default:gallery.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 31
        $this->loadTemplate("OChomePageBundle:Default:footer.html.twig", "OChomePageBundle:Default:gallery.html.twig", 31)->display($context);
        // line 32
        $this->loadTemplate("OChomePageBundle:Default:end.html.twig", "OChomePageBundle:Default:gallery.html.twig", 32)->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"row\">
    <div id=\"gallerycarousel\" class=\"carousel carousel-slider minh-33vh\">
      <h2>Our actions in Guinea</h2>
      <a class=\"carousel-item minh-33vh\" href=\"#one!\"><img class=\"minh-33vh\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/inauguration.jpg"), "html", null, true);
        echo "\" alt=\"well's inauguration\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#two!\"><img class=\"minh-33vh\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/inauguration2.jpg"), "html", null, true);
        echo "\" alt=\"well's inauguration\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#three!\"><img class=\"minh-33vh\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/needwater.jpg"), "html", null, true);
        echo "\" alt=\"people needs water\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#four!\"><img class=\"minh-33vh\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/presentation.jpg"), "html", null, true);
        echo "\" alt=\"well's presentation\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#five!\"><img class=\"minh-33vh\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/water.jpg"), "html", null, true);
        echo "\" alt=\"well's water\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#five!\"><img class=\"minh-33vh\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/well.jpg"), "html", null, true);
        echo "\" alt=\"well\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#five!\"><img class=\"minh-33vh\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/well2.jpg"), "html", null, true);
        echo "\" alt=\"well\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#five!\"><img class=\"minh-33vh\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/well3.jpg"), "html", null, true);
        echo "\" alt=\"well\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#five!\"><img class=\"minh-33vh\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/people.jpg"), "html", null, true);
        echo "\" alt=\"Guinea's people\"></a>
    </div>
  </div>
  <div class=\"container media\">
    <div class=\"row videos\">
      <h2>What we have done - Videos</h2>
      <iframe width=\"500\" height=\"300\" src=\"https://www.youtube.com/embed/5-txLZLQFyQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      <iframe width=\"500\" height=\"300\" src=\"https://www.youtube.com/embed/9VK2J6fuPr8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
    </div>
    <div class=\"row musics\">
      <h2>Our Music</h2>
      <iframe width=\"500\" height=\"300\" src=\"https://www.youtube.com/embed/Y5xmB1U_zoM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      <iframe width=\"500\" height=\"300\" src=\"https://www.youtube.com/embed/GG7ZeCG-uJk\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "OChomePageBundle:Default:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  35 => 4,  32 => 3,  28 => 32,  26 => 31,  24 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OChomePageBundle:Default:gallery.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/gallery.html.twig");
    }
}
