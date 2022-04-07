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

/* base.html.twig */
class __TwigTemplate_2bf5e12d8a5353f32d4e9a160da63dfb45a25da770b912d61a214a42018919f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body>
    <nav>
        <div class=\"nav-wrapper\">
            <div class=\"container\">
                
                <!-- <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\"> Accueil </a> -->
                <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                    
                    ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            // line 25
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
            echo "\"> accueil </a></li>

<li><a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilGuinot_index");
            echo "\"> Page d'accueil de GUINOT ! </a></li>

<li><a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mediats_index");
            echo "\"> Liste des médiats ! </a></li>
<li><a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts_index");
            echo "\"> Liste des contacts ! </a></li>

<li><a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\"> Liste des messages : </a></li>
<li><a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
            echo "\"> Liste des utilisateurs : </a></li>

                    <li><a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> se déconnecter </a></li>


";
            // line 38
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 39
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
                echo "\"> Liste des utilisateurs : </a></li>
<li><a href=\"";
                // line 40
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
                echo "\"> Liste des messages : </a></li>
";
            }
            // line 42
            echo "

";
            // line 44
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ABONNER")) {
                // line 45
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilEspacePerso_index");
                echo "\">Page d'accueil de votre espace perso ! </a> </li>
<li><a href=\"";
                // line 46
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("monEspacePersonel_index");
                echo "\">Mon espace personnel : </a> </li>
";
            }
            // line 48
            echo "

                    ";
        } else {
            // line 51
            echo "<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
            echo "\"> accueil </a></li>
                    
                    <li><a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> Se connecter </a> </li>
                    <li><a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"> Création de compte </a> </li>
                                <li><a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> se déconnecter </a></li>

<li><a href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilGuinot_index");
            echo "\"> Page d'accueil de GUINOT ! </a></li>

<li><a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mediats_index");
            echo "\"> Liste des médiats ! </a></li>
<li><a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts_index");
            echo "\"> Liste des contacts ! </a></li>

<li><a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\"> accéder au service de tchat public !</a></li>
<li><a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
            echo "\"> Liste des utilisateurs : </a></li>
                                            
                                            ";
        }
        // line 66
        echo "
                    ";
        // line 67
        if ((0 === twig_compare("register", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "attributes", [], "any", false, false, false, 67), "get", [0 => "_route"], "method", false, false, false, 67)))) {
            // line 68
            echo "<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
            echo "\"> Liste des utilisateurs : </a></li>

<li><a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\"> Liste des messages </a> </li>
                    
                    ";
        }
        // line 73
        echo "                        
                        ";
        // line 74
        if ((0 === twig_compare("login", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "request", [], "any", false, false, false, 74), "attributes", [], "any", false, false, false, 74), "get", [0 => "_route"], "method", false, false, false, 74)))) {
            // line 75
            echo "<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
            echo "\"> Liste des utilisateurs : </a></li>
<li><a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\"> Liste des messages </a> </li>

                        

                    
                    ";
        }
        // line 82
        echo "                </ul>
            </div>
        </div>
    </nav>

    ";
        // line 87
        $this->displayBlock('content', $context, $blocks);
        // line 90
        echo "
    ";
        // line 91
        $this->displayBlock('scripts', $context, $blocks);
        // line 99
        echo "</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nabi.css"), "html", null, true);
        echo "\">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 88
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 92
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>

    <script type=\"text/javascript\">
        \$('select').formSelect();
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 92,  322 => 91,  311 => 88,  301 => 87,  289 => 12,  285 => 11,  282 => 10,  272 => 9,  253 => 5,  240 => 99,  238 => 91,  235 => 90,  233 => 87,  226 => 82,  217 => 76,  212 => 75,  210 => 74,  207 => 73,  201 => 70,  195 => 68,  193 => 67,  190 => 66,  184 => 63,  180 => 62,  175 => 60,  171 => 59,  166 => 57,  161 => 55,  157 => 54,  153 => 53,  147 => 51,  142 => 48,  137 => 46,  132 => 45,  130 => 44,  126 => 42,  121 => 40,  116 => 39,  114 => 38,  108 => 35,  103 => 33,  99 => 32,  94 => 30,  90 => 29,  85 => 27,  79 => 25,  77 => 24,  71 => 21,  62 => 14,  60 => 9,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <title>{% block title %}Symfony{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/app.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/nabi.css') }}\">
                        {% endblock %}
</head>

<body>
    <nav>
        <div class=\"nav-wrapper\">
            <div class=\"container\">
                
                <!-- <a href=\"{{ path('accueil_index') }}\"> Accueil </a> -->
                <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                    
                    {% if app.user %}
                    <li><a href=\"{{ path('accueil_index') }}\"> accueil </a></li>

<li><a href=\"{{ path('pageAccueilGuinot_index') }}\"> Page d'accueil de GUINOT ! </a></li>

<li><a href=\"{{ path('mediats_index') }}\"> Liste des médiats ! </a></li>
<li><a href=\"{{ path('contacts_index') }}\"> Liste des contacts ! </a></li>

<li><a href=\"{{ path('message_index') }}\"> Liste des messages : </a></li>
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs : </a></li>

                    <li><a href=\"{{ path('app_logout') }}\"> se déconnecter </a></li>


{% if is_granted('ROLE_ADMIN') %}
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs : </a></li>
<li><a href=\"{{ path('message_index') }}\"> Liste des messages : </a></li>
{% endif %}


{% if is_granted('ROLE_ABONNER') %}
<li><a href=\"{{ path('pageAccueilEspacePerso_index') }}\">Page d'accueil de votre espace perso ! </a> </li>
<li><a href=\"{{ path('monEspacePersonel_index') }}\">Mon espace personnel : </a> </li>
{% endif %}


                    {% else %}
<li><a href=\"{{ path('accueil_index') }}\"> accueil </a></li>
                    
                    <li><a href=\"{{ path('app_login') }}\"> Se connecter </a> </li>
                    <li><a href=\"{{ path('app_register') }}\"> Création de compte </a> </li>
                                <li><a href=\"{{ path('app_logout') }}\"> se déconnecter </a></li>

<li><a href=\"{{ path('pageAccueilGuinot_index') }}\"> Page d'accueil de GUINOT ! </a></li>

<li><a href=\"{{ path('mediats_index') }}\"> Liste des médiats ! </a></li>
<li><a href=\"{{ path('contacts_index') }}\"> Liste des contacts ! </a></li>

<li><a href=\"{{ path('message_index') }}\"> accéder au service de tchat public !</a></li>
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs : </a></li>
                                            
                                            {% endif %}

                    {% if 'register' == app.request.attributes.get('_route') %}
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs : </a></li>

<li><a href=\"{{ path('message_index') }}\"> Liste des messages </a> </li>
                    
                    {% endif %}
                        
                        {% if 'login' == app.request.attributes.get('_route') %}
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs : </a></li>
<li><a href=\"{{ path('message_index') }}\"> Liste des messages </a> </li>

                        

                    
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>

    {% block content %}

    {% endblock %}

    {% block scripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>

    <script type=\"text/javascript\">
        \$('select').formSelect();
    </script>
    {% endblock %}
</body>

</html>
", "base.html.twig", "C:\\wamp64\\www\\ANCIENS-RETROUVAILLES-GUINOT\\templates\\base.html.twig");
    }
}
