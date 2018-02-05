<?php

/* OChomePageBundle:Default:events.html.twig */
class __TwigTemplate_04c524aecc3b08efd0c868549e0784b488f16e7d4846a32c493241c235d47de9 extends Twig_Template
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
        $this->loadTemplate("OChomePageBundle:Default:begin.html.twig", "OChomePageBundle:Default:events.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("OChomePageBundle:Default:topbar.html.twig", "OChomePageBundle:Default:events.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 136
        $this->loadTemplate("OChomePageBundle:Default:footer.html.twig", "OChomePageBundle:Default:events.html.twig", 136)->display($context);
        // line 137
        $this->loadTemplate("OChomePageBundle:Default:end.html.twig", "OChomePageBundle:Default:events.html.twig", 137)->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
              </div>
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"";
        // line 28
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
              </div>
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"";
        // line 46
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
              </div>
            </div>
          </div>
        </div>

         <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"";
        // line 64
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
              </div>
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"";
        // line 82
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
              </div>
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"";
        // line 100
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
              </div>
            </div>
          </div>
        </div>

        <div class=\"col s12 m7\">
          <div class=\"card horizontal\">
            <div class=\"card-image\">
              <img src=\"";
        // line 118
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
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>
";
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
        return array (  169 => 118,  148 => 100,  127 => 82,  106 => 64,  85 => 46,  64 => 28,  43 => 10,  35 => 4,  32 => 3,  28 => 137,  26 => 136,  24 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OChomePageBundle:Default:events.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/events.html.twig");
    }
}
