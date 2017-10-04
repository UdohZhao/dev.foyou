<?php

/* adminUser/index.html */
class __TwigTemplate_c71b2937ef3358c1069cf48a308014bc91bc562e01e9958a2d6d1faf55b33761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "adminUser/index.html", 1);
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
        <h3 class=\"panel-title\">@ 后台用户列表</h3>
      </div>
      <form action=\"/admin/adminUser/index\" method=\"post\">
        <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
          <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入搜索关键字\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
        </div>
      </form>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>用户名</th>
              <th>类型</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 33
        if (($context["data"] ?? null)) {
            // line 34
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 35
                echo "            <tr>
              <td>
                ";
                // line 37
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 0)) {
                    // line 38
                    echo "                  <span class=\"label label-success\">正常</span>
                ";
                } else {
                    // line 40
                    echo "                  <span class=\"label label-danger\">冻结</span>
                ";
                }
                // line 42
                echo "              </td>
              <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "username", array()), "html", null, true);
                echo "</td>
              <td>
                ";
                // line 45
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 0)) {
                    // line 46
                    echo "                  <span class=\"label label-dark\">超级管理员</span>
                ";
                } else {
                    // line 48
                    echo "                  <span class=\"label label-default\">普通管理员</span>
                ";
                }
                // line 50
                echo "              </td>
              <td>
              ";
                // line 52
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) != 0)) {
                    // line 53
                    echo "                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                    echo ");\">编辑</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del(";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                    echo ");\">删除</button>
              ";
                }
                // line 56
                echo "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "          ";
        } else {
            // line 60
            echo "            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          ";
        }
        // line 68
        echo "          </tbody>
        </table>
        ";
        // line 71
        echo "          <div style=\"float: right;\">
            ";
        // line 72
        echo ($context["page"] ?? null);
        echo "
          </div>
        ";
        // line 75
        echo "      </div>
    </div>
  </div>
</div>
<!-- End Page -->

";
    }

    // line 83
    public function block_js($context, array $blocks = array())
    {
        // line 84
        echo "<script src=\"/apps/admin/views/adminUser/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "adminUser/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 84,  162 => 83,  152 => 75,  147 => 72,  144 => 71,  140 => 68,  130 => 60,  127 => 59,  119 => 56,  114 => 54,  109 => 53,  107 => 52,  103 => 50,  99 => 48,  95 => 46,  93 => 45,  88 => 43,  85 => 42,  81 => 40,  77 => 38,  75 => 37,  71 => 35,  66 => 34,  64 => 33,  32 => 3,  29 => 2,  11 => 1,);
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
        <h3 class=\"panel-title\">@ 后台用户列表</h3>
      </div>
      <form action=\"/admin/adminUser/index\" method=\"post\">
        <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
          <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入搜索关键字\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
        </div>
      </form>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>用户名</th>
              <th>类型</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          {% if data %}
          {% for k,v in data %}
            <tr>
              <td>
                {% if v.status == 0 %}
                  <span class=\"label label-success\">正常</span>
                {% else %}
                  <span class=\"label label-danger\">冻结</span>
                {% endif %}
              </td>
              <td>{{ v.username }}</td>
              <td>
                {% if v.type == 0 %}
                  <span class=\"label label-dark\">超级管理员</span>
                {% else %}
                  <span class=\"label label-default\">普通管理员</span>
                {% endif %}
              </td>
              <td>
              {% if v.type != 0 %}
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit({{ v.id }});\">编辑</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del({{ v.id }});\">删除</button>
              {% endif %}
              </td>
            </tr>
          {% endfor %}
          {% else %}
            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          {% endif %}
          </tbody>
        </table>
        {% autoescape false %}
          <div style=\"float: right;\">
            {{ page }}
          </div>
        {% endautoescape %}
      </div>
    </div>
  </div>
</div>
<!-- End Page -->

{% endblock %}

{% block js %}
<script src=\"/apps/admin/views/adminUser/js/index.js\"></script>
{% endblock %}", "adminUser/index.html", "/Users/zhaojian/htdocs/dev.foyou.local/wwwroot/apps/admin/views/adminUser/index.html");
    }
}
