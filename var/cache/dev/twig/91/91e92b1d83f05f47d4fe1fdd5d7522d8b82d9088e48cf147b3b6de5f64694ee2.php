<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cb073b442a5f62042976b2c9b29265f0f102533d761b12f2080d6a9b91b47fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db15518659c373c3b4d65df2c2bd91576f74d9541e0c05483cd90bbf21eea9ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db15518659c373c3b4d65df2c2bd91576f74d9541e0c05483cd90bbf21eea9ed->enter($__internal_db15518659c373c3b4d65df2c2bd91576f74d9541e0c05483cd90bbf21eea9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_81edd2c08609f1db2a6bfecab1bd38b92c969040c8e5dcde0773acf4ec66a997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81edd2c08609f1db2a6bfecab1bd38b92c969040c8e5dcde0773acf4ec66a997->enter($__internal_81edd2c08609f1db2a6bfecab1bd38b92c969040c8e5dcde0773acf4ec66a997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_db15518659c373c3b4d65df2c2bd91576f74d9541e0c05483cd90bbf21eea9ed->leave($__internal_db15518659c373c3b4d65df2c2bd91576f74d9541e0c05483cd90bbf21eea9ed_prof);

        
        $__internal_81edd2c08609f1db2a6bfecab1bd38b92c969040c8e5dcde0773acf4ec66a997->leave($__internal_81edd2c08609f1db2a6bfecab1bd38b92c969040c8e5dcde0773acf4ec66a997_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa704329d88eebcf1e27edec4f9a9db69431008f53c5ae13c813f2e854d38c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa704329d88eebcf1e27edec4f9a9db69431008f53c5ae13c813f2e854d38c8c->enter($__internal_aa704329d88eebcf1e27edec4f9a9db69431008f53c5ae13c813f2e854d38c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ff5f76134c8d87a2d0ae90b0ae6bdf522c163108a7b0e5cbca19af5acf5afe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff5f76134c8d87a2d0ae90b0ae6bdf522c163108a7b0e5cbca19af5acf5afe5->enter($__internal_5ff5f76134c8d87a2d0ae90b0ae6bdf522c163108a7b0e5cbca19af5acf5afe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5ff5f76134c8d87a2d0ae90b0ae6bdf522c163108a7b0e5cbca19af5acf5afe5->leave($__internal_5ff5f76134c8d87a2d0ae90b0ae6bdf522c163108a7b0e5cbca19af5acf5afe5_prof);

        
        $__internal_aa704329d88eebcf1e27edec4f9a9db69431008f53c5ae13c813f2e854d38c8c->leave($__internal_aa704329d88eebcf1e27edec4f9a9db69431008f53c5ae13c813f2e854d38c8c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1102d65aa77b33f33345c8d5a8ffa7dcb0622e2f069776b3f84d9c033f7c3ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1102d65aa77b33f33345c8d5a8ffa7dcb0622e2f069776b3f84d9c033f7c3ada->enter($__internal_1102d65aa77b33f33345c8d5a8ffa7dcb0622e2f069776b3f84d9c033f7c3ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d4e7a0c05afff6df318bc211b85f16c9dd375fbad991462917902855fa5169d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4e7a0c05afff6df318bc211b85f16c9dd375fbad991462917902855fa5169d->enter($__internal_8d4e7a0c05afff6df318bc211b85f16c9dd375fbad991462917902855fa5169d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8d4e7a0c05afff6df318bc211b85f16c9dd375fbad991462917902855fa5169d->leave($__internal_8d4e7a0c05afff6df318bc211b85f16c9dd375fbad991462917902855fa5169d_prof);

        
        $__internal_1102d65aa77b33f33345c8d5a8ffa7dcb0622e2f069776b3f84d9c033f7c3ada->leave($__internal_1102d65aa77b33f33345c8d5a8ffa7dcb0622e2f069776b3f84d9c033f7c3ada_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_83b31ccf01c2f438884a3b33b2a849773834ef30bb920918453f425caab0dea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b31ccf01c2f438884a3b33b2a849773834ef30bb920918453f425caab0dea6->enter($__internal_83b31ccf01c2f438884a3b33b2a849773834ef30bb920918453f425caab0dea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c82d06f87894f7e5d3892d98d4d20520f5917732c8318000a25ec681232fe88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82d06f87894f7e5d3892d98d4d20520f5917732c8318000a25ec681232fe88f->enter($__internal_c82d06f87894f7e5d3892d98d4d20520f5917732c8318000a25ec681232fe88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c82d06f87894f7e5d3892d98d4d20520f5917732c8318000a25ec681232fe88f->leave($__internal_c82d06f87894f7e5d3892d98d4d20520f5917732c8318000a25ec681232fe88f_prof);

        
        $__internal_83b31ccf01c2f438884a3b33b2a849773834ef30bb920918453f425caab0dea6->leave($__internal_83b31ccf01c2f438884a3b33b2a849773834ef30bb920918453f425caab0dea6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
