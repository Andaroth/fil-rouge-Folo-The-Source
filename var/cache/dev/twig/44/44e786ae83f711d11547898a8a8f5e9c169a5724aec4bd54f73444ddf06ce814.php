<?php

/* OChomePageBundle:Default:index.html.twig */
class __TwigTemplate_f76dcedf5b67713fd610c2cf4ff7d051dc0012205e6ea241b95364e270b7433f extends Twig_Template
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
        $__internal_3477a462cc94073860ba71c8267eab7671db17a3391dce07e26cc8b8d14978da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3477a462cc94073860ba71c8267eab7671db17a3391dce07e26cc8b8d14978da->enter($__internal_3477a462cc94073860ba71c8267eab7671db17a3391dce07e26cc8b8d14978da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:index.html.twig"));

        $__internal_f70a007cfe3753b63ac3fa47253d3e0cabeba177d054bb51c1cd8ee255a7c7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70a007cfe3753b63ac3fa47253d3e0cabeba177d054bb51c1cd8ee255a7c7ed->enter($__internal_f70a007cfe3753b63ac3fa47253d3e0cabeba177d054bb51c1cd8ee255a7c7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:index.html.twig"));

        // line 1
        $this->loadTemplate("OChomePageBundle:Default:begin.html.twig", "OChomePageBundle:Default:index.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("OChomePageBundle:Default:topbar.html.twig", "OChomePageBundle:Default:index.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 179
        $this->loadTemplate("OChomePageBundle:Default:footer.html.twig", "OChomePageBundle:Default:index.html.twig", 179)->display($context);
        // line 180
        $this->loadTemplate("OChomePageBundle:Default:end.html.twig", "OChomePageBundle:Default:index.html.twig", 180)->display($context);
        
        $__internal_3477a462cc94073860ba71c8267eab7671db17a3391dce07e26cc8b8d14978da->leave($__internal_3477a462cc94073860ba71c8267eab7671db17a3391dce07e26cc8b8d14978da_prof);

        
        $__internal_f70a007cfe3753b63ac3fa47253d3e0cabeba177d054bb51c1cd8ee255a7c7ed->leave($__internal_f70a007cfe3753b63ac3fa47253d3e0cabeba177d054bb51c1cd8ee255a7c7ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_750abc0de0dc96114822414c50ac3b3124d099094a4e417cda2f2f04dbca5548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750abc0de0dc96114822414c50ac3b3124d099094a4e417cda2f2f04dbca5548->enter($__internal_750abc0de0dc96114822414c50ac3b3124d099094a4e417cda2f2f04dbca5548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55d7d27bf616f430030e3f709f8b2704e0a68d5d53de4077de2ce7b639a88035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d7d27bf616f430030e3f709f8b2704e0a68d5d53de4077de2ce7b639a88035->enter($__internal_55d7d27bf616f430030e3f709f8b2704e0a68d5d53de4077de2ce7b639a88035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"row\">
    <div class=\"container center-align pt-25\">
      <img class=\"circle responsive-img\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portrait.jpg"), "html", null, true);
        echo "\" width=\"200\">
      <h1 class=\"Heading h1\">N’Faly Kouyaté</h1>
      <p class=\"flow-text justify\">The winner of ‘Talent of Guinea’ (Paris, March 2015, Best group) and again nominated for the Guinean Music Awards (November 2015), N’Faly Kouyaté, is a multi-talented artist coming from a deeply traditional background. Recently nominated as ‘Ambassador of the Intercultural Dialogue’ in Belgium, winner of the ‘Guinée Music Award’ 2012, nominated for the ‘Octaves de la Musique 2012’ in Belgium, nominated as ‘Talent Acoustique’ on TV5 Monde, he released his new album ‘CHANGE’ on 5th August 2015 in London.</p>
    </div>

    <div class=\"row blue-grey p-25 mb-0\">
      <div class=\"container\">
        <div class=\"col s12 m4 center-align\">
          <i class=\"material-icons medium\">flag</i>
          <h3>Country</h3>
          <p>Guinea with it's varied landscape is located in West Africa. The rivers Niger, Gambia and Bafing arise in this Country. In the highlands grows the rainforest.</p>
        </div>
        <div class=\"col s12 m4 center-align\">
          <i class=\"material-icons medium\">local_florist</i>
          <h3>Culture</h3>
          <p>The culture of Africa is varied and manifold. It is a product of the diverse populations that today inhabit the continent of Africa and the African Diaspora.</p>
        </div>
        <div class=\"col s12 m4 center-align\">
          <i class=\"material-icons medium\">spa</i>
          <h3>Tradition</h3>
          <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
        </div>
      </div>
    </div>
    <div class=\"row purple darken-4 pt-25 pb-25 mb-0 orange-text\">
      <div class=\"container\">
        <div class=\"col s6\">
          <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/well.jpg"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"We need water\">
        </div>
        <div class=\"col s6\">
          <h2>What we do</h2>
          <p class=\"flow-text\">Our mission is, to bring clean water and good working wells to Manfara, what means for people there, to stay healthy and alive. </p>
          <p class=\"flow-text\">African culture is expressed in its arts and crafts, folklore and religion, clothing, cuisine, music and languages.</p>
        </div>
      </div>
    </div>
    <div class=\"row orange darken-3 pt-25 pb-25 mb-0\">
      <div class=\"container\">
        <h2>Further events</h2>
        <div class=\"col s12 l3\">
          <div class=\"card\">
            <div class=\"card-image homepcard\">
              <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/hexagon.jpg"), "html", null, true);
        echo "\" alt=\"The Hexagon\">
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
        <div class=\"col s12 l3\">
          <div class=\"card\">
            <div class=\"card-image homepcard\">
              <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/sold_out.jpg"), "html", null, true);
        echo "\" alt=\"Wedgewood Rooms\">
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
        <div class=\"col s12 l3\">
          <div class=\"card\">
            <div class=\"card-image homepcard\">
              <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/yum.jpg"), "html", null, true);
        echo "\" alt=\"The Junction\">
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
        <div class=\"col s12 l3\">
          <div class=\"card\">
            <div class=\"card-image homepcard\">
              <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/glasgow.jpg"), "html", null, true);
        echo "\" alt=\"The Glasgow Royal Concert Hall\">
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
      </div>
    </div>
    <div class=\"row purple darken-4 pt-25 pb-25 mb-0 orange-text\">
      <div class=\"container\">
        <div class=\"col s6\">
          <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/enfant.jpg"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"We need water\">
        </div>
        <div class=\"col s6\">
          <h2>Our Mission</h2>
          <p class=\"flow-text\">Our mission is, to bring clean water and good working wells to Manfara, what means for people there, to stay healthy and alive.</p>
        </div>
      </div>
    </div>
    <div class=\"row multimedia\">
      <h2 class=\"center-align\">Our medias</h2>
      <div class=\"col s12 m4\">
        <div class=\"row\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img height=\"300\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/needwater.jpg"), "html", null, true);
        echo "\" alt=\"people needs water\">
              <span class=\"card-title\"  style=\"color:#fb8c00\">Pictures</span>
            </div>
            <div class=\"card-content\">
              <p>Our actions in Guinea in pictures.</p>
            </div>
            <div class=\"card-action\">
              <a href=\"./gallery\">More Pictures</a>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col s12 m4\">
        <div class=\"row\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img height=\"300\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/nfalykouyate.jpg"), "html", null, true);
        echo "\" alt=\"nfalykouyate singer\">
              <span class=\"card-title\"  style=\"color:#fb8c00\">Musics</span>
            </div>
            <div class=\"card-content\">
              <p>Some music from our Youtube account.</p>
            </div>
            <div class=\"card-action\">
              <a href=\"./gallery\">More Musics</a>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col s12 m4\">
        <div class=\"row\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img height=\"300\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/inauguration.jpg"), "html", null, true);
        echo "\" alt=\"well's inauguration\">
              <span class=\"card-title\"  style=\"color:#fb8c00\">Videos</span>
            </div>
            <div class=\"card-content\">
              <p>What we have done in Guinea.</p>
            </div>
            <div class=\"card-action\">
              <a href=\"./gallery\">More Videos</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_55d7d27bf616f430030e3f709f8b2704e0a68d5d53de4077de2ce7b639a88035->leave($__internal_55d7d27bf616f430030e3f709f8b2704e0a68d5d53de4077de2ce7b639a88035_prof);

        
        $__internal_750abc0de0dc96114822414c50ac3b3124d099094a4e417cda2f2f04dbca5548->leave($__internal_750abc0de0dc96114822414c50ac3b3124d099094a4e417cda2f2f04dbca5548_prof);

    }

    public function getTemplateName()
    {
        return "OChomePageBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 164,  223 => 148,  204 => 132,  187 => 118,  165 => 99,  145 => 82,  125 => 65,  105 => 48,  87 => 33,  57 => 6,  53 => 4,  44 => 3,  34 => 180,  32 => 179,  30 => 3,  28 => 2,  26 => 1,);
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
    <div class=\"container center-align pt-25\">
      <img class=\"circle responsive-img\" src=\"{{ asset('img/portrait.jpg') }}\" width=\"200\">
      <h1 class=\"Heading h1\">N’Faly Kouyaté</h1>
      <p class=\"flow-text justify\">The winner of ‘Talent of Guinea’ (Paris, March 2015, Best group) and again nominated for the Guinean Music Awards (November 2015), N’Faly Kouyaté, is a multi-talented artist coming from a deeply traditional background. Recently nominated as ‘Ambassador of the Intercultural Dialogue’ in Belgium, winner of the ‘Guinée Music Award’ 2012, nominated for the ‘Octaves de la Musique 2012’ in Belgium, nominated as ‘Talent Acoustique’ on TV5 Monde, he released his new album ‘CHANGE’ on 5th August 2015 in London.</p>
    </div>

    <div class=\"row blue-grey p-25 mb-0\">
      <div class=\"container\">
        <div class=\"col s12 m4 center-align\">
          <i class=\"material-icons medium\">flag</i>
          <h3>Country</h3>
          <p>Guinea with it's varied landscape is located in West Africa. The rivers Niger, Gambia and Bafing arise in this Country. In the highlands grows the rainforest.</p>
        </div>
        <div class=\"col s12 m4 center-align\">
          <i class=\"material-icons medium\">local_florist</i>
          <h3>Culture</h3>
          <p>The culture of Africa is varied and manifold. It is a product of the diverse populations that today inhabit the continent of Africa and the African Diaspora.</p>
        </div>
        <div class=\"col s12 m4 center-align\">
          <i class=\"material-icons medium\">spa</i>
          <h3>Tradition</h3>
          <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
        </div>
      </div>
    </div>
    <div class=\"row purple darken-4 pt-25 pb-25 mb-0 orange-text\">
      <div class=\"container\">
        <div class=\"col s6\">
          <img src=\"{{ asset('img/well.jpg') }}\" class=\"responsive-img\" alt=\"We need water\">
        </div>
        <div class=\"col s6\">
          <h2>What we do</h2>
          <p class=\"flow-text\">Our mission is, to bring clean water and good working wells to Manfara, what means for people there, to stay healthy and alive. </p>
          <p class=\"flow-text\">African culture is expressed in its arts and crafts, folklore and religion, clothing, cuisine, music and languages.</p>
        </div>
      </div>
    </div>
    <div class=\"row orange darken-3 pt-25 pb-25 mb-0\">
      <div class=\"container\">
        <h2>Further events</h2>
        <div class=\"col s12 l3\">
          <div class=\"card\">
            <div class=\"card-image homepcard\">
              <img src=\"{{ asset('img/hexagon.jpg') }}\" alt=\"The Hexagon\">
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
        <div class=\"col s12 l3\">
          <div class=\"card\">
            <div class=\"card-image homepcard\">
              <img src=\"{{ asset('/img/sold_out.jpg') }}\" alt=\"Wedgewood Rooms\">
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
        <div class=\"col s12 l3\">
          <div class=\"card\">
            <div class=\"card-image homepcard\">
              <img src=\"{{ asset('img/yum.jpg') }}\" alt=\"The Junction\">
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
        <div class=\"col s12 l3\">
          <div class=\"card\">
            <div class=\"card-image homepcard\">
              <img src=\"{{ asset('img/glasgow.jpg') }}\" alt=\"The Glasgow Royal Concert Hall\">
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
      </div>
    </div>
    <div class=\"row purple darken-4 pt-25 pb-25 mb-0 orange-text\">
      <div class=\"container\">
        <div class=\"col s6\">
          <img src=\"{{ asset('img/enfant.jpg') }}\" class=\"responsive-img\" alt=\"We need water\">
        </div>
        <div class=\"col s6\">
          <h2>Our Mission</h2>
          <p class=\"flow-text\">Our mission is, to bring clean water and good working wells to Manfara, what means for people there, to stay healthy and alive.</p>
        </div>
      </div>
    </div>
    <div class=\"row multimedia\">
      <h2 class=\"center-align\">Our medias</h2>
      <div class=\"col s12 m4\">
        <div class=\"row\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img height=\"300\" src=\"{{ asset('img/needwater.jpg') }}\" alt=\"people needs water\">
              <span class=\"card-title\"  style=\"color:#fb8c00\">Pictures</span>
            </div>
            <div class=\"card-content\">
              <p>Our actions in Guinea in pictures.</p>
            </div>
            <div class=\"card-action\">
              <a href=\"./gallery\">More Pictures</a>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col s12 m4\">
        <div class=\"row\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img height=\"300\" src=\"{{ asset('img/nfalykouyate.jpg') }}\" alt=\"nfalykouyate singer\">
              <span class=\"card-title\"  style=\"color:#fb8c00\">Musics</span>
            </div>
            <div class=\"card-content\">
              <p>Some music from our Youtube account.</p>
            </div>
            <div class=\"card-action\">
              <a href=\"./gallery\">More Musics</a>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col s12 m4\">
        <div class=\"row\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img height=\"300\" src=\"{{ asset('img/inauguration.jpg') }}\" alt=\"well's inauguration\">
              <span class=\"card-title\"  style=\"color:#fb8c00\">Videos</span>
            </div>
            <div class=\"card-content\">
              <p>What we have done in Guinea.</p>
            </div>
            <div class=\"card-action\">
              <a href=\"./gallery\">More Videos</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
{% include 'OChomePageBundle:Default:footer.html.twig' %}
{% include 'OChomePageBundle:Default:end.html.twig' %}
", "OChomePageBundle:Default:index.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/index.html.twig");
    }
}
