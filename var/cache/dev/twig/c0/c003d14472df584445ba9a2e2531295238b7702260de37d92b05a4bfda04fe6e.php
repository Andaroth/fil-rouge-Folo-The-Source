<?php

/* OChomePageBundle:Default:end.html.twig */
class __TwigTemplate_2a074751a9db50e8784f9bc2f896afcc7a578a3495342ca88c0d2463aa8cf11b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f770d7daaa1af63d514b5609fb7deb96a70f47a5971ef63bfbe98ccfd95423b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f770d7daaa1af63d514b5609fb7deb96a70f47a5971ef63bfbe98ccfd95423b9->enter($__internal_f770d7daaa1af63d514b5609fb7deb96a70f47a5971ef63bfbe98ccfd95423b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:end.html.twig"));

        $__internal_87102503a3fcda39709c3f6f33fd182ca8d25c6548c0660636f9b796cf73e7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87102503a3fcda39709c3f6f33fd182ca8d25c6548c0660636f9b796cf73e7d8->enter($__internal_87102503a3fcda39709c3f6f33fd182ca8d25c6548c0660636f9b796cf73e7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:end.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 6
        echo "</body>
</html>";
        
        $__internal_f770d7daaa1af63d514b5609fb7deb96a70f47a5971ef63bfbe98ccfd95423b9->leave($__internal_f770d7daaa1af63d514b5609fb7deb96a70f47a5971ef63bfbe98ccfd95423b9_prof);

        
        $__internal_87102503a3fcda39709c3f6f33fd182ca8d25c6548c0660636f9b796cf73e7d8->leave($__internal_87102503a3fcda39709c3f6f33fd182ca8d25c6548c0660636f9b796cf73e7d8_prof);

    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a6a639ece8b0dae800859ef2e9e28b5f5f9a437dcf383a66e65ef49a08844c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6a639ece8b0dae800859ef2e9e28b5f5f9a437dcf383a66e65ef49a08844c9->enter($__internal_7a6a639ece8b0dae800859ef2e9e28b5f5f9a437dcf383a66e65ef49a08844c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a23f3da6cf77f0b895b0d62a4634c265a578cf8034ee20c9f29ee031165ac9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23f3da6cf77f0b895b0d62a4634c265a578cf8034ee20c9f29ee031165ac9c8->enter($__internal_a23f3da6cf77f0b895b0d62a4634c265a578cf8034ee20c9f29ee031165ac9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a23f3da6cf77f0b895b0d62a4634c265a578cf8034ee20c9f29ee031165ac9c8->leave($__internal_a23f3da6cf77f0b895b0d62a4634c265a578cf8034ee20c9f29ee031165ac9c8_prof);

        
        $__internal_7a6a639ece8b0dae800859ef2e9e28b5f5f9a437dcf383a66e65ef49a08844c9->leave($__internal_7a6a639ece8b0dae800859ef2e9e28b5f5f9a437dcf383a66e65ef49a08844c9_prof);

    }

    public function getTemplateName()
    {
        return "OChomePageBundle:Default:end.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 4,  53 => 3,  48 => 2,  39 => 1,  28 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block javascripts %}
  <script src=\"{{ asset('js/jquery.js') }}\"></script>
  <script src=\"{{ asset('js/materialize.js') }}\"></script>
  <script src=\"{{ asset('js/app.js') }}\"></script>
{% endblock %}
</body>
</html>", "OChomePageBundle:Default:end.html.twig", "C:\\wamp64\\www\\filrouge\\src\\OC\\homePageBundle/Resources/views/Default/end.html.twig");
    }
}
