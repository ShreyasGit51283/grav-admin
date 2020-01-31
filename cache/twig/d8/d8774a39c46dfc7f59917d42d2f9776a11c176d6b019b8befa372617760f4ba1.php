<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_b413b61c2dc618aa4953f7a4434636ac9b9e985c5d012f1a6fb5e300b27292c1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">

  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "
    <base href=\"";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\">
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"canonical\" href=\"";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\">

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 27
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon-16x16.png");
        echo "\" sizes=\"16x16\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 28
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon-32x32.png");
        echo "\" sizes=\"32x32\">
  </head>

  <body class=\"\">
    <main class=\"wrapper\">
      <nav id=\"navigation\" class=\"navbar navbar-default navbar-fixed-top\">
        <section class=\"container\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed float-right\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand float-left\" href=\"";
        // line 42
        echo ($context["home_url"] ?? null);
        echo "\">
              ";
        // line 43
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "title", []);
        echo "
            </a>
          </div>
          ";
        // line 46
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 51
        echo "        </section>
      </nav>

      <div class=\"content\">
        ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "      </div>

      ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 67
        echo "
    </main>

    ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    
  </body>
</html>
";
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css?family=Fira+Mono:400,700", 1 => 100], "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "//cdn.rawgit.com/necolas/normalize.css/master/normalize.css", 1 => 99], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap.min.css", 1 => 98], "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://use.fontawesome.com/releases/v5.2.0/css/all.css", 1 => 97], "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.min.css?v=8", 1 => 96], "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/main.min.css?v=8", 1 => 95], "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 94], "method");
        // line 23
        echo "        
    ";
    }

    // line 46
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 47
        echo "            <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
              ";
        // line 48
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "            </div>
          ";
    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        // line 56
        echo "          <section class=\"container centered\">
            ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "          </section>
        ";
    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
    }

    // line 62
    public function block_footer($context, array $blocks = [])
    {
        // line 63
        echo "        <footer class=\"footer\">
          ";
        // line 64
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 64)->display($context);
        // line 65
        echo "        </footer>
      ";
    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        // line 71
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-slim.min.js", 1 => 100], "method");
        // line 72
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/bootstrap.min.js", 1 => 99], "method");
        // line 73
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.min.js", 1 => 98], "method");
        // line 74
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 74,  233 => 73,  230 => 72,  227 => 71,  224 => 70,  219 => 65,  217 => 64,  214 => 63,  211 => 62,  206 => 57,  201 => 58,  199 => 57,  196 => 56,  193 => 55,  188 => 49,  186 => 48,  183 => 47,  180 => 46,  175 => 23,  172 => 22,  169 => 21,  166 => 20,  163 => 19,  160 => 18,  157 => 17,  154 => 16,  151 => 15,  141 => 11,  131 => 75,  129 => 70,  124 => 67,  122 => 62,  118 => 60,  116 => 55,  110 => 51,  108 => 46,  102 => 43,  98 => 42,  81 => 28,  77 => 27,  71 => 25,  69 => 15,  64 => 13,  59 => 11,  55 => 10,  52 => 9,  50 => 8,  42 => 3,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">

  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    {% include 'partials/metadata.html.twig' %}

    <base href=\"{{ page.url(true, true) }}\">
    <title>{% block title %}{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}{% endblock %}</title>

    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\">

    {% block stylesheets %}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Fira+Mono:400,700', 100) %}
        {% do assets.addCss('//cdn.rawgit.com/necolas/normalize.css/master/normalize.css', 99) %}
        {% do assets.addCss('theme://css/bootstrap.min.css', 98) %}
        {% do assets.addCss('https://use.fontawesome.com/releases/v5.2.0/css/all.css', 97) %}
        {% do assets.addCss('theme://css/style.min.css?v=8', 96) %}
        {% do assets.addCss('theme://css/main.min.css?v=8', 95) %}
        {% do assets.addCss('theme://css/custom.css', 94) %}
        
    {% endblock %}
    {{ assets.css() }}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon-16x16.png') }}\" sizes=\"16x16\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon-32x32.png') }}\" sizes=\"32x32\">
  </head>

  <body class=\"\">
    <main class=\"wrapper\">
      <nav id=\"navigation\" class=\"navbar navbar-default navbar-fixed-top\">
        <section class=\"container\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed float-right\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand float-left\" href=\"{{ home_url }}\">
              {{ theme_config.navbar.title }}
            </a>
          </div>
          {% block header_navigation %}
            <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
              {% include 'partials/navigation.html.twig' %}
            </div>
          {% endblock %}
        </section>
      </nav>

      <div class=\"content\">
        {% block body %}
          <section class=\"container centered\">
            {% block content %}{% endblock %}
          </section>
        {% endblock %}
      </div>

      {% block footer %}
        <footer class=\"footer\">
          {% include 'partials/footer.html.twig' %}
        </footer>
      {% endblock %}

    </main>

    {% block javascripts %}
        {% do assets.addJs('theme://js/jquery-slim.min.js', 100) %}
        {% do assets.addJs('theme://js/bootstrap.min.js', 99) %}
        {% do assets.addJs('theme://js/main.min.js', 98) %}
    {% endblock %}
    {{ assets.js() }}
    
  </body>
</html>
", "partials/base.html.twig", "/Users/shreyasdeshpande/grav-admin/user/themes/grav-coder/templates/partials/base.html.twig");
    }
}
