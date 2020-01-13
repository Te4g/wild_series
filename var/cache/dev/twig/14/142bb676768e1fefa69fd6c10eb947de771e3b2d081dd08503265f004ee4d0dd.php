<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* navbar.html.twig */
class __TwigTemplate_c7828424ac28b2a810ef6f4bb7dd7f560a50702c2fdfc70160549e39fb9a4482 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    <header>
        <nav class=\"navbar navbar-light bg-light\">
            <a class=\"navbar-brand btn btn-primary\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("welcome"), "html", null, true);
        echo "</a>
            <div>
                <a class=\"btn btn-secondary\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("program_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.series"), "html", null, true);
        echo "</a>
                <a class=\"btn btn-secondary\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("season_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.seasons"), "html", null, true);
        echo "</a>
                <a class=\"btn btn-secondary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("episode_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.episodes"), "html", null, true);
        echo "</a>
                <a class=\"btn btn-secondary\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actor_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.actors"), "html", null, true);
        echo "</a>
                <a class=\"btn btn-secondary\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.comments"), "html", null, true);
        echo "</a>
                ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("hello_username", ["%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "email", [], "any", false, false, false, 12)], "messages");
            // line 14
            echo " !
                    <a class=\"btn btn-primary\" href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.logout"), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 17
            echo "                    <a class=\"btn btn-primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.login"), "html", null, true);
            echo "</a>
                ";
        }
        // line 19
        echo "
            </div>
            <div class=\"dropdown\">
                <button class=\"btn btn-info dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("language"), "html", null, true);
        echo "
                </button>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                    <a class=\"dropdown-item\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index", ["_locale" => "en"]);
        echo "\"><span class=\"flag-icon-eg\"></span>English</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index", ["_locale" => "es"]);
        echo "\"><span class=\"flag-icon flag-icon-es\"></span>Espanol</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index", ["_locale" => "fr"]);
        echo "\"><span class=\"flag-icon flag-icon-fr\"></span>Français</a>
                </div>
            </div>
        </nav>
    </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 28,  143 => 27,  139 => 26,  133 => 23,  127 => 19,  119 => 17,  112 => 15,  109 => 14,  106 => 12,  104 => 11,  98 => 10,  92 => 9,  86 => 8,  80 => 7,  74 => 6,  67 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
    <header>
        <nav class=\"navbar navbar-light bg-light\">
            <a class=\"navbar-brand btn btn-primary\" href=\"{{ path('app_index') }}\">{{ 'welcome'|trans }}</a>
            <div>
                <a class=\"btn btn-secondary\" href=\"{{ path('program_index') }}\">{{ 'list.series'|trans }}</a>
                <a class=\"btn btn-secondary\" href=\"{{ path('season_index') }}\">{{ 'list.seasons'|trans }}</a>
                <a class=\"btn btn-secondary\" href=\"{{ path('episode_index') }}\">{{ 'list.episodes'|trans }}</a>
                <a class=\"btn btn-secondary\" href=\"{{ path('actor_index') }}\">{{ 'list.actors'|trans }}</a>
                <a class=\"btn btn-secondary\" href=\"{{ path('comment_index') }}\">{{ 'list.comments'|trans }}</a>
                {% if app.user %}
                    {% trans with {'%username%': app.user.email} %}
                        hello_username
                    {% endtrans %} !
                    <a class=\"btn btn-primary\" href=\"{{ path('app_logout') }}\"> {{ 'account.logout'|trans }}</a>
                {% else %}
                    <a class=\"btn btn-primary\" href=\"{{ path('app_login') }}\"> {{ 'account.login'|trans }}</a>
                {% endif %}

            </div>
            <div class=\"dropdown\">
                <button class=\"btn btn-info dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    {{'language' | trans}}
                </button>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                    <a class=\"dropdown-item\" href=\"{{ path('app_index', {'_locale' : 'en'}) }}\"><span class=\"flag-icon-eg\"></span>English</a>
                    <a class=\"dropdown-item\" href=\"{{ path('app_index', {'_locale' : 'es'}) }}\"><span class=\"flag-icon flag-icon-es\"></span>Espanol</a>
                    <a class=\"dropdown-item\" href=\"{{ path('app_index', {'_locale' : 'fr'}) }}\"><span class=\"flag-icon flag-icon-fr\"></span>Français</a>
                </div>
            </div>
        </nav>
    </header>
{% endblock %}", "navbar.html.twig", "/home/te4g/PhpstormProjects/symfony_quest/wild-series/templates/navbar.html.twig");
    }
}
