<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fd4095c43fd4c8998034ce4e91bd9e6c83b9b7e08f8d24930b60d691ba144360 extends Twig_Template
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
        $__internal_7ff9488aa91cb40ad302e1c807f85e2c81f5ab7a6d3ec202d0c5f214999026e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff9488aa91cb40ad302e1c807f85e2c81f5ab7a6d3ec202d0c5f214999026e9->enter($__internal_7ff9488aa91cb40ad302e1c807f85e2c81f5ab7a6d3ec202d0c5f214999026e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_04f15230a48394c2b6b7ef1e79c91c1afaecce9c02e46c6bf7f8e01bd8be47c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f15230a48394c2b6b7ef1e79c91c1afaecce9c02e46c6bf7f8e01bd8be47c2->enter($__internal_04f15230a48394c2b6b7ef1e79c91c1afaecce9c02e46c6bf7f8e01bd8be47c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ff9488aa91cb40ad302e1c807f85e2c81f5ab7a6d3ec202d0c5f214999026e9->leave($__internal_7ff9488aa91cb40ad302e1c807f85e2c81f5ab7a6d3ec202d0c5f214999026e9_prof);

        
        $__internal_04f15230a48394c2b6b7ef1e79c91c1afaecce9c02e46c6bf7f8e01bd8be47c2->leave($__internal_04f15230a48394c2b6b7ef1e79c91c1afaecce9c02e46c6bf7f8e01bd8be47c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_936da8f34921d4f7f56d6745c5891cce45bae32243e073018a8c880208a2f003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936da8f34921d4f7f56d6745c5891cce45bae32243e073018a8c880208a2f003->enter($__internal_936da8f34921d4f7f56d6745c5891cce45bae32243e073018a8c880208a2f003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6dc6d5ed6ec8734ade13558b4c65fddd7af20f325494411ceaf91f3108314485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc6d5ed6ec8734ade13558b4c65fddd7af20f325494411ceaf91f3108314485->enter($__internal_6dc6d5ed6ec8734ade13558b4c65fddd7af20f325494411ceaf91f3108314485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6dc6d5ed6ec8734ade13558b4c65fddd7af20f325494411ceaf91f3108314485->leave($__internal_6dc6d5ed6ec8734ade13558b4c65fddd7af20f325494411ceaf91f3108314485_prof);

        
        $__internal_936da8f34921d4f7f56d6745c5891cce45bae32243e073018a8c880208a2f003->leave($__internal_936da8f34921d4f7f56d6745c5891cce45bae32243e073018a8c880208a2f003_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a329902c3dbcf1904661353a2cf3ffbe3f812a4fa42eff207a3a93f4f7a1e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a329902c3dbcf1904661353a2cf3ffbe3f812a4fa42eff207a3a93f4f7a1e0b->enter($__internal_3a329902c3dbcf1904661353a2cf3ffbe3f812a4fa42eff207a3a93f4f7a1e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d7874a369800e01dda1f769abfca4c071c0af44a0c74129fe26b7d89fb467397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7874a369800e01dda1f769abfca4c071c0af44a0c74129fe26b7d89fb467397->enter($__internal_d7874a369800e01dda1f769abfca4c071c0af44a0c74129fe26b7d89fb467397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7874a369800e01dda1f769abfca4c071c0af44a0c74129fe26b7d89fb467397->leave($__internal_d7874a369800e01dda1f769abfca4c071c0af44a0c74129fe26b7d89fb467397_prof);

        
        $__internal_3a329902c3dbcf1904661353a2cf3ffbe3f812a4fa42eff207a3a93f4f7a1e0b->leave($__internal_3a329902c3dbcf1904661353a2cf3ffbe3f812a4fa42eff207a3a93f4f7a1e0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8205385f878bdd1320ea642ace04a579140d13dd526f52f8a5d14c2de54fd715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8205385f878bdd1320ea642ace04a579140d13dd526f52f8a5d14c2de54fd715->enter($__internal_8205385f878bdd1320ea642ace04a579140d13dd526f52f8a5d14c2de54fd715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_be559337f3593aa95f1a904dbb81d8b58dc789671cede4b231f40ed132718af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be559337f3593aa95f1a904dbb81d8b58dc789671cede4b231f40ed132718af1->enter($__internal_be559337f3593aa95f1a904dbb81d8b58dc789671cede4b231f40ed132718af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_be559337f3593aa95f1a904dbb81d8b58dc789671cede4b231f40ed132718af1->leave($__internal_be559337f3593aa95f1a904dbb81d8b58dc789671cede4b231f40ed132718af1_prof);

        
        $__internal_8205385f878bdd1320ea642ace04a579140d13dd526f52f8a5d14c2de54fd715->leave($__internal_8205385f878bdd1320ea642ace04a579140d13dd526f52f8a5d14c2de54fd715_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/guillaumeamortila/Desktop/WebDev/max-symfony-rest/tp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
