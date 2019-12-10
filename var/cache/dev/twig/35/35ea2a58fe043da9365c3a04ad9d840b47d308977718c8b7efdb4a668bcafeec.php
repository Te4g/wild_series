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

/* episode/show.html.twig */
class __TwigTemplate_b12b5cf15fcfb034324cf3aab2380da854d55cdb485fbd7b5455de3530c72521 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "episode/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "episode/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "episode/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Episode";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Episode</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Number</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 20, $this->source); })()), "number", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Synopsis</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 24, $this->source); })()), "synopsis", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <br>
    <p><strong>Liste des commentaires:</strong></p>

    ";
        // line 32
        if ((isset($context["comments"]) || array_key_exists("comments", $context))) {
            // line 33
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 33, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 34
                echo "            <div class=\"container-fluid d-flex flex-column\">
                <div class = d-flex>
                <p>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 36), "email", [], "any", false, false, false, 36), "html", null, true);
                echo " a laissé le commentaire suivant :</p>
                <form method=\"post\" action=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 39))), "html", null, true);
                echo "\">
                    <button class=\"btn btn-secondary\">X</button>
                </form>
                </div>

                <p>- Message: ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 44), "html", null, true);
                echo "</p>
                <p>- Note: ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rate", [], "any", false, false, false, 45), "html", null, true);
                echo "</p>



            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "    ";
            // line 52
            echo "    ";
        } else {
            // line 53
            echo "        <p>Aucun commentaire enregistré</p>
        <br>
    ";
        }
        // line 56
        echo "
    ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57)) {
            // line 58
            echo "        <div class=\"container-fluid border border-secondary\">
            <p><u><strong>Ajoutez un commentaire :</strong></u></p>
            ";
            // line 60
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_start');
            echo "
            ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'widget');
            echo "
            <button class=\"btn btn-secondary mb-1\">";
            // line 62
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 62, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
            echo "</button>
            ";
            // line 63
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
            echo "
        </div>
    ";
        }
        // line 66
        echo "
    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("episode_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("episode_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 69, $this->source); })()), "slug", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 71
        echo twig_include($this->env, $context, "episode/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "episode/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 71,  217 => 69,  212 => 67,  209 => 66,  203 => 63,  199 => 62,  195 => 61,  191 => 60,  187 => 58,  185 => 57,  182 => 56,  177 => 53,  174 => 52,  172 => 51,  160 => 45,  156 => 44,  148 => 39,  143 => 37,  139 => 36,  135 => 34,  130 => 33,  128 => 32,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Episode{% endblock %}

{% block body %}
    <h1>Episode</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ episode.id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ episode.title }}</td>
        </tr>
        <tr>
            <th>Number</th>
            <td>{{ episode.number }}</td>
        </tr>
        <tr>
            <th>Synopsis</th>
            <td>{{ episode.synopsis }}</td>
        </tr>
        </tbody>
    </table>

    <br>
    <p><strong>Liste des commentaires:</strong></p>

    {% if comments is defined %}
        {% for comment in comments | reverse %}
            <div class=\"container-fluid d-flex flex-column\">
                <div class = d-flex>
                <p>{{ comment.user.email }} a laissé le commentaire suivant :</p>
                <form method=\"post\" action=\"{{ path('comment_delete', {'id': comment.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ comment.id) }}\">
                    <button class=\"btn btn-secondary\">X</button>
                </form>
                </div>

                <p>- Message: {{ comment.comment }}</p>
                <p>- Note: {{ comment.rate }}</p>



            </div>
        {% endfor %}
    {#{% endif %}#}
    {% else %}
        <p>Aucun commentaire enregistré</p>
        <br>
    {% endif %}

    {% if app.user %}
        <div class=\"container-fluid border border-secondary\">
            <p><u><strong>Ajoutez un commentaire :</strong></u></p>
            {{ form_start(form) }}
            {{ form_widget(form) }}
            <button class=\"btn btn-secondary mb-1\">{{ button_label|default('Envoyer') }}</button>
            {{ form_end(form) }}
        </div>
    {% endif %}

    <a href=\"{{ path('episode_index') }}\">back to list</a>

    <a href=\"{{ path('episode_edit', {'slug': episode.slug}) }}\">edit</a>

    {{ include('episode/_delete_form.html.twig') }}
{% endblock %}
", "episode/show.html.twig", "/home/te4g/PhpstormProjects/symfony_quest/wild-series/templates/episode/show.html.twig");
    }
}
