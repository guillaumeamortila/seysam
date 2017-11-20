<?php

/* EEMIPlatformBundle:Default:index.html.twig */
class __TwigTemplate_c1756fda576e25f7b319e5ff1b665770d4414c54875410f2778c1f41c3d8b1e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EEMIPlatformBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_233254b2830e08262da46ac8128e4dd2feec8b5594d508f9386b8fafe8770329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233254b2830e08262da46ac8128e4dd2feec8b5594d508f9386b8fafe8770329->enter($__internal_233254b2830e08262da46ac8128e4dd2feec8b5594d508f9386b8fafe8770329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EEMIPlatformBundle:Default:index.html.twig"));

        $__internal_0ecee82f78800bd916d7a060a2923160ba6fd59a9e32e7c672931a7a6c78cb3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecee82f78800bd916d7a060a2923160ba6fd59a9e32e7c672931a7a6c78cb3b->enter($__internal_0ecee82f78800bd916d7a060a2923160ba6fd59a9e32e7c672931a7a6c78cb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EEMIPlatformBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_233254b2830e08262da46ac8128e4dd2feec8b5594d508f9386b8fafe8770329->leave($__internal_233254b2830e08262da46ac8128e4dd2feec8b5594d508f9386b8fafe8770329_prof);

        
        $__internal_0ecee82f78800bd916d7a060a2923160ba6fd59a9e32e7c672931a7a6c78cb3b->leave($__internal_0ecee82f78800bd916d7a060a2923160ba6fd59a9e32e7c672931a7a6c78cb3b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76bab4cd4d20c35407bcd6e0af285132e2caa829940d570a5d89f112c500ddc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76bab4cd4d20c35407bcd6e0af285132e2caa829940d570a5d89f112c500ddc5->enter($__internal_76bab4cd4d20c35407bcd6e0af285132e2caa829940d570a5d89f112c500ddc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95d21947eec006c1b5283d11e0253751eb54239e475fe50dbfadb4e2104e38da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d21947eec006c1b5283d11e0253751eb54239e475fe50dbfadb4e2104e38da->enter($__internal_95d21947eec006c1b5283d11e0253751eb54239e475fe50dbfadb4e2104e38da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <input id=\"recherche\" class=\"form-control\" type=\"text\" name=\"search\" placeholder=\"Rechercher une musique, un artiste ou un album\"  />
        <div id=\"div-opt-search\" class=\"mt-3\">
            <div id=\"type-search\" style=\"display:inline;\">
                <input type=\"checkbox\" id=\"search-track\" name=\"sch-type\" value=\"track\" checked> <label for=\"search-track\">Morceaux</label> &nbsp;&nbsp;&nbsp;
                <input type=\"checkbox\" id=\"search-album\" name=\"sch-type\" value=\"album\" checked> <label for=\"search-album\">Albums</label> &nbsp;&nbsp;&nbsp;
                <input type=\"checkbox\" id=\"search-artist\" name=\"sch-type\" value=\"artist\" checked> <label for=\"search-artist\">Artistes</label> &nbsp;&nbsp;&nbsp;
            </div>
            <button class=\"btn btn-primary w-25\" id=\"check-search\">Rechercher</button>
            <button class=\"btn btn-secondary w-25\" id=\"check-all-search\">Tout voir</button>
        </div>
    </div>

    <div class=\"container my-4\" id=\"response-ctnr\">
        <div class=\"row\" id=\"loader-search\" class=\"loader\"></div>
        <h2 id=\"track-result-title\" class=\"text-center result-title my-4\">Morceaux</h2>
        <div class=\"row\" id=\"track-response\"></div>
        <h2 id=\"artist-result-title\" class=\"text-center result-title my-4\">Artistes</h2>
        <div class=\"row\" id=\"artist-response\"></div>
        <h2 id=\"album-result-title\" class=\"text-center result-title my-4\">Albums</h2>
        <div class=\"row\" id=\"album-response\"></div>
    </div>

";
        
        $__internal_95d21947eec006c1b5283d11e0253751eb54239e475fe50dbfadb4e2104e38da->leave($__internal_95d21947eec006c1b5283d11e0253751eb54239e475fe50dbfadb4e2104e38da_prof);

        
        $__internal_76bab4cd4d20c35407bcd6e0af285132e2caa829940d570a5d89f112c500ddc5->leave($__internal_76bab4cd4d20c35407bcd6e0af285132e2caa829940d570a5d89f112c500ddc5_prof);

    }

    public function getTemplateName()
    {
        return "EEMIPlatformBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">
        <input id=\"recherche\" class=\"form-control\" type=\"text\" name=\"search\" placeholder=\"Rechercher une musique, un artiste ou un album\"  />
        <div id=\"div-opt-search\" class=\"mt-3\">
            <div id=\"type-search\" style=\"display:inline;\">
                <input type=\"checkbox\" id=\"search-track\" name=\"sch-type\" value=\"track\" checked> <label for=\"search-track\">Morceaux</label> &nbsp;&nbsp;&nbsp;
                <input type=\"checkbox\" id=\"search-album\" name=\"sch-type\" value=\"album\" checked> <label for=\"search-album\">Albums</label> &nbsp;&nbsp;&nbsp;
                <input type=\"checkbox\" id=\"search-artist\" name=\"sch-type\" value=\"artist\" checked> <label for=\"search-artist\">Artistes</label> &nbsp;&nbsp;&nbsp;
            </div>
            <button class=\"btn btn-primary w-25\" id=\"check-search\">Rechercher</button>
            <button class=\"btn btn-secondary w-25\" id=\"check-all-search\">Tout voir</button>
        </div>
    </div>

    <div class=\"container my-4\" id=\"response-ctnr\">
        <div class=\"row\" id=\"loader-search\" class=\"loader\"></div>
        <h2 id=\"track-result-title\" class=\"text-center result-title my-4\">Morceaux</h2>
        <div class=\"row\" id=\"track-response\"></div>
        <h2 id=\"artist-result-title\" class=\"text-center result-title my-4\">Artistes</h2>
        <div class=\"row\" id=\"artist-response\"></div>
        <h2 id=\"album-result-title\" class=\"text-center result-title my-4\">Albums</h2>
        <div class=\"row\" id=\"album-response\"></div>
    </div>

{% endblock %}

", "EEMIPlatformBundle:Default:index.html.twig", "/Users/guillaumeamortila/Desktop/WebDev/max-symfony-rest/tp/src/EEMI/PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
