<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title>修改图片</title>
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
                <a href="{{route('front.loginout')}}" >注册</a>
            @endif
        </div>
    </div>
</div>
<div style="margin-top:55px;"></div>
<div id="position" class="auto">
    <a href="{{route('front.index')}}">首页</a> &gt; <a>修改头像</a>
</div>
<div id="publish" style="width: 50%;height:100px;border:1px solid #F00">
    {{--    <div class="panel-heading">上传文件</div>--}}
    <form class="form-horizontal" method="POST" action="{{route('front.headport')}}" enctype="multipart/form-data">
        @csrf
        <input id="file" type="file" class="form-control" name="headport" required><br>
        <br>
        <button type="submit" class="btn btn-primary">确定</button>
    </form>
    <div style="clear:both;"></div>
</div>
<div id="footer" class="auto">
    <div class="bottom">
        <a>lavbbs</a>
    </div>
    <div class="copyright">Powered by lavbbs ©2019 lavbbs.com</div>
</div>

</body>
</html>