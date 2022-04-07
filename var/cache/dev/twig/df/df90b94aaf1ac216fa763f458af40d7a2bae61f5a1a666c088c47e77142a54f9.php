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

/* utilisateurs/index.html.twig */
class __TwigTemplate_119f4c6bf1eec897bdb577abe31db167ea33df069a04a416c841c50da35b7929 extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateurs/index.html.twig", 1);
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

        echo "Liste des utilisateurs!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<style>
\t\t.contenu {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}

\t\t.contenu code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>
<br/><br/>


";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "
<br/><br/>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "\t<div class=\"container\">

<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouvelUtilisateur_index");
        echo "\">Nouvelle utilisateur</a>

<br/><br/>
\t\t<h1>
\t\t\tListe des utilisateurs :
</h1>
<br/><br/>
<hr/>
<br/>

<table border=\"1\">
<thead>
<tr>
<th> Id </th>
<th> Formation </th>
<th> Civilité </th>
<th> Nom </th>
<th> Prénom </th>
<th>Adresse  </th>
<th> Code Postal </th>
<th> Ville </th>
<th> Téléphone </th>
<th> Email </th>
</tr>
</thead>
<tbody>
";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["utilisateur"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 53
            echo "
<tr>
<td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
<td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "formation", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
<td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "civilite", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
<td>";
            // line 58
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 58)), "html", null, true);
            echo "</td>
<td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
<td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "adresse", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
<td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "codePostal", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
<td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "ville", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
<td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "telephone", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
<td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
</tr>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "<tr>
<td>
Vouss n'avez pas d'enregistrement!
</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
</tbody>
</table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateurs/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 74,  221 => 68,  212 => 64,  208 => 63,  204 => 62,  200 => 61,  196 => 60,  192 => 59,  188 => 58,  184 => 57,  180 => 56,  176 => 55,  172 => 53,  167 => 52,  138 => 26,  134 => 24,  124 => 23,  110 => 79,  108 => 23,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des utilisateurs!
{% endblock %}

{% block body %}
\t<style>
\t\t.contenu {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}

\t\t.contenu code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>
<br/><br/>


{% block content %}
\t<div class=\"container\">

<a href=\"{{ path('nouvelUtilisateur_index') }}\">Nouvelle utilisateur</a>

<br/><br/>
\t\t<h1>
\t\t\tListe des utilisateurs :
</h1>
<br/><br/>
<hr/>
<br/>

<table border=\"1\">
<thead>
<tr>
<th> Id </th>
<th> Formation </th>
<th> Civilité </th>
<th> Nom </th>
<th> Prénom </th>
<th>Adresse  </th>
<th> Code Postal </th>
<th> Ville </th>
<th> Téléphone </th>
<th> Email </th>
</tr>
</thead>
<tbody>
{% for utilisateur in utilisateur %}

<tr>
<td>{{ utilisateur.id }}</td>
<td>{{ utilisateur.formation }}</td>
<td>{{ utilisateur.civilite }}</td>
<td>{{ utilisateur.nom|upper }}</td>
<td>{{ utilisateur.prenom }}</td>
<td>{{ utilisateur.adresse }}</td>
<td>{{ utilisateur.codePostal }}</td>
<td>{{ utilisateur.ville }}</td>
<td>{{ utilisateur.telephone }}</td>
<td>{{ utilisateur.email }}</td>
</tr>

{% else %}
<tr>
<td>
Vouss n'avez pas d'enregistrement!
</td>
</tr>
{% endfor %}

</tbody>
</table>
</div>
{% endblock %}

<br/><br/>


{% endblock %}
", "utilisateurs/index.html.twig", "C:\\wamp64\\www\\ANCIENS-RETROUVAILLES-GUINOT\\templates\\utilisateurs\\index.html.twig");
    }
}
