<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_712878f5c5a26f06de1f18adf06c3a4f438ce6ec20506decb929c3fdda8d8b88 extends Twig_Template
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
        $__internal_825313e69f335155046d95cab2d4a3499b4aa96021c23d9db762c773b4f441b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825313e69f335155046d95cab2d4a3499b4aa96021c23d9db762c773b4f441b5->enter($__internal_825313e69f335155046d95cab2d4a3499b4aa96021c23d9db762c773b4f441b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_08a8ba3ff7b75852225f8d5165947ed8c703d4112f8ec0a3da9669bf4d03aaed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a8ba3ff7b75852225f8d5165947ed8c703d4112f8ec0a3da9669bf4d03aaed->enter($__internal_08a8ba3ff7b75852225f8d5165947ed8c703d4112f8ec0a3da9669bf4d03aaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_825313e69f335155046d95cab2d4a3499b4aa96021c23d9db762c773b4f441b5->leave($__internal_825313e69f335155046d95cab2d4a3499b4aa96021c23d9db762c773b4f441b5_prof);

        
        $__internal_08a8ba3ff7b75852225f8d5165947ed8c703d4112f8ec0a3da9669bf4d03aaed->leave($__internal_08a8ba3ff7b75852225f8d5165947ed8c703d4112f8ec0a3da9669bf4d03aaed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
