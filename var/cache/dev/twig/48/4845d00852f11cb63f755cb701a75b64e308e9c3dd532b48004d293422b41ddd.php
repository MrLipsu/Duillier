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
        $__internal_f734cfcfd6ede696964f60abfeadbf8d8bfcf706d8542b0afca51a7fa56bf32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f734cfcfd6ede696964f60abfeadbf8d8bfcf706d8542b0afca51a7fa56bf32d->enter($__internal_f734cfcfd6ede696964f60abfeadbf8d8bfcf706d8542b0afca51a7fa56bf32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ab5ff1ab2a044f4c6b3a242d2ee2cc290fe1aa6f9c6de0ed82e7ddde5d2a80fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5ff1ab2a044f4c6b3a242d2ee2cc290fe1aa6f9c6de0ed82e7ddde5d2a80fa->enter($__internal_ab5ff1ab2a044f4c6b3a242d2ee2cc290fe1aa6f9c6de0ed82e7ddde5d2a80fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f734cfcfd6ede696964f60abfeadbf8d8bfcf706d8542b0afca51a7fa56bf32d->leave($__internal_f734cfcfd6ede696964f60abfeadbf8d8bfcf706d8542b0afca51a7fa56bf32d_prof);

        
        $__internal_ab5ff1ab2a044f4c6b3a242d2ee2cc290fe1aa6f9c6de0ed82e7ddde5d2a80fa->leave($__internal_ab5ff1ab2a044f4c6b3a242d2ee2cc290fe1aa6f9c6de0ed82e7ddde5d2a80fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_174722682fdbcc9a34925a13b9ab110ffdbae607138488e62bd5f38a6ef6d9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174722682fdbcc9a34925a13b9ab110ffdbae607138488e62bd5f38a6ef6d9cf->enter($__internal_174722682fdbcc9a34925a13b9ab110ffdbae607138488e62bd5f38a6ef6d9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_00057755a2320ffe0b8a17f88e4b90ff31b73fe92130df952c6c005f410eaecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00057755a2320ffe0b8a17f88e4b90ff31b73fe92130df952c6c005f410eaecc->enter($__internal_00057755a2320ffe0b8a17f88e4b90ff31b73fe92130df952c6c005f410eaecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_00057755a2320ffe0b8a17f88e4b90ff31b73fe92130df952c6c005f410eaecc->leave($__internal_00057755a2320ffe0b8a17f88e4b90ff31b73fe92130df952c6c005f410eaecc_prof);

        
        $__internal_174722682fdbcc9a34925a13b9ab110ffdbae607138488e62bd5f38a6ef6d9cf->leave($__internal_174722682fdbcc9a34925a13b9ab110ffdbae607138488e62bd5f38a6ef6d9cf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f59180269952ae00e26013c853584401676366686c12cdfaa2c003ab2a5e22a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59180269952ae00e26013c853584401676366686c12cdfaa2c003ab2a5e22a9->enter($__internal_f59180269952ae00e26013c853584401676366686c12cdfaa2c003ab2a5e22a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fb367126f00074a1f574aed254537c5a00149bb680b305a97dc10d28c2e810c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb367126f00074a1f574aed254537c5a00149bb680b305a97dc10d28c2e810c7->enter($__internal_fb367126f00074a1f574aed254537c5a00149bb680b305a97dc10d28c2e810c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fb367126f00074a1f574aed254537c5a00149bb680b305a97dc10d28c2e810c7->leave($__internal_fb367126f00074a1f574aed254537c5a00149bb680b305a97dc10d28c2e810c7_prof);

        
        $__internal_f59180269952ae00e26013c853584401676366686c12cdfaa2c003ab2a5e22a9->leave($__internal_f59180269952ae00e26013c853584401676366686c12cdfaa2c003ab2a5e22a9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d42105d42bf5c875246759a08c888f1bb8f88c47c0472779eb2ffe95ba8fc12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d42105d42bf5c875246759a08c888f1bb8f88c47c0472779eb2ffe95ba8fc12->enter($__internal_4d42105d42bf5c875246759a08c888f1bb8f88c47c0472779eb2ffe95ba8fc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bfddc2b674ebb3ff369661c898779ba1a1c3d39bed4a886a4c380db88bafa479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfddc2b674ebb3ff369661c898779ba1a1c3d39bed4a886a4c380db88bafa479->enter($__internal_bfddc2b674ebb3ff369661c898779ba1a1c3d39bed4a886a4c380db88bafa479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bfddc2b674ebb3ff369661c898779ba1a1c3d39bed4a886a4c380db88bafa479->leave($__internal_bfddc2b674ebb3ff369661c898779ba1a1c3d39bed4a886a4c380db88bafa479_prof);

        
        $__internal_4d42105d42bf5c875246759a08c888f1bb8f88c47c0472779eb2ffe95ba8fc12->leave($__internal_4d42105d42bf5c875246759a08c888f1bb8f88c47c0472779eb2ffe95ba8fc12_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp64\\www\\Sorbonne\\ProjetCommun\\Duillier\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
