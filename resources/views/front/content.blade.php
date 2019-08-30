<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" type="text/css" href="/front/css/public.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/index.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/list.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/show.css" />
</head>
<body>
{{--<div class="header_wrap">--}}
{{--    <div id="header" class="auto">--}}
{{--        <div class="logo">lavbbs</div>--}}
{{--        <div class="nav">--}}
{{--            <a class="hover">首页</a>--}}
{{--        </div>--}}
{{--        <div class="serarch">--}}
{{--            <form>--}}
{{--                <input class="keyword" type="text" name="keyword" placeholder="搜索其实很简单" />--}}
{{--                <input class="submit" type="submit" name="submit" value="" />--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <div class="login">--}}
{{--            @if(auth('admin')->check())--}}
{{--                <a>{{auth('admin')->user()->name}}</a>&nbsp;--}}
{{--                <a href="{{route('front.loginout')}}" >注销</a>--}}
{{--            @else--}}
{{--                <a href="{{route('front.login')}}" >登陆</a>&nbsp;--}}
{{--                <a href="{{route('front.loginout')}}" >注册</a>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div id="position" class="auto">
    <a href="{{route('front.index')}}">首页</a> &gt; <a href="{{route('front.listpost')}}?id={{$mod->id}}">{{$mod->module_name}}</a> &gt; {{$cont->title}}>
</div>
<div id="main" class="auto">
    <div class="wrap1">
        <div class="pages">
        </div>
        <div style="clear:both;"></div>
    </div>
    <div class="wrapContent">
        <div class="left">
            <div class="face">
                        <img width="150" height="150" src="{{asset($userpoto)}}"/>
            </div>
            <div class="name">
                <a href="">{{$username}}</a>
            </div>
        </div>
        <div class="right">
            <div class="title">
                <h2>{{$cont->title}}</h2>
                <span>阅读：30&nbsp;|&nbsp;回复：20</span>
                <div style="clear:both;"></div>
            </div>
            <div class="pubdate">
                <span class="date">发布于:&nbsp{{$created_at}} </span>
                <span class="floor" style="color:red;font-size:14px;font-weight:bold;">楼主</span>
            </div>
            <div class="content">
                {{$cont->content}}
            </div>
        </div>
{{--        <a class="btn reply" href=""回复页面跳转 target="_blank"></a>--}}
        <div style="clear:both;"></div>
    </div>
{{--    <div class="wrapContent">--}}
{{--        <div class="left">--}}
{{--            <div class="face">--}}
{{--                <a target="_blank" href="">--}}
{{--                    <img width=120 height=120 src="{{asset('front/image/photo.jpg')}}")>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="name">--}}
{{--                <a href="">回复人姓名</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="right">--}}
{{--            <div class="pubdate">--}}
{{--                <span class="date">回复时间：</span>--}}
{{--                <span class="floor">目前所处楼&nbsp;|&nbsp;<a target="_blank" href="">跳转引用</a></span>--}}
{{--            </div>--}}
{{--            <div class="content">--}}
{{--                <div class="quote">--}}
{{--                    <h2>引用 （用户名称）楼（楼主） 发表的: </h2>--}}
{{--                    文章标题--}}
{{--                </div>--}}
{{--                回复内容--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div style="clear:both;"></div>--}}
{{--    </div>--}}
{{--    <div class="wrap1">--}}
{{--        <div class="pages">--}}
{{--            输出内容--}}
{{--        </div>--}}
{{--        <a class="btn reply" href=""回复页面跳转 target="_blank"></a>--}}
{{--        <div style="clear:both;"></div>--}}
{{--    </div>--}}
</div>


<div id="footer" class="auto">
    <div class="bottom">
        <a>lavbbs</a>
    </div>
    <div class="copyright">Powered by lavbbs ©2019 lavbbs.com</div>
</div>
</body>
</html>