<?php

/* TopxiaWebBundle:Article/Part:list-main.html.twig */
class __TwigTemplate_55fb47aa8e3c6d9125ded9979c008217a7663401ca685ed2f7bd0ea1d98b3d44 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Article/Part:list-main.html.twig", 1);
        // line 2
        echo "<section class=\"es-section\">
  <div class=\"article-list\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            echo "      ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array"))) : (""));
            // line 6
            echo "      ";
            if ( !twig_test_empty((isset($context["category"]) ? $context["category"] : null))) {
                // line 7
                echo "      \t";
                $this->loadTemplate("TopxiaWebBundle:Article/Widget:list-item.html.twig", "TopxiaWebBundle:Article/Part:list-main.html.twig", 7)->display($context);
                // line 8
                echo "  \t  ";
            }
            // line 9
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 10
            echo "       <div class=\"empty tac text-muted mvl\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有任何资讯"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </div>
  ";
        // line 13
        echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:list-main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  77 => 12,  68 => 10,  55 => 9,  52 => 8,  49 => 7,  46 => 6,  43 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
