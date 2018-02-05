<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b95f7ab30d76a04980f24bd0199c881ce189c1a769f07275d0dfd7c1b15da1bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e316f5a7fdc83918a10b53ad447c85345edc7705e5950dbc66320ea2d2496c56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e316f5a7fdc83918a10b53ad447c85345edc7705e5950dbc66320ea2d2496c56->enter($__internal_e316f5a7fdc83918a10b53ad447c85345edc7705e5950dbc66320ea2d2496c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b1aa7168d83d7c11898652a8c12766091664809404ab095d0daf51e9ee1dba61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1aa7168d83d7c11898652a8c12766091664809404ab095d0daf51e9ee1dba61->enter($__internal_b1aa7168d83d7c11898652a8c12766091664809404ab095d0daf51e9ee1dba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e316f5a7fdc83918a10b53ad447c85345edc7705e5950dbc66320ea2d2496c56->leave($__internal_e316f5a7fdc83918a10b53ad447c85345edc7705e5950dbc66320ea2d2496c56_prof);

        
        $__internal_b1aa7168d83d7c11898652a8c12766091664809404ab095d0daf51e9ee1dba61->leave($__internal_b1aa7168d83d7c11898652a8c12766091664809404ab095d0daf51e9ee1dba61_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_283e72ab5cb229b72f6b77dbee226cf8403bb1383684774daab168bf91c5367a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283e72ab5cb229b72f6b77dbee226cf8403bb1383684774daab168bf91c5367a->enter($__internal_283e72ab5cb229b72f6b77dbee226cf8403bb1383684774daab168bf91c5367a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a2412adfa614d1e86734eb0f404465e2dda8d6f6db3c86628790d16edb1a9647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2412adfa614d1e86734eb0f404465e2dda8d6f6db3c86628790d16edb1a9647->enter($__internal_a2412adfa614d1e86734eb0f404465e2dda8d6f6db3c86628790d16edb1a9647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a2412adfa614d1e86734eb0f404465e2dda8d6f6db3c86628790d16edb1a9647->leave($__internal_a2412adfa614d1e86734eb0f404465e2dda8d6f6db3c86628790d16edb1a9647_prof);

        
        $__internal_283e72ab5cb229b72f6b77dbee226cf8403bb1383684774daab168bf91c5367a->leave($__internal_283e72ab5cb229b72f6b77dbee226cf8403bb1383684774daab168bf91c5367a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f64f5876489467bb699725e4488e11c79db9964681bcb2dc74803257e7a994c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64f5876489467bb699725e4488e11c79db9964681bcb2dc74803257e7a994c3->enter($__internal_f64f5876489467bb699725e4488e11c79db9964681bcb2dc74803257e7a994c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2aff73aa5e38da2064c87d636362dd9d70c5c8b12d1cb239973198599436816d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aff73aa5e38da2064c87d636362dd9d70c5c8b12d1cb239973198599436816d->enter($__internal_2aff73aa5e38da2064c87d636362dd9d70c5c8b12d1cb239973198599436816d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2aff73aa5e38da2064c87d636362dd9d70c5c8b12d1cb239973198599436816d->leave($__internal_2aff73aa5e38da2064c87d636362dd9d70c5c8b12d1cb239973198599436816d_prof);

        
        $__internal_f64f5876489467bb699725e4488e11c79db9964681bcb2dc74803257e7a994c3->leave($__internal_f64f5876489467bb699725e4488e11c79db9964681bcb2dc74803257e7a994c3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c2085be49fdbc06559553eb59d0b8e2e0085b5e08e6ce96fdab56ea56fa04d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2085be49fdbc06559553eb59d0b8e2e0085b5e08e6ce96fdab56ea56fa04d8->enter($__internal_4c2085be49fdbc06559553eb59d0b8e2e0085b5e08e6ce96fdab56ea56fa04d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5bfdc1d7019fa09d927749fccea8a6f802a4b14d7f7e9c67d794a07e023bbc69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfdc1d7019fa09d927749fccea8a6f802a4b14d7f7e9c67d794a07e023bbc69->enter($__internal_5bfdc1d7019fa09d927749fccea8a6f802a4b14d7f7e9c67d794a07e023bbc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5bfdc1d7019fa09d927749fccea8a6f802a4b14d7f7e9c67d794a07e023bbc69->leave($__internal_5bfdc1d7019fa09d927749fccea8a6f802a4b14d7f7e9c67d794a07e023bbc69_prof);

        
        $__internal_4c2085be49fdbc06559553eb59d0b8e2e0085b5e08e6ce96fdab56ea56fa04d8->leave($__internal_4c2085be49fdbc06559553eb59d0b8e2e0085b5e08e6ce96fdab56ea56fa04d8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
