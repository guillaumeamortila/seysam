<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_16317b118e8c62e37a7daa782295969226de84ab8c8078795a36b6d6a083aa26 extends Twig_Template
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
        $__internal_77b214448f8d0a30894fce17b3fd28e0d362a3d75278ab66e7280afaf76b44c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b214448f8d0a30894fce17b3fd28e0d362a3d75278ab66e7280afaf76b44c3->enter($__internal_77b214448f8d0a30894fce17b3fd28e0d362a3d75278ab66e7280afaf76b44c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4aca4be6c5a17c4cc427b0e197864902965ed09e2b3c59411f99be0acd09d1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aca4be6c5a17c4cc427b0e197864902965ed09e2b3c59411f99be0acd09d1f5->enter($__internal_4aca4be6c5a17c4cc427b0e197864902965ed09e2b3c59411f99be0acd09d1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77b214448f8d0a30894fce17b3fd28e0d362a3d75278ab66e7280afaf76b44c3->leave($__internal_77b214448f8d0a30894fce17b3fd28e0d362a3d75278ab66e7280afaf76b44c3_prof);

        
        $__internal_4aca4be6c5a17c4cc427b0e197864902965ed09e2b3c59411f99be0acd09d1f5->leave($__internal_4aca4be6c5a17c4cc427b0e197864902965ed09e2b3c59411f99be0acd09d1f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_91e58608752dd68858654d77740e74376e67b9e3d746ae3c228336b9873db811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e58608752dd68858654d77740e74376e67b9e3d746ae3c228336b9873db811->enter($__internal_91e58608752dd68858654d77740e74376e67b9e3d746ae3c228336b9873db811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_08b30c7647292f4997139c26ba03cdfcfb058c6dfe1a6617abfdeed2b7319ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b30c7647292f4997139c26ba03cdfcfb058c6dfe1a6617abfdeed2b7319ec9->enter($__internal_08b30c7647292f4997139c26ba03cdfcfb058c6dfe1a6617abfdeed2b7319ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
        
        $__internal_08b30c7647292f4997139c26ba03cdfcfb058c6dfe1a6617abfdeed2b7319ec9->leave($__internal_08b30c7647292f4997139c26ba03cdfcfb058c6dfe1a6617abfdeed2b7319ec9_prof);

        
        $__internal_91e58608752dd68858654d77740e74376e67b9e3d746ae3c228336b9873db811->leave($__internal_91e58608752dd68858654d77740e74376e67b9e3d746ae3c228336b9873db811_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
", "@WebProfiler/Collector/ajax.html.twig", "/Users/guillaumeamortila/Desktop/WebDev/max-symfony-rest/tp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
