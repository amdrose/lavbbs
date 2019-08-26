<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" type="text/css" href="/front/css/public.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/publish.css" />
</head>
<body>
<div class="header_wrap">
    <div id="header" class="auto">
        <div class="logo">lavbbs</div>
        <div class="nav">
            <a class="hover">首页</a>
        </div>
        <div class="serarch">
            <form>
                <input class="keyword" type="text" name="keyword" placeholder="搜索其实很简单" />
                <input class="submit" type="submit" name="submit" value="" />
            </form>
        </div>
        <div class="login">
            <a>登录</a>&nbsp;
            <a>注册</a>
        </div>
    </div>
</div>
<div style="margin-top:55px;"></div>
<div id="position" class="auto">
    <a>首页</a> &gt; <a>发布帖子</a>
</div>
<div id="publish">
    <form method="post" action="{{route('front.public')}}">
        @csrf
        <select name="module_id">
            <option selected>请选择一个类别</option>
            @foreach($mod as $value)
            <option value="{{$value->id}}}">{{$value->module_name}}</option>
            @endforeach
        </select>
        <input class="title" placeholder="请输入标题" name="title" type="text" />
        <textarea name="content" class="content"></textarea>
        <input class="publish" type="submit" name="submit" value="" />
        <div style="clear:both;"></div>
    </form>
</div>
<div id="footer" class="auto">
    <div class="bottom">
        <a>lavbbs</a>
    </div>
    <div class="copyright">Powered by lavbbs ©2019 lavbbs.com</div>
</div>
</body>
</html>