<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4083a47f3b74c93a652f68f8c58f1e26c0c6783a0d145739ba6e095c5cb5bed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61c8830978d046ddda774816f9d229aa5fbd19c62606821cbe7aede592fdf9e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c8830978d046ddda774816f9d229aa5fbd19c62606821cbe7aede592fdf9e4->enter($__internal_61c8830978d046ddda774816f9d229aa5fbd19c62606821cbe7aede592fdf9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b626138ebd1788d13b588300bf10fb6b350c3e243a50374cabc84780cbed846f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b626138ebd1788d13b588300bf10fb6b350c3e243a50374cabc84780cbed846f->enter($__internal_b626138ebd1788d13b588300bf10fb6b350c3e243a50374cabc84780cbed846f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_61c8830978d046ddda774816f9d229aa5fbd19c62606821cbe7aede592fdf9e4->leave($__internal_61c8830978d046ddda774816f9d229aa5fbd19c62606821cbe7aede592fdf9e4_prof);

        
        $__internal_b626138ebd1788d13b588300bf10fb6b350c3e243a50374cabc84780cbed846f->leave($__internal_b626138ebd1788d13b588300bf10fb6b350c3e243a50374cabc84780cbed846f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_be177594ad221c3f35d66e94b6c230d8eb18eda9fcf480f84c66739f9564496c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be177594ad221c3f35d66e94b6c230d8eb18eda9fcf480f84c66739f9564496c->enter($__internal_be177594ad221c3f35d66e94b6c230d8eb18eda9fcf480f84c66739f9564496c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a11e1ad241666fdb71aa95038d9f06cdb4a890e91030c360eb7e2b2854b6b004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11e1ad241666fdb71aa95038d9f06cdb4a890e91030c360eb7e2b2854b6b004->enter($__internal_a11e1ad241666fdb71aa95038d9f06cdb4a890e91030c360eb7e2b2854b6b004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a11e1ad241666fdb71aa95038d9f06cdb4a890e91030c360eb7e2b2854b6b004->leave($__internal_a11e1ad241666fdb71aa95038d9f06cdb4a890e91030c360eb7e2b2854b6b004_prof);

        
        $__internal_be177594ad221c3f35d66e94b6c230d8eb18eda9fcf480f84c66739f9564496c->leave($__internal_be177594ad221c3f35d66e94b6c230d8eb18eda9fcf480f84c66739f9564496c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6eafcdc46eb8d4761faf92bf07d8aa27b57cc1dfefc037abe5d41751388928bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eafcdc46eb8d4761faf92bf07d8aa27b57cc1dfefc037abe5d41751388928bd->enter($__internal_6eafcdc46eb8d4761faf92bf07d8aa27b57cc1dfefc037abe5d41751388928bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f9646706c346f9dd729defcae7b21f09f9f24a6984fd8dce87b854a90639a5f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9646706c346f9dd729defcae7b21f09f9f24a6984fd8dce87b854a90639a5f6->enter($__internal_f9646706c346f9dd729defcae7b21f09f9f24a6984fd8dce87b854a90639a5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f9646706c346f9dd729defcae7b21f09f9f24a6984fd8dce87b854a90639a5f6->leave($__internal_f9646706c346f9dd729defcae7b21f09f9f24a6984fd8dce87b854a90639a5f6_prof);

        
        $__internal_6eafcdc46eb8d4761faf92bf07d8aa27b57cc1dfefc037abe5d41751388928bd->leave($__internal_6eafcdc46eb8d4761faf92bf07d8aa27b57cc1dfefc037abe5d41751388928bd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ff7b4698146b3ebd8fc77d800bc33f74e2cd98bf36436cecc4de14845e16685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff7b4698146b3ebd8fc77d800bc33f74e2cd98bf36436cecc4de14845e16685->enter($__internal_6ff7b4698146b3ebd8fc77d800bc33f74e2cd98bf36436cecc4de14845e16685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_788ff7965045d34698addbc5ab8131f0632959b9cfdea2458566c0228e2e5c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788ff7965045d34698addbc5ab8131f0632959b9cfdea2458566c0228e2e5c9f->enter($__internal_788ff7965045d34698addbc5ab8131f0632959b9cfdea2458566c0228e2e5c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_788ff7965045d34698addbc5ab8131f0632959b9cfdea2458566c0228e2e5c9f->leave($__internal_788ff7965045d34698addbc5ab8131f0632959b9cfdea2458566c0228e2e5c9f_prof);

        
        $__internal_6ff7b4698146b3ebd8fc77d800bc33f74e2cd98bf36436cecc4de14845e16685->leave($__internal_6ff7b4698146b3ebd8fc77d800bc33f74e2cd98bf36436cecc4de14845e16685_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/guillaumeamortila/Desktop/WebDev/max-symfony-rest/tp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
