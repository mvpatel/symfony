<?php

/* ::base.html.twig */
class __TwigTemplate_38cc241ea6bbe4578080c396cf448c2c196e4e807ff6f70b15f470c235cb28ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 8
        echo "
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        
        ";
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "        <div id=\"sidebar\">
            ";
        // line 21
        $this->displayBlock('sidebar', $context, $blocks);
        // line 27
        echo "        </div>

        <div id=\"content\">
            ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        </div>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 21
    public function block_sidebar($context, array $blocks = array())
    {
        // line 22
        echo "                <ul>
                      <li><a href=\"/\">Home</a></li>
                      <li><a href=\"/blog\">Blog</a></li>
                </ul>
            ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  97 => 22,  94 => 21,  87 => 18,  84 => 17,  77 => 10,  74 => 9,  68 => 5,  62 => 31,  60 => 30,  55 => 27,  53 => 21,  50 => 20,  48 => 17,  45 => 16,  40 => 12,  38 => 9,  35 => 8,  30 => 5,  24 => 1,);
    }
}
