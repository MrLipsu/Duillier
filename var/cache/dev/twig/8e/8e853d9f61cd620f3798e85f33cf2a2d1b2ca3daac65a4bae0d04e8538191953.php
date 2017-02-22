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
        $__internal_77fabf70ea73ae654e345d3112e59ab9429a0afa2628b213e9e93371b197171c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77fabf70ea73ae654e345d3112e59ab9429a0afa2628b213e9e93371b197171c->enter($__internal_77fabf70ea73ae654e345d3112e59ab9429a0afa2628b213e9e93371b197171c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ea975be79303011c658a242fa238439eef10d6abbf38599d023315914a1e57a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea975be79303011c658a242fa238439eef10d6abbf38599d023315914a1e57a2->enter($__internal_ea975be79303011c658a242fa238439eef10d6abbf38599d023315914a1e57a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77fabf70ea73ae654e345d3112e59ab9429a0afa2628b213e9e93371b197171c->leave($__internal_77fabf70ea73ae654e345d3112e59ab9429a0afa2628b213e9e93371b197171c_prof);

        
        $__internal_ea975be79303011c658a242fa238439eef10d6abbf38599d023315914a1e57a2->leave($__internal_ea975be79303011c658a242fa238439eef10d6abbf38599d023315914a1e57a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4fcc123f33a428a5370cd4f583a3d093ee16ac9c90d7acdba463da8af0311579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcc123f33a428a5370cd4f583a3d093ee16ac9c90d7acdba463da8af0311579->enter($__internal_4fcc123f33a428a5370cd4f583a3d093ee16ac9c90d7acdba463da8af0311579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_052e5fb524af8f7a6a84f45bb2971d7b19f5c972df44db4bd78d9665913b55eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052e5fb524af8f7a6a84f45bb2971d7b19f5c972df44db4bd78d9665913b55eb->enter($__internal_052e5fb524af8f7a6a84f45bb2971d7b19f5c972df44db4bd78d9665913b55eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_052e5fb524af8f7a6a84f45bb2971d7b19f5c972df44db4bd78d9665913b55eb->leave($__internal_052e5fb524af8f7a6a84f45bb2971d7b19f5c972df44db4bd78d9665913b55eb_prof);

        
        $__internal_4fcc123f33a428a5370cd4f583a3d093ee16ac9c90d7acdba463da8af0311579->leave($__internal_4fcc123f33a428a5370cd4f583a3d093ee16ac9c90d7acdba463da8af0311579_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Duillier\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
