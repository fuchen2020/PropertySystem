<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:71:"F:\TP5\PropertySystem\tp5\public/../application/index\view\user\add.php";i:1511535259;s:74:"F:\TP5\PropertySystem\tp5\public/../application/index\view\Public\base.php";i:1511533098;s:77:"F:\TP5\PropertySystem\tp5\public/../application/index\view\Public\_header.php";i:1490074809;s:75:"F:\TP5\PropertySystem\tp5\public/../application/index\view\Public\_menu.php";i:1511534719;s:77:"F:\TP5\PropertySystem\tp5\public/../application/index\view\Public\_footer.php";i:1511530709;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="favicon.ico" >
    <link rel="Shortcut Icon" href="favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/static/lib/html5.js"></script>
    <script type="text/javascript" src="/static/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/static/staticss/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/staticss/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/static/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/static/staticss/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/static/staticss/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->
    <title>H-ui.admin v3.0</title>
    <meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
    <meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.0</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="#">退出</a></li>
						</ul>
					</li>
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<!--/_header 作为公共模版分离出去-->

<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 后台管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('index/user/index'); ?>" title="管理员列表">管理员列表</a></li>
                    <li><a href="<?php echo url('index/user/add'); ?>" title="管理员添加">管理员添加</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="picture-list.html" title="图片管理">图片管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="product-brand.html" title="品牌管理">品牌管理</a></li>
					<li><a href="product-category.html" title="分类管理">分类管理</a></li>
					<li><a href="product-list.html" title="产品管理">产品管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="http://h-ui.duoshuo.com/admin/" title="评论列表">评论列表</a></li>
					<li><a href="feedback-list.html" title="意见反馈">意见反馈</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="member-list.html" title="会员列表">会员列表</a></li>
					<li><a href="member-del.html" title="删除的会员">删除的会员</a></li>
					<li><a href="member-level.html" title="等级管理">等级管理</a></li>
					<li><a href="member-scoreoperation.html" title="积分管理">积分管理</a></li>
					<li><a href="member-record-browse.html" title="浏览记录">浏览记录</a></li>
					<li><a href="member-record-download.html" title="下载记录">下载记录</a></li>
					<li><a href="member-record-share.html" title="分享记录">分享记录</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="admin-role.html" title="角色管理">角色管理</a></li>
					<li><a href="admin-permission.html" title="权限管理">权限管理</a></li>
					<li><a href="admin-list.html" title="管理员列表">管理员列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-tongji">
			<dt><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="charts-1.html" title="折线图">折线图</a></li>
					<li><a href="charts-2.html" title="时间轴折线图">时间轴折线图</a></li>
					<li><a href="charts-3.html" title="区域图">区域图</a></li>
					<li><a href="charts-4.html" title="柱状图">柱状图</a></li>
					<li><a href="charts-5.html" title="饼状图">饼状图</a></li>
					<li><a href="charts-6.html" title="3D柱状图">3D柱状图</a></li>
					<li><a href="charts-7.html" title="3D饼状图">3D饼状图</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="system-base.html" title="系统设置">系统设置</a></li>
					<li><a href="system-category.html" title="栏目管理">栏目管理</a></li>
					<li><a href="system-data.html" title="数据字典">数据字典</a></li>
					<li><a href="system-shielding.html" title="屏蔽词">屏蔽词</a></li>
					<li><a href="system-log.html" title="系统日志">系统日志</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->
<!--内容区域 conten-->

<section class="Hui-article-box" >
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
    <span class="c-gray en">&gt;</span>
    后台管理
    <span class="c-gray en">&gt;</span>
    管理员添加 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a> </nav>
<div class="Hui-article">

<form action="add" method="post" class="form form-horizontal" id="form-admin-add" style="width: 700px">
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>管理员：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input type="text" class="input-text" value="" placeholder="" id="adminName" name="username">
        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>初始密码：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input type="password" class="input-text" autocomplete="off" value="" placeholder="密码" id="password" name="password">
        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input type="password" class="input-text" autocomplete="off"  placeholder="确认新密码" id="password2" name="password2">
        </div>
    </div>
    <div class="row cl">
        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
            <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
        </div>
    </div>
</form>

</div>
</section>

<!--/ 内容区域 conten-->
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/lib/layer/2.4/layer.js"></script>
 
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/static/staticss/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/static/staticss/h-ui.admin/js/H-ui.admin.page.js"></script>

<script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/staticss/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/static/staticss/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去-->
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
    
</script>
<!--/请在上方写此页面业务相关的脚本-->

<!--此乃百度统计代码，请自行删除-->
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<!--/此乃百度统计代码，请自行删除-->
</body>
</html>

