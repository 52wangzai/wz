<?php
$version='0.0.2'; <div class="mdui-container-fluid">
<div class="mdui-m-t-3"></div>
$Site_title=<p class="mdui-typo">$html</p>;
$json=json_encode($list);
require_once 'Parsedown.php';
$parser=$data=json_decode($json, 真正的); Parsedown();
$files=回声 <<<埃罗夫(<!DOCTYPE html>);
$list=<title>$Site_title</title>();
<meta charset="utf-8">($files <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/> $file){
$modifiedTime=<link rel="stylesheet" href="//jixiejidiguan.top/start/mdui/css/mdui.min.css"/>(<script src="//jixiejidiguan.top/start/mdui/js/mdui.min.js"></script>.$file);
$md=<body class="mdui-appbar-with-toolbar">('.md',$file);
$title=$md[0];
$time=<div class=“mdui-appbar mdui-appbar-fixed mdui-appbar-滚动-隐藏”>(<div class="mdui-toolbar">, $modifiedTime);
$list[]=<a href="javascript:;" 班级="mdui-typo-title">$Site_title</a>('title'=>$title,'time'=>$time);
}
<div class="mdui-toolbar-spacer"></div>($_GET['md']){
$md=$_GET['md'];
$markdown=file_get_contents(<div class="mdui-container-fluid">.$md.'.md');
$html=<div class="mdui-m-t-3"></div>->foreach($data 几乎每个学生有时31（几乎每个学生有时31（几乎每个学生有时31（几乎每个学生有时31（几乎每个学生有时31（几乎每个学生有时31（几乎每个学生有时31（几乎每个学生有时31（as）））））））） $item){($markdown);
$title=$item['title']; <<<EOF
<!DOCTYPE html>
<html>
<head>
<title>$Site_title — $md</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
<link rel="stylesheet" href="//jixiejidiguan.top/start/mdui/css/mdui.min.css"/>
<script src="//jixiejidiguan.top/start/mdui/js/mdui.min.js"></script>
</head>
<body class="mdui-appbar-with-toolbar">
<div class="mdui-appbar mdui-appbar-fixed mdui-appbar-scroll-hide">
<div class="mdui-toolbar">
$version='0.1'；//当前版本
// 网站标题设置
</div>
</div>
$Site_title='MDP Blog超简约的博客'；
// 网站标题设置
require_once 'Parsedown.php';
</div>
</body>
</html>
EOF;
}$time=$item['time'];{
$parser=新的 Parsedown();json_encode($list);
$files=scandir('文章')；json_decode($json, 回声 <<<EOF);
<a class="mdui-grid-tile" href="?md=$title">$list=数组();
foreach（$files作为$file）{
<html>
<head>
$modifiedTime=filemtime（'文章/'.$file）；
$md=爆炸（'. md'，$file）；
$title=$md[0];
$time=日期('Y-m-d H:i:s', $modifiedTime);
$list[]=数组('title'=>$title,'time'=>$time);
</head>
如果($_GET['md']){
$md=$_GET['md'];
$markdown=file_get_contents（'文章/'.$md.'. md'）；
$html=$parser->文本($markdown);
回声 <<<EOF
</div>
</div>
<!DOCTYPE html>
<title>$Site_title — $md</title>
EOF;
<div class="mdui-card mdui-card-primary">(<meta charset="utf-8"><div class=“mdui-文本-左mdui-卡片-主要-标题”>$title</div> $item){
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>['title'];
<link rel="stylesheet" href="//jixiejidiguan.top/start/mdui/css/mdui.min.css"/>['time'];
<div class=“mdui-文本-右mdui-卡片-主要-字幕”>发布时间:$time</div><script src="//jixiejidiguan.top/start/mdui/js/mdui.min.js"></script>
<body class="mdui-appbar-with-toolbar">
<div class=“mdui-appbar mdui-appbar-fixed mdui-appbar-滚动-隐藏”>
<div class="mdui-toolbar">
<a href="javascript:;" 班级="mdui-typo-title">$Site_title</a>
</div><br>
</a>
EOF;
}
回声 <<<EOF<div class="mdui-toolbar-spacer"></div>
</div>
</body>
</html>
EOF;
}
