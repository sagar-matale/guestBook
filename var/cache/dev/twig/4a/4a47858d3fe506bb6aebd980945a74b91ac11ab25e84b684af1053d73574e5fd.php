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

/* guestbook/index.html.twig */
class __TwigTemplate_4ab2a6716888c0f83c264d77df9de055e501406d4a1b430fd8aad458c4ec4055 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guestbook/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "guestbook/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome To Guest Book Portal - Guest Book Listing";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"user_nav\">
    <p>Welcome ";
        // line 11
        if ((0 === twig_compare((isset($context["session_user_type"]) || array_key_exists("session_user_type", $context) ? $context["session_user_type"] : (function () { throw new RuntimeError('Variable "session_user_type" does not exist.', 11, $this->source); })()), 1))) {
            echo " Admin ";
        } elseif ((0 === twig_compare((isset($context["session_user_type"]) || array_key_exists("session_user_type", $context) ? $context["session_user_type"] : (function () { throw new RuntimeError('Variable "session_user_type" does not exist.', 11, $this->source); })()), 2))) {
            echo " Guest ";
        }
        echo " | <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" >Logout</a></p>
</div>

<div class=\"common_bottom_block\">    
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</strong>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    ";
        // line 22
        if ((0 === twig_compare((isset($context["session_user_type"]) || array_key_exists("session_user_type", $context) ? $context["session_user_type"] : (function () { throw new RuntimeError('Variable "session_user_type" does not exist.', 22, $this->source); })()), 2))) {
            // line 23
            echo "    <div class=\"\">        
        <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guestbook.create");
            echo "\" class=\"btn btn-secondary custom_btn mb-2 btn-sm float-end\">Add New Record</a>
    </div><div class=\"clearfix\"></div>
    ";
        }
        // line 27
        echo "
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover dataTables-example\" style=\"width:100%\">    
            <thead>
                <tr class=\"table_bg_grey\">
                    <th class=\"text-center no-sort\" style=\"width:80px;\">Sr. No</th>
                    <th class=\"text-center\">Name</th>
                    <th class=\"text-center no-sort\">Image</th>
                    <th class=\"text-center\" style=\"width:100px;\">Status</th>
                    
                    ";
        // line 37
        if ((0 === twig_compare((isset($context["session_user_type"]) || array_key_exists("session_user_type", $context) ? $context["session_user_type"] : (function () { throw new RuntimeError('Variable "session_user_type" does not exist.', 37, $this->source); })()), 1))) {
            // line 38
            echo "                        <th class=\"text-center no-sort\" style=\"width:170px;\">Action</th>
                    ";
        }
        // line 40
        echo "                </tr>
            </thead>

            <tbody>
                ";
        // line 44
        $context["srno"] = 1;
        // line 45
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["guest_book"]) || array_key_exists("guest_book", $context) ? $context["guest_book"] : (function () { throw new RuntimeError('Variable "guest_book" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 46
            echo "                    <tr>
                        <td class=\"text-center\">";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["srno"]) || array_key_exists("srno", $context) ? $context["srno"] : (function () { throw new RuntimeError('Variable "srno" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "</td>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">
                            ";
            // line 50
            if ( !twig_test_empty(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["res"], "image", [], "any", false, false, false, 50)))) {
                // line 51
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/guestbook_img/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "image", [], "any", false, false, false, 51), "html", null, true);
                echo "\" target=\"_blank\">
                                <img src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/guestbook_img/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "image", [], "any", false, false, false, 52), "html", null, true);
                echo "\" style=\"width:auto; height:40px;\">
                            </a>
                            ";
            } else {
                // line 54
                echo " - ";
            }
            // line 55
            echo "                        </td>
                        <td class=\"text-center\">
                            ";
            // line 57
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["res"], "is_approved", [], "any", false, false, false, 57), 0))) {
                // line 58
                echo "                                <span class=\"badge text-bg-danger\">Pending</span>
                            ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 59
$context["res"], "is_approved", [], "any", false, false, false, 59), 1))) {
                // line 60
                echo "                                <span class=\"badge text-bg-success\">Approved</span>
                            ";
            }
            // line 62
            echo "                        </td>  
                        ";
            // line 63
            if ((0 === twig_compare((isset($context["session_user_type"]) || array_key_exists("session_user_type", $context) ? $context["session_user_type"] : (function () { throw new RuntimeError('Variable "session_user_type" does not exist.', 63, $this->source); })()), 1))) {
                echo "                      
                        <td style=\"text-align:right\">
                            ";
                // line 65
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["res"], "is_approved", [], "any", false, false, false, 65), 0))) {
                    // line 66
                    echo "                                <a onclick=\"return confirm('are you confirm to approve the record?')\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guestbook.approve", ["gb_id" => twig_get_attribute($this->env, $this->source, $context["res"], "gb_id", [], "any", false, false, false, 66)]), "html", null, true);
                    echo "\" class=\"btn btn-success btn-sm\">Approve</a>
                            ";
                }
                // line 68
                echo "                            <a onclick=\"return confirm('are you confirm to delete the record?')\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guestbook.remove", ["gb_id" => twig_get_attribute($this->env, $this->source, $context["res"], "gb_id", [], "any", false, false, false, 68)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">Delete</a>
                        </td>
                         ";
            }
            // line 71
            echo "                    </tr>
                ";
            // line 72
            $context["srno"] = ((isset($context["srno"]) || array_key_exists("srno", $context) ? $context["srno"] : (function () { throw new RuntimeError('Variable "srno" does not exist.', 72, $this->source); })()) + 1);
            // line 73
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            </tbody>
        </table>                           
    </div>
</div>    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 80
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 81
        echo "<script src=\"https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js\"></script>\t
<script language=\"javascript\">
    \$(document).ready(function()
    {
        var table = \$('.dataTables-example').DataTable(
        {
            searching: true,
            \"processing\": true,
            \"serverSide\": false,
            \"lengthMenu\": [[10, 25, 50, 100, 500], [10, 25, 50, 100, 500]],
            \"language\": 
            {
                \"lengthMenu\": \"_MENU_\",
            },
            pageLength: 10,
            responsive: true,
            rowReorder: false,
            \"stateSave\": false,\t
            \"aaSorting\": [],
            \"columnDefs\": 
            [
                {\"targets\": 'no-sort', \"orderable\": false, }        
            ],\t\t\t\t
        });
    }); 
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "guestbook/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 81,  258 => 80,  247 => 74,  241 => 73,  239 => 72,  236 => 71,  229 => 68,  223 => 66,  221 => 65,  216 => 63,  213 => 62,  209 => 60,  207 => 59,  204 => 58,  202 => 57,  198 => 55,  195 => 54,  188 => 52,  182 => 51,  180 => 50,  175 => 48,  171 => 47,  168 => 46,  163 => 45,  161 => 44,  155 => 40,  151 => 38,  149 => 37,  137 => 27,  131 => 24,  128 => 23,  126 => 22,  123 => 21,  113 => 17,  110 => 16,  106 => 15,  93 => 11,  90 => 10,  83 => 9,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Welcome To Guest Book Portal - Guest Book Listing{% endblock %}

{% block css %}
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css\" />
{% endblock %}

{% block body %}
<div class=\"user_nav\">
    <p>Welcome {% if(session_user_type == 1) %} Admin {% elseif(session_user_type == 2) %} Guest {% endif %} | <a href=\"{{ path('logout') }}\" >Logout</a></p>
</div>

<div class=\"common_bottom_block\">    
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>{{message}}</strong>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}

    {% if(session_user_type == 2) %}
    <div class=\"\">        
        <a href=\"{{ path('guestbook.create') }}\" class=\"btn btn-secondary custom_btn mb-2 btn-sm float-end\">Add New Record</a>
    </div><div class=\"clearfix\"></div>
    {% endif %}

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover dataTables-example\" style=\"width:100%\">    
            <thead>
                <tr class=\"table_bg_grey\">
                    <th class=\"text-center no-sort\" style=\"width:80px;\">Sr. No</th>
                    <th class=\"text-center\">Name</th>
                    <th class=\"text-center no-sort\">Image</th>
                    <th class=\"text-center\" style=\"width:100px;\">Status</th>
                    
                    {% if(session_user_type == 1) %}
                        <th class=\"text-center no-sort\" style=\"width:170px;\">Action</th>
                    {% endif %}
                </tr>
            </thead>

            <tbody>
                {% set srno = 1 %}
                {% for res in guest_book %}
                    <tr>
                        <td class=\"text-center\">{{ srno }}</td>
                        <td>{{ res.name }}</td>
                        <td class=\"text-center\">
                            {% if res.image|trim is not empty %}
                            <a href=\"{{asset('uploads/guestbook_img/')}}{{res.image}}\" target=\"_blank\">
                                <img src=\"{{asset('uploads/guestbook_img/')}}{{res.image}}\" style=\"width:auto; height:40px;\">
                            </a>
                            {% else %} - {% endif %}
                        </td>
                        <td class=\"text-center\">
                            {% if res.is_approved == 0 %}
                                <span class=\"badge text-bg-danger\">Pending</span>
                            {% elseif res.is_approved == 1 %}
                                <span class=\"badge text-bg-success\">Approved</span>
                            {% endif %}
                        </td>  
                        {% if(session_user_type == 1) %}                      
                        <td style=\"text-align:right\">
                            {% if res.is_approved == 0 %}
                                <a onclick=\"return confirm('are you confirm to approve the record?')\" href=\"{{ path('guestbook.approve', {gb_id:res.gb_id}) }}\" class=\"btn btn-success btn-sm\">Approve</a>
                            {% endif %}
                            <a onclick=\"return confirm('are you confirm to delete the record?')\" href=\"{{ path('guestbook.remove', {gb_id:res.gb_id}) }}\" class=\"btn btn-danger btn-sm\">Delete</a>
                        </td>
                         {% endif %}
                    </tr>
                {% set srno = srno + 1 %}
                {% endfor %}
            </tbody>
        </table>                           
    </div>
</div>    
{% endblock %}

{% block scripts %}
<script src=\"https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js\"></script>\t
<script language=\"javascript\">
    \$(document).ready(function()
    {
        var table = \$('.dataTables-example').DataTable(
        {
            searching: true,
            \"processing\": true,
            \"serverSide\": false,
            \"lengthMenu\": [[10, 25, 50, 100, 500], [10, 25, 50, 100, 500]],
            \"language\": 
            {
                \"lengthMenu\": \"_MENU_\",
            },
            pageLength: 10,
            responsive: true,
            rowReorder: false,
            \"stateSave\": false,\t
            \"aaSorting\": [],
            \"columnDefs\": 
            [
                {\"targets\": 'no-sort', \"orderable\": false, }        
            ],\t\t\t\t
        });
    }); 
</script>
{% endblock %} 
", "guestbook/index.html.twig", "E:\\xampp\\htdocs\\guestbook3\\templates\\guestbook\\index.html.twig");
    }
}
