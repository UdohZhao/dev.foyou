<?php

/* publicity/add.html */
class __TwigTemplate_57a8ebd5f07d43505aeb5f19503362978a5adbe2d0298a514cece1c3a7cfe8b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "publicity/add.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 宣传管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 配置banner</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"publicityForm\" action=\"/admin/publicity/add\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">banner</label>
            <div class=\"col-sm-10\">
              <div id=\"preview\">
              ";
        // line 20
        if (twig_test_empty(($context["data"] ?? null))) {
            // line 21
            echo "                <img id=\"imghead\" border=\"0\" src=\"/apps/admin/views/assets/images/bannerSize.png\" width=\"420\" height=\"90\" onclick=\"\$('#previewImg').click();\">
              ";
        } else {
            // line 23
            echo "                <img id=\"imghead\" border=\"0\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "img_path", array()), "html", null, true);
            echo "\" width=\"420\" height=\"90\" onclick=\"delP(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "img_path", array()), "html", null, true);
            echo "');\">
              ";
        }
        // line 25
        echo "              </div>
              <input type=\"file\" onchange=\"previewImage(this)\" style=\"display: none;\" id=\"previewImg\" name=\"img_path\">
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-default\">提 交</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Page -->

";
    }

    // line 43
    public function block_js($context, array $blocks = array())
    {
        // line 44
        echo "<script src=\"/apps/admin/views/publicity/js/add.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "publicity/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 44,  87 => 43,  67 => 25,  57 => 23,  53 => 21,  51 => 20,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}
{% block content%}

<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 宣传管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 配置banner</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"publicityForm\" action=\"/admin/publicity/add\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">banner</label>
            <div class=\"col-sm-10\">
              <div id=\"preview\">
              {% if data is empty %}
                <img id=\"imghead\" border=\"0\" src=\"/apps/admin/views/assets/images/bannerSize.png\" width=\"420\" height=\"90\" onclick=\"\$('#previewImg').click();\">
              {% else %}
                <img id=\"imghead\" border=\"0\" src=\"{{ data.img_path }}\" width=\"420\" height=\"90\" onclick=\"delP({{ data.id }},'{{ data.img_path }}');\">
              {% endif %}
              </div>
              <input type=\"file\" onchange=\"previewImage(this)\" style=\"display: none;\" id=\"previewImg\" name=\"img_path\">
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-default\">提 交</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Page -->

{% endblock %}

{% block js %}
<script src=\"/apps/admin/views/publicity/js/add.js\"></script>
{% endblock %}", "publicity/add.html", "/Users/zhaojian/htdocs/dev.foyou.local/wwwroot/apps/admin/views/publicity/add.html");
    }
}
