
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" type="text/css" href="/front/css/public.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/index.css" />
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
<div id="hot" class="auto">
    <div class="title">热门动态</div>
    <ul class="newlist">
        <li><a href="#">[库队]</a> <a href="#">私房库实战项目录制中...</a></li>

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
                <h2><a href="{{route('front.listpost')}}?id={{$key->id}}">{{$key->module_name}}</a> <span>(今日38)</span></h2>
                帖子：124124<br />
            </div>
        @empty
            <div style="padding:10px 0;">暂无分类</div>
        @endforelse
        <div style="clear:both;">
        </div>
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