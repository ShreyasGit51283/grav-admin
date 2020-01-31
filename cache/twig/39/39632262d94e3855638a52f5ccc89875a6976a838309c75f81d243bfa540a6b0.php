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

/* partials/blog-list-item.html.twig */
class __TwigTemplate_7224f02154d2b16fb254291fa3f4ee21b8d24c9288de851759acd95c6a3cf621 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!--<div class=\"card\">

    ";
        // line 3
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 4
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 5
            echo "
   <div class=\"card-image\">
        <a href=\"";
            // line 7
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 800, 1 => 400], "method"), "html", []);
            echo "</a>
    </div>
    ";
        }
        // line 10
        echo "    <div class=\"card-header\">
        <div class=\"card-subtitle text-gray\">
            ";
        // line 12
        $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-list-item.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
        <div class=\"card-title\">
        ";
        // line 15
        $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-list-item.html.twig", 15)->display(twig_array_merge($context, ["title_level" => "h5"]));
        // line 16
        echo "        </div>
    </div>
    <div class=\"card-body\">
        ";
        // line 19
        if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
            // line 20
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "
        ";
        } else {
            // line 22
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
        ";
        }
        // line 24
        echo "    </div>
    <div class=\"card-footer\">
        ";
        // line 26
        $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-list-item.html.twig", 26)->display($context);
        // line 27
        echo "    </div>
</div>-->

<div class=\"tile\">
  <div class=\"tile-content\">
    <p>
    ";
        // line 33
        $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-list-item.html.twig", 33)->display(twig_array_merge($context, ["title_level" => "h5"]));
        // line 34
        echo "    </p>
    <p class=\"tile-title\">";
        // line 35
        $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-list-item.html.twig", 35)->display($context);
        echo "</p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 35,  98 => 34,  96 => 33,  88 => 27,  86 => 26,  82 => 24,  76 => 22,  70 => 20,  68 => 19,  63 => 16,  61 => 15,  57 => 13,  55 => 12,  51 => 10,  43 => 7,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!--<div class=\"card\">

    {% set image = page.media.images|first %}
    {% if image %}

   <div class=\"card-image\">
        <a href=\"{{ page.url }}\">{{ image.cropZoom(800,400).html|raw }}</a>
    </div>
    {% endif %}
    <div class=\"card-header\">
        <div class=\"card-subtitle text-gray\">
            {% include 'partials/blog/date.html.twig' %}
    </div>
        <div class=\"card-title\">
        {% include 'partials/blog/title.html.twig' with {title_level: 'h5'} %}
        </div>
    </div>
    <div class=\"card-body\">
        {% if page.summary != page.content %}
            {{ page.summary|raw }}
        {% else %}
            {{ page.content|raw }}
        {% endif %}
    </div>
    <div class=\"card-footer\">
        {% include 'partials/blog/taxonomy.html.twig' %}
    </div>
</div>-->

<div class=\"tile\">
  <div class=\"tile-content\">
    <p>
    {% include 'partials/blog/title.html.twig' with {title_level: 'h5'} %}
    </p>
    <p class=\"tile-title\">{% include 'partials/blog/date.html.twig' %}</p>
  </div>
</div>
", "partials/blog-list-item.html.twig", "/Users/shreyasdeshpande/grav-admin/user/themes/quark/templates/partials/blog-list-item.html.twig");
    }
}
