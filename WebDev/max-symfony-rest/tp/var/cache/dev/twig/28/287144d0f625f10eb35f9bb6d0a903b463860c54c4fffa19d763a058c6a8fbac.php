<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_c88bb227ba74da97386ea7bd0ddf4cec6728093a9eb5f36c4a7f225d2b47a6d8 extends Twig_Template
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
        $__internal_489fc2126c9218e37e25a2205fb386c4d67cd59225a8ec9acba427564f513961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489fc2126c9218e37e25a2205fb386c4d67cd59225a8ec9acba427564f513961->enter($__internal_489fc2126c9218e37e25a2205fb386c4d67cd59225a8ec9acba427564f513961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_0052d8c82c2c1f126d672438221956eb7ce0a40c77fd13155b239997370f8839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0052d8c82c2c1f126d672438221956eb7ce0a40c77fd13155b239997370f8839->enter($__internal_0052d8c82c2c1f126d672438221956eb7ce0a40c77fd13155b239997370f8839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_489fc2126c9218e37e25a2205fb386c4d67cd59225a8ec9acba427564f513961->leave($__internal_489fc2126c9218e37e25a2205fb386c4d67cd59225a8ec9acba427564f513961_prof);

        
        $__internal_0052d8c82c2c1f126d672438221956eb7ce0a40c77fd13155b239997370f8839->leave($__internal_0052d8c82c2c1f126d672438221956eb7ce0a40c77fd13155b239997370f8839_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/guillaumeamortila/Desktop/WebDev/max-symfony-rest/tp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
