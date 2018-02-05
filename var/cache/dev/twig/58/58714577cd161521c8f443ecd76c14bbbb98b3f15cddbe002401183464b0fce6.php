<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_21d3f520f6efa296abe76470653160a8df9e8fb248de35fdd559482a1df73fb5 extends Twig_Template
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
        $__internal_af2dc1d86be8621a1655402eb874db5c17b4fb568e74d0759066fd8fe10382f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2dc1d86be8621a1655402eb874db5c17b4fb568e74d0759066fd8fe10382f7->enter($__internal_af2dc1d86be8621a1655402eb874db5c17b4fb568e74d0759066fd8fe10382f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_2eadc354f310b6e8c8bc469f2689db277107a0911cfb159a067fa25e117fd582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eadc354f310b6e8c8bc469f2689db277107a0911cfb159a067fa25e117fd582->enter($__internal_2eadc354f310b6e8c8bc469f2689db277107a0911cfb159a067fa25e117fd582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_af2dc1d86be8621a1655402eb874db5c17b4fb568e74d0759066fd8fe10382f7->leave($__internal_af2dc1d86be8621a1655402eb874db5c17b4fb568e74d0759066fd8fe10382f7_prof);

        
        $__internal_2eadc354f310b6e8c8bc469f2689db277107a0911cfb159a067fa25e117fd582->leave($__internal_2eadc354f310b6e8c8bc469f2689db277107a0911cfb159a067fa25e117fd582_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
