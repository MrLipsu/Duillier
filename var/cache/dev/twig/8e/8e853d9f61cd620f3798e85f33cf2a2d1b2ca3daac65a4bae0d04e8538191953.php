<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fb0de86d0342a7e4fa71aa5d0aef669365a0e79024462861cd8607c964524e66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_876f384d6e115131e0dc3ca0670bbca7f6ee40744c34eff2a755ad20fe0528f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876f384d6e115131e0dc3ca0670bbca7f6ee40744c34eff2a755ad20fe0528f0->enter($__internal_876f384d6e115131e0dc3ca0670bbca7f6ee40744c34eff2a755ad20fe0528f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ca36699c3093637978b44664a4db4de9e61215fbae9324f42f87b76c7913d8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca36699c3093637978b44664a4db4de9e61215fbae9324f42f87b76c7913d8d5->enter($__internal_ca36699c3093637978b44664a4db4de9e61215fbae9324f42f87b76c7913d8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_876f384d6e115131e0dc3ca0670bbca7f6ee40744c34eff2a755ad20fe0528f0->leave($__internal_876f384d6e115131e0dc3ca0670bbca7f6ee40744c34eff2a755ad20fe0528f0_prof);

        
        $__internal_ca36699c3093637978b44664a4db4de9e61215fbae9324f42f87b76c7913d8d5->leave($__internal_ca36699c3093637978b44664a4db4de9e61215fbae9324f42f87b76c7913d8d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4525c59c36df1ea5e5f73ce8d3f450f270a82ddffd28fb0aeec83e099c29ee84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4525c59c36df1ea5e5f73ce8d3f450f270a82ddffd28fb0aeec83e099c29ee84->enter($__internal_4525c59c36df1ea5e5f73ce8d3f450f270a82ddffd28fb0aeec83e099c29ee84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59a41eb237f557495c7e2c0984f05a6569453feac4903b0b5adcc76000e95e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a41eb237f557495c7e2c0984f05a6569453feac4903b0b5adcc76000e95e5b->enter($__internal_59a41eb237f557495c7e2c0984f05a6569453feac4903b0b5adcc76000e95e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_59a41eb237f557495c7e2c0984f05a6569453feac4903b0b5adcc76000e95e5b->leave($__internal_59a41eb237f557495c7e2c0984f05a6569453feac4903b0b5adcc76000e95e5b_prof);

        
        $__internal_4525c59c36df1ea5e5f73ce8d3f450f270a82ddffd28fb0aeec83e099c29ee84->leave($__internal_4525c59c36df1ea5e5f73ce8d3f450f270a82ddffd28fb0aeec83e099c29ee84_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\wamp64\\www\\Sorbonne\\ProjetCommun\\Duillier\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
