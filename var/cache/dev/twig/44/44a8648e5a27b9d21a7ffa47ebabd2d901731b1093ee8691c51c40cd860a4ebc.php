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
        $__internal_7106fc32fcbe5d9bccbfe6b2e7fd9fe36e0a6a54b7f6b48608437e25f208a807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7106fc32fcbe5d9bccbfe6b2e7fd9fe36e0a6a54b7f6b48608437e25f208a807->enter($__internal_7106fc32fcbe5d9bccbfe6b2e7fd9fe36e0a6a54b7f6b48608437e25f208a807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:gallery.html.twig"));

        $__internal_4399634aab5c1dd5ea34d7cf459b5475d1bd8c5476b4e39235e5fb438d2c6e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4399634aab5c1dd5ea34d7cf459b5475d1bd8c5476b4e39235e5fb438d2c6e5f->enter($__internal_4399634aab5c1dd5ea34d7cf459b5475d1bd8c5476b4e39235e5fb438d2c6e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:gallery.html.twig"));

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
        
        $__internal_7106fc32fcbe5d9bccbfe6b2e7fd9fe36e0a6a54b7f6b48608437e25f208a807->leave($__internal_7106fc32fcbe5d9bccbfe6b2e7fd9fe36e0a6a54b7f6b48608437e25f208a807_prof);

        
        $__internal_4399634aab5c1dd5ea34d7cf459b5475d1bd8c5476b4e39235e5fb438d2c6e5f->leave($__internal_4399634aab5c1dd5ea34d7cf459b5475d1bd8c5476b4e39235e5fb438d2c6e5f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ff0bb6fefaca8e99a4719634eaec6abc141050a4351371f76cc7022b3ef3c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff0bb6fefaca8e99a4719634eaec6abc141050a4351371f76cc7022b3ef3c34->enter($__internal_9ff0bb6fefaca8e99a4719634eaec6abc141050a4351371f76cc7022b3ef3c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f648f5fd9300fd683c90c2ed57ca117200927aaa784ca941981db3a6c8c7827f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f648f5fd9300fd683c90c2ed57ca117200927aaa784ca941981db3a6c8c7827f->enter($__internal_f648f5fd9300fd683c90c2ed57ca117200927aaa784ca941981db3a6c8c7827f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"row media\">
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
        <iframe src=\"https://www.youtube.com/embed/5-txLZLQFyQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
      <div class=\"col s12 m6\">
        <iframe src=\"https://www.youtube.com/embed/9VK2J6fuPr8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
    </div>
    <div class=\"row musics\">
      <h2>Our Music</h2>
      <div class=\"col s12 m6\">
        <iframe src=\"https://www.youtube.com/embed/Y5xmB1U_zoM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
      <div class=\"col s12 m6\">
        <iframe src=\"https://www.youtube.com/embed/GG7ZeCG-uJk\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
    </div>
  </div>
";
        
        $__internal_f648f5fd9300fd683c90c2ed57ca117200927aaa784ca941981db3a6c8c7827f->leave($__internal_f648f5fd9300fd683c90c2ed57ca117200927aaa784ca941981db3a6c8c7827f_prof);

        
        $__internal_9ff0bb6fefaca8e99a4719634eaec6abc141050a4351371f76cc7022b3ef3c34->leave($__internal_9ff0bb6fefaca8e99a4719634eaec6abc141050a4351371f76cc7022b3ef3c34_prof);

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
  <div class=\"row media\">
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
        <iframe src=\"https://www.youtube.com/embed/5-txLZLQFyQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
      <div class=\"col s12 m6\">
        <iframe src=\"https://www.youtube.com/embed/9VK2J6fuPr8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
    </div>
    <div class=\"row musics\">
      <h2>Our Music</h2>
      <div class=\"col s12 m6\">
        <iframe src=\"https://www.youtube.com/embed/Y5xmB1U_zoM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
      <div class=\"col s12 m6\">
        <iframe src=\"https://www.youtube.com/embed/GG7ZeCG-uJk\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
      </div>
    </div>
  </div>
{% endblock %}
{% include 'OChomePageBundle:Default:footer.html.twig' %}
{% include 'OChomePageBundle:Default:end.html.twig' %}
", "OChomePageBundle:Default:gallery.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/gallery.html.twig");
    }
}
