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
        $__internal_102a9ce82be322b74bef5d4b155d4d927da8f178fc27b93d457f30f5a14486ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_102a9ce82be322b74bef5d4b155d4d927da8f178fc27b93d457f30f5a14486ea->enter($__internal_102a9ce82be322b74bef5d4b155d4d927da8f178fc27b93d457f30f5a14486ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:gallery.html.twig"));

        $__internal_927848b412d8c2b4f45c5f629d4dfddaa777cff7e51890f103da50405bbc5118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927848b412d8c2b4f45c5f629d4dfddaa777cff7e51890f103da50405bbc5118->enter($__internal_927848b412d8c2b4f45c5f629d4dfddaa777cff7e51890f103da50405bbc5118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:gallery.html.twig"));

        // line 1
        $this->loadTemplate("OChomePageBundle:Default:begin.html.twig", "OChomePageBundle:Default:gallery.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("OChomePageBundle:Default:topbar.html.twig", "OChomePageBundle:Default:gallery.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 77
        $this->loadTemplate("OChomePageBundle:Default:footer.html.twig", "OChomePageBundle:Default:gallery.html.twig", 77)->display($context);
        // line 78
        $this->loadTemplate("OChomePageBundle:Default:end.html.twig", "OChomePageBundle:Default:gallery.html.twig", 78)->display($context);
        
        $__internal_102a9ce82be322b74bef5d4b155d4d927da8f178fc27b93d457f30f5a14486ea->leave($__internal_102a9ce82be322b74bef5d4b155d4d927da8f178fc27b93d457f30f5a14486ea_prof);

        
        $__internal_927848b412d8c2b4f45c5f629d4dfddaa777cff7e51890f103da50405bbc5118->leave($__internal_927848b412d8c2b4f45c5f629d4dfddaa777cff7e51890f103da50405bbc5118_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91fcec66f24d654b7167ff2ab5307b04d51983607087b99aad7da0645c62041a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91fcec66f24d654b7167ff2ab5307b04d51983607087b99aad7da0645c62041a->enter($__internal_91fcec66f24d654b7167ff2ab5307b04d51983607087b99aad7da0645c62041a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a017fdc1ffdb76fec112d6698dbee4485d0feb54613d6949a42ab060377f9f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a017fdc1ffdb76fec112d6698dbee4485d0feb54613d6949a42ab060377f9f8d->enter($__internal_a017fdc1ffdb76fec112d6698dbee4485d0feb54613d6949a42ab060377f9f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
  <div class=\"container media pb-25\">
    <div class=\"row videos\">
      <h2>What we have done - Videos</h2>
      <div class=\"col s12 m6\">
        <iframe class=\"dropdown\" src=\"https://www.youtube.com/embed/5-txLZLQFyQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen data-activates=\"edit1\"></iframe>
        <ul id=\"edit1\" class=\"dropdown-content\">
          <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
          <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
        </ul>
      </div>
      <div class=\"col s12 m6\">
        <iframe class=\"dropdown\" src=\"https://www.youtube.com/embed/9VK2J6fuPr8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen data-activates=\"edit2\"></iframe>
        <ul id=\"edit2\" class=\"dropdown-content\">
          <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
          <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
        </ul>
      </div>
    </div>
    <div class=\"row musics\">
      <h2>Our Music</h2>
      <div class=\"col s12 m6\">
        <iframe class=\"dropdown\" src=\"https://www.youtube.com/embed/Y5xmB1U_zoM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen data-activates=\"edit3\"></iframe>
        <ul id=\"edit3\" class=\"dropdown-content\">
          <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
          <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
        </ul>
      </div>
      <div class=\"col s12 m6\">
        <iframe class=\"dropdown\" src=\"https://www.youtube.com/embed/GG7ZeCG-uJk\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen data-activates=\"edit4\"></iframe>
        <ul id=\"edit4\" class=\"dropdown-content\">
          <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
          <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
        </ul>
      </div>
    </div>
    
    <div class=\"center-align\">
      <a class=\"btn-floating btn-large waves-effect waves-light skyblue modal-trigger\" href=\"#addmodal\" data-target=\"addmodal\"><i class=\"material-icons\">add</i></a>
    </div>
  </div>
  <div id=\"addmodal\" class=\"modal center-align\">
    <form class=\"row modal-content\">
      <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/placeholder-square.jpg"), "html", null, true);
        echo "\" width=\"50%\" alt=\"insert media\">
      <div class=\"file-field input-field\">
        <div class=\"btn\">
          <span>File</span>
          <input type=\"file\">
        </div>
        <div class=\"file-path-wrapper\">
          <input class=\"file-path validate\" type=\"text\">
        </div>
      </div>
    </form>
    <div class=\"row p-0 mb-0\">
      <a class=\"col s6 p-25 red center-align white-text\" onclick=\"\$('.modal').modal('close')\"><i class=\"material-icons\">cancel</i></a>
      <a class=\"col s6 p-25 green center-align white-text\" onclick=\"Materialize.toast('Terminé !', 4000);\$('.modal').modal('close')\"><i class=\"material-icons\">check</i></a>
    </div>
  </div>
";
        
        $__internal_a017fdc1ffdb76fec112d6698dbee4485d0feb54613d6949a42ab060377f9f8d->leave($__internal_a017fdc1ffdb76fec112d6698dbee4485d0feb54613d6949a42ab060377f9f8d_prof);

        
        $__internal_91fcec66f24d654b7167ff2ab5307b04d51983607087b99aad7da0645c62041a->leave($__internal_91fcec66f24d654b7167ff2ab5307b04d51983607087b99aad7da0645c62041a_prof);

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
        return array (  138 => 60,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  53 => 4,  44 => 3,  34 => 78,  32 => 77,  30 => 3,  28 => 2,  26 => 1,);
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
  <div class=\"container media pb-25\">
    <div class=\"row videos\">
      <h2>What we have done - Videos</h2>
      <div class=\"col s12 m6\">
        <iframe class=\"dropdown\" src=\"https://www.youtube.com/embed/5-txLZLQFyQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen data-activates=\"edit1\"></iframe>
        <ul id=\"edit1\" class=\"dropdown-content\">
          <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
          <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
        </ul>
      </div>
      <div class=\"col s12 m6\">
        <iframe class=\"dropdown\" src=\"https://www.youtube.com/embed/9VK2J6fuPr8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen data-activates=\"edit2\"></iframe>
        <ul id=\"edit2\" class=\"dropdown-content\">
          <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
          <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
        </ul>
      </div>
    </div>
    <div class=\"row musics\">
      <h2>Our Music</h2>
      <div class=\"col s12 m6\">
        <iframe class=\"dropdown\" src=\"https://www.youtube.com/embed/Y5xmB1U_zoM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen data-activates=\"edit3\"></iframe>
        <ul id=\"edit3\" class=\"dropdown-content\">
          <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
          <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
        </ul>
      </div>
      <div class=\"col s12 m6\">
        <iframe class=\"dropdown\" src=\"https://www.youtube.com/embed/GG7ZeCG-uJk\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen data-activates=\"edit4\"></iframe>
        <ul id=\"edit4\" class=\"dropdown-content\">
          <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
          <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
        </ul>
      </div>
    </div>
    
    <div class=\"center-align\">
      <a class=\"btn-floating btn-large waves-effect waves-light skyblue modal-trigger\" href=\"#addmodal\" data-target=\"addmodal\"><i class=\"material-icons\">add</i></a>
    </div>
  </div>
  <div id=\"addmodal\" class=\"modal center-align\">
    <form class=\"row modal-content\">
      <img src=\"{{ asset('img/placeholder-square.jpg') }}\" width=\"50%\" alt=\"insert media\">
      <div class=\"file-field input-field\">
        <div class=\"btn\">
          <span>File</span>
          <input type=\"file\">
        </div>
        <div class=\"file-path-wrapper\">
          <input class=\"file-path validate\" type=\"text\">
        </div>
      </div>
    </form>
    <div class=\"row p-0 mb-0\">
      <a class=\"col s6 p-25 red center-align white-text\" onclick=\"\$('.modal').modal('close')\"><i class=\"material-icons\">cancel</i></a>
      <a class=\"col s6 p-25 green center-align white-text\" onclick=\"Materialize.toast('Terminé !', 4000);\$('.modal').modal('close')\"><i class=\"material-icons\">check</i></a>
    </div>
  </div>
{% endblock %}
{% include 'OChomePageBundle:Default:footer.html.twig' %}
{% include 'OChomePageBundle:Default:end.html.twig' %}
", "OChomePageBundle:Default:gallery.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/gallery.html.twig");
    }
}
