<?php

/* ClassroomBundle:Classroom/Part/Service:homeworkReview.html.twig */
class __TwigTemplate_a06ef42794d70133a789d2aab2d8259352669a110e68afd76a7f1e7466019647 extends Twig_Template
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
        echo "<li class=\"";
        if ((isset($context["active"]) ? $context["active"] : null)) {
            echo "active";
        }
        echo "\">
  <a tabindex=\"0\" role=\"button\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-html=\"true\" title=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("24小时作业批改"), "html", null, true);
        echo " ";
        if ( !(isset($context["active"]) ? $context["active"] : null)) {
            echo "<small class='text-muted'>(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂未提供"), "html", null, true);
            echo ")</span>";
        }
        echo "\" data-content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("24小时内完成作业批改，即时反馈并巩固您的学习效果"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("练"), "html", null, true);
        echo "</a>
</li>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part/Service:homeworkReview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
