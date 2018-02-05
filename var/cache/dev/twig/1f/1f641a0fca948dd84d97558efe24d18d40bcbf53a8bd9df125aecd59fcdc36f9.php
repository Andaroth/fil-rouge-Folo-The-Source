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
        $__internal_4709bb3d4382a09c7f97ae4fe7395af978ac6085ca0ec29097294e457daf43ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4709bb3d4382a09c7f97ae4fe7395af978ac6085ca0ec29097294e457daf43ce->enter($__internal_4709bb3d4382a09c7f97ae4fe7395af978ac6085ca0ec29097294e457daf43ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dd5f18be2eb52bdfd5c53dc1ce64e4ac2639e8aa85c076aff3474797f8119e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5f18be2eb52bdfd5c53dc1ce64e4ac2639e8aa85c076aff3474797f8119e83->enter($__internal_dd5f18be2eb52bdfd5c53dc1ce64e4ac2639e8aa85c076aff3474797f8119e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4709bb3d4382a09c7f97ae4fe7395af978ac6085ca0ec29097294e457daf43ce->leave($__internal_4709bb3d4382a09c7f97ae4fe7395af978ac6085ca0ec29097294e457daf43ce_prof);

        
        $__internal_dd5f18be2eb52bdfd5c53dc1ce64e4ac2639e8aa85c076aff3474797f8119e83->leave($__internal_dd5f18be2eb52bdfd5c53dc1ce64e4ac2639e8aa85c076aff3474797f8119e83_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6aa04bd704a2c0c165c33d975411da552fe2120f4b9701cd10279f98aa4e576f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa04bd704a2c0c165c33d975411da552fe2120f4b9701cd10279f98aa4e576f->enter($__internal_6aa04bd704a2c0c165c33d975411da552fe2120f4b9701cd10279f98aa4e576f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ee214e268701258c1d857fa6696c16fd9def80dc9aa2f2f17e34f3dfd9ccb08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee214e268701258c1d857fa6696c16fd9def80dc9aa2f2f17e34f3dfd9ccb08a->enter($__internal_ee214e268701258c1d857fa6696c16fd9def80dc9aa2f2f17e34f3dfd9ccb08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ee214e268701258c1d857fa6696c16fd9def80dc9aa2f2f17e34f3dfd9ccb08a->leave($__internal_ee214e268701258c1d857fa6696c16fd9def80dc9aa2f2f17e34f3dfd9ccb08a_prof);

        
        $__internal_6aa04bd704a2c0c165c33d975411da552fe2120f4b9701cd10279f98aa4e576f->leave($__internal_6aa04bd704a2c0c165c33d975411da552fe2120f4b9701cd10279f98aa4e576f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41ac6239de9dd6feb9c2bd481fc6d7c9bf925a192ddf1419234f91fb92d50dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ac6239de9dd6feb9c2bd481fc6d7c9bf925a192ddf1419234f91fb92d50dd2->enter($__internal_41ac6239de9dd6feb9c2bd481fc6d7c9bf925a192ddf1419234f91fb92d50dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_00c37256790f38fc1836afb019a8e14dbfa8f57112bc6a8f3121c9f49e32c396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c37256790f38fc1836afb019a8e14dbfa8f57112bc6a8f3121c9f49e32c396->enter($__internal_00c37256790f38fc1836afb019a8e14dbfa8f57112bc6a8f3121c9f49e32c396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_00c37256790f38fc1836afb019a8e14dbfa8f57112bc6a8f3121c9f49e32c396->leave($__internal_00c37256790f38fc1836afb019a8e14dbfa8f57112bc6a8f3121c9f49e32c396_prof);

        
        $__internal_41ac6239de9dd6feb9c2bd481fc6d7c9bf925a192ddf1419234f91fb92d50dd2->leave($__internal_41ac6239de9dd6feb9c2bd481fc6d7c9bf925a192ddf1419234f91fb92d50dd2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_421144269ca1c5d22ff0d2480c2f8d4d37e81d19a96ae01c930adeafe6ad493a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421144269ca1c5d22ff0d2480c2f8d4d37e81d19a96ae01c930adeafe6ad493a->enter($__internal_421144269ca1c5d22ff0d2480c2f8d4d37e81d19a96ae01c930adeafe6ad493a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e701fbfc33e5a67cea09faf260441be9bb00d3411938cf6874f34e1b6e95a3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e701fbfc33e5a67cea09faf260441be9bb00d3411938cf6874f34e1b6e95a3fa->enter($__internal_e701fbfc33e5a67cea09faf260441be9bb00d3411938cf6874f34e1b6e95a3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e701fbfc33e5a67cea09faf260441be9bb00d3411938cf6874f34e1b6e95a3fa->leave($__internal_e701fbfc33e5a67cea09faf260441be9bb00d3411938cf6874f34e1b6e95a3fa_prof);

        
        $__internal_421144269ca1c5d22ff0d2480c2f8d4d37e81d19a96ae01c930adeafe6ad493a->leave($__internal_421144269ca1c5d22ff0d2480c2f8d4d37e81d19a96ae01c930adeafe6ad493a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\filrouge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
