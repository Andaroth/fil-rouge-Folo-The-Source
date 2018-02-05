<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c70c05b27d37c0edea3d3826acbd9420e04844a6a0d01d5bf50a4dfaff34b6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5cfbd7d5296a84515c88f685044524d8b4dc14cb61fdb01aa60b1d392566d3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfbd7d5296a84515c88f685044524d8b4dc14cb61fdb01aa60b1d392566d3c8->enter($__internal_5cfbd7d5296a84515c88f685044524d8b4dc14cb61fdb01aa60b1d392566d3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_742ad3f274225b46f71c0faa2eac7f74fab216bb521f2f2281acb1ae2cff5796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742ad3f274225b46f71c0faa2eac7f74fab216bb521f2f2281acb1ae2cff5796->enter($__internal_742ad3f274225b46f71c0faa2eac7f74fab216bb521f2f2281acb1ae2cff5796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cfbd7d5296a84515c88f685044524d8b4dc14cb61fdb01aa60b1d392566d3c8->leave($__internal_5cfbd7d5296a84515c88f685044524d8b4dc14cb61fdb01aa60b1d392566d3c8_prof);

        
        $__internal_742ad3f274225b46f71c0faa2eac7f74fab216bb521f2f2281acb1ae2cff5796->leave($__internal_742ad3f274225b46f71c0faa2eac7f74fab216bb521f2f2281acb1ae2cff5796_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fcfcaaf8489e1c954319c6289a975fe3704785146640f0fe30fc5111604be6c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcfcaaf8489e1c954319c6289a975fe3704785146640f0fe30fc5111604be6c4->enter($__internal_fcfcaaf8489e1c954319c6289a975fe3704785146640f0fe30fc5111604be6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e59ce93fb261c4de0254490120981a1febe884ddabe4468bb39f64f270969a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59ce93fb261c4de0254490120981a1febe884ddabe4468bb39f64f270969a82->enter($__internal_e59ce93fb261c4de0254490120981a1febe884ddabe4468bb39f64f270969a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e59ce93fb261c4de0254490120981a1febe884ddabe4468bb39f64f270969a82->leave($__internal_e59ce93fb261c4de0254490120981a1febe884ddabe4468bb39f64f270969a82_prof);

        
        $__internal_fcfcaaf8489e1c954319c6289a975fe3704785146640f0fe30fc5111604be6c4->leave($__internal_fcfcaaf8489e1c954319c6289a975fe3704785146640f0fe30fc5111604be6c4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e70e6feb5807a990b8039a3311d95b6aa3ef938435518c7a5af69d9c6c5f0e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70e6feb5807a990b8039a3311d95b6aa3ef938435518c7a5af69d9c6c5f0e2b->enter($__internal_e70e6feb5807a990b8039a3311d95b6aa3ef938435518c7a5af69d9c6c5f0e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fcac312a5540cc4acb339d81a9e8c73e8c205af0a92f1224ede3037f63b703a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcac312a5540cc4acb339d81a9e8c73e8c205af0a92f1224ede3037f63b703a1->enter($__internal_fcac312a5540cc4acb339d81a9e8c73e8c205af0a92f1224ede3037f63b703a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fcac312a5540cc4acb339d81a9e8c73e8c205af0a92f1224ede3037f63b703a1->leave($__internal_fcac312a5540cc4acb339d81a9e8c73e8c205af0a92f1224ede3037f63b703a1_prof);

        
        $__internal_e70e6feb5807a990b8039a3311d95b6aa3ef938435518c7a5af69d9c6c5f0e2b->leave($__internal_e70e6feb5807a990b8039a3311d95b6aa3ef938435518c7a5af69d9c6c5f0e2b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07f2d233f795aa1d2299f9c0893e3b86b3eb90fb0e798c8c870631cffad7ca84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f2d233f795aa1d2299f9c0893e3b86b3eb90fb0e798c8c870631cffad7ca84->enter($__internal_07f2d233f795aa1d2299f9c0893e3b86b3eb90fb0e798c8c870631cffad7ca84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d58d0ce77d95da30b20d5a2834ccb7143f99ce2b4ef1c25c4c9d847759d44006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58d0ce77d95da30b20d5a2834ccb7143f99ce2b4ef1c25c4c9d847759d44006->enter($__internal_d58d0ce77d95da30b20d5a2834ccb7143f99ce2b4ef1c25c4c9d847759d44006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d58d0ce77d95da30b20d5a2834ccb7143f99ce2b4ef1c25c4c9d847759d44006->leave($__internal_d58d0ce77d95da30b20d5a2834ccb7143f99ce2b4ef1c25c4c9d847759d44006_prof);

        
        $__internal_07f2d233f795aa1d2299f9c0893e3b86b3eb90fb0e798c8c870631cffad7ca84->leave($__internal_07f2d233f795aa1d2299f9c0893e3b86b3eb90fb0e798c8c870631cffad7ca84_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
