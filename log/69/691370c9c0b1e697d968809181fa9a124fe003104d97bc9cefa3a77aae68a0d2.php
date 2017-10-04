<?php

/* goodsCategory/index.html */
class __TwigTemplate_0d53f3e4ec7e1fe6d1816683139bdc5cb941a8d6ff0d0570a0f0a243fa86880c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "goodsCategory/index.html", 1);
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
    <h1 class=\"page-title\"># 商品管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 商品分类列表</h3>
      </div>
      <form action=\"/admin/goodsCategory/index/type/";
        // line 14
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" method=\"post\">
        <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
          <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入搜索关键字\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
        </div>
      </form>
      <ul class=\"nav nav-pills\" style=\"margin-left: 30px;\">
        <li role=\"presentation\" ";
        // line 23
        if ((($context["type"] ?? null) == 0)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/goodsCategory/index/type/0\">普通</a></li>
        <li role=\"presentation\" ";
        // line 24
        if ((($context["type"] ?? null) == 1)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/goodsCategory/index/type/1\">拼团</a></li>
      </ul>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>类别名称</th>
              <th>排序</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 37
        if (($context["data"] ?? null)) {
            // line 38
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 39
                echo "            <tr>
              <td>
                ";
                // line 41
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 0)) {
                    // line 42
                    echo "                  <span class=\"label label-success\">普通</span>
                ";
                } else {
                    // line 44
                    echo "                  <span class=\"label label-danger\">拼团</span>
                ";
                }
                // line 46
                echo "              </td>
              <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "sort", array()), "html", null, true);
                echo "</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit(";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">编辑</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del(";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"addGoods(";
                // line 52
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">添加商品</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"indexGoods(";
                // line 53
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">商品列表</button>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "          ";
        } else {
            // line 58
            echo "            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          ";
        }
        // line 66
        echo "          </tbody>
        </table>
        ";
        // line 69
        echo "          <div style=\"float: right;\">
            ";
        // line 70
        echo ($context["page"] ?? null);
        echo "
          </div>
        ";
        // line 73
        echo "      </div>
    </div>
  </div>
</div>
<!-- End Page -->

";
    }

    // line 81
    public function block_js($context, array $blocks = array())
    {
        // line 82
        echo "<script src=\"/apps/admin/views/goodsCategory/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "goodsCategory/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 82,  175 => 81,  165 => 73,  160 => 70,  157 => 69,  153 => 66,  143 => 58,  140 => 57,  128 => 53,  122 => 52,  118 => 51,  114 => 50,  109 => 48,  105 => 47,  102 => 46,  98 => 44,  94 => 42,  92 => 41,  88 => 39,  83 => 38,  81 => 37,  63 => 24,  57 => 23,  45 => 14,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}
{% block content%}

<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 商品管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 商品分类列表</h3>
      </div>
      <form action=\"/admin/goodsCategory/index/type/{{ type }}\" method=\"post\">
        <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
          <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入搜索关键字\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
        </div>
      </form>
      <ul class=\"nav nav-pills\" style=\"margin-left: 30px;\">
        <li role=\"presentation\" {% if type == 0 %}class=\"active\"{% endif %}><a href=\"/admin/goodsCategory/index/type/0\">普通</a></li>
        <li role=\"presentation\" {% if type == 1 %}class=\"active\"{% endif %}><a href=\"/admin/goodsCategory/index/type/1\">拼团</a></li>
      </ul>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>类别名称</th>
              <th>排序</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          {% if data %}
          {% for k,v in data %}
            <tr>
              <td>
                {% if v.type == 0 %}
                  <span class=\"label label-success\">普通</span>
                {% else %}
                  <span class=\"label label-danger\">拼团</span>
                {% endif %}
              </td>
              <td>{{ v.cname }}</td>
              <td>{{ v.sort }}</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit({{ v.id }});\">编辑</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del({{ v.id }});\">删除</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"addGoods({{ type }},{{ v.id }});\">添加商品</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"indexGoods({{ type }},{{ v.id }});\">商品列表</button>
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
<script src=\"/apps/admin/views/goodsCategory/js/index.js\"></script>
{% endblock %}", "goodsCategory/index.html", "/Users/zhaojian/htdocs/dev.foyou.local/wwwroot/apps/admin/views/goodsCategory/index.html");
    }
}
