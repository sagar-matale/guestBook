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

/* home/admin_login.html.twig */
class __TwigTemplate_33dd8ebcae2c7b303f8d89122d62833cda791386afd71f36f729f96b44f63bf0 extends Template
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
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/admin_login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/admin_login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome To Guest Book Portal - Administrator Login";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"user_nav\">
    <p class=\"text-center\">Administrator Login</a></p>
</div>

<div class=\"common_bottom_block\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</strong>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <strong>";
            // line 20
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</strong>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t
\t
\t<form method=\"post\" action=\"\" id=\"admin_login_form\" class=\"text-left guestbook_form mt-4 mb-3\" enctype=\"multipart/form-data\" autocomplete=\"off\">
        <div class=\"mb-3\"> 
            <label for=\"username\" class=\"form-label\">Username <sup class=\"text-danger\">*</sup></label>
            <input type=\"text\" class=\"form-control\" name=\"username\" id=\"username\" placeholder=\"Username\" autofocus required />                
        </div>
        
        <div class=\"mb-3\"> 
            <label for=\"password\" class=\"form-label\">Password <sup class=\"text-danger\">*</sup></label>
            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"Password\" required />                
        </div>
        
        <button class=\"btn btn-success custom_btn btn-sm\" name=\"form[submit]\" type=\"submit\">Login</button>
        <a class=\"btn btn-danger custom_btn btn-sm\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Cancel</a>
    </form>  \t
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 43
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery_validation/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery_validation/jquery.validate_additional.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() 
    {         
        \$.validator.addMethod(\"required\", function(value, element) { if(\$.trim(value).length == 0) { return false; } else { return true; } });

        \$(\"#admin_login_form\").validate( 
        {
            rules:
            {
                username: { required: true },
                password: { required:true } 
            },
            messages:
            {
                username: { required: \"Please enter the Username\" },
                password: { required: \"Please enter the Password\" },
            }
        });
    })
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/admin_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 44,  152 => 43,  145 => 42,  134 => 37,  118 => 23,  108 => 20,  105 => 19,  101 => 18,  98 => 17,  88 => 13,  85 => 12,  81 => 11,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Welcome To Guest Book Portal - Administrator Login{% endblock %}

{% block body %}
<div class=\"user_nav\">
    <p class=\"text-center\">Administrator Login</a></p>
</div>

<div class=\"common_bottom_block\">
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>{{message}}</strong>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}

    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <strong>{{message}}</strong>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}\t
\t
\t<form method=\"post\" action=\"\" id=\"admin_login_form\" class=\"text-left guestbook_form mt-4 mb-3\" enctype=\"multipart/form-data\" autocomplete=\"off\">
        <div class=\"mb-3\"> 
            <label for=\"username\" class=\"form-label\">Username <sup class=\"text-danger\">*</sup></label>
            <input type=\"text\" class=\"form-control\" name=\"username\" id=\"username\" placeholder=\"Username\" autofocus required />                
        </div>
        
        <div class=\"mb-3\"> 
            <label for=\"password\" class=\"form-label\">Password <sup class=\"text-danger\">*</sup></label>
            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"Password\" required />                
        </div>
        
        <button class=\"btn btn-success custom_btn btn-sm\" name=\"form[submit]\" type=\"submit\">Login</button>
        <a class=\"btn btn-danger custom_btn btn-sm\" href=\"{{ path('home') }}\">Cancel</a>
    </form>  \t
</div>
{% endblock %}

{% block scripts %}
<script type=\"text/javascript\" src=\"{{ asset('jquery_validation/jquery.validate.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('jquery_validation/jquery.validate_additional.js') }}\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() 
    {         
        \$.validator.addMethod(\"required\", function(value, element) { if(\$.trim(value).length == 0) { return false; } else { return true; } });

        \$(\"#admin_login_form\").validate( 
        {
            rules:
            {
                username: { required: true },
                password: { required:true } 
            },
            messages:
            {
                username: { required: \"Please enter the Username\" },
                password: { required: \"Please enter the Password\" },
            }
        });
    })
</script>
{% endblock %}
", "home/admin_login.html.twig", "E:\\xampp\\htdocs\\guestbook3\\templates\\home\\admin_login.html.twig");
    }
}
