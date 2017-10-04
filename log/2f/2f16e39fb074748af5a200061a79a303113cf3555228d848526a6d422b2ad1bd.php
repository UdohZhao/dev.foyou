<?php

/* discountCoupon/index.html */
class __TwigTemplate_c383a41552b7b939661553fc8b1e433cab02454f7fb123afcd70fa8e890f6975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "discountCoupon/index.html", 1);
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
    <h1 class=\"page-title\"># 优惠券管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 优惠券列表</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>展示语</th>
              <th>订单价格</th>
              <th>优惠价格</th>
              <th>排序</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 32
        if (($context["data"] ?? null)) {
            // line 33
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 34
                echo "            <tr>
              <td></td>
              <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "show_language", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "iprice", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "price", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "sort", array()), "html", null, true);
                echo "</td>
              <td>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del(";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "          ";
        } else {
            // line 46
            echo "            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          ";
        }
        // line 54
        echo "          </tbody>
        </table>
        ";
        // line 57
        echo "          <div style=\"float: right;\">
            ";
        // line 58
        echo ($context["page"] ?? null);
        echo "
          </div>
        ";
        // line 61
        echo "      </div>
    </div>
  </div>
</div>
<!-- End Page -->

";
    }

    // line 69
    public function block_js($context, array $blocks = array())
    {
        // line 70
        echo "<script src=\"/apps/admin/views/discountCoupon/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "discountCoupon/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 70,  140 => 69,  130 => 61,  125 => 58,  122 => 57,  118 => 54,  108 => 46,  105 => 45,  95 => 41,  90 => 39,  86 => 38,  82 => 37,  78 => 36,  74 => 34,  69 => 33,  67 => 32,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
    <h1 class=\"page-title\"># 优惠券管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 优惠券列表</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>展示语</th>
              <th>订单价格</th>
              <th>优惠价格</th>
              <th>排序</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          {% if data %}
          {% for k,v in data %}
            <tr>
              <td></td>
              <td>{{ v.show_language }}</td>
              <td>{{ v.iprice }}</td>
              <td>{{ v.price }}</td>
              <td>{{ v.sort }}</td>
              <td>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del({{ v.id }});\">删除</button>
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
<script src=\"/apps/admin/views/discountCoupon/js/index.js\"></script>
{% endblock %}", "discountCoupon/index.html", "/Users/zhaojian/htdocs/dev.foyou.local/wwwroot/apps/admin/views/discountCoupon/index.html");
    }
}
