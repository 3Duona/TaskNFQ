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

/* pages/edit.html.twig */
class __TwigTemplate_55284c7ccf541db2503409beda63125e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <main>
        <div class=\"py-5 bg-light\">
            <div class=\"container\">
                <div class=\"py-5 text-center\">
                    <h1 class=\"fw-bold\"> Edit ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 offset-md-3\">
                        <h1 class=\"text-center mb-5\">Edit Article</h1>

                        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                        
                        <div class=\"form-group\">
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "form-control-label"]]);
        echo "
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter Title"]]);
        echo "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-control-label"]]);
        echo "
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter Image URL"]]);
        echo "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 28, $this->source); })()), "text", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-control-label"]]);
        echo "
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 29, $this->source); })()), "text", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "rows" => "8", "placeholder" => "Enter Text"]]);
        echo "
                        </div>

                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 32, $this->source); })()), "submit", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "btn btn-primary btn-block mt-4"]]);
        echo "

                        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 34, $this->source); })()), 'form_end');
        echo "

                        <br>
                        <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary btn-block mt-4'\">Back</a>
                    </div>
                </div>

            </div>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pages/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  118 => 34,  113 => 32,  107 => 29,  103 => 28,  96 => 24,  92 => 23,  85 => 19,  81 => 18,  75 => 15,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    <main>
        <div class=\"py-5 bg-light\">
            <div class=\"container\">
                <div class=\"py-5 text-center\">
                    <h1 class=\"fw-bold\"> Edit {{ article.title }}</h1>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 offset-md-3\">
                        <h1 class=\"text-center mb-5\">Edit Article</h1>

                        {{ form_start(articleForm) }}
                        
                        <div class=\"form-group\">
                            {{ form_label(articleForm.title, null, { 'label_attr': {'class': 'form-control-label'} }) }}
                            {{ form_widget(articleForm.title, { 'attr': {'class': 'form-control', 'placeholder': 'Enter Title'} }) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(articleForm.image, null, { 'label_attr': {'class': 'form-control-label'} }) }}
                            {{ form_widget(articleForm.image, { 'attr': {'class': 'form-control', 'placeholder': 'Enter Image URL'} }) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(articleForm.text, null, { 'label_attr': {'class': 'form-control-label'} }) }}
                            {{ form_widget(articleForm.text, { 'attr': {'class': 'form-control', 'rows': '8', 'placeholder': 'Enter Text'} }) }}
                        </div>

                        {{ form_widget(articleForm.submit, { 'attr': {'class': 'btn btn-primary btn-block mt-4'} }) }}

                        {{ form_end(articleForm) }}

                        <br>
                        <a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary btn-block mt-4'\">Back</a>
                    </div>
                </div>

            </div>
        </div>
    </main>
{% endblock %}", "pages/edit.html.twig", "/code/templates/pages/edit.html.twig");
    }
}
