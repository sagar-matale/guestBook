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

/* guestbook/create.html.twig */
class __TwigTemplate_b5f32dd48943d5cd0c4ce4c36657f53229caff35ed34a9081414a15e89e602e1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guestbook/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "guestbook/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome To Guest Book Portal - Add Guest Book";
        
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
    <p>Welcome Guest | <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" >Logout</a></p>
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
    <div class=\"\">
        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guestbook.listing");
        echo "\" class=\"btn btn-secondary custom_btn mb-2 btn-sm float-end\">Back</a>
        <div class=\"clearfix\"></div>
    </div>
    
    <form method=\"post\" action=\"\" id=\"guestbook_create_form\" class=\"text-left guestbook_form\" enctype=\"multipart/form-data\" autocomplete=\"off\">
        <div class=\"mb-3\"> 
            <label for=\"name\" class=\"form-label\">Name <sup class=\"text-danger\">*</sup></label>
            <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Name\" autofocus required />                
        </div>
        <div class=\"mb-3\">
            <label for=\"image\" class=\"form-label\">Image</label>
            <input type=\"file\" class=\"form-control\" name=\"image\" id=\"image\" accept=\".png,.jpeg,.jpg, .gif\">
            <small>Note : Please upload only png, jpeg, jpg, gif extension image</small>
        </div>
        
        <button type=\"submit\" id=\"form_submit\" name=\"form[submit]\" class=\"btn btn-success custom_btn btn-sm\" >Submit</button>
        <a class=\"btn btn-danger custom_btn btn-sm\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guestbook.listing");
        echo "\">Cancel</a>
    </form>                                
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 41
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery_validation/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery_validation/jquery.validate_additional.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() 
    {         
        \$.validator.addMethod(\"valid_img_format\", function(value, element) 
        { 
            if(value != \"\")
            {
                var validExts = new Array(\".png\", \".jpeg\", \".jpg\", \".gif\");
                var fileExt = value.toLowerCase();
                fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
                if (validExts.indexOf(fileExt) < 0)  { return false; } else return true;
            }
            else return true;
        });
     
        \$.validator.addMethod(\"required\", function(value, element) { if(\$.trim(value).length == 0) { return false; } else { return true; } });

        \$(\"#guestbook_create_form\").validate( 
        {
            rules:
            {
                name: { required: true },
                image: { valid_img_format:true } 
            },
            messages:
            {
                name: { required: \"Please enter the Name\" },
                image: { valid_img_format: \"Please upload only png, jpeg, jpg, gif extension image\" },
            }
        });
    })
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "guestbook/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  142 => 41,  135 => 40,  124 => 35,  105 => 19,  101 => 17,  91 => 13,  88 => 12,  84 => 11,  77 => 7,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Welcome To Guest Book Portal - Add Guest Book{% endblock %}

{% block body %}
<div class=\"user_nav\">
    <p>Welcome Guest | <a href=\"{{ path('logout') }}\" >Logout</a></p>
</div>

<div class=\"common_bottom_block\">
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>{{message}}</strong>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}

    <div class=\"\">
        <a href=\"{{ path('guestbook.listing') }}\" class=\"btn btn-secondary custom_btn mb-2 btn-sm float-end\">Back</a>
        <div class=\"clearfix\"></div>
    </div>
    
    <form method=\"post\" action=\"\" id=\"guestbook_create_form\" class=\"text-left guestbook_form\" enctype=\"multipart/form-data\" autocomplete=\"off\">
        <div class=\"mb-3\"> 
            <label for=\"name\" class=\"form-label\">Name <sup class=\"text-danger\">*</sup></label>
            <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Name\" autofocus required />                
        </div>
        <div class=\"mb-3\">
            <label for=\"image\" class=\"form-label\">Image</label>
            <input type=\"file\" class=\"form-control\" name=\"image\" id=\"image\" accept=\".png,.jpeg,.jpg, .gif\">
            <small>Note : Please upload only png, jpeg, jpg, gif extension image</small>
        </div>
        
        <button type=\"submit\" id=\"form_submit\" name=\"form[submit]\" class=\"btn btn-success custom_btn btn-sm\" >Submit</button>
        <a class=\"btn btn-danger custom_btn btn-sm\" href=\"{{ path('guestbook.listing') }}\">Cancel</a>
    </form>                                
</div>
{% endblock %}

{% block scripts %}
<script type=\"text/javascript\" src=\"{{ asset('jquery_validation/jquery.validate.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('jquery_validation/jquery.validate_additional.js') }}\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() 
    {         
        \$.validator.addMethod(\"valid_img_format\", function(value, element) 
        { 
            if(value != \"\")
            {
                var validExts = new Array(\".png\", \".jpeg\", \".jpg\", \".gif\");
                var fileExt = value.toLowerCase();
                fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
                if (validExts.indexOf(fileExt) < 0)  { return false; } else return true;
            }
            else return true;
        });
     
        \$.validator.addMethod(\"required\", function(value, element) { if(\$.trim(value).length == 0) { return false; } else { return true; } });

        \$(\"#guestbook_create_form\").validate( 
        {
            rules:
            {
                name: { required: true },
                image: { valid_img_format:true } 
            },
            messages:
            {
                name: { required: \"Please enter the Name\" },
                image: { valid_img_format: \"Please upload only png, jpeg, jpg, gif extension image\" },
            }
        });
    })
</script>
{% endblock %}
", "guestbook/create.html.twig", "E:\\xampp\\htdocs\\guestbook3\\templates\\guestbook\\create.html.twig");
    }
}
