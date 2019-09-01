<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title>留言</title>
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
            <a href="{{route('front.index')}}" class="hover">首页</a>
        </div>
        <div class="serarch">
            <form>
                <input class="keyword" type="text" name="keyword" placeholder="搜索其实很简单" />
                <input class="submit" type="submit" name="submit" value="" />
            </form>
        </div>
        <div class="login">
            @if(auth('admin')->check())
                <a>{{auth('admin')->user()->name}}</a>&nbsp;
                <a href="{{route('front.loginout')}}" >注销</a>
            @else
                <a href="{{route('front.login')}}" >登陆</a>&nbsp;
                <a href="{{route('front.regist')}}" >注册</a>
            @endif
        </div>
    </div>
</div>
<div style="margin-top:55px;"></div>
<div id="position" class="auto">
    <a href="{{route('front.index')}}">首页</a> &gt; <a>留言</a>
</div>


<div id="public">
    <div style="clear:both;"></div>
    <div id="publish">
        <form method="post" action="{{route('front.comment')}}">
            @csrf
            <h3 class="blog-comment">对贴子{{$cont->title}}进行的评论</h3>
            <textarea name="message" class="content"></textarea>
            <input type="hidden" name="content_id" value="{{$content_id}}">
            <input type="hidden" name="user_id" value="{{$user_id}}">
            <input class="publish" type="submit" name="submit" value="" />
            <div style="clear:both;"></div>
        </form>
    </div>
</div>

<div id="footer" class="auto">
    <div class="bottom">
        <a>lavbbs</a>
    </div>
    <div class="copyright">Powered by lavbbs ©2019 lavbbs.com</div>
</div>
</body>
</html>