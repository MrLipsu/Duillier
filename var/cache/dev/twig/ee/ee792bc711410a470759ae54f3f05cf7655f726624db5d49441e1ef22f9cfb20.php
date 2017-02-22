<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c120c299bdd706415cbee24b443e4c514810d4e8c674bb30d2d263b8c3a4d717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65f47a80cfc671e7ebbc94120536915d65d318bceb790ab05902c9bad2e6eb7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f47a80cfc671e7ebbc94120536915d65d318bceb790ab05902c9bad2e6eb7b->enter($__internal_65f47a80cfc671e7ebbc94120536915d65d318bceb790ab05902c9bad2e6eb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_74f02dfae63581ef0199864dec2fd1199386ecd7e7a2a327fd0fba6bd91e1385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f02dfae63581ef0199864dec2fd1199386ecd7e7a2a327fd0fba6bd91e1385->enter($__internal_74f02dfae63581ef0199864dec2fd1199386ecd7e7a2a327fd0fba6bd91e1385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65f47a80cfc671e7ebbc94120536915d65d318bceb790ab05902c9bad2e6eb7b->leave($__internal_65f47a80cfc671e7ebbc94120536915d65d318bceb790ab05902c9bad2e6eb7b_prof);

        
        $__internal_74f02dfae63581ef0199864dec2fd1199386ecd7e7a2a327fd0fba6bd91e1385->leave($__internal_74f02dfae63581ef0199864dec2fd1199386ecd7e7a2a327fd0fba6bd91e1385_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1cff6f54169342aad9fcd0d8b4f076a844e369aad735c8d22e0b3882df309585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cff6f54169342aad9fcd0d8b4f076a844e369aad735c8d22e0b3882df309585->enter($__internal_1cff6f54169342aad9fcd0d8b4f076a844e369aad735c8d22e0b3882df309585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0959f971d57f258bd7beb30bc78096eb6b2544d61b546a0049f22882c829ac08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0959f971d57f258bd7beb30bc78096eb6b2544d61b546a0049f22882c829ac08->enter($__internal_0959f971d57f258bd7beb30bc78096eb6b2544d61b546a0049f22882c829ac08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0959f971d57f258bd7beb30bc78096eb6b2544d61b546a0049f22882c829ac08->leave($__internal_0959f971d57f258bd7beb30bc78096eb6b2544d61b546a0049f22882c829ac08_prof);

        
        $__internal_1cff6f54169342aad9fcd0d8b4f076a844e369aad735c8d22e0b3882df309585->leave($__internal_1cff6f54169342aad9fcd0d8b4f076a844e369aad735c8d22e0b3882df309585_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9e0e024b3c0abb313329ee8950fbd4695372769164777f7cdc419bf35fa312b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e0e024b3c0abb313329ee8950fbd4695372769164777f7cdc419bf35fa312b->enter($__internal_c9e0e024b3c0abb313329ee8950fbd4695372769164777f7cdc419bf35fa312b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae7f600f0ff0907de3acbc31c4f301f4cf3ae4db6d2e0b646f3e71c2c4596cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7f600f0ff0907de3acbc31c4f301f4cf3ae4db6d2e0b646f3e71c2c4596cf3->enter($__internal_ae7f600f0ff0907de3acbc31c4f301f4cf3ae4db6d2e0b646f3e71c2c4596cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ae7f600f0ff0907de3acbc31c4f301f4cf3ae4db6d2e0b646f3e71c2c4596cf3->leave($__internal_ae7f600f0ff0907de3acbc31c4f301f4cf3ae4db6d2e0b646f3e71c2c4596cf3_prof);

        
        $__internal_c9e0e024b3c0abb313329ee8950fbd4695372769164777f7cdc419bf35fa312b->leave($__internal_c9e0e024b3c0abb313329ee8950fbd4695372769164777f7cdc419bf35fa312b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b112a19bb70a6099a522444aa1ddbf4d5a9c33c8fe53c314d809c20a8287371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b112a19bb70a6099a522444aa1ddbf4d5a9c33c8fe53c314d809c20a8287371->enter($__internal_8b112a19bb70a6099a522444aa1ddbf4d5a9c33c8fe53c314d809c20a8287371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_901264cb6e74dfee40f8af20c9ed16c432ae087692df58a9f1f760cd5862180a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901264cb6e74dfee40f8af20c9ed16c432ae087692df58a9f1f760cd5862180a->enter($__internal_901264cb6e74dfee40f8af20c9ed16c432ae087692df58a9f1f760cd5862180a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_901264cb6e74dfee40f8af20c9ed16c432ae087692df58a9f1f760cd5862180a->leave($__internal_901264cb6e74dfee40f8af20c9ed16c432ae087692df58a9f1f760cd5862180a_prof);

        
        $__internal_8b112a19bb70a6099a522444aa1ddbf4d5a9c33c8fe53c314d809c20a8287371->leave($__internal_8b112a19bb70a6099a522444aa1ddbf4d5a9c33c8fe53c314d809c20a8287371_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Duillier\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
