<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_61c5829d76680b26b09ce46572964b7fb4ed574f11e6bfffc64b7cd5bb178a12 extends Twig_Template
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
        $__internal_9748116e2f44702d79f8c8ab33865a8015697e070c89b189b2e44dde795c56dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9748116e2f44702d79f8c8ab33865a8015697e070c89b189b2e44dde795c56dd->enter($__internal_9748116e2f44702d79f8c8ab33865a8015697e070c89b189b2e44dde795c56dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_25a576269c63ea70d66147c324602d723b7105c3ee58b2536f007ab21c0bf777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a576269c63ea70d66147c324602d723b7105c3ee58b2536f007ab21c0bf777->enter($__internal_25a576269c63ea70d66147c324602d723b7105c3ee58b2536f007ab21c0bf777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9748116e2f44702d79f8c8ab33865a8015697e070c89b189b2e44dde795c56dd->leave($__internal_9748116e2f44702d79f8c8ab33865a8015697e070c89b189b2e44dde795c56dd_prof);

        
        $__internal_25a576269c63ea70d66147c324602d723b7105c3ee58b2536f007ab21c0bf777->leave($__internal_25a576269c63ea70d66147c324602d723b7105c3ee58b2536f007ab21c0bf777_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f431a0743740696d192d48b4d0ba81ea1199af00789dc98bf2fd885e9f75256c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f431a0743740696d192d48b4d0ba81ea1199af00789dc98bf2fd885e9f75256c->enter($__internal_f431a0743740696d192d48b4d0ba81ea1199af00789dc98bf2fd885e9f75256c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a4d13680f897435454db2d212c1f9e7a6c9ef4a4c7e79911a99e66855cda6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4d13680f897435454db2d212c1f9e7a6c9ef4a4c7e79911a99e66855cda6be->enter($__internal_5a4d13680f897435454db2d212c1f9e7a6c9ef4a4c7e79911a99e66855cda6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5a4d13680f897435454db2d212c1f9e7a6c9ef4a4c7e79911a99e66855cda6be->leave($__internal_5a4d13680f897435454db2d212c1f9e7a6c9ef4a4c7e79911a99e66855cda6be_prof);

        
        $__internal_f431a0743740696d192d48b4d0ba81ea1199af00789dc98bf2fd885e9f75256c->leave($__internal_f431a0743740696d192d48b4d0ba81ea1199af00789dc98bf2fd885e9f75256c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_05a53198761e45308a6f474849a5308cbaacb4fe76aa7cf2b7afb1bd5aaf98a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a53198761e45308a6f474849a5308cbaacb4fe76aa7cf2b7afb1bd5aaf98a8->enter($__internal_05a53198761e45308a6f474849a5308cbaacb4fe76aa7cf2b7afb1bd5aaf98a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae4d3c548e317d5e7dbbdc75f0e40e59d176b3ae20958ec159515c2fc35a8482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4d3c548e317d5e7dbbdc75f0e40e59d176b3ae20958ec159515c2fc35a8482->enter($__internal_ae4d3c548e317d5e7dbbdc75f0e40e59d176b3ae20958ec159515c2fc35a8482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_ae4d3c548e317d5e7dbbdc75f0e40e59d176b3ae20958ec159515c2fc35a8482->leave($__internal_ae4d3c548e317d5e7dbbdc75f0e40e59d176b3ae20958ec159515c2fc35a8482_prof);

        
        $__internal_05a53198761e45308a6f474849a5308cbaacb4fe76aa7cf2b7afb1bd5aaf98a8->leave($__internal_05a53198761e45308a6f474849a5308cbaacb4fe76aa7cf2b7afb1bd5aaf98a8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_25f04b11dc335bc0025d9e14ec3e731e9f4b9b78af49eb07bacc714011190687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f04b11dc335bc0025d9e14ec3e731e9f4b9b78af49eb07bacc714011190687->enter($__internal_25f04b11dc335bc0025d9e14ec3e731e9f4b9b78af49eb07bacc714011190687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aea8cd087ed8276001a209f573ded2b3f781c119d0ec0699a99d62d69450cdc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea8cd087ed8276001a209f573ded2b3f781c119d0ec0699a99d62d69450cdc3->enter($__internal_aea8cd087ed8276001a209f573ded2b3f781c119d0ec0699a99d62d69450cdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_aea8cd087ed8276001a209f573ded2b3f781c119d0ec0699a99d62d69450cdc3->leave($__internal_aea8cd087ed8276001a209f573ded2b3f781c119d0ec0699a99d62d69450cdc3_prof);

        
        $__internal_25f04b11dc335bc0025d9e14ec3e731e9f4b9b78af49eb07bacc714011190687->leave($__internal_25f04b11dc335bc0025d9e14ec3e731e9f4b9b78af49eb07bacc714011190687_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/guillaumeamortila/Desktop/WebDev/max-symfony-rest/tp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
