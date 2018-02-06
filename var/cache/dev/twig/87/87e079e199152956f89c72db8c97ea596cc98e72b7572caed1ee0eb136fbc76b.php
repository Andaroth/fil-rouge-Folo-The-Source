<?php

/* OChomePageBundle:Default:events.html.twig */
class __TwigTemplate_6ae2b2346bcb49ba86339179748b1caacf8c8dccfbdf46993a6ecbcf6f0d6413 extends Twig_Template
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
        $__internal_1f03c4b7e294c8144675b38a7535414c6674734b835e898e7096467096daeb58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f03c4b7e294c8144675b38a7535414c6674734b835e898e7096467096daeb58->enter($__internal_1f03c4b7e294c8144675b38a7535414c6674734b835e898e7096467096daeb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:events.html.twig"));

        $__internal_684170e38ad1d4bff8d9317b46214f473ed03aa706234aba30866d2947938097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684170e38ad1d4bff8d9317b46214f473ed03aa706234aba30866d2947938097->enter($__internal_684170e38ad1d4bff8d9317b46214f473ed03aa706234aba30866d2947938097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:events.html.twig"));

        // line 1
        $this->loadTemplate("OChomePageBundle:Default:begin.html.twig", "OChomePageBundle:Default:events.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("OChomePageBundle:Default:topbar.html.twig", "OChomePageBundle:Default:events.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 208
        $this->loadTemplate("OChomePageBundle:Default:footer.html.twig", "OChomePageBundle:Default:events.html.twig", 208)->display($context);
        // line 209
        $this->loadTemplate("OChomePageBundle:Default:end.html.twig", "OChomePageBundle:Default:events.html.twig", 209)->display($context);
        
        $__internal_1f03c4b7e294c8144675b38a7535414c6674734b835e898e7096467096daeb58->leave($__internal_1f03c4b7e294c8144675b38a7535414c6674734b835e898e7096467096daeb58_prof);

        
        $__internal_684170e38ad1d4bff8d9317b46214f473ed03aa706234aba30866d2947938097->leave($__internal_684170e38ad1d4bff8d9317b46214f473ed03aa706234aba30866d2947938097_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fba715fbef0305949af40d53e2a9b3809c68d2e44f5e70e469c54fdddb15fd30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba715fbef0305949af40d53e2a9b3809c68d2e44f5e70e469c54fdddb15fd30->enter($__internal_fba715fbef0305949af40d53e2a9b3809c68d2e44f5e70e469c54fdddb15fd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_146a0ff70e3e93f06acbcfabed96e312de13aeb5ede6c35713cb565db4ccc99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146a0ff70e3e93f06acbcfabed96e312de13aeb5ede6c35713cb565db4ccc99a->enter($__internal_146a0ff70e3e93f06acbcfabed96e312de13aeb5ede6c35713cb565db4ccc99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"orange darken-4 pt-25 pb-25\">
    <div class=\"container\">

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/hexagon.jpg"), "html", null, true);
        echo "\" class=\"mw-270\" alt=\"The Hexagon\">
            </div>
            <div class=\"card-stacked\">
              <div class=\"card-content\">
                <p><strong>18/11/2017</strong></p>
                <p><i>The Hexagon</i></p>
                <p>Reading, United Kingdom</p>
              </div>
              
              <div class=\"card-action\">
               
                <a class=\"deep-orange-text text-darken-4\" href=\"https://www.bandsintown.com/e/17649409?app_id=js_folothesource.com&came_from=242&affiliate_code=js_folothesource.com\" target=\"_blank\">Plus d'info</a>
                
                <a class=\"deep-orange-text text-darken-4 dropdown\" href=\"#\" data-activates=\"edit1\">Éditer <i class=\"tiny material-icons\">expand_more</i></a>
                
              </div>
              
              
              <ul id=\"edit1\" class=\"dropdown-content\">
               
                <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
                
                <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
                
              </ul>
              
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/sold_out.jpg"), "html", null, true);
        echo "\" class=\"mw-270\" alt=\"Wedgewood Rooms\">
            </div>
            <div class=\"card-stacked\">
              <div class=\"card-content\">
                <p><strong>17/11/2017</strong></p>
                <p><i>Wedgewood Rooms</i></p>
                <p>Southsea, United Kingdom</p>
              </div>
              <div class=\"card-action\">
                <a class=\"deep-orange-text text-darken-4\" href=\"https://www.bandsintown.com/e/17649408?app_id=js_folothesource.com&came_from=242&affiliate_code=js_folothesource.com\" target=\"_blank\">Plus d'info</a>
                <a class=\"deep-orange-text text-darken-4 dropdown\" href=\"#\" data-activates=\"edit2\">Éditer <i class=\"tiny material-icons\">expand_more</i></a>
              </div>
              <ul id=\"edit2\" class=\"dropdown-content\">
                <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
                <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/yum.jpg"), "html", null, true);
        echo "\" class=\"mw-270\" alt=\"The Junction\">
            </div>
            <div class=\"card-stacked\">
              <div class=\"card-content\">
                <p><strong>15/11/2017</strong></p>
                <p><i>The Junction</i></p>
                <p>Cambridge, United Kingdom</p>
              </div>
              <div class=\"card-action\">
                <a class=\"deep-orange-text text-darken-4\" href=\"https://www.bandsintown.com/e/17649404?app_id=js_folothesource.com&came_from=242&affiliate_code=js_folothesource.com\" target=\"_blank\">Plus d'info</a>
                <a class=\"deep-orange-text text-darken-4 dropdown\" href=\"#\" data-activates=\"edit3\">Éditer <i class=\"tiny material-icons\">expand_more</i></a>
              </div>
              <ul id=\"edit3\" class=\"dropdown-content\">
                <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
                <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>

         <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/glasgow.jpg"), "html", null, true);
        echo "\" class=\"mw-270\" alt=\"The Glasgow Royal Concert Hall\">
            </div>
            <div class=\"card-stacked\">
              <div class=\"card-content\">
                <p><strong>09/11/2017</strong></p>
                <p><i>The Glasgow Royal Concert Hall</i></p>
                <p>Glasgow, United Kingdom</p>
              </div>
              <div class=\"card-action\">
                <a class=\"deep-orange-text text-darken-4\" href=\"https://www.bandsintown.com/e/17649398?app_id=js_folothesource.com&came_from=242&affiliate_code=js_folothesource.com\" target=\"_blank\">Plus d'info</a>
                <a class=\"deep-orange-text text-darken-4 dropdown\" href=\"#\" data-activates=\"edit4\">Éditer <i class=\"tiny material-icons\">expand_more</i></a>
              </div>
              <ul id=\"edit4\" class=\"dropdown-content\">
                <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
                <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/palm.jpeg"), "html", null, true);
        echo "\" class=\"mw-270\" alt=\"Palm Camayenne\">
            </div>
            <div class=\"card-stacked\">
              <div class=\"card-content\">
                <p><strong>27/10/2017</strong></p>
                <p><i>Palm Camayenne</i></p>
                <p>Conakry, Guinea</p>
              </div>
              <div class=\"card-action\">
                <a class=\"deep-orange-text text-darken-4\" href=\"https://www.bandsintown.com/e/20167785?app_id=js_folothesource.com&came_from=242&affiliate_code=js_folothesource.com\" target=\"_blank\">Plus d'info</a>
                <a class=\"deep-orange-text text-darken-4 dropdown\" href=\"#\" data-activates=\"edit5\">Éditer <i class=\"tiny material-icons\">expand_more</i></a>
              </div>
              <ul id=\"edit5\" class=\"dropdown-content\">
                <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
                <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/arcadia.jpg"), "html", null, true);
        echo "\" class=\"mw-270\" alt=\"Arcadia Stage\">
            </div>
            <div class=\"card-stacked\">
              <div class=\"card-content\">
                <p><strong>25/06/2017</strong></p>
                <p><i>Arcadia Stage</i> - DJ Set + Live Musicians</p>
                <p>Pilton, United Kingdom</p>
              </div>
              <div class=\"card-action\">
                <a class=\"deep-orange-text text-darken-4\" href=\"https://www.bandsintown.com/e/18892417?app_id=js_folothesource.com&came_from=242&affiliate_code=js_folothesource.com\" target=\"_blank\">Plus d'info</a>
                <a class=\"deep-orange-text text-darken-4 dropdown\" href=\"#\" data-activates=\"edit6\">Éditer <i class=\"tiny material-icons\">expand_more</i></a>
              </div>
              <ul id=\"edit6\" class=\"dropdown-content\">
                <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
                <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/guine.jpg"), "html", null, true);
        echo "\" class=\"mw-270\" alt=\"Festival des Arts Africains\">
            </div>
            <div class=\"card-stacked\">
              <div class=\"card-content\">
                <p><strong>10/06/2017</strong></p>
                <p><i>Festival des Arts Africains</i></p>
                <p>Mer, France</p>
              </div>
              <div class=\"card-action\">
                <a class=\"deep-orange-text text-darken-4\" href=\"https://www.bandsintown.com/e/17652058?app_id=js_folothesource.com&came_from=242&affiliate_code=js_folothesource.com\" target=\"_blank\">Plus d'info</a>
                <a class=\"deep-orange-text text-darken-4 dropdown\" href=\"#\" data-activates=\"edit7\">Éditer <i class=\"tiny material-icons\">expand_more</i></a>
              </div>
              <ul id=\"edit7\" class=\"dropdown-content\">
                <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
                <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class=\"center-align\">
          <a class=\"btn-floating btn-large waves-effect waves-light skyblue modal-trigger\" href=\"#addmodal\" data-target=\"addmodal\"><i class=\"material-icons\">add</i></a>
        </div>
        <div id=\"addmodal\" class=\"modal\">
          <form class=\"row modal-content\">
            <div class=\"col s12 m6\">
              <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/placeholder-square.jpg"), "html", null, true);
        echo "\" width=\"100%\" alt=\"insert media\">
            </div>
            <div class=\"col s12 m6\">
              <input type=\"text\" placeholder=\"Titre\">
              <input type=\"date\">
              <textarea class=\"materialize-textarea\"></textarea>
              <div class=\"file-field input-field\">
                <div class=\"btn\">
                  <span>File</span>
                  <input type=\"file\">
                </div>
                <div class=\"file-path-wrapper\">
                  <input class=\"file-path validate\" type=\"text\">
                </div>
              </div>
            </div>
          </form>
          <div class=\"row p-0 mb-0\">
            <a class=\"col s6 p-25 red center-align white-text\" onclick=\"\$('.modal').modal('close')\"><i class=\"material-icons\">cancel</i></a>
            <a class=\"col s6 p-25 green center-align white-text\" onclick=\"Materialize.toast('Terminé !', 4000);\$('.modal').modal('close')\"><i class=\"material-icons\">check</i></a>
          </div>
        </div>
    </div>
  </div>
";
        
        $__internal_146a0ff70e3e93f06acbcfabed96e312de13aeb5ede6c35713cb565db4ccc99a->leave($__internal_146a0ff70e3e93f06acbcfabed96e312de13aeb5ede6c35713cb565db4ccc99a_prof);

        
        $__internal_fba715fbef0305949af40d53e2a9b3809c68d2e44f5e70e469c54fdddb15fd30->leave($__internal_fba715fbef0305949af40d53e2a9b3809c68d2e44f5e70e469c54fdddb15fd30_prof);

    }

    public function getTemplateName()
    {
        return "OChomePageBundle:Default:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 183,  227 => 158,  201 => 135,  175 => 112,  149 => 89,  123 => 66,  97 => 43,  61 => 10,  53 => 4,  44 => 3,  34 => 209,  32 => 208,  30 => 3,  28 => 2,  26 => 1,);
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
  <div class=\"orange darken-4 pt-25 pb-25\">
    <div class=\"container\">

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"{{ asset('img/hexagon.jpg') }}\" class=\"mw-270\" alt=\"The Hexagon\">
            </div>
            <div class=\"card-stacked\">
              <div class=\"card-content\">
                <p><strong>18/11/2017</strong></p>
                <p><i>The Hexagon</i></p>
                <p>Reading, United Kingdom</p>
              </div>
              
              <div class=\"card-action\">
               
                <a class=\"deep-orange-text text-darken-4\" href=\"https://www.bandsintown.com/e/17649409?app_id=js_folothesource.com&came_from=242&affiliate_code=js_folothesource.com\" target=\"_blank\">Plus d'info</a>
                
                <a class=\"deep-orange-text text-darken-4 dropdown\" href=\"#\" data-activates=\"edit1\">Éditer <i class=\"tiny material-icons\">expand_more</i></a>
                
              </div>
              
              
              <ul id=\"edit1\" class=\"dropdown-content\">
               
                <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
                
                <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
                
              </ul>
              
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"{{ asset('img/sold_out.jpg') }}\" class=\"mw-270\" alt=\"Wedgewood Rooms\">
            </div>
            <div class=\"card-stacked\">
              <div class=\"card-content\">
                <p><strong>17/11/2017</strong></p>
                <p><i>Wedgewood Rooms</i></p>
                <p>Southsea, United Kingdom</p>
              </div>
              <div class=\"card-action\">
                <a class=\"deep-orange-text text-darken-4\" href=\"https://www.bandsintown.com/e/17649408?app_id=js_folothesource.com&came_from=242&affiliate_code=js_folothesource.com\" target=\"_blank\">Plus d'info</a>
                <a class=\"deep-orange-text text-darken-4 dropdown\" href=\"#\" data-activates=\"edit2\">Éditer <i class=\"tiny material-icons\">expand_more</i></a>
              </div>
              <ul id=\"edit2\" class=\"dropdown-content\">
                <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
                <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"{{ asset('img/yum.jpg') }}\" class=\"mw-270\" alt=\"The Junction\">
            </div>
            <div class=\"card-stacked\">
              <div class=\"card-content\">
                <p><strong>15/11/2017</strong></p>
                <p><i>The Junction</i></p>
                <p>Cambridge, United Kingdom</p>
              </div>
              <div class=\"card-action\">
                <a class=\"deep-orange-text text-darken-4\" href=\"https://www.bandsintown.com/e/17649404?app_id=js_folothesource.com&came_from=242&affiliate_code=js_folothesource.com\" target=\"_blank\">Plus d'info</a>
                <a class=\"deep-orange-text text-darken-4 dropdown\" href=\"#\" data-activates=\"edit3\">Éditer <i class=\"tiny material-icons\">expand_more</i></a>
              </div>
              <ul id=\"edit3\" class=\"dropdown-content\">
                <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
                <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>

         <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"{{ asset('img/glasgow.jpg') }}\" class=\"mw-270\" alt=\"The Glasgow Royal Concert Hall\">
            </div>
            <div class=\"card-stacked\">
              <div class=\"card-content\">
                <p><strong>09/11/2017</strong></p>
                <p><i>The Glasgow Royal Concert Hall</i></p>
                <p>Glasgow, United Kingdom</p>
              </div>
              <div class=\"card-action\">
                <a class=\"deep-orange-text text-darken-4\" href=\"https://www.bandsintown.com/e/17649398?app_id=js_folothesource.com&came_from=242&affiliate_code=js_folothesource.com\" target=\"_blank\">Plus d'info</a>
                <a class=\"deep-orange-text text-darken-4 dropdown\" href=\"#\" data-activates=\"edit4\">Éditer <i class=\"tiny material-icons\">expand_more</i></a>
              </div>
              <ul id=\"edit4\" class=\"dropdown-content\">
                <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
                <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"{{ asset('img/palm.jpeg') }}\" class=\"mw-270\" alt=\"Palm Camayenne\">
            </div>
            <div class=\"card-stacked\">
              <div class=\"card-content\">
                <p><strong>27/10/2017</strong></p>
                <p><i>Palm Camayenne</i></p>
                <p>Conakry, Guinea</p>
              </div>
              <div class=\"card-action\">
                <a class=\"deep-orange-text text-darken-4\" href=\"https://www.bandsintown.com/e/20167785?app_id=js_folothesource.com&came_from=242&affiliate_code=js_folothesource.com\" target=\"_blank\">Plus d'info</a>
                <a class=\"deep-orange-text text-darken-4 dropdown\" href=\"#\" data-activates=\"edit5\">Éditer <i class=\"tiny material-icons\">expand_more</i></a>
              </div>
              <ul id=\"edit5\" class=\"dropdown-content\">
                <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
                <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"{{ asset('img/arcadia.jpg') }}\" class=\"mw-270\" alt=\"Arcadia Stage\">
            </div>
            <div class=\"card-stacked\">
              <div class=\"card-content\">
                <p><strong>25/06/2017</strong></p>
                <p><i>Arcadia Stage</i> - DJ Set + Live Musicians</p>
                <p>Pilton, United Kingdom</p>
              </div>
              <div class=\"card-action\">
                <a class=\"deep-orange-text text-darken-4\" href=\"https://www.bandsintown.com/e/18892417?app_id=js_folothesource.com&came_from=242&affiliate_code=js_folothesource.com\" target=\"_blank\">Plus d'info</a>
                <a class=\"deep-orange-text text-darken-4 dropdown\" href=\"#\" data-activates=\"edit6\">Éditer <i class=\"tiny material-icons\">expand_more</i></a>
              </div>
              <ul id=\"edit6\" class=\"dropdown-content\">
                <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
                <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"{{ asset('img/guine.jpg') }}\" class=\"mw-270\" alt=\"Festival des Arts Africains\">
            </div>
            <div class=\"card-stacked\">
              <div class=\"card-content\">
                <p><strong>10/06/2017</strong></p>
                <p><i>Festival des Arts Africains</i></p>
                <p>Mer, France</p>
              </div>
              <div class=\"card-action\">
                <a class=\"deep-orange-text text-darken-4\" href=\"https://www.bandsintown.com/e/17652058?app_id=js_folothesource.com&came_from=242&affiliate_code=js_folothesource.com\" target=\"_blank\">Plus d'info</a>
                <a class=\"deep-orange-text text-darken-4 dropdown\" href=\"#\" data-activates=\"edit7\">Éditer <i class=\"tiny material-icons\">expand_more</i></a>
              </div>
              <ul id=\"edit7\" class=\"dropdown-content\">
                <li><a href=\"#addmodal\" data-target=\"addmodal\" class=\"modal-trigger black-text\"><i class=\"material-icons\">edit</i> Modifier</a></li>
                <li class=\"red\"><a href=\"#!\" class=\"black-text\"><i class=\"material-icons\">delete</i> Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class=\"center-align\">
          <a class=\"btn-floating btn-large waves-effect waves-light skyblue modal-trigger\" href=\"#addmodal\" data-target=\"addmodal\"><i class=\"material-icons\">add</i></a>
        </div>
        <div id=\"addmodal\" class=\"modal\">
          <form class=\"row modal-content\">
            <div class=\"col s12 m6\">
              <img src=\"{{ asset('img/placeholder-square.jpg') }}\" width=\"100%\" alt=\"insert media\">
            </div>
            <div class=\"col s12 m6\">
              <input type=\"text\" placeholder=\"Titre\">
              <input type=\"date\">
              <textarea class=\"materialize-textarea\"></textarea>
              <div class=\"file-field input-field\">
                <div class=\"btn\">
                  <span>File</span>
                  <input type=\"file\">
                </div>
                <div class=\"file-path-wrapper\">
                  <input class=\"file-path validate\" type=\"text\">
                </div>
              </div>
            </div>
          </form>
          <div class=\"row p-0 mb-0\">
            <a class=\"col s6 p-25 red center-align white-text\" onclick=\"\$('.modal').modal('close')\"><i class=\"material-icons\">cancel</i></a>
            <a class=\"col s6 p-25 green center-align white-text\" onclick=\"Materialize.toast('Terminé !', 4000);\$('.modal').modal('close')\"><i class=\"material-icons\">check</i></a>
          </div>
        </div>
    </div>
  </div>
{% endblock %}
{% include 'OChomePageBundle:Default:footer.html.twig' %}
{% include 'OChomePageBundle:Default:end.html.twig' %}", "OChomePageBundle:Default:events.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/events.html.twig");
    }
}
