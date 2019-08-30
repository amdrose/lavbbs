<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title>个人信息</title>
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
                <a href="{{route('front.loginout')}}" >注册</a>
            @endif
        </div>
    </div>
</div>
<div style="margin-top:55px;"></div>
<div id="position" class="auto">
    <a href="{{route('front.index')}}">首页</a> &gt; <a>个人信息</a>
</div>
<div id="main" class="auto">
    <div id="left">
        <ul class="postsList">
            @forelse($content as $key)
            <li>
                <div class="smallPic">
                    <img width="45" height="45" src="{{asset('front/image/photo.jpg')}}" />
                </div>
                <div class="subject">
                    <div class="titleWrap"><h2><a href="#">{{$key['title']}}</a></h2></div>
                    <p>
                        <a href="{{route('front.show',array('contentid'=>$key->id))}}">编辑</a> <a href="{{route('front.userdelete',array('contentid'=>$key->id))}}">删除</a>
                        发帖日期：{{$key->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;
                    </p>
                </div>
                <div class="count">
                    <p>
                        回复<br /><span>18</span>
                    </p>
                    <p>
                        浏览<br /><span>18</span>
                    </p>
                </div>
                <div style="clear:both;"></div>
            </li>
            @empty
            <h3>对不起，你还没有帖子</h3>
            @endforelse
        </ul>
        <div class="pages">

        </div>
    </div>
    <div id="right">
        <div class="member_big">
            <dl>
                <dt>
                    @if($userpoto==null)
                        <img width="180" height="180" src="{{asset('front/image/photo.jpg')}}/>
                    @else
                        <img width="180" height="180" src="{{asset($userpoto)}}"/>
                    @endif
                </dt>
                <dd class="name">{{auth('admin')->user()->name}}</dd>
                <dd>帖子总计：13</dd>
                <dd>操作：<a target="_blank" href="{{route('front.headport')}}">修改头像</a>
            </dl>
            <div style="clear:both;"></div>
        </div>
    </div>
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