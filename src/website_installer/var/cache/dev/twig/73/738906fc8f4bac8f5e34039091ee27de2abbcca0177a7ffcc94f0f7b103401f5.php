<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d158e2b08ef8b91610718b3dafed6a761ce9f87179954f865edfd9e98a8e7bf8 extends Twig_Template
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
        $__internal_a98b9c86772f1d78fccaf76004732760328cb8b40e2421f8a65acc23edf3975e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98b9c86772f1d78fccaf76004732760328cb8b40e2421f8a65acc23edf3975e->enter($__internal_a98b9c86772f1d78fccaf76004732760328cb8b40e2421f8a65acc23edf3975e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ddc39609ba10480bf6d8ab4157cea71ee659edcd0e7ac15b99f0b994b9eb5ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc39609ba10480bf6d8ab4157cea71ee659edcd0e7ac15b99f0b994b9eb5ece->enter($__internal_ddc39609ba10480bf6d8ab4157cea71ee659edcd0e7ac15b99f0b994b9eb5ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a98b9c86772f1d78fccaf76004732760328cb8b40e2421f8a65acc23edf3975e->leave($__internal_a98b9c86772f1d78fccaf76004732760328cb8b40e2421f8a65acc23edf3975e_prof);

        
        $__internal_ddc39609ba10480bf6d8ab4157cea71ee659edcd0e7ac15b99f0b994b9eb5ece->leave($__internal_ddc39609ba10480bf6d8ab4157cea71ee659edcd0e7ac15b99f0b994b9eb5ece_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_977fd8242672a671d164b1815a7a77b9df1d01a7ed725b0cd51870dea54a5a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977fd8242672a671d164b1815a7a77b9df1d01a7ed725b0cd51870dea54a5a83->enter($__internal_977fd8242672a671d164b1815a7a77b9df1d01a7ed725b0cd51870dea54a5a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ec610e0a656d1b197dec142c648b43d1a2ec98f0d2dd33f37085d3ac8bff6f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec610e0a656d1b197dec142c648b43d1a2ec98f0d2dd33f37085d3ac8bff6f16->enter($__internal_ec610e0a656d1b197dec142c648b43d1a2ec98f0d2dd33f37085d3ac8bff6f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ec610e0a656d1b197dec142c648b43d1a2ec98f0d2dd33f37085d3ac8bff6f16->leave($__internal_ec610e0a656d1b197dec142c648b43d1a2ec98f0d2dd33f37085d3ac8bff6f16_prof);

        
        $__internal_977fd8242672a671d164b1815a7a77b9df1d01a7ed725b0cd51870dea54a5a83->leave($__internal_977fd8242672a671d164b1815a7a77b9df1d01a7ed725b0cd51870dea54a5a83_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae469cd760095c36768db6376fd2ac01f87b0f464282e865e26de4d974bb0f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae469cd760095c36768db6376fd2ac01f87b0f464282e865e26de4d974bb0f8d->enter($__internal_ae469cd760095c36768db6376fd2ac01f87b0f464282e865e26de4d974bb0f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40c04b01d8d42ea9b1cc7c59d7d285ab402531fbfbd5fdaf3f4834ecc36e3038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c04b01d8d42ea9b1cc7c59d7d285ab402531fbfbd5fdaf3f4834ecc36e3038->enter($__internal_40c04b01d8d42ea9b1cc7c59d7d285ab402531fbfbd5fdaf3f4834ecc36e3038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_40c04b01d8d42ea9b1cc7c59d7d285ab402531fbfbd5fdaf3f4834ecc36e3038->leave($__internal_40c04b01d8d42ea9b1cc7c59d7d285ab402531fbfbd5fdaf3f4834ecc36e3038_prof);

        
        $__internal_ae469cd760095c36768db6376fd2ac01f87b0f464282e865e26de4d974bb0f8d->leave($__internal_ae469cd760095c36768db6376fd2ac01f87b0f464282e865e26de4d974bb0f8d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb0310bf7c2a856e437142c59765bbc0bb8faa1b3f166394fd8c50855ba0fe86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0310bf7c2a856e437142c59765bbc0bb8faa1b3f166394fd8c50855ba0fe86->enter($__internal_eb0310bf7c2a856e437142c59765bbc0bb8faa1b3f166394fd8c50855ba0fe86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59473bfc1e9b8e5bdce7665fde700f47614abaf49c391fd308b04ee84365ae93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59473bfc1e9b8e5bdce7665fde700f47614abaf49c391fd308b04ee84365ae93->enter($__internal_59473bfc1e9b8e5bdce7665fde700f47614abaf49c391fd308b04ee84365ae93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_59473bfc1e9b8e5bdce7665fde700f47614abaf49c391fd308b04ee84365ae93->leave($__internal_59473bfc1e9b8e5bdce7665fde700f47614abaf49c391fd308b04ee84365ae93_prof);

        
        $__internal_eb0310bf7c2a856e437142c59765bbc0bb8faa1b3f166394fd8c50855ba0fe86->leave($__internal_eb0310bf7c2a856e437142c59765bbc0bb8faa1b3f166394fd8c50855ba0fe86_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/road_installer/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
