<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title>后台界面</title>
    <meta name="keywords" content="后台界面" />
    <meta name="description" content="后台界面" />
    <link rel="stylesheet" type="text/css" href="/admin/css/public.css" />
</head>
<body>
<div id="top">
    <div class="logo">
        管理中心
    </div>
    <ul class="nav">
        <li><a href="http://www.sifangku.com" target="_blank">私房库</a></li>
        <li><a href="http://www.sifangku.com" target="_blank">私房库</a></li>
    </ul>
    <div class="login_info">
        <a href="#" style="color:#fff;">网站首页</a>&nbsp;|&nbsp;
        管理员： admin <a href="#">[注销]</a>
    </div>
</div>
<div id="sidebar">
    <ul>
        <li>
            <div class="small_title">系统</div>
            <ul class="child">
                <li><a class="current" href="#">系统信息</a></li>
                <li><a href="#">管理员</a></li>
                <li><a href="#">添加管理员</a></li>
                <li><a href="#">站点设置</a></li>
            </ul>
        </li>
        <li><!--  class="current" -->
            <div class="small_title">内容管理</div>
            <ul class="child">
                <li><a class="current" href="#">父板块列表</a></li>
                <li><a href="#">添加父板块</a></li>
                <li><a href="#">子板块列表</a></li>
                <li><a href="#">添加子板块</a></li>
                <li><a href="#">帖子管理</a></li>
            </ul>
        </li>
        <li>
            <div class="small_title">用户管理</div>
            <ul class="child">
                <li><a href="#">用户列表</a></li>
            </ul>
        </li>
    </ul>
</div>
<div id="main" style="height:1000px;">
    <div class="title">功能说明</div>
    <div class="explain">
        <ul>
            <li>1. 嘿嘿</li>
            <li>2. 嘿嘿</li>
            <li>3. 嘿嘿</li>
        </ul>
    </div>
    <table class="list">
        <tr>
            <th>排序</th>
            <th>版块名称</th>
            <th>版主</th>
            <th>操作</th>
        </tr>
        <tr>
            <td><input class="sort" type="text" name="sort" /></td>
            <td>测试板块[id:1]</td>
            <td>孙胜利</td>
            <td><a href="#">[访问]</a>&nbsp;&nbsp;<a href="#">[编辑]</a>&nbsp;&nbsp;<a href="#">[删除]</a></td>
        </tr>
        <tr>
            <td><input class="sort" type="text" name="sort" /></td>
            <td>测试板块[id:2]</td>
            <td>孙胜利</td>
            <td><a href="#">[访问]</a>&nbsp;&nbsp;<a href="#">[编辑]</a>&nbsp;&nbsp;<a href="#">[删除]</a></td>
        </tr>
        <tr>
            <td><input class="sort" type="text" name="sort" /></td>
            <td>测试板块[id:3]</td>
            <td>孙胜利</td>
            <td><a href="#">[访问]</a>&nbsp;&nbsp;<a href="#">[编辑]</a>&nbsp;&nbsp;<a href="#">[删除]</a></td>
        </tr>
    </table>
    <input class="btn" type="submit" name="submit" value="排序" />
    <table class="au">
        <tr>
            <td>版块名称</td>
            <td><input type="text" /></td>
            <td>
                支持HTML代码
            </td>
        </tr>
        <tr>
            <td>版块名称</td>
            <td><input type="text" /></td>
            <td>
                支持HTML代码
            </td>
        </tr>
        <tr>
            <td>版块名称</td>
            <td><input type="text" /></td>
            <td>
                支持HTML代码
            </td>
        </tr>
    </table>
    <img src="{{ asset('images/th.jpg')}}" alt="">
</div>
</body>
</html>