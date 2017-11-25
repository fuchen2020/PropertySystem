{extend name="Public:base" /}
<!--内容区域 conten-->
{block name="content"}
<section class="Hui-article-box">
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span>
        后台管理
        <span class="c-gray en">&gt;</span>
        管理员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a> </nav>
    <div class="Hui-article">
        <article class="cl pd-20">
            <table class="table table-border table-bordered table-bg">
                <thead>
                <tr>
                    <th scope="col" colspan="9">员工列表</th>
                </tr>
                <tr class="text-c">
                    <th width="25"><input type="checkbox" name="" value=""></th>
                    <th width="40">ID</th>
                    <th width="150">登录名</th>
                    <th width="90">手机</th>
                    <th width="150">邮箱</th>
                    <th>角色</th>
                    <th width="130">加入时间</th>
                    <th width="100">是否已启用</th>
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>



                {volist name="data" id="vo"}
                <tr class="text-c">
                    <td><input type="checkbox" value="{$vo.id}" name=""></td>
                    <td>{$vo.id}</td>
                    <td>{$vo.username}</td>
                    <td>13000000000</td>
                    <td>admin@mail.com</td>
                    <td>超级管理员</td>
                    <td>{$vo.addtime}</td>
                    <td class="td-status"><span class="label label-success radius">已启用</span></td>
                    <td class="td-manage">
                        <a href=""><i class="Hui-iconfont">&#xe631;</i></a>
                        <a href=""><i class="Hui-iconfont">&#xe6df;</i></a>
                        <a href=""><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                </tr>
                {/volist}



                </tbody>
            </table>
        </article>
    </div>
</section>
{/block}
<!--/ 内容区域 conten-->

<!--请在下方写此页面业务相关的脚本-->
{block name="js"}

{/block}
<!--请在下方写此页面业务相关的脚本-->