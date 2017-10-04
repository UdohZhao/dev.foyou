<?php

/* adminUser/add.html */
class __TwigTemplate_c116fb0cedd9d6b37901d4d41f9c6ddf712181aa36ab2238bf95f6c6ddabcc9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "adminUser/add.html", 1);
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
    <h1 class=\"page-title\"># 后台用户管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 添加用户</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"adminUserForm\" action=\"/admin/adminUser/add/id/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">用户名</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "username", array()), "html", null, true);
        echo "\" placeholder=\"请输入用户名\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">密码</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"请输入密码\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">确认密码</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" name=\"rPassword\" placeholder=\"请输入确认密码\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">状态</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"status\" value=\"0\" checked=\"checked\"> 正常
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"status\" value=\"1\"> 冻结
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">类型</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"1\" checked=\"checked\"> 普通管理员
              </label>
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

    // line 67
    public function block_js($context, array $blocks = array())
    {
        // line 68
        echo "<script src=\"/apps/admin/views/adminUser/js/add.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "adminUser/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 68,  104 => 67,  53 => 19,  46 => 15,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}
{% block content%}

<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 后台用户管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 添加用户</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"adminUserForm\" action=\"/admin/adminUser/add/id/{{ data.id }}\" method=\"post\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">用户名</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"username\" value=\"{{ data.username }}\" placeholder=\"请输入用户名\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">密码</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"请输入密码\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">确认密码</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" name=\"rPassword\" placeholder=\"请输入确认密码\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">状态</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"status\" value=\"0\" checked=\"checked\"> 正常
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"status\" value=\"1\"> 冻结
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">类型</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"1\" checked=\"checked\"> 普通管理员
              </label>
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
<script src=\"/apps/admin/views/adminUser/js/add.js\"></script>
{% endblock %}", "adminUser/add.html", "/Users/zhaojian/htdocs/dev.foyou.local/wwwroot/apps/admin/views/adminUser/add.html");
    }
}
