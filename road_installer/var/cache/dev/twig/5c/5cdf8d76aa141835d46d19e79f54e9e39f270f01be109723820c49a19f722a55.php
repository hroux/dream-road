<?php

/* home.html.twig */
class __TwigTemplate_b8ddc9474aafc382c4e434b281c22a3329405f4fc16b7f473dff9fe924cedc74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basic.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "basic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0886707bb5c8bf4ef63945620a8baae742422d56cd2803f45be9d0db8251f8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0886707bb5c8bf4ef63945620a8baae742422d56cd2803f45be9d0db8251f8b2->enter($__internal_0886707bb5c8bf4ef63945620a8baae742422d56cd2803f45be9d0db8251f8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_ca176be4a9a6a74b44e22917651d570106f6544a6be484a0ebf256b5be15dd71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca176be4a9a6a74b44e22917651d570106f6544a6be484a0ebf256b5be15dd71->enter($__internal_ca176be4a9a6a74b44e22917651d570106f6544a6be484a0ebf256b5be15dd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0886707bb5c8bf4ef63945620a8baae742422d56cd2803f45be9d0db8251f8b2->leave($__internal_0886707bb5c8bf4ef63945620a8baae742422d56cd2803f45be9d0db8251f8b2_prof);

        
        $__internal_ca176be4a9a6a74b44e22917651d570106f6544a6be484a0ebf256b5be15dd71->leave($__internal_ca176be4a9a6a74b44e22917651d570106f6544a6be484a0ebf256b5be15dd71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7436ef93a85a7378fb6949ac4cace209fe1672a4644966ca8cdab25fc4f12c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7436ef93a85a7378fb6949ac4cace209fe1672a4644966ca8cdab25fc4f12c58->enter($__internal_7436ef93a85a7378fb6949ac4cace209fe1672a4644966ca8cdab25fc4f12c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7427733ac7db9c6d7e16b452ff9fe2c1347a2ebd34a6cba9395e3e05336ce3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7427733ac7db9c6d7e16b452ff9fe2c1347a2ebd34a6cba9395e3e05336ce3f->enter($__internal_a7427733ac7db9c6d7e16b452ff9fe2c1347a2ebd34a6cba9395e3e05336ce3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'widget');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 8, $this->getSourceContext()); })()));
        echo "

<h3>Journal d'erreurs</h3>
<div id=\"logsInformations\">
  ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new Twig_Error_Runtime('Variable "log" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "
</div>

<button class=\"btn btn-success\">Hello ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new Twig_Error_Runtime('Variable "test" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo " :)</button>
";
        
        $__internal_a7427733ac7db9c6d7e16b452ff9fe2c1347a2ebd34a6cba9395e3e05336ce3f->leave($__internal_a7427733ac7db9c6d7e16b452ff9fe2c1347a2ebd34a6cba9395e3e05336ce3f_prof);

        
        $__internal_7436ef93a85a7378fb6949ac4cace209fe1672a4644966ca8cdab25fc4f12c58->leave($__internal_7436ef93a85a7378fb6949ac4cace209fe1672a4644966ca8cdab25fc4f12c58_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  69 => 12,  62 => 8,  57 => 6,  53 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"basic.html.twig\" %}

{% block body %}
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}

{{ dump(data) }}

<h3>Journal d'erreurs</h3>
<div id=\"logsInformations\">
  {{log}}
</div>

<button class=\"btn btn-success\">Hello {{test}} :)</button>
{% endblock %}
", "home.html.twig", "/var/www/html/road_installer/templates/home.html.twig");
    }
}
