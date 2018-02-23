<?php

/* basic.html.twig */
class __TwigTemplate_6f5efaff67a467d443b2558e820c2d3e574b408c050335815cc598ad05269569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c52ff83c36f5446c0fa056997fcca27db73d3ad4f2bcbee53774b482b6ef4916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52ff83c36f5446c0fa056997fcca27db73d3ad4f2bcbee53774b482b6ef4916->enter($__internal_c52ff83c36f5446c0fa056997fcca27db73d3ad4f2bcbee53774b482b6ef4916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basic.html.twig"));

        $__internal_da776d761c753516cecb19b46bb31e73af3f412f4bc4312cfb8c7dd8a5521914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da776d761c753516cecb19b46bb31e73af3f412f4bc4312cfb8c7dd8a5521914->enter($__internal_da776d761c753516cecb19b46bb31e73af3f412f4bc4312cfb8c7dd8a5521914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basic.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
      <div id=\"container-xroad\">
        <div class=\"xroad-logo\">
          <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("xroad.png"), "html", null, true);
        echo "\"/><br/>
        </div>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "      </div>
      ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_c52ff83c36f5446c0fa056997fcca27db73d3ad4f2bcbee53774b482b6ef4916->leave($__internal_c52ff83c36f5446c0fa056997fcca27db73d3ad4f2bcbee53774b482b6ef4916_prof);

        
        $__internal_da776d761c753516cecb19b46bb31e73af3f412f4bc4312cfb8c7dd8a5521914->leave($__internal_da776d761c753516cecb19b46bb31e73af3f412f4bc4312cfb8c7dd8a5521914_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_035ab6b90669f286f35c7f8f8fb4886c770529c00f132afb1e195a7b190499dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035ab6b90669f286f35c7f8f8fb4886c770529c00f132afb1e195a7b190499dd->enter($__internal_035ab6b90669f286f35c7f8f8fb4886c770529c00f132afb1e195a7b190499dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_590289eee489fb307d18de5e33107437279145632334bb15065f2dd278b2629b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590289eee489fb307d18de5e33107437279145632334bb15065f2dd278b2629b->enter($__internal_590289eee489fb307d18de5e33107437279145632334bb15065f2dd278b2629b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "X-Road Installer";
        
        $__internal_590289eee489fb307d18de5e33107437279145632334bb15065f2dd278b2629b->leave($__internal_590289eee489fb307d18de5e33107437279145632334bb15065f2dd278b2629b_prof);

        
        $__internal_035ab6b90669f286f35c7f8f8fb4886c770529c00f132afb1e195a7b190499dd->leave($__internal_035ab6b90669f286f35c7f8f8fb4886c770529c00f132afb1e195a7b190499dd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e74ea2bcfeeb3c4eefae03626e1b316bab392032b5d906182864dc1a18ada0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74ea2bcfeeb3c4eefae03626e1b316bab392032b5d906182864dc1a18ada0ef->enter($__internal_e74ea2bcfeeb3c4eefae03626e1b316bab392032b5d906182864dc1a18ada0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e372f0a3ab1fef8aab170c692035a9fa69014d04f3ce8af1ecc2b62f1c03dca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e372f0a3ab1fef8aab170c692035a9fa69014d04f3ce8af1ecc2b62f1c03dca6->enter($__internal_e372f0a3ab1fef8aab170c692035a9fa69014d04f3ce8af1ecc2b62f1c03dca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "          <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
          <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheet.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_e372f0a3ab1fef8aab170c692035a9fa69014d04f3ce8af1ecc2b62f1c03dca6->leave($__internal_e372f0a3ab1fef8aab170c692035a9fa69014d04f3ce8af1ecc2b62f1c03dca6_prof);

        
        $__internal_e74ea2bcfeeb3c4eefae03626e1b316bab392032b5d906182864dc1a18ada0ef->leave($__internal_e74ea2bcfeeb3c4eefae03626e1b316bab392032b5d906182864dc1a18ada0ef_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cdf1efd477aba1d1690c95f17774db4db15a90718fe3691815e92e80518c135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cdf1efd477aba1d1690c95f17774db4db15a90718fe3691815e92e80518c135->enter($__internal_7cdf1efd477aba1d1690c95f17774db4db15a90718fe3691815e92e80518c135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd0d18c609195fff3afc0ee3d74929bbb4be060f9f79f31796c72293e85b09dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0d18c609195fff3afc0ee3d74929bbb4be060f9f79f31796c72293e85b09dd->enter($__internal_bd0d18c609195fff3afc0ee3d74929bbb4be060f9f79f31796c72293e85b09dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "        ";
        
        $__internal_bd0d18c609195fff3afc0ee3d74929bbb4be060f9f79f31796c72293e85b09dd->leave($__internal_bd0d18c609195fff3afc0ee3d74929bbb4be060f9f79f31796c72293e85b09dd_prof);

        
        $__internal_7cdf1efd477aba1d1690c95f17774db4db15a90718fe3691815e92e80518c135->leave($__internal_7cdf1efd477aba1d1690c95f17774db4db15a90718fe3691815e92e80518c135_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_59c32ac714ba7cddab0fadc28f5220516f0ab88be2279352eb753b5f25d3475e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c32ac714ba7cddab0fadc28f5220516f0ab88be2279352eb753b5f25d3475e->enter($__internal_59c32ac714ba7cddab0fadc28f5220516f0ab88be2279352eb753b5f25d3475e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c581d0ff19bfba3bae4d6b407fbb63667e60ccff63e974f29ad86c50486f19f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c581d0ff19bfba3bae4d6b407fbb63667e60ccff63e974f29ad86c50486f19f7->enter($__internal_c581d0ff19bfba3bae4d6b407fbb63667e60ccff63e974f29ad86c50486f19f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
      ";
        
        $__internal_c581d0ff19bfba3bae4d6b407fbb63667e60ccff63e974f29ad86c50486f19f7->leave($__internal_c581d0ff19bfba3bae4d6b407fbb63667e60ccff63e974f29ad86c50486f19f7_prof);

        
        $__internal_59c32ac714ba7cddab0fadc28f5220516f0ab88be2279352eb753b5f25d3475e->leave($__internal_59c32ac714ba7cddab0fadc28f5220516f0ab88be2279352eb753b5f25d3475e_prof);

    }

    public function getTemplateName()
    {
        return "basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 21,  143 => 20,  134 => 19,  124 => 17,  115 => 16,  103 => 8,  98 => 7,  89 => 6,  71 => 5,  59 => 23,  57 => 19,  54 => 18,  52 => 16,  47 => 14,  41 => 10,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}X-Road Installer{% endblock %}</title>
        {% block stylesheets %}
          <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('bootstrap/css/bootstrap.min.css')}}\"/>
          <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('stylesheet.css')}}\"/>
        {% endblock %}
    </head>
    <body>
      <div id=\"container-xroad\">
        <div class=\"xroad-logo\">
          <img src=\"{{asset('xroad.png')}}\"/><br/>
        </div>
        {% block body %}
        {% endblock %}
      </div>
      {% block javascripts %}
        <script src=\"{{asset('jquery.min.js')}}\"></script>
        <script src=\"{{asset('bootstrap/js/bootstrap.js')}}\"></script>
      {% endblock %}
    </body>
</html>
", "basic.html.twig", "/var/www/html/road_installer/templates/basic.html.twig");
    }
}
