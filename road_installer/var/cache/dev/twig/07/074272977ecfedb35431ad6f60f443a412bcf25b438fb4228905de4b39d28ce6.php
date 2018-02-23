<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cd88e7b852bbf9967484c5b005b52468d69447ec92081b31944ccdb1b5cf63ae extends Twig_Template
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
        $__internal_bbe4080c583e6323fb2f95999500a2fa803b660152b26630894f80f82dacb1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe4080c583e6323fb2f95999500a2fa803b660152b26630894f80f82dacb1c7->enter($__internal_bbe4080c583e6323fb2f95999500a2fa803b660152b26630894f80f82dacb1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5f18c5a05079431afdbd437897afca188486213817369a7bbb3f1952f988c386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f18c5a05079431afdbd437897afca188486213817369a7bbb3f1952f988c386->enter($__internal_5f18c5a05079431afdbd437897afca188486213817369a7bbb3f1952f988c386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_bbe4080c583e6323fb2f95999500a2fa803b660152b26630894f80f82dacb1c7->leave($__internal_bbe4080c583e6323fb2f95999500a2fa803b660152b26630894f80f82dacb1c7_prof);

        
        $__internal_5f18c5a05079431afdbd437897afca188486213817369a7bbb3f1952f988c386->leave($__internal_5f18c5a05079431afdbd437897afca188486213817369a7bbb3f1952f988c386_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_322b205fb0a141e3ae405cb538078781ba06e06e2dc92c56583b2f3895ec9363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322b205fb0a141e3ae405cb538078781ba06e06e2dc92c56583b2f3895ec9363->enter($__internal_322b205fb0a141e3ae405cb538078781ba06e06e2dc92c56583b2f3895ec9363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba74aa6275c83d9539d922ee73cf9c23f22d9746f2d54cc614c0654856109fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba74aa6275c83d9539d922ee73cf9c23f22d9746f2d54cc614c0654856109fbc->enter($__internal_ba74aa6275c83d9539d922ee73cf9c23f22d9746f2d54cc614c0654856109fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ba74aa6275c83d9539d922ee73cf9c23f22d9746f2d54cc614c0654856109fbc->leave($__internal_ba74aa6275c83d9539d922ee73cf9c23f22d9746f2d54cc614c0654856109fbc_prof);

        
        $__internal_322b205fb0a141e3ae405cb538078781ba06e06e2dc92c56583b2f3895ec9363->leave($__internal_322b205fb0a141e3ae405cb538078781ba06e06e2dc92c56583b2f3895ec9363_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f531dc391bf1d53d84f851419beac8c8d89bdeb3e643d3a65a3f6fd23cf701cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f531dc391bf1d53d84f851419beac8c8d89bdeb3e643d3a65a3f6fd23cf701cf->enter($__internal_f531dc391bf1d53d84f851419beac8c8d89bdeb3e643d3a65a3f6fd23cf701cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_26f04bb1d40d35186d3b5cd45bd37c36c617dd9ef2bf54baa92edc4ace751fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f04bb1d40d35186d3b5cd45bd37c36c617dd9ef2bf54baa92edc4ace751fa8->enter($__internal_26f04bb1d40d35186d3b5cd45bd37c36c617dd9ef2bf54baa92edc4ace751fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_26f04bb1d40d35186d3b5cd45bd37c36c617dd9ef2bf54baa92edc4ace751fa8->leave($__internal_26f04bb1d40d35186d3b5cd45bd37c36c617dd9ef2bf54baa92edc4ace751fa8_prof);

        
        $__internal_f531dc391bf1d53d84f851419beac8c8d89bdeb3e643d3a65a3f6fd23cf701cf->leave($__internal_f531dc391bf1d53d84f851419beac8c8d89bdeb3e643d3a65a3f6fd23cf701cf_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6af8e71ac5d7e41b631c3fdf639ed03fcb3e01eb22f07c6069deb8726f0a495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6af8e71ac5d7e41b631c3fdf639ed03fcb3e01eb22f07c6069deb8726f0a495->enter($__internal_c6af8e71ac5d7e41b631c3fdf639ed03fcb3e01eb22f07c6069deb8726f0a495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d605036a9029fb880df5c29dd891781306e704f44199744dcee46c6353cb96a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d605036a9029fb880df5c29dd891781306e704f44199744dcee46c6353cb96a->enter($__internal_1d605036a9029fb880df5c29dd891781306e704f44199744dcee46c6353cb96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d605036a9029fb880df5c29dd891781306e704f44199744dcee46c6353cb96a->leave($__internal_1d605036a9029fb880df5c29dd891781306e704f44199744dcee46c6353cb96a_prof);

        
        $__internal_c6af8e71ac5d7e41b631c3fdf639ed03fcb3e01eb22f07c6069deb8726f0a495->leave($__internal_c6af8e71ac5d7e41b631c3fdf639ed03fcb3e01eb22f07c6069deb8726f0a495_prof);

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
", "@Twig/layout.html.twig", "/var/www/html/road_installer/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
