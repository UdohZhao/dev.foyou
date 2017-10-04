<?php

/* indent/index.html */
class __TwigTemplate_96ce4e5fe95ce9cc16a37e066bfcdb0968e8588c62bca088eabc03a9ed836eb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "indent/index.html", 1);
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
    <h1 class=\"page-title\"># 订单管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ ";
        // line 17
        if ((($context["itype"] ?? null) == 0)) {
            echo "普通";
        } elseif ((($context["itype"] ?? null) == 1)) {
            echo "拼团";
        }
        echo "订单列表</h3>
      </div>
      <form action=\"/admin/indent/index/itype/";
        // line 19
        echo twig_escape_filter($this->env, ($context["itype"] ?? null), "html", null, true);
        echo "/type/";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" method=\"post\">
        <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
          <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入订单编号\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
        </div>
      </form>
      <ul class=\"nav nav-pills\" style=\"margin-left: 30px;\">
        <li role=\"presentation\" ";
        // line 28
        if ((($context["type"] ?? null) == 0)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/indent/index/itype/";
        echo twig_escape_filter($this->env, ($context["itype"] ?? null), "html", null, true);
        echo "/type/0\">待付款</a></li>
        <li role=\"presentation\" ";
        // line 29
        if ((($context["type"] ?? null) == 1)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/indent/index/itype/";
        echo twig_escape_filter($this->env, ($context["itype"] ?? null), "html", null, true);
        echo "/type/1\">待发货</a></li>
        <li role=\"presentation\" ";
        // line 30
        if ((($context["type"] ?? null) == 2)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/indent/index/itype/";
        echo twig_escape_filter($this->env, ($context["itype"] ?? null), "html", null, true);
        echo "/type/2\">待收货</a></li>
        ";
        // line 31
        if ((($context["itype"] ?? null) == 0)) {
            // line 32
            echo "          <li role=\"presentation\" ";
            if ((($context["type"] ?? null) == 3)) {
                echo "class=\"active\"";
            }
            echo "><a href=\"/admin/indent/index/itype/";
            echo twig_escape_filter($this->env, ($context["itype"] ?? null), "html", null, true);
            echo "/type/3\">待评价</a></li>
          <li role=\"presentation\" ";
            // line 33
            if ((($context["type"] ?? null) == 4)) {
                echo "class=\"active\"";
            }
            echo "><a href=\"/admin/indent/index/itype/";
            echo twig_escape_filter($this->env, ($context["itype"] ?? null), "html", null, true);
            echo "/type/4\">售后服务</a></li>
        ";
        }
        // line 35
        echo "        ";
        if ((($context["itype"] ?? null) == 1)) {
            // line 36
            echo "          <li role=\"presentation\" ";
            if ((($context["type"] ?? null) == 3)) {
                echo "class=\"active\"";
            }
            echo "><a href=\"/admin/indent/index/itype/";
            echo twig_escape_filter($this->env, ($context["itype"] ?? null), "html", null, true);
            echo "/type/3\">已收货</a></li>
        ";
        }
        // line 38
        echo "      </ul>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>创建时间</th>
              <th>订单编号</th>
              <th>总金额</th>
              <th>买家留言</th>
              <th>商品信息</th>
              <th>收货信息</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 54
        if (($context["data"] ?? null)) {
            // line 55
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 56
                echo "            <tr>
              <td>
                ";
                // line 58
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 0)) {
                    // line 59
                    echo "                  <span class=\"label label-danger\">待完善</span>
                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 60
$context["v"], "status", array()) == 1)) {
                    // line 61
                    echo "                  <span class=\"label label-success\">正常</span>
                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 62
$context["v"], "status", array()) == 2)) {
                    // line 63
                    echo "                  <span class=\"label label-danger\">取消订单</span>
                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 64
$context["v"], "status", array()) == 3)) {
                    // line 65
                    echo "                  <span class=\"label label-danger\">订单超时</span>
                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 66
$context["v"], "status", array()) == 4)) {
                    // line 67
                    echo "                  <span class=\"label label-danger\">申请退款</span>
                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 68
$context["v"], "status", array()) == 5)) {
                    // line 69
                    echo "                  <span class=\"label label-danger\">退款失败</span>
                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 70
$context["v"], "status", array()) == 6)) {
                    // line 71
                    echo "                  <span class=\"label label-danger\">退款成功</span>
                ";
                }
                // line 73
                echo "              </td>
              <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "ctime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
              <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "inumber", array()), "html", null, true);
                echo "</td>
              <td>¥";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "total_money", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "remarks", array()), "html", null, true);
                echo "</td>
              <td>
                ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "igData", array()));
                foreach ($context['_seq'] as $context["kk"] => $context["vv"]) {
                    // line 80
                    echo "                  <dl class=\"dl-horizontal\">
                    <dt>商品名称</dt>
                    <dd>";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["vv"], "goods_name", array()), "html", null, true);
                    echo "</dd>
                    <dt>商品规格</dt>
                    <dd>";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["vv"], "goods_specification", array()), "html", null, true);
                    echo "</dd>
                    <dt>商品价格</dt>
                    <dd>¥";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["vv"], "goods_price", array()), "html", null, true);
                    echo "</dd>
                    <dt>购买数量</dt>
                    <dd>x";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["vv"], "quantity", array()), "html", null, true);
                    echo "</dd>
                  </dl>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['kk'], $context['vv'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "              </td>
              <td>
                  <dl class=\"dl-horizontal\">
                    <dt>联系人</dt>
                    <dd>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "itdData", array()), "contacts", array()), "html", null, true);
                echo "</dd>
                    <dt>手机号码</dt>
                    <dd>";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "itdData", array()), "phone", array()), "html", null, true);
                echo "</dd>
                    <dt>详细地址</dt>
                    <dd>";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "itdData", array()), "address", array()), "html", null, true);
                echo "</dd>
                    <dt>邮政编码</dt>
                    <dd>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "itdData", array()), "postal_code", array()), "html", null, true);
                echo "</dd>
                  </dl>
              </td>
              <td>
                ";
                // line 105
                if (((($context["itype"] ?? null) == 0) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 1))) {
                    // line 106
                    echo "                  <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"commonSs(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                    echo ",2);\">已发货</button>
                ";
                }
                // line 108
                echo "                ";
                if (((($context["itype"] ?? null) == 0) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 4))) {
                    // line 109
                    echo "                  <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"nook(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                    echo ",5);\">拒绝</button>
                  <button type=\"button\" class=\"btn btn-success btn-xs\" onclick=\"nook(";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                    echo ",6);\">同意</button>
                ";
                }
                // line 112
                echo "                ";
                if ((($context["itype"] ?? null) == 1)) {
                    // line 113
                    echo "                  <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"groupInfo(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "ggid", array()), "html", null, true);
                    echo ");\">拼团详情</button>
                ";
                }
                // line 115
                echo "                <!-- <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">编辑</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del(";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"addGoods(";
                // line 117
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">添加商品</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"indexGoods(";
                // line 118
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">商品列表</button> -->
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "          ";
        } else {
            // line 123
            echo "            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          ";
        }
        // line 131
        echo "          </tbody>
        </table>
        ";
        // line 134
        echo "          <div style=\"float: right;\">
            ";
        // line 135
        echo ($context["page"] ?? null);
        echo "
          </div>
        ";
        // line 138
        echo "      </div>
    </div>
  </div>
</div>
<!-- End Page -->

";
    }

    // line 146
    public function block_js($context, array $blocks = array())
    {
        // line 147
        echo "<script src=\"/apps/admin/views/indent/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "indent/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 147,  371 => 146,  361 => 138,  356 => 135,  353 => 134,  349 => 131,  339 => 123,  336 => 122,  324 => 118,  318 => 117,  314 => 116,  309 => 115,  301 => 113,  298 => 112,  293 => 110,  288 => 109,  285 => 108,  279 => 106,  277 => 105,  270 => 101,  265 => 99,  260 => 97,  255 => 95,  249 => 91,  240 => 88,  235 => 86,  230 => 84,  225 => 82,  221 => 80,  217 => 79,  212 => 77,  208 => 76,  204 => 75,  200 => 74,  197 => 73,  193 => 71,  191 => 70,  188 => 69,  186 => 68,  183 => 67,  181 => 66,  178 => 65,  176 => 64,  173 => 63,  171 => 62,  168 => 61,  166 => 60,  163 => 59,  161 => 58,  157 => 56,  152 => 55,  150 => 54,  132 => 38,  122 => 36,  119 => 35,  110 => 33,  101 => 32,  99 => 31,  91 => 30,  83 => 29,  75 => 28,  61 => 19,  52 => 17,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
    <h1 class=\"page-title\"># 订单管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ {% if itype == 0 %}普通{% elseif itype == 1 %}拼团{% endif %}订单列表</h3>
      </div>
      <form action=\"/admin/indent/index/itype/{{ itype }}/type/{{ type }}\" method=\"post\">
        <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
          <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入订单编号\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
        </div>
      </form>
      <ul class=\"nav nav-pills\" style=\"margin-left: 30px;\">
        <li role=\"presentation\" {% if type == 0 %}class=\"active\"{% endif %}><a href=\"/admin/indent/index/itype/{{ itype }}/type/0\">待付款</a></li>
        <li role=\"presentation\" {% if type == 1 %}class=\"active\"{% endif %}><a href=\"/admin/indent/index/itype/{{ itype }}/type/1\">待发货</a></li>
        <li role=\"presentation\" {% if type == 2 %}class=\"active\"{% endif %}><a href=\"/admin/indent/index/itype/{{ itype }}/type/2\">待收货</a></li>
        {% if itype == 0 %}
          <li role=\"presentation\" {% if type == 3 %}class=\"active\"{% endif %}><a href=\"/admin/indent/index/itype/{{ itype }}/type/3\">待评价</a></li>
          <li role=\"presentation\" {% if type == 4 %}class=\"active\"{% endif %}><a href=\"/admin/indent/index/itype/{{ itype }}/type/4\">售后服务</a></li>
        {% endif %}
        {% if itype == 1 %}
          <li role=\"presentation\" {% if type == 3 %}class=\"active\"{% endif %}><a href=\"/admin/indent/index/itype/{{ itype }}/type/3\">已收货</a></li>
        {% endif %}
      </ul>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>创建时间</th>
              <th>订单编号</th>
              <th>总金额</th>
              <th>买家留言</th>
              <th>商品信息</th>
              <th>收货信息</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          {% if data %}
          {% for k,v in data %}
            <tr>
              <td>
                {% if v.status == 0 %}
                  <span class=\"label label-danger\">待完善</span>
                {% elseif v.status == 1 %}
                  <span class=\"label label-success\">正常</span>
                {% elseif v.status == 2 %}
                  <span class=\"label label-danger\">取消订单</span>
                {% elseif v.status == 3 %}
                  <span class=\"label label-danger\">订单超时</span>
                {% elseif v.status == 4 %}
                  <span class=\"label label-danger\">申请退款</span>
                {% elseif v.status == 5 %}
                  <span class=\"label label-danger\">退款失败</span>
                {% elseif v.status == 6 %}
                  <span class=\"label label-danger\">退款成功</span>
                {% endif %}
              </td>
              <td>{{ v.ctime|date('Y-m-d H:i') }}</td>
              <td>{{ v.inumber }}</td>
              <td>¥{{ v.total_money }}</td>
              <td>{{ v.remarks }}</td>
              <td>
                {% for kk,vv in v.igData %}
                  <dl class=\"dl-horizontal\">
                    <dt>商品名称</dt>
                    <dd>{{ vv.goods_name }}</dd>
                    <dt>商品规格</dt>
                    <dd>{{ vv.goods_specification }}</dd>
                    <dt>商品价格</dt>
                    <dd>¥{{ vv.goods_price }}</dd>
                    <dt>购买数量</dt>
                    <dd>x{{ vv.quantity }}</dd>
                  </dl>
                {% endfor %}
              </td>
              <td>
                  <dl class=\"dl-horizontal\">
                    <dt>联系人</dt>
                    <dd>{{ v.itdData.contacts }}</dd>
                    <dt>手机号码</dt>
                    <dd>{{ v.itdData.phone }}</dd>
                    <dt>详细地址</dt>
                    <dd>{{ v.itdData.address }}</dd>
                    <dt>邮政编码</dt>
                    <dd>{{ v.itdData.postal_code }}</dd>
                  </dl>
              </td>
              <td>
                {% if itype == 0 and v.type == 1 %}
                  <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"commonSs({{ v.id }},2);\">已发货</button>
                {% endif %}
                {% if itype == 0 and v.status == 4 %}
                  <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"nook({{ v.id }},5);\">拒绝</button>
                  <button type=\"button\" class=\"btn btn-success btn-xs\" onclick=\"nook({{ v.id }},6);\">同意</button>
                {% endif %}
                {% if itype == 1 %}
                  <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"groupInfo({{ v.id }},{{ v.ggid }});\">拼团详情</button>
                {% endif %}
                <!-- <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit({{ v.id }});\">编辑</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del({{ v.id }});\">删除</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"addGoods({{ type }},{{ v.id }});\">添加商品</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"indexGoods({{ type }},{{ v.id }});\">商品列表</button> -->
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
<script src=\"/apps/admin/views/indent/js/index.js\"></script>
{% endblock %}", "indent/index.html", "/Users/zhaojian/htdocs/dev.foyou.local/wwwroot/apps/admin/views/indent/index.html");
    }
}
