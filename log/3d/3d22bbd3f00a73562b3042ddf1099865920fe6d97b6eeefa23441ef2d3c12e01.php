<?php

/* index/index.html */
class __TwigTemplate_2f022d342926a4d56ff2d9e81aa2c2d45482ea4006ba435864d48272e00dae5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "index/index.html", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
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

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 开发者信息</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"></h3>
      </div>
      <div class=\"panel-body\">
        <blockquote>
          <p>济南壹家堂宠物后台管理系统</p>
        </blockquote>
        <blockquote>
          <p>开发团队：重庆存己科技</p>
        </blockquote>
        <blockquote>
          <p>技术维护：重庆存己科技</p>
        </blockquote>
        <blockquote>
          <p>联系人：赵先生</p>
        </blockquote>
        <blockquote>
          <p>联系电话：18423031898</p>
        </blockquote>
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
        echo "
";
    }

    public function getTemplateName()
    {
        return "index/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 44,  78 => 43,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}

{% block css %}

{% endblock %}

{% block content%}

<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 开发者信息</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"></h3>
      </div>
      <div class=\"panel-body\">
        <blockquote>
          <p>济南壹家堂宠物后台管理系统</p>
        </blockquote>
        <blockquote>
          <p>开发团队：重庆存己科技</p>
        </blockquote>
        <blockquote>
          <p>技术维护：重庆存己科技</p>
        </blockquote>
        <blockquote>
          <p>联系人：赵先生</p>
        </blockquote>
        <blockquote>
          <p>联系电话：18423031898</p>
        </blockquote>
      </div>
    </div>
  </div>
</div>
<!-- End Page -->

{% endblock %}

{% block js %}

{% endblock %}", "index/index.html", "/Users/zhaojian/htdocs/dev.foyou.local/wwwroot/apps/admin/views/index/index.html");
    }
}
