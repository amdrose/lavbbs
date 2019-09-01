<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title>错误界面</title>
    <meta name="keywords" content="后台界面" />
    <meta name="description" content="后台界面" />
    <meta http-equiv="refresh" content="3;URL={{route($tiaozhuan)}}" />
    <link rel="stylesheet" type="text/css" href="/admin/css/remind.css" />
</head>
<body>
<div class="notice"><span class="pic {{$notic}}"></span> {{$message}} <a href="{{route($tiaozhuan)}}">3秒后自动跳转中!</a></div>
</body>
</html>