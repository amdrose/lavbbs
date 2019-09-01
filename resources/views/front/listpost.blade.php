<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title>帖子列表</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" type="text/css" href="/front/css/public.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/list.css" />
</head>
<body>
<div class="header_wrap">
    <div id="header" class="auto">
        <div class="logo">lavbbs</div>
        <div class="nav">
            <a class="hover" href="{{route('front.index')}}">首页</a>
        </div>
        <div class="serarch">
            <form method="post" action="{{route('front.searach')}}">
                @csrf
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
<div id="position" class="auto">
    <a href="{{route('front.index')}}">首页</a> &gt; <a>{{$modulename}}</a>
</div>
<div id="main" class="auto">
    <div id="left">
        <div class="box_wrap">
            <h3>{{$modulename}}</h3>
            <div class="num">
                总帖：<span>{{$count}}</span>
            </div>
        </div>
        <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=2>
        @if(auth('admin')->check())
        <a class="btn publish" href="{{route('front.public')}}"></a>

    @endif
        <div style="clear:both;"></div>
        <ul class="postsList">

            @forelse($result3 as $value)
            <li>
                <div class="smallPic">
                    <a href="#">
                        <img width="45" height="45"src="{{asset('front/image/2374101_small.jpg')}}">
                    </a>
                </div>
                <div class="subject">
                    <div class="titleWrap">&nbsp;&nbsp;<h2><a href="{{route('front.content',array('modid'=>$getnum,'contenttitle'=>$value->title,'username'=>$value->name,'created_at'=>$value->created_at))}}">{{$value->title}}</a></h2></div>
                    <p>
                        贴主：{{$value->name}}&nbsp;{{$value->created_at}}&nbsp;&nbsp;&nbsp;&nbsp
                    </p>

                </div>
{{--                <div class="count">--}}
{{--                    <p>--}}
{{--                        回复<br /><span>41</span>--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        浏览<br /><span>896</span>--}}
{{--                    </p>--}}
{{--                </div>--}}
                <div style="clear:both;"></div>
            </li>
            @empty
                <h2>对不起，没有帖子</h2>
            @endforelse


        </ul>

        <div class="pages_wrap">
            {{$result3 ->appends(['id' => $getnum])->links()}}
            <div style="clear:both;"></div>
        </div>
    </div>
    <div id="right">
        <div class="classList">
            <div class="title">版块列表</div>
            <ul class="listWrap">
                @forelse($mod as $key)
                    <li>
                        <h2><a href="{{route('front.listpost')}}?id={{$key->id}}">{{$key->module_name}}</a></h2>
                        <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=2>
                    </li>
                @empty
                    <li>
                        <h2><a href="#">暂无板块分类</a></h2>
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
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