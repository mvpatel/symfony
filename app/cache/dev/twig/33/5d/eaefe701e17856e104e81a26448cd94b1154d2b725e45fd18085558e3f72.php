<?php

/* AcmeAgentBundle:Agent:show.html.twig */
class __TwigTemplate_335deaefe701e17856e104e81a26448cd94b1154d2b725e45fd18085558e3f72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Agent</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentfirstname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentFirstname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentlastname</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentLastname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentlastextra</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentLastextra", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentlastone</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentLastone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentemail</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentEmail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentppassword</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentpPassword", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentmobile</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentMobile", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentphone</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentPhone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentcar</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentCar", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentgender</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentGender", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentcarcompany</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentCarCompany", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentwebsite</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentWebsite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentcity</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentCity", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentpostcode</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentPostcode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentaddress1</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentAddress1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentaddress2</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentAddress2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentregistrationdate</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentRegistrationDate", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentlogindate</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentLoginDate", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentage</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentAge", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("agent");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agent_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 106
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeAgentBundle:Agent:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 106,  197 => 102,  189 => 97,  179 => 90,  172 => 86,  165 => 82,  158 => 78,  151 => 74,  144 => 70,  137 => 66,  130 => 62,  123 => 58,  116 => 54,  109 => 50,  102 => 46,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
