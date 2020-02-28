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

/* equipe/add.html.twig */
class __TwigTemplate_256d85dc688500368637e8bdad91c208bc32fb5fdefab965aa1a6c6567fe6d56 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/add.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEquipe"]) || array_key_exists("formEquipe", $context) ? $context["formEquipe"] : (function () { throw new RuntimeError('Variable "formEquipe" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
<table align=\"center\">
<tr><td>Nom Equipe:</td><td>";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEquipe"]) || array_key_exists("formEquipe", $context) ? $context["formEquipe"] : (function () { throw new RuntimeError('Variable "formEquipe" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), 'widget');
        echo "</td></tr>
<tr><td>Pays:</td><td>";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEquipe"]) || array_key_exists("formEquipe", $context) ? $context["formEquipe"] : (function () { throw new RuntimeError('Variable "formEquipe" does not exist.', 5, $this->source); })()), "pays", [], "any", false, false, false, 5), 'widget');
        echo "</td></tr>
<tr><td>Spécialité:</td><td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEquipe"]) || array_key_exists("formEquipe", $context) ? $context["formEquipe"] : (function () { throw new RuntimeError('Variable "formEquipe" does not exist.', 6, $this->source); })()), "specialite", [], "any", false, false, false, 6), 'widget');
        echo "</td></tr>
<tr><td>Nombre de joueurs:</td><td>";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEquipe"]) || array_key_exists("formEquipe", $context) ? $context["formEquipe"] : (function () { throw new RuntimeError('Variable "formEquipe" does not exist.', 7, $this->source); })()), "nbrJoueurs", [], "any", false, false, false, 7), 'widget');
        echo "</td></tr> 
<tr><td></td><td>";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEquipe"]) || array_key_exists("formEquipe", $context) ? $context["formEquipe"] : (function () { throw new RuntimeError('Variable "formEquipe" does not exist.', 8, $this->source); })()), "save", [], "any", false, false, false, 8), 'widget');
        echo "</td></tr>    
</table>

";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEquipe"]) || array_key_exists("formEquipe", $context) ? $context["formEquipe"] : (function () { throw new RuntimeError('Variable "formEquipe" does not exist.', 11, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "equipe/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{form_start(formEquipe)}}
<table align=\"center\">
<tr><td>Nom Equipe:</td><td>{{form_widget(formEquipe.nom)}}</td></tr>
<tr><td>Pays:</td><td>{{form_widget(formEquipe.pays)}}</td></tr>
<tr><td>Spécialité:</td><td>{{form_widget(formEquipe.specialite)}}</td></tr>
<tr><td>Nombre de joueurs:</td><td>{{form_widget(formEquipe.nbrJoueurs)}}</td></tr> 
<tr><td></td><td>{{form_widget(formEquipe.save)}}</td></tr>    
</table>

{{form_end(formEquipe)}}", "equipe/add.html.twig", "C:\\Users\\GK\\Desktop\\lab\\premier_mvc\\templates\\equipe\\add.html.twig");
    }
}
