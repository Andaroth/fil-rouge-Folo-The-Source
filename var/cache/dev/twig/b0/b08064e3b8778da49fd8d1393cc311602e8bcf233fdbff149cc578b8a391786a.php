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
        $__internal_f4ef86a87decfecb67897bd2cc46d61c50a129be8eedc9fc75f7eba4bed836f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ef86a87decfecb67897bd2cc46d61c50a129be8eedc9fc75f7eba4bed836f0->enter($__internal_f4ef86a87decfecb67897bd2cc46d61c50a129be8eedc9fc75f7eba4bed836f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c6894e497b13b91cfbb330e3e82cec95e0dbf39055e515a6906745e828aa0d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6894e497b13b91cfbb330e3e82cec95e0dbf39055e515a6906745e828aa0d3e->enter($__internal_c6894e497b13b91cfbb330e3e82cec95e0dbf39055e515a6906745e828aa0d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4ef86a87decfecb67897bd2cc46d61c50a129be8eedc9fc75f7eba4bed836f0->leave($__internal_f4ef86a87decfecb67897bd2cc46d61c50a129be8eedc9fc75f7eba4bed836f0_prof);

        
        $__internal_c6894e497b13b91cfbb330e3e82cec95e0dbf39055e515a6906745e828aa0d3e->leave($__internal_c6894e497b13b91cfbb330e3e82cec95e0dbf39055e515a6906745e828aa0d3e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2797ed2352e20f7fac3411e89ab1274eefe408e6790da504175e601b188d3d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2797ed2352e20f7fac3411e89ab1274eefe408e6790da504175e601b188d3d48->enter($__internal_2797ed2352e20f7fac3411e89ab1274eefe408e6790da504175e601b188d3d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a296697651071246bb359b5f1c7ea25dea0a3deca64ce8db7e113d110256a5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a296697651071246bb359b5f1c7ea25dea0a3deca64ce8db7e113d110256a5ea->enter($__internal_a296697651071246bb359b5f1c7ea25dea0a3deca64ce8db7e113d110256a5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a296697651071246bb359b5f1c7ea25dea0a3deca64ce8db7e113d110256a5ea->leave($__internal_a296697651071246bb359b5f1c7ea25dea0a3deca64ce8db7e113d110256a5ea_prof);

        
        $__internal_2797ed2352e20f7fac3411e89ab1274eefe408e6790da504175e601b188d3d48->leave($__internal_2797ed2352e20f7fac3411e89ab1274eefe408e6790da504175e601b188d3d48_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a12bbea7ab8ec129aac38e6d716a9966dd7cd3ac34a28205168e3b123e2b9489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12bbea7ab8ec129aac38e6d716a9966dd7cd3ac34a28205168e3b123e2b9489->enter($__internal_a12bbea7ab8ec129aac38e6d716a9966dd7cd3ac34a28205168e3b123e2b9489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3a80f0d4924d17d58f5305c74718323c883ca7725c030bcec1a7d8a7f2e929be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a80f0d4924d17d58f5305c74718323c883ca7725c030bcec1a7d8a7f2e929be->enter($__internal_3a80f0d4924d17d58f5305c74718323c883ca7725c030bcec1a7d8a7f2e929be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a80f0d4924d17d58f5305c74718323c883ca7725c030bcec1a7d8a7f2e929be->leave($__internal_3a80f0d4924d17d58f5305c74718323c883ca7725c030bcec1a7d8a7f2e929be_prof);

        
        $__internal_a12bbea7ab8ec129aac38e6d716a9966dd7cd3ac34a28205168e3b123e2b9489->leave($__internal_a12bbea7ab8ec129aac38e6d716a9966dd7cd3ac34a28205168e3b123e2b9489_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33f1fda02f7ba23fab7b80be26c164ef89beb77084e8ee88965920bd1941f933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f1fda02f7ba23fab7b80be26c164ef89beb77084e8ee88965920bd1941f933->enter($__internal_33f1fda02f7ba23fab7b80be26c164ef89beb77084e8ee88965920bd1941f933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7a1a8ca3c593c054899d2b15ea7f333e64ecbbfbf189333b674216109a0d41d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1a8ca3c593c054899d2b15ea7f333e64ecbbfbf189333b674216109a0d41d3->enter($__internal_7a1a8ca3c593c054899d2b15ea7f333e64ecbbfbf189333b674216109a0d41d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7a1a8ca3c593c054899d2b15ea7f333e64ecbbfbf189333b674216109a0d41d3->leave($__internal_7a1a8ca3c593c054899d2b15ea7f333e64ecbbfbf189333b674216109a0d41d3_prof);

        
        $__internal_33f1fda02f7ba23fab7b80be26c164ef89beb77084e8ee88965920bd1941f933->leave($__internal_33f1fda02f7ba23fab7b80be26c164ef89beb77084e8ee88965920bd1941f933_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\filrouge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
