<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title>首页</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" type="text/css" href="/front/css/public.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/index.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/list.css" />

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
            @if(auth('admin')->check())
            <a href="{{route('front.user')}}">{{auth('admin')->user()->name}}</a>&nbsp;
            <a href="{{route('front.loginout')}}" >注销</a>
            @else
            <a href="{{route('front.login')}}" >登陆</a>&nbsp;
            <a href="{{route('front.loginout')}}" >注册</a>
            @endif
        </div>
    </div>
</div>
<div style="margin-top:55px;"></div>
<div id="hot" class="auto">
    <div class="title">热门动态</div>
    <ul class="newlist">
        <li> <a href="#">目前没有更新的动态...</a></li>

    </ul>
    <div style="clear:both;"></div>
</div>
<div class="box auto">
    <div class="title">
        板块分类
    </div>

    <div class="classList">
        @forelse($mod as $key)
            <div class="childBox new">
                <h2><a href="{{route('front.listpost',array('id'=>$key->id))}}">{{$key->module_name}}</a> <span>(今日38)</span></h2>
                帖子：124124<br />
            </div>
        @empty
            <div style="padding:10px 0;">暂无分类</div>
        @endforelse
        <div style="clear:both;">
        </div>
    </div>
    <div class="title">
        软件区域
    </div>
    @if(auth('admin')->check())
        <a style="border: 1px solid blue" href="{{route('front.upload')}}">上传文件</a>
    @endif
    <br>
    <br>
    @forelse($fle as $value)
       {{$value->name}}-->>><a href="{{route('front.down',array('name'=>$value->name))}}">下载</a>
        <br>
        <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)"  width="100%" color=#987cb9 SIZE=0.5>
    @empty
        <h2>对不起，没有帖子</h2>
    @endforelse
</div>

<div id="footer" class="auto">
    <div class="bottom">
        <a>lavbbs</a>
    </div>
    <div class="copyright">Powered by lavbbs ©2019 lavbbs.com</div>
</div>
</body>
</html>