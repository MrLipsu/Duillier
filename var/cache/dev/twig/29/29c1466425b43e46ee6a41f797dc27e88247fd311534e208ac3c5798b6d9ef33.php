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
        $__internal_526e8ee1e76aedb600d218a99a3c967639d44ee93fd52e9c5e2a274d0a34f881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526e8ee1e76aedb600d218a99a3c967639d44ee93fd52e9c5e2a274d0a34f881->enter($__internal_526e8ee1e76aedb600d218a99a3c967639d44ee93fd52e9c5e2a274d0a34f881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_181fcd5cda735062e2cf5b34289b173cd64f7d408f86406a3398dfad56789046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181fcd5cda735062e2cf5b34289b173cd64f7d408f86406a3398dfad56789046->enter($__internal_181fcd5cda735062e2cf5b34289b173cd64f7d408f86406a3398dfad56789046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_526e8ee1e76aedb600d218a99a3c967639d44ee93fd52e9c5e2a274d0a34f881->leave($__internal_526e8ee1e76aedb600d218a99a3c967639d44ee93fd52e9c5e2a274d0a34f881_prof);

        
        $__internal_181fcd5cda735062e2cf5b34289b173cd64f7d408f86406a3398dfad56789046->leave($__internal_181fcd5cda735062e2cf5b34289b173cd64f7d408f86406a3398dfad56789046_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c3134b2149c512791b65be8d014e66f066d32d3a531e94088fee0db35ae6c016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3134b2149c512791b65be8d014e66f066d32d3a531e94088fee0db35ae6c016->enter($__internal_c3134b2149c512791b65be8d014e66f066d32d3a531e94088fee0db35ae6c016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73d32b9080419f8996f476b48d3366147b9c1801ba3a376f47e908b4c8c79124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d32b9080419f8996f476b48d3366147b9c1801ba3a376f47e908b4c8c79124->enter($__internal_73d32b9080419f8996f476b48d3366147b9c1801ba3a376f47e908b4c8c79124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_73d32b9080419f8996f476b48d3366147b9c1801ba3a376f47e908b4c8c79124->leave($__internal_73d32b9080419f8996f476b48d3366147b9c1801ba3a376f47e908b4c8c79124_prof);

        
        $__internal_c3134b2149c512791b65be8d014e66f066d32d3a531e94088fee0db35ae6c016->leave($__internal_c3134b2149c512791b65be8d014e66f066d32d3a531e94088fee0db35ae6c016_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ecd505334fe2d0d49480a2dc8b989b7ef331f2a07cbf0663ecff6af3f57d3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ecd505334fe2d0d49480a2dc8b989b7ef331f2a07cbf0663ecff6af3f57d3e5->enter($__internal_3ecd505334fe2d0d49480a2dc8b989b7ef331f2a07cbf0663ecff6af3f57d3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d38360bd2b19ef4597ad01c1d6a54bc07687039bc2a6a62a2273dde297703341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38360bd2b19ef4597ad01c1d6a54bc07687039bc2a6a62a2273dde297703341->enter($__internal_d38360bd2b19ef4597ad01c1d6a54bc07687039bc2a6a62a2273dde297703341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d38360bd2b19ef4597ad01c1d6a54bc07687039bc2a6a62a2273dde297703341->leave($__internal_d38360bd2b19ef4597ad01c1d6a54bc07687039bc2a6a62a2273dde297703341_prof);

        
        $__internal_3ecd505334fe2d0d49480a2dc8b989b7ef331f2a07cbf0663ecff6af3f57d3e5->leave($__internal_3ecd505334fe2d0d49480a2dc8b989b7ef331f2a07cbf0663ecff6af3f57d3e5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36189668880b3f23295ef85b70f0011e8dae957e01fad46f05ab0457744479d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36189668880b3f23295ef85b70f0011e8dae957e01fad46f05ab0457744479d3->enter($__internal_36189668880b3f23295ef85b70f0011e8dae957e01fad46f05ab0457744479d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c1f1dff9e1f3e4766b76895420d6d84a93292fa85a9d15813d3bfe0a1ca518e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f1dff9e1f3e4766b76895420d6d84a93292fa85a9d15813d3bfe0a1ca518e5->enter($__internal_c1f1dff9e1f3e4766b76895420d6d84a93292fa85a9d15813d3bfe0a1ca518e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c1f1dff9e1f3e4766b76895420d6d84a93292fa85a9d15813d3bfe0a1ca518e5->leave($__internal_c1f1dff9e1f3e4766b76895420d6d84a93292fa85a9d15813d3bfe0a1ca518e5_prof);

        
        $__internal_36189668880b3f23295ef85b70f0011e8dae957e01fad46f05ab0457744479d3->leave($__internal_36189668880b3f23295ef85b70f0011e8dae957e01fad46f05ab0457744479d3_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Duillier\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
