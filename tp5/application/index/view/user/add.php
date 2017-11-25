{extend name="Public:base" /}
<!--内容区域 conten-->
{block name="content"}
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
{/block}