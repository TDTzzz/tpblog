<!DOCTYPE html>
<html>
<head>
    <title><?php echo $cfg['title'];?></title>
    <script src="/Public/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css">
    <script src="/Public/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" style="height:70px;" >
        <div class="container">
            <a class="navbar-brand" style="font-size:30px;margin-top:10px;" href="<?php echo U("/Home/Index/index");?>">TTのBlog</a>
            <ul class="nav navbar-nav navbar-right" style="margin-top:10px;">
                <li><a href="<?php echo U("/Admin/Login/index");?>">管理员登录</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top:80px;">
        <div class="jumbotron" style="background-image: linear-gradient(45deg, rgb(2, 0, 49) 0px, rgb(109, 51, 83) 100%);">
            <h1><?php echo $cfg['博客标题'];?><small><?php echo $cfg['副标题'];?></small></h1>
            
        </div>
        <ol class="breadcrumb">
          <li><a href="/">首页</a></li>
          <li>/<?php echo $blog['title'];?></li>
        </ol>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">作者</div>
                <div class="panel-body">hhh</div>
            </div>
        </div>
        <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo $blog['title'];?></div>
                    <div class="panel-body"><?php echo html_entity_decode($blog['content']);?></div>
                    <!--html_entity_decode反转义 可以显示图片-->
                </div>
        </div>
    </div>
</body>
</html>
 