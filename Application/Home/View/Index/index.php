<!DOCTYPE html>
<html>
<head>
    <title><?php echo $cfg['title'];?></title>
    <script src="/Public/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css">
    <script src="/Public/js/bootstrap.min.js"></script>
</head>
<body>
        <?php include(THEME_PATH."nav.php");?>
        <div class="jumbotron" style="height:500px;margin-top: 70px;background-image: linear-gradient(45deg, rgb(2, 0, 49) 0px, rgb(51, 96, 109) 100%);">
            <div class="container" style="color:white;margin-top:50px;">
                <h1 style="text-align:center;font-weight:600;font-size:80px;"><?php echo $cfg['博客标题'];?></h1>
                <h2 style="text-align:center;font-weight:200;font-size:30px;"><?php echo $cfg['副标题'];?></h2>
            </div>
            
        </div>
        <div class="container">
            <div style="padding-bottom: 20px;border-bottom:2px solid gray;">
                <h2 style="text-align:center;font-weight:700;font-size:35px;">下面是暂时涉及的三个领域</h2>
            </div>
            <div class="row" style="margin-top:50px;">
                <div class="col-md-4" style="border-right: 1px solid gray;text-align:center;height:250px;">
                    <a href="<?php echo U("/Home/Read/linux");?>"><img src="/Public/img/linux.png"></a>
                    <h3>Linux</h3>
                </div>
                <div class="col-md-4" style="border-right: 1px solid gray;text-align:center;height:250px;">
                    <img src="/Public/img/php.png">
                    <h3 style="margin-top:47px;">PHP</h3>
                </div>
                <div class="col-md-4" style="text-align:center;height:250px;">
                    <img src="/Public/img/html.jpg">
                    <h3>HTML5</h3>
                </div>
            </div>
        </div>
        <footer style="margin-top: 100px;height:200px;background-image: linear-gradient(45deg, rgb(2, 0, 49) 0px, rgb(51, 96, 109) 100%);">
            <div class="container">
                <div style="color:white;text-align:center;margin-top:50px;font-weight:200;font-size:30px;">
                不知道写什么东西的尾部
                </div>
            </div>
        </footer>
        
</body>
</html>
 