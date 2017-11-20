<?php

/* base.html.twig */
class __TwigTemplate_bc467c4c0b5b7494b0b28094a0393d24ac114423db6f00bd8189c080f3adc281 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b0b7ca449b814458df8751856034a238b7cd3f0aca88a3c16f84e52f44ca38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0b7ca449b814458df8751856034a238b7cd3f0aca88a3c16f84e52f44ca38a->enter($__internal_2b0b7ca449b814458df8751856034a238b7cd3f0aca88a3c16f84e52f44ca38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ea0da3c6055428e5d9101aa9d87e5550d9dc44b3530a5f580f30dae0fd7849c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0da3c6055428e5d9101aa9d87e5550d9dc44b3530a5f580f30dae0fd7849c9->enter($__internal_ea0da3c6055428e5d9101aa9d87e5550d9dc44b3530a5f580f30dae0fd7849c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\">
    <link rel=\"stylesheet\" href=\"/my-css.css\">


    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.1/js/tether.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
</head>
<body>
<div class=\"navbar navbar-dark bg-dark mb-4 navbar-expand-md\">
    <a class=\"navbar-brand\" href=\"/\">Spotify Platform</a>

</div>
<div class=\"container\">
    ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "</div>

</body>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("my-js.js"), "html", null, true);
        echo "\"></script>
</html>
";
        
        $__internal_2b0b7ca449b814458df8751856034a238b7cd3f0aca88a3c16f84e52f44ca38a->leave($__internal_2b0b7ca449b814458df8751856034a238b7cd3f0aca88a3c16f84e52f44ca38a_prof);

        
        $__internal_ea0da3c6055428e5d9101aa9d87e5550d9dc44b3530a5f580f30dae0fd7849c9->leave($__internal_ea0da3c6055428e5d9101aa9d87e5550d9dc44b3530a5f580f30dae0fd7849c9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6922510d50304aebf003d270b5e63f1cd1e464891aa2836a887ff1b7e1c1d123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6922510d50304aebf003d270b5e63f1cd1e464891aa2836a887ff1b7e1c1d123->enter($__internal_6922510d50304aebf003d270b5e63f1cd1e464891aa2836a887ff1b7e1c1d123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_477ffd5597a7c32244fe2ed6bbcc8795777ec6c874699340c015724d1776f7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477ffd5597a7c32244fe2ed6bbcc8795777ec6c874699340c015724d1776f7fd->enter($__internal_477ffd5597a7c32244fe2ed6bbcc8795777ec6c874699340c015724d1776f7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Streaming Platform";
        
        $__internal_477ffd5597a7c32244fe2ed6bbcc8795777ec6c874699340c015724d1776f7fd->leave($__internal_477ffd5597a7c32244fe2ed6bbcc8795777ec6c874699340c015724d1776f7fd_prof);

        
        $__internal_6922510d50304aebf003d270b5e63f1cd1e464891aa2836a887ff1b7e1c1d123->leave($__internal_6922510d50304aebf003d270b5e63f1cd1e464891aa2836a887ff1b7e1c1d123_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fd0e77ad99e0fbc3ed93c80ffe3d57c9e85584c046f48656b013d28e09395d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd0e77ad99e0fbc3ed93c80ffe3d57c9e85584c046f48656b013d28e09395d4->enter($__internal_9fd0e77ad99e0fbc3ed93c80ffe3d57c9e85584c046f48656b013d28e09395d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eea69a1c608e13aeb55676fca54419f5a2d87ca1545e8219c06694056a28e353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea69a1c608e13aeb55676fca54419f5a2d87ca1545e8219c06694056a28e353->enter($__internal_eea69a1c608e13aeb55676fca54419f5a2d87ca1545e8219c06694056a28e353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eea69a1c608e13aeb55676fca54419f5a2d87ca1545e8219c06694056a28e353->leave($__internal_eea69a1c608e13aeb55676fca54419f5a2d87ca1545e8219c06694056a28e353_prof);

        
        $__internal_9fd0e77ad99e0fbc3ed93c80ffe3d57c9e85584c046f48656b013d28e09395d4->leave($__internal_9fd0e77ad99e0fbc3ed93c80ffe3d57c9e85584c046f48656b013d28e09395d4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  74 => 5,  61 => 27,  56 => 24,  54 => 23,  33 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Streaming Platform{% endblock %}</title>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\">
    <link rel=\"stylesheet\" href=\"/my-css.css\">


    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.1/js/tether.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
</head>
<body>
<div class=\"navbar navbar-dark bg-dark mb-4 navbar-expand-md\">
    <a class=\"navbar-brand\" href=\"/\">Spotify Platform</a>

</div>
<div class=\"container\">
    {% block body %}{% endblock %}
</div>

</body>
<script src=\"{{ asset(\"my-js.js\") }}\"></script>
</html>
", "base.html.twig", "/Users/guillaumeamortila/Desktop/WebDev/max-symfony-rest/tp/app/Resources/views/base.html.twig");
    }
}
