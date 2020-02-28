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

/* first/affichage.html.twig */
class __TwigTemplate_7144d4dbc90b174041684e8f4bada10d419270d0d35fab76a68273b76fb632db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "first/affichage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "first/affichage.html.twig"));

        // line 1
        echo "<html>
<head>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>

</head>


<body>

<h1 align=\"center\">Ma première vue Twig</h1>

<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/logo.png"), "html", null, true);
        echo "\">

<h3>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</h3>
<h3>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</h3>
<h3>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</h3>

<hr>
<h2>Liste des candidats</h2>
";
        // line 20
        if ((isset($context["noms"]) || array_key_exists("noms", $context) ? $context["noms"] : (function () { throw new RuntimeError('Variable "noms" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "        <ol>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["noms"]) || array_key_exists("noms", $context) ? $context["noms"] : (function () { throw new RuntimeError('Variable "noms" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["nom"]) {
                // line 23
                echo "        <li>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["nom"]), "html", null, true);
                echo " </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </ol>
";
        } else {
            // line 27
            echo "<h2>Liste vide</h2>
";
        }
        // line 28
        echo "     
<h2>Liste des candidats</h2>


<table border=\"1\">
<tr><th>ID</th><th>prenom</th><th>Nom</th>
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidats"]) || array_key_exists("candidats", $context) ? $context["candidats"] : (function () { throw new RuntimeError('Variable "candidats" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 35
            echo "<tr>
    <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showDetailsCandidat", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "<a></td>
    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
   
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "     

</table>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "first/affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  140 => 42,  131 => 38,  127 => 37,  121 => 36,  118 => 35,  113 => 34,  105 => 28,  101 => 27,  97 => 25,  88 => 23,  84 => 22,  81 => 21,  79 => 20,  72 => 16,  68 => 15,  64 => 14,  59 => 12,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/style.css')}}\"/>

</head>


<body>

<h1 align=\"center\">Ma première vue Twig</h1>

<img src=\"{{asset('image/logo.png')}}\">

<h3>{{formation}}</h3>
<h3>{{lieu}}</h3>
<h3>{{date}}</h3>

<hr>
<h2>Liste des candidats</h2>
{% if noms %}
        <ol>
        {% for nom in noms %}
        <li>{{nom|upper}} </li>
        {% endfor %}
        </ol>
{% else %}
<h2>Liste vide</h2>
{% endif %}     
<h2>Liste des candidats</h2>


<table border=\"1\">
<tr><th>ID</th><th>prenom</th><th>Nom</th>
{% for c in candidats %}
<tr>
    <td><a href=\"{{path('showDetailsCandidat',{id:c.id})}}\">{{c.id}}<a></td>
    <td>{{c.prenom}}</td>
    <td>{{c.nom}}</td>
   
</tr>
{% else %}

{% endfor %}     

</table>

</body>

</html>", "first/affichage.html.twig", "C:\\Users\\GK\\Desktop\\lab\\premier_mvc\\templates\\first\\affichage.html.twig");
    }
}
