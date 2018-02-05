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
        $__internal_a4c0cf310cad0221ff4069b1873772c56ab978cd07ae71095e20399eb2bab6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c0cf310cad0221ff4069b1873772c56ab978cd07ae71095e20399eb2bab6a4->enter($__internal_a4c0cf310cad0221ff4069b1873772c56ab978cd07ae71095e20399eb2bab6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:gallery.html.twig"));

        $__internal_dc56b0dfd910be63e3a387c42a47a0757626c51c15603f14c58dfa78400b4e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc56b0dfd910be63e3a387c42a47a0757626c51c15603f14c58dfa78400b4e88->enter($__internal_dc56b0dfd910be63e3a387c42a47a0757626c51c15603f14c58dfa78400b4e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:gallery.html.twig"));

        // line 1
        $this->loadTemplate("OChomePageBundle:Default:begin.html.twig", "OChomePageBundle:Default:gallery.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("OChomePageBundle:Default:topbar.html.twig", "OChomePageBundle:Default:gallery.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 39
        $this->loadTemplate("OChomePageBundle:Default:footer.html.twig", "OChomePageBundle:Default:gallery.html.twig", 39)->display($context);
        // line 40
        $this->loadTemplate("OChomePageBundle:Default:end.html.twig", "OChomePageBundle:Default:gallery.html.twig", 40)->display($context);
        
        $__internal_a4c0cf310cad0221ff4069b1873772c56ab978cd07ae71095e20399eb2bab6a4->leave($__internal_a4c0cf310cad0221ff4069b1873772c56ab978cd07ae71095e20399eb2bab6a4_prof);

        
        $__internal_dc56b0dfd910be63e3a387c42a47a0757626c51c15603f14c58dfa78400b4e88->leave($__internal_dc56b0dfd910be63e3a387c42a47a0757626c51c15603f14c58dfa78400b4e88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_46fc366d5e671f09ffbb8870b1dee85b8b2c7a1b2a88f6792d26a8a41bf4334d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46fc366d5e671f09ffbb8870b1dee85b8b2c7a1b2a88f6792d26a8a41bf4334d->enter($__internal_46fc366d5e671f09ffbb8870b1dee85b8b2c7a1b2a88f6792d26a8a41bf4334d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79657cd3ddf5cc8bbcb4c98148446246347113b336e21e17ccf87a1aa55d44fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79657cd3ddf5cc8bbcb4c98148446246347113b336e21e17ccf87a1aa55d44fa->enter($__internal_79657cd3ddf5cc8bbcb4c98148446246347113b336e21e17ccf87a1aa55d44fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      <div class=\"col s12 m6\">
        <iframe width=\"500\" height=\"300\" src=\"https://www.youtube.com/embed/5-txLZLQFyQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
      <div class=\"col s12 m6\">
        <iframe width=\"500\" height=\"300\" src=\"https://www.youtube.com/embed/9VK2J6fuPr8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
    </div>
    <div class=\"row musics\">
      <h2>Our Music</h2>
      <div class=\"col s12 m6\">
        <iframe width=\"500\" height=\"300\" src=\"https://www.youtube.com/embed/Y5xmB1U_zoM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
      <div class=\"col s12 m6\">
        <iframe width=\"500\" height=\"300\" src=\"https://www.youtube.com/embed/GG7ZeCG-uJk\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
    </div>
  </div>
";
        
        $__internal_79657cd3ddf5cc8bbcb4c98148446246347113b336e21e17ccf87a1aa55d44fa->leave($__internal_79657cd3ddf5cc8bbcb4c98148446246347113b336e21e17ccf87a1aa55d44fa_prof);

        
        $__internal_46fc366d5e671f09ffbb8870b1dee85b8b2c7a1b2a88f6792d26a8a41bf4334d->leave($__internal_46fc366d5e671f09ffbb8870b1dee85b8b2c7a1b2a88f6792d26a8a41bf4334d_prof);

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
        return array (  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  53 => 4,  44 => 3,  34 => 40,  32 => 39,  30 => 3,  28 => 2,  26 => 1,);
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
      <div class=\"col s12 m6\">
        <iframe width=\"500\" height=\"300\" src=\"https://www.youtube.com/embed/5-txLZLQFyQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
      <div class=\"col s12 m6\">
        <iframe width=\"500\" height=\"300\" src=\"https://www.youtube.com/embed/9VK2J6fuPr8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
    </div>
    <div class=\"row musics\">
      <h2>Our Music</h2>
      <div class=\"col s12 m6\">
        <iframe width=\"500\" height=\"300\" src=\"https://www.youtube.com/embed/Y5xmB1U_zoM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
      <div class=\"col s12 m6\">
        <iframe width=\"500\" height=\"300\" src=\"https://www.youtube.com/embed/GG7ZeCG-uJk\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
    </div>
  </div>
{% endblock %}
{% include 'OChomePageBundle:Default:footer.html.twig' %}
{% include 'OChomePageBundle:Default:end.html.twig' %}
", "OChomePageBundle:Default:gallery.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/gallery.html.twig");
    }
}
