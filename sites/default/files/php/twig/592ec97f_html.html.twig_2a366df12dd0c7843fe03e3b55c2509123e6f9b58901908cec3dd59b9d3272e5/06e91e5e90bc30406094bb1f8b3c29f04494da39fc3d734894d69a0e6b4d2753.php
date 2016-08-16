<?php

/* themes/beaker/templates/html.html.twig */
class __TwigTemplate_152ae99ced7d13edcd9fab1533053a61a561b5c3764d875e85ff16aaf7056b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 27);
        $filters = array("clean_class" => 29, "raw" => 39, "safe_join" => 40, "t" => 56);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('clean_class', 'raw', 'safe_join', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 27
        $context["body_classes"] = array(0 => ((        // line 28
(isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 29
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass((isset($context["root_path"]) ? $context["root_path"] : null))))), 2 => ((        // line 30
(isset($context["node_type"]) ? $context["node_type"] : null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass((isset($context["node_type"]) ? $context["node_type"] : null)))) : ("")), 3 => ((        // line 31
(isset($context["db_offline"]) ? $context["db_offline"] : null)) ? ("db-offline") : ("")));
        // line 34
        echo "
<!DOCTYPE html>
<!--[if IE 9 ]>    <html ";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo " class=\"ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html ";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo "> <!--<![endif]-->
  <head>
    <head-placeholder token=\"";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <css-placeholder token=\"";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <js-placeholder token=\"";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"/themes/beaker/apple-touch-icon-114x114.png\" sizes=\"114x114\" />
    <link rel=\"apple-touch-icon\" href=\"/themes/beaker/apple-touch-icon-76x76.png\" sizes=\"76x76\" />
    <link rel=\"apple-touch-icon\" href=\"/themes/beaker/apple-touch-icon-57x57.png\" sizes=\"57x57\" />
    <link rel=\"apple-touch-icon\" href=\"/themes/beaker/apple-touch-icon-144x144.png\" sizes=\"144x144\" />
    <link rel=\"apple-touch-icon\" href=\"/themes/beaker/apple-touch-icon-60x60.png\" sizes=\"60x60\" />
    <link rel=\"apple-touch-icon\" href=\"/themes/beaker/apple-touch-icon-120x120.png\" sizes=\"120x120\" />
    <link rel=\"apple-touch-icon\" href=\"/themes/beaker/apple-touch-icon-152x152.png\" sizes=\"152x152\" />
    <link rel=\"apple-touch-icon\" href=\"/themes/beaker/apple-touch-icon-72x72.png\" sizes=\"72x72\" />
    <link rel=\"icon\" href=\"/themes/beaker/android-chrome-192x192.png\" sizes=\"192x192\" />
  </head>
  <body";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : null)), "method"), "html", null, true));
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 56
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/beaker/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 61,  107 => 60,  103 => 59,  99 => 58,  94 => 56,  89 => 54,  75 => 43,  71 => 42,  66 => 40,  62 => 39,  57 => 37,  53 => 36,  49 => 34,  47 => 31,  46 => 30,  45 => 29,  44 => 28,  43 => 27,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the basic structure of a single Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - logged_in: A flag indicating if user is logged in.*/
/*  * - root_path: The root path of the current page (e.g., node, admin, user).*/
/*  * - node_type: The content type for the current node, if the page is a node.*/
/*  * - head_title: List of text elements that make up the head_title variable.*/
/*  *   May contain or more of the following:*/
/*  *   - title: The title of the page.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site.*/
/*  * - page_top: Initial rendered markup. This should be printed before 'page'.*/
/*  * - page: The rendered page markup.*/
/*  * - page_bottom: Closing rendered markup. This variable should be printed after*/
/*  *   'page'.*/
/*  * - db_offline: A flag indicating if the database is offline.*/
/*  * - placeholder_token: The token for generating head, css, js and js-bottom*/
/*  *   placeholders.*/
/*  **/
/*  * @see template_preprocess_html()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set body_classes = [*/
/*     logged_in ? 'user-logged-in',*/
/*     not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,*/
/*     node_type ? 'node--type-' ~ node_type|clean_class,*/
/*     db_offline ? 'db-offline',*/
/*   ]*/
/* %}*/
/* */
/* <!DOCTYPE html>*/
/* <!--[if IE 9 ]>    <html {{ html_attributes }} class="ie9"> <![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!--> <html {{ html_attributes }}> <!--<![endif]-->*/
/*   <head>*/
/*     <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/*     <js-placeholder token="{{ placeholder_token|raw }}">*/
/*     <link rel="apple-touch-icon" href="/themes/beaker/apple-touch-icon-114x114.png" sizes="114x114" />*/
/*     <link rel="apple-touch-icon" href="/themes/beaker/apple-touch-icon-76x76.png" sizes="76x76" />*/
/*     <link rel="apple-touch-icon" href="/themes/beaker/apple-touch-icon-57x57.png" sizes="57x57" />*/
/*     <link rel="apple-touch-icon" href="/themes/beaker/apple-touch-icon-144x144.png" sizes="144x144" />*/
/*     <link rel="apple-touch-icon" href="/themes/beaker/apple-touch-icon-60x60.png" sizes="60x60" />*/
/*     <link rel="apple-touch-icon" href="/themes/beaker/apple-touch-icon-120x120.png" sizes="120x120" />*/
/*     <link rel="apple-touch-icon" href="/themes/beaker/apple-touch-icon-152x152.png" sizes="152x152" />*/
/*     <link rel="apple-touch-icon" href="/themes/beaker/apple-touch-icon-72x72.png" sizes="72x72" />*/
/*     <link rel="icon" href="/themes/beaker/android-chrome-192x192.png" sizes="192x192" />*/
/*   </head>*/
/*   <body{{ attributes.addClass(body_classes) }}>*/
/*     <a href="#main-content" class="visually-hidden focusable skip-link">*/
/*       {{ 'Skip to main content'|t }}*/
/*     </a>*/
/*     {{ page_top }}*/
/*     {{ page }}*/
/*     {{ page_bottom }}*/
/*     <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*   </body>*/
/* </html>*/
/* */
