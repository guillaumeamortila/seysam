<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3d493ac0146ec1b27229097642c0696335e2bfe6a7f3c944997afd4034e71969 extends Twig_Template
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
        $__internal_e8a35c38994d91b9b9252340046757c4a3baf5840afd06d0857b54935f74915d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a35c38994d91b9b9252340046757c4a3baf5840afd06d0857b54935f74915d->enter($__internal_e8a35c38994d91b9b9252340046757c4a3baf5840afd06d0857b54935f74915d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5043bbd4304d357c40e54c3582731663748f1d6af0c008ba30d49245c6c0a1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5043bbd4304d357c40e54c3582731663748f1d6af0c008ba30d49245c6c0a1b0->enter($__internal_5043bbd4304d357c40e54c3582731663748f1d6af0c008ba30d49245c6c0a1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8a35c38994d91b9b9252340046757c4a3baf5840afd06d0857b54935f74915d->leave($__internal_e8a35c38994d91b9b9252340046757c4a3baf5840afd06d0857b54935f74915d_prof);

        
        $__internal_5043bbd4304d357c40e54c3582731663748f1d6af0c008ba30d49245c6c0a1b0->leave($__internal_5043bbd4304d357c40e54c3582731663748f1d6af0c008ba30d49245c6c0a1b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_239bb8c991856e97dc16938730c58d32a820d61cb27bf8e70314964f3c2048e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239bb8c991856e97dc16938730c58d32a820d61cb27bf8e70314964f3c2048e9->enter($__internal_239bb8c991856e97dc16938730c58d32a820d61cb27bf8e70314964f3c2048e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1da8e785ccdbbb53f8e89727085141deee5b093644f6ced167eb76ea578bc5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da8e785ccdbbb53f8e89727085141deee5b093644f6ced167eb76ea578bc5ea->enter($__internal_1da8e785ccdbbb53f8e89727085141deee5b093644f6ced167eb76ea578bc5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1da8e785ccdbbb53f8e89727085141deee5b093644f6ced167eb76ea578bc5ea->leave($__internal_1da8e785ccdbbb53f8e89727085141deee5b093644f6ced167eb76ea578bc5ea_prof);

        
        $__internal_239bb8c991856e97dc16938730c58d32a820d61cb27bf8e70314964f3c2048e9->leave($__internal_239bb8c991856e97dc16938730c58d32a820d61cb27bf8e70314964f3c2048e9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a17bdfefa2efbf2375079ac053ac37da76f4ea522af25fdd3489d88a8f6f804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a17bdfefa2efbf2375079ac053ac37da76f4ea522af25fdd3489d88a8f6f804->enter($__internal_4a17bdfefa2efbf2375079ac053ac37da76f4ea522af25fdd3489d88a8f6f804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5e79b3c3859bf79a234e4bed8511eec20d27e07f6fffdac574c192cabddeb59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e79b3c3859bf79a234e4bed8511eec20d27e07f6fffdac574c192cabddeb59e->enter($__internal_5e79b3c3859bf79a234e4bed8511eec20d27e07f6fffdac574c192cabddeb59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5e79b3c3859bf79a234e4bed8511eec20d27e07f6fffdac574c192cabddeb59e->leave($__internal_5e79b3c3859bf79a234e4bed8511eec20d27e07f6fffdac574c192cabddeb59e_prof);

        
        $__internal_4a17bdfefa2efbf2375079ac053ac37da76f4ea522af25fdd3489d88a8f6f804->leave($__internal_4a17bdfefa2efbf2375079ac053ac37da76f4ea522af25fdd3489d88a8f6f804_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_630c0b4edde68224a2159fa83a7075fcf931c9162efcd6204fae1cc7d7e1ac5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630c0b4edde68224a2159fa83a7075fcf931c9162efcd6204fae1cc7d7e1ac5c->enter($__internal_630c0b4edde68224a2159fa83a7075fcf931c9162efcd6204fae1cc7d7e1ac5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cf77c41f0a8234b54cdac97fbcb5f66dd446ee2f86082367d2157ebef408ba30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf77c41f0a8234b54cdac97fbcb5f66dd446ee2f86082367d2157ebef408ba30->enter($__internal_cf77c41f0a8234b54cdac97fbcb5f66dd446ee2f86082367d2157ebef408ba30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_cf77c41f0a8234b54cdac97fbcb5f66dd446ee2f86082367d2157ebef408ba30->leave($__internal_cf77c41f0a8234b54cdac97fbcb5f66dd446ee2f86082367d2157ebef408ba30_prof);

        
        $__internal_630c0b4edde68224a2159fa83a7075fcf931c9162efcd6204fae1cc7d7e1ac5c->leave($__internal_630c0b4edde68224a2159fa83a7075fcf931c9162efcd6204fae1cc7d7e1ac5c_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/guillaumeamortila/Desktop/WebDev/max-symfony-rest/tp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
