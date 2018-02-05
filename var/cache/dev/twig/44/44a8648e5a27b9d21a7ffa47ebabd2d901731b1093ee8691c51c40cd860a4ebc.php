<?php

/* OChomePageBundle:Default:gallery.html.twig */
class __TwigTemplate_24d4676fc165a8c8ab2ff23e965048217358b650806ea69749bc0a92a2501c6f extends Twig_Template
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
        $__internal_8df440236b1a64953f719f86bfaf9a2b6606f28a245c60f076f5274a76766a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df440236b1a64953f719f86bfaf9a2b6606f28a245c60f076f5274a76766a7c->enter($__internal_8df440236b1a64953f719f86bfaf9a2b6606f28a245c60f076f5274a76766a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:gallery.html.twig"));

        $__internal_388eefc29c07128b48014647525e9d53373ca05b26269f39f8302f4581d5f093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388eefc29c07128b48014647525e9d53373ca05b26269f39f8302f4581d5f093->enter($__internal_388eefc29c07128b48014647525e9d53373ca05b26269f39f8302f4581d5f093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:gallery.html.twig"));

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
        
        $__internal_8df440236b1a64953f719f86bfaf9a2b6606f28a245c60f076f5274a76766a7c->leave($__internal_8df440236b1a64953f719f86bfaf9a2b6606f28a245c60f076f5274a76766a7c_prof);

        
        $__internal_388eefc29c07128b48014647525e9d53373ca05b26269f39f8302f4581d5f093->leave($__internal_388eefc29c07128b48014647525e9d53373ca05b26269f39f8302f4581d5f093_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee11a4b245911ef4579845f5ae91e8181fd89069cc341e628944bda2380018df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee11a4b245911ef4579845f5ae91e8181fd89069cc341e628944bda2380018df->enter($__internal_ee11a4b245911ef4579845f5ae91e8181fd89069cc341e628944bda2380018df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c9242d65ffe52ee19eb5754cc9a53f7166b76c31774450a8ddca40fa2ff5ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9242d65ffe52ee19eb5754cc9a53f7166b76c31774450a8ddca40fa2ff5ca6->enter($__internal_7c9242d65ffe52ee19eb5754cc9a53f7166b76c31774450a8ddca40fa2ff5ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7c9242d65ffe52ee19eb5754cc9a53f7166b76c31774450a8ddca40fa2ff5ca6->leave($__internal_7c9242d65ffe52ee19eb5754cc9a53f7166b76c31774450a8ddca40fa2ff5ca6_prof);

        
        $__internal_ee11a4b245911ef4579845f5ae91e8181fd89069cc341e628944bda2380018df->leave($__internal_ee11a4b245911ef4579845f5ae91e8181fd89069cc341e628944bda2380018df_prof);

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
        return array (  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  53 => 4,  44 => 3,  34 => 32,  32 => 31,  30 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'OChomePageBundle:Default:begin.html.twig' %}
{% include 'OChomePageBundle:Default:topbar.html.twig' %}
{% block body %}
  <div class=\"row\">
    <div id=\"gallerycarousel\" class=\"carousel carousel-slider minh-33vh\">
      <h2>Our actions in Guinea</h2>
      <a class=\"carousel-item minh-33vh\" href=\"#one!\"><img class=\"minh-33vh\" src=\"{{ asset('img/inauguration.jpg') }}\" alt=\"well's inauguration\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#two!\"><img class=\"minh-33vh\" src=\"{{ asset('img/inauguration2.jpg') }}\" alt=\"well's inauguration\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#three!\"><img class=\"minh-33vh\" src=\"{{ asset('img/needwater.jpg') }}\" alt=\"people needs water\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#four!\"><img class=\"minh-33vh\" src=\"{{ asset('img/presentation.jpg') }}\" alt=\"well's presentation\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#five!\"><img class=\"minh-33vh\" src=\"{{ asset('img/water.jpg') }}\" alt=\"well's water\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#five!\"><img class=\"minh-33vh\" src=\"{{ asset('img/well.jpg') }}\" alt=\"well\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#five!\"><img class=\"minh-33vh\" src=\"{{ asset('img/well2.jpg') }}\" alt=\"well\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#five!\"><img class=\"minh-33vh\" src=\"{{ asset('img/well3.jpg') }}\" alt=\"well\"></a>
      <a class=\"carousel-item minh-33vh\" href=\"#five!\"><img class=\"minh-33vh\" src=\"{{ asset('img/people.jpg') }}\" alt=\"Guinea's people\"></a>
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
{% endblock %}
{% include 'OChomePageBundle:Default:footer.html.twig' %}
{% include 'OChomePageBundle:Default:end.html.twig' %}
", "OChomePageBundle:Default:gallery.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\homePageBundle/Resources/views/Default/gallery.html.twig");
    }
}
