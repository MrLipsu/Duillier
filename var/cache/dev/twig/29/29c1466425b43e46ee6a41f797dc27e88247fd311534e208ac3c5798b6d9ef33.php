<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_639cd0f7355c23a757c16db065f1eda52cd93c5c9ded9d675cb289cf70eb8c69 extends Twig_Template
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
        $__internal_6814bd183a5d32ba20b218bcb9c7fb93a14df366e4dd4460c1b53b8409339e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6814bd183a5d32ba20b218bcb9c7fb93a14df366e4dd4460c1b53b8409339e3f->enter($__internal_6814bd183a5d32ba20b218bcb9c7fb93a14df366e4dd4460c1b53b8409339e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9d66c5948460e441547d4a3095ba575e84423b65e15eedb46bb0c7ce471fb02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d66c5948460e441547d4a3095ba575e84423b65e15eedb46bb0c7ce471fb02d->enter($__internal_9d66c5948460e441547d4a3095ba575e84423b65e15eedb46bb0c7ce471fb02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6814bd183a5d32ba20b218bcb9c7fb93a14df366e4dd4460c1b53b8409339e3f->leave($__internal_6814bd183a5d32ba20b218bcb9c7fb93a14df366e4dd4460c1b53b8409339e3f_prof);

        
        $__internal_9d66c5948460e441547d4a3095ba575e84423b65e15eedb46bb0c7ce471fb02d->leave($__internal_9d66c5948460e441547d4a3095ba575e84423b65e15eedb46bb0c7ce471fb02d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be8472fad13ec1493668b15a3f89e50144438de429c636e2b12b01e9febb1a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8472fad13ec1493668b15a3f89e50144438de429c636e2b12b01e9febb1a67->enter($__internal_be8472fad13ec1493668b15a3f89e50144438de429c636e2b12b01e9febb1a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5aa4ac5843ed8f6e13194ea0f61c13ee672cf5f44ebdf1a634e00f893b15d2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa4ac5843ed8f6e13194ea0f61c13ee672cf5f44ebdf1a634e00f893b15d2e1->enter($__internal_5aa4ac5843ed8f6e13194ea0f61c13ee672cf5f44ebdf1a634e00f893b15d2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5aa4ac5843ed8f6e13194ea0f61c13ee672cf5f44ebdf1a634e00f893b15d2e1->leave($__internal_5aa4ac5843ed8f6e13194ea0f61c13ee672cf5f44ebdf1a634e00f893b15d2e1_prof);

        
        $__internal_be8472fad13ec1493668b15a3f89e50144438de429c636e2b12b01e9febb1a67->leave($__internal_be8472fad13ec1493668b15a3f89e50144438de429c636e2b12b01e9febb1a67_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_318309e0d279fe517cf011f07a8aeaa236331b0da4465d152c04d03b62488e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318309e0d279fe517cf011f07a8aeaa236331b0da4465d152c04d03b62488e88->enter($__internal_318309e0d279fe517cf011f07a8aeaa236331b0da4465d152c04d03b62488e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_886660c5ec0305fb6c5840dd8a3cd784fe50d05261e6490e3043ad0bb6ca1897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886660c5ec0305fb6c5840dd8a3cd784fe50d05261e6490e3043ad0bb6ca1897->enter($__internal_886660c5ec0305fb6c5840dd8a3cd784fe50d05261e6490e3043ad0bb6ca1897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_886660c5ec0305fb6c5840dd8a3cd784fe50d05261e6490e3043ad0bb6ca1897->leave($__internal_886660c5ec0305fb6c5840dd8a3cd784fe50d05261e6490e3043ad0bb6ca1897_prof);

        
        $__internal_318309e0d279fe517cf011f07a8aeaa236331b0da4465d152c04d03b62488e88->leave($__internal_318309e0d279fe517cf011f07a8aeaa236331b0da4465d152c04d03b62488e88_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46d0254d9201fe29d50b3062b277ad58dab29f171789dddde16b0902ec2aa04f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d0254d9201fe29d50b3062b277ad58dab29f171789dddde16b0902ec2aa04f->enter($__internal_46d0254d9201fe29d50b3062b277ad58dab29f171789dddde16b0902ec2aa04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_736ca93f9c695e8d3bd4140a68c333ba44359764fc6000fdc9f2225104677163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736ca93f9c695e8d3bd4140a68c333ba44359764fc6000fdc9f2225104677163->enter($__internal_736ca93f9c695e8d3bd4140a68c333ba44359764fc6000fdc9f2225104677163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_736ca93f9c695e8d3bd4140a68c333ba44359764fc6000fdc9f2225104677163->leave($__internal_736ca93f9c695e8d3bd4140a68c333ba44359764fc6000fdc9f2225104677163_prof);

        
        $__internal_46d0254d9201fe29d50b3062b277ad58dab29f171789dddde16b0902ec2aa04f->leave($__internal_46d0254d9201fe29d50b3062b277ad58dab29f171789dddde16b0902ec2aa04f_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "D:\\wamp64\\www\\Sorbonne\\ProjetCommun\\Duillier\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
