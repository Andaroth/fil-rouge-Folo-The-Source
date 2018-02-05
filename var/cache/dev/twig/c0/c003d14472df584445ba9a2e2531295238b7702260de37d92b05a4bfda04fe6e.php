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
        $__internal_3bde05488a8182a45b4388de1d52077302defcaabe2cee2bc5c7ad91a7ea2f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bde05488a8182a45b4388de1d52077302defcaabe2cee2bc5c7ad91a7ea2f6e->enter($__internal_3bde05488a8182a45b4388de1d52077302defcaabe2cee2bc5c7ad91a7ea2f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:end.html.twig"));

        $__internal_5146ca3dbcf9570f04649506e8d58313f5a92de69601e9f9ddd00a08492c8265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5146ca3dbcf9570f04649506e8d58313f5a92de69601e9f9ddd00a08492c8265->enter($__internal_5146ca3dbcf9570f04649506e8d58313f5a92de69601e9f9ddd00a08492c8265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OChomePageBundle:Default:end.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 6
        echo "</body>
</html>";
        
        $__internal_3bde05488a8182a45b4388de1d52077302defcaabe2cee2bc5c7ad91a7ea2f6e->leave($__internal_3bde05488a8182a45b4388de1d52077302defcaabe2cee2bc5c7ad91a7ea2f6e_prof);

        
        $__internal_5146ca3dbcf9570f04649506e8d58313f5a92de69601e9f9ddd00a08492c8265->leave($__internal_5146ca3dbcf9570f04649506e8d58313f5a92de69601e9f9ddd00a08492c8265_prof);

    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5340e361a84e30cc2467797c8c189e5a7c777de4b867d863e9c32862ea296cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5340e361a84e30cc2467797c8c189e5a7c777de4b867d863e9c32862ea296cb1->enter($__internal_5340e361a84e30cc2467797c8c189e5a7c777de4b867d863e9c32862ea296cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7ba8320d11fd9bd45d72abe537a41f4be57d2cd32147abe765bd51fe35ed5a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba8320d11fd9bd45d72abe537a41f4be57d2cd32147abe765bd51fe35ed5a52->enter($__internal_7ba8320d11fd9bd45d72abe537a41f4be57d2cd32147abe765bd51fe35ed5a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7ba8320d11fd9bd45d72abe537a41f4be57d2cd32147abe765bd51fe35ed5a52->leave($__internal_7ba8320d11fd9bd45d72abe537a41f4be57d2cd32147abe765bd51fe35ed5a52_prof);

        
        $__internal_5340e361a84e30cc2467797c8c189e5a7c777de4b867d863e9c32862ea296cb1->leave($__internal_5340e361a84e30cc2467797c8c189e5a7c777de4b867d863e9c32862ea296cb1_prof);

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
</html>", "OChomePageBundle:Default:end.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\homePageBundle/Resources/views/Default/end.html.twig");
    }
}
