<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/bootstrap-responsive.css" rel="stylesheet" />
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="span2">
                    <div class="row">
                        <div class="span5">Level 1</div>
                        <div class="span5">Level 2</div>
                    </div>
                </div>
                <div class="span10">
                    <div>
                        <blockquote class="pull-right">
                            <p>一天吃六个胶囊，一天三次、一次两个，没有吃掉多少铬。</p>
                            <small>卫生部合理用药专家孙忠实</small>
                        </blockquote>
                    </div>
                    <div>
                        <code>alert('ddd');</code>
                        <pre class="prettyprint linenums">This is my word!</pre>
                    </div>
                    <div>
                        <table class="table table-striped table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>电视剧</th>
                                    <th>类型</th>
                                    <th>年代</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>爱情公寓</td>
                                    <td>都市爱情喜剧</td>
                                    <td>2010</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>邪恶力量</td>
                                    <td>悬疑魔幻</td>
                                    <td>2005</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>神探伽俐略</td>
                                    <td>推理探案</td>
                                    <td>2008</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <form class="well form-search">
                        <label>标签名称</label>
                        <input type="text" placeholder="请输入文字..." class="input-medium search-query">
                        <span class="help-inline">相关提示信息</span>
                        <p class="help-block">块状帮助文字...</p>
                        <label class="checkbox"><input type="checkbox"> 选我选我</label>
                        <button type="submit" class="btn">Submit</button>
                    </form>

                    <form class="well form-inline">
                        <input type="text" class="input-small" placeholder="邮件">
                        <input type="password" class="input-small" placeholder="密码">
                        <label class="checkbox">
                            <input type="checkbox"> 记住我
                        </label>
                        <button type="submit" class="btn btn-large btn-primary">登录</button>
                    </form>

                    <form class="form-horizontal">
                        <fieldset>
                            <legend>完善资料</legend>
                            <div class="control-group">
                                <label class="control-label" for="input01">您的尊姓大名</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="input01">
                                    <p class="help-block">字母，数字，汉字皆可</p>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input01">您的twitter网址</label>
                                <div class="controls input-prepend input-append">
                                    <span class="add-on">$</span><input type="text" size="16" id="appendedPrependedInput" class="span2"><span class="add-on">.00</span>
                                    <p class="help-block">请输入您的twitter网址，以便我们收录</p>
                                </div>
                                <i class="icon-search"></i>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="span4">
                    <div style="margin-bottom: 9px" class="btn-toolbar">
                        <div class="btn-group">
                            <a href="#" class="btn"><i class="icon-align-left"></i></a>
                            <a href="#" class="btn"><i class="icon-align-center"></i></a>
                            <a href="#" class="btn"><i class="icon-align-right"></i></a>
                            <a href="#" class="btn"><i class="icon-align-justify"></i></a>
                        </div>
                        <div class="btn-group">
                            <a href="#" class="btn "><i class="icon-user"></i> 用户</a>
                            <a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-pencil"></i> 修改</a></li>
                                <li><a href="#"><i class="icon-trash"></i> 删除</a></li>
                                <li><a href="#"><i class="icon-ban-circle"></i> 禁止</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="i"></i> 设为管理员</a></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        <a href="#" class="btn"><i class="icon-refresh"></i> 刷新</a>
                        <a href="#" class="btn btn-success"><i class="icon-shopping-cart icon-white"></i> 签出</a>
                        <a href="#" class="btn btn-danger"><i class="icon-trash icon-white"></i> 删除</a>
                    </p>
                    <p>
                        <a href="#" class="btn btn-large"><i class="icon-comment"></i> 评论</a>
                        <a href="#" class="btn btn-small"><i class="icon-cog"></i> 设置</a>
                        <a href="#" class="btn btn-small btn-info"><i class="icon-info-sign icon-white"></i> 更多信息</a>
                    </p>
                </div>
                <div class="span4">
                    <div style="padding: 8px 0;" class="well">
                        <ul class="nav nav-list">
                            <li class="active"><a href="#"><i class="icon-home icon-white"></i> 首页</a></li>
                            <li><a href="#"><i class="icon-book"></i> 类库</a></li>
                            <li><a href="#"><i class="icon-pencil"></i> 应用</a></li>
                            <li><a href="#"><i class="i"></i> 音乐</a></li>
                        </ul>
                    </div> <!-- /well -->
                </div>
                <div class="span4">
                    <form><a class="close">&times;</a>
                        <div class="control-group">
                            <label for="inputIcon" class="control-label">邮件地址</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-envelope"></i></span><input type="text" style="margin:0;" id="inputIcon" class="span2">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">

</script>
