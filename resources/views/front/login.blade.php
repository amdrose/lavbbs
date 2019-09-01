<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title>登陆界面</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" type="text/css" href="/front/css/public.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/register.css" />
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
            <a>登录</a>&nbsp;
            <a>注册</a>
        </div>
    </div>
</div>
{{--错误提示--}}
<div style="margin-top:55px;"></div>
<div id="register" class="auto">
    <h2>欢迎登陆</h2>
    <form action="login" method="post" >
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <label>用户名：<input type="text" name="user" /><span>*用户名含有禁用字符，请选择其他用户名</span></label>
        <label>密码：<input type="password" name="password" /><span>*用户名含有禁用字符，请选择其他用户名</span></label>
        <label>验证码：<input name="vcode" type="text"  /><span>*请输入下方验证码</span></label>
{{--        <img class="vcode" src="{{captcha_src()}}" />--}}
{{--            点击图片刷新--}}
            <img class="vcode" src="{{captcha_src()}}" onclick="this.src='{{captcha_src()}}?r='+Math.random();" alt="">
        <div style="clear:both;"></div>
        <input class="btn" type="submit" name="login" value="登陆" />
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