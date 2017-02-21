<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7ce8d2bf73d3019b4f8971850f18f362e8fcabcd1ce45efef4a849c51d34c579 extends Twig_Template
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
        $__internal_18e172df05bc80704fd2d0f49691b3b67d1dda56f03e1bca9cc0065a172fed43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e172df05bc80704fd2d0f49691b3b67d1dda56f03e1bca9cc0065a172fed43->enter($__internal_18e172df05bc80704fd2d0f49691b3b67d1dda56f03e1bca9cc0065a172fed43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cd5036474e5aaf83de95d0c0e99715a14c4d68349f9483a68ed05c56e8cf0532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5036474e5aaf83de95d0c0e99715a14c4d68349f9483a68ed05c56e8cf0532->enter($__internal_cd5036474e5aaf83de95d0c0e99715a14c4d68349f9483a68ed05c56e8cf0532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e172df05bc80704fd2d0f49691b3b67d1dda56f03e1bca9cc0065a172fed43->leave($__internal_18e172df05bc80704fd2d0f49691b3b67d1dda56f03e1bca9cc0065a172fed43_prof);

        
        $__internal_cd5036474e5aaf83de95d0c0e99715a14c4d68349f9483a68ed05c56e8cf0532->leave($__internal_cd5036474e5aaf83de95d0c0e99715a14c4d68349f9483a68ed05c56e8cf0532_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d009fb70746f6eec9fafa51e515e957d818848e202f27315c3ce0d06c43e3f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d009fb70746f6eec9fafa51e515e957d818848e202f27315c3ce0d06c43e3f62->enter($__internal_d009fb70746f6eec9fafa51e515e957d818848e202f27315c3ce0d06c43e3f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b442dedd06638a4cb5493dc5183d6306b3c917f044d9470600d15f5422f2dd07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b442dedd06638a4cb5493dc5183d6306b3c917f044d9470600d15f5422f2dd07->enter($__internal_b442dedd06638a4cb5493dc5183d6306b3c917f044d9470600d15f5422f2dd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b442dedd06638a4cb5493dc5183d6306b3c917f044d9470600d15f5422f2dd07->leave($__internal_b442dedd06638a4cb5493dc5183d6306b3c917f044d9470600d15f5422f2dd07_prof);

        
        $__internal_d009fb70746f6eec9fafa51e515e957d818848e202f27315c3ce0d06c43e3f62->leave($__internal_d009fb70746f6eec9fafa51e515e957d818848e202f27315c3ce0d06c43e3f62_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e428fc55419b1d4af9e92fafaa710fdf8693253609c0a641d86c559235f6fa80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e428fc55419b1d4af9e92fafaa710fdf8693253609c0a641d86c559235f6fa80->enter($__internal_e428fc55419b1d4af9e92fafaa710fdf8693253609c0a641d86c559235f6fa80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a149c13bf63953442374bcddfd9650d1580fe4218badb3dc9b49c80456b39d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a149c13bf63953442374bcddfd9650d1580fe4218badb3dc9b49c80456b39d8b->enter($__internal_a149c13bf63953442374bcddfd9650d1580fe4218badb3dc9b49c80456b39d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a149c13bf63953442374bcddfd9650d1580fe4218badb3dc9b49c80456b39d8b->leave($__internal_a149c13bf63953442374bcddfd9650d1580fe4218badb3dc9b49c80456b39d8b_prof);

        
        $__internal_e428fc55419b1d4af9e92fafaa710fdf8693253609c0a641d86c559235f6fa80->leave($__internal_e428fc55419b1d4af9e92fafaa710fdf8693253609c0a641d86c559235f6fa80_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1534fe767b86224a30668d1f68b6c370295d22fd2f85cb47892b8a69878f5003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1534fe767b86224a30668d1f68b6c370295d22fd2f85cb47892b8a69878f5003->enter($__internal_1534fe767b86224a30668d1f68b6c370295d22fd2f85cb47892b8a69878f5003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39eb4172901fac15eb3bbc4cb924aa766cf2dee24759ae70f22f5f81458b5e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39eb4172901fac15eb3bbc4cb924aa766cf2dee24759ae70f22f5f81458b5e8e->enter($__internal_39eb4172901fac15eb3bbc4cb924aa766cf2dee24759ae70f22f5f81458b5e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_39eb4172901fac15eb3bbc4cb924aa766cf2dee24759ae70f22f5f81458b5e8e->leave($__internal_39eb4172901fac15eb3bbc4cb924aa766cf2dee24759ae70f22f5f81458b5e8e_prof);

        
        $__internal_1534fe767b86224a30668d1f68b6c370295d22fd2f85cb47892b8a69878f5003->leave($__internal_1534fe767b86224a30668d1f68b6c370295d22fd2f85cb47892b8a69878f5003_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Duillier\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
