<?php

/* TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig */
class __TwigTemplate_906d4c9eb6fdf727879d231b3cefc7281bbc8fa5d011d290c775d9599b77c596 extends Twig_Template
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
        // line 1
        if ((($this->getAttribute((isset($context["learnStatuses"]) ? $context["learnStatuses"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["learnStatuses"]) ? $context["learnStatuses"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array"), null)) : (null))) {
            // line 2
            echo "  ";
            if (($this->getAttribute((isset($context["learnStatuses"]) ? $context["learnStatuses"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array") == "finished")) {
                // line 3
                echo "    <i class=\"es-icon es-icon-done1 color-primary status-icon\"></i>
  ";
            } else {
                // line 5
                echo "    <i class=\"es-icon es-icon-doing color-primary status-icon\"></i>
  ";
            }
        } else {
            // line 8
            echo "  <i class=\"es-icon es-icon-undone status-icon\"></i>
";
        }
        // line 10
        if ( !(isset($context["member"]) ? $context["member"] : null)) {
            // line 11
            if ((((array_key_exists("fromPlugin", $context)) ? (_twig_default_filter((isset($context["fromPlugin"]) ? $context["fromPlugin"] : null), false)) : (false)) == false)) {
                // line 12
                echo "\t";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:CourseLesson:statusLabel", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()))));
                echo "
";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  39 => 11,  37 => 10,  33 => 8,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
