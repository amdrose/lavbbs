<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title></title>
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
    <a href="{{route('front.index')}}">首页</a> &gt; <a>{{$modulename}}</a>
</div>
<div id="main" class="auto">
    <div id="left">
        <div class="box_wrap">
            <h3>{{$modulename}}</h3>
            <div class="num">
                今日：<span>7</span>&nbsp;&nbsp;&nbsp;
                总帖：<span>158061</span>
            </div>
        </div>
        <div style="clear:both;"></div>
        <ul class="postsList">
            @forelse($result2 as $title)
            <li>
                <div class="smallPic">
                    <a href="#">
                        <img width="45" height="45"src="{{asset('front/image/2374101_small.jpg')}}">
                    </a>
                </div>
                <div class="subject">
                    <div class="titleWrap">&nbsp;&nbsp;<h2><a href="#">{{$title->title}}</a></h2></div>
                    <p>
                        楼主：张三&nbsp;2014-12-08&nbsp;&nbsp;&nbsp;&nbsp;最后回复：2014-12-08
                    </p>
                </div>
                <div class="count">
                    <p>
                        回复<br /><span>41</span>
                    </p>
                    <p>
                        浏览<br /><span>896</span>
                    </p>
                </div>
                <div style="clear:both;"></div>
            </li>
            @empty
                <h2>对不起，没有帖子</h2>
            @endforelse

        </ul>

        <div class="pages_wrap">
            {{$result2 ->appends(['id' => $getnum])->links()}}
{{--            <a class="btn publish" href=""></a>--}}
{{--            <div class="pages">--}}
{{--                <a>« 上一页</a>--}}
{{--                <a>1</a>--}}
{{--                <span>2</span>--}}
{{--                <a>3</a>--}}
{{--                <a>4</a>--}}
{{--                <a>...13</a>--}}
{{--                <a>下一页 »</a>--}}
{{--            </div>--}}
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