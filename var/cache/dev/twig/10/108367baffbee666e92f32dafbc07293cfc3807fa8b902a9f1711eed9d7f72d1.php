<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_48e618573d65849aeec4b23d658ca1c1f1c644e59309394517e5e1c12c4e7702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e76c7a7ac835f638d4d32ae6521f17f9baf609c970d4acab8c01dcb34ed8473f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76c7a7ac835f638d4d32ae6521f17f9baf609c970d4acab8c01dcb34ed8473f->enter($__internal_e76c7a7ac835f638d4d32ae6521f17f9baf609c970d4acab8c01dcb34ed8473f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_129fbd700d930a4f58b2f04d601b508946d1e3f5731d4b9e1400e6120076c213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129fbd700d930a4f58b2f04d601b508946d1e3f5731d4b9e1400e6120076c213->enter($__internal_129fbd700d930a4f58b2f04d601b508946d1e3f5731d4b9e1400e6120076c213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_e76c7a7ac835f638d4d32ae6521f17f9baf609c970d4acab8c01dcb34ed8473f->leave($__internal_e76c7a7ac835f638d4d32ae6521f17f9baf609c970d4acab8c01dcb34ed8473f_prof);

        
        $__internal_129fbd700d930a4f58b2f04d601b508946d1e3f5731d4b9e1400e6120076c213->leave($__internal_129fbd700d930a4f58b2f04d601b508946d1e3f5731d4b9e1400e6120076c213_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\Duillier\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
