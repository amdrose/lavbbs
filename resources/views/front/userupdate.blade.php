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
    <link rel="stylesheet" type="text/css" href="/front/css/member.css" />
</head>
<body>
<div class="header_wrap">
    <div id="header" class="auto">
        <div class="logo">lavbbs</div>
        <div class="nav">
            <a class="hover" href="{{route('front.index')}}">首页</a>
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
<div id="main" class="auto">
        <div id="publish">
            <form method="post" action="{{route('front.userupdate',array('id'=>$con->id))}}">
                @csrf
                <div style="font-size:15px">
                    <span style="color:#488fcf"  >标题:</span>
                </div>
                <input class="title" placeholder="" name="title" type="text" value="{{$con->title}}"/>
                <br>
                <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=2>
                <br>
                <div style="font-size:15px">
                    <span style="color:#488fcf"  >文章:</span>
                </div>
                <textarea style="width: 80%; height:200px" name="cont" placeholder="" class="content">{{$con->content}}</textarea><br>
                &nbsp;&nbsp; &nbsp;&nbsp;<input class="publish" type="submit" name="submit" value="提交" />
                <div style="clear:both;"></div>
            </form>
        </div>
        <div class="pages">

        </div>
    </div>
{{--    <div id="right">--}}
{{--        <div class="member_big">--}}
{{--            <dl>--}}
{{--                <dt>--}}
{{--                    <img width="180" height="180" src="{{asset('front/image/photo.jpg')}}"/>--}}
{{--                </dt>--}}
{{--                <dd class="name">{{auth('admin')->user()->name}}</dd>--}}
{{--                <dd>帖子总计：13</dd>--}}
{{--                <dd>操作：<a target="_blank" href="">修改头像</a>--}}
{{--            </dl>--}}
{{--            <div style="clear:both;"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div style="clear:both;"></div>
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