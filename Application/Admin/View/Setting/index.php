<!DOCTYPE html>
<html>
<head>
    <title>博客设置</title>
    <script src="/Public/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css">
    <script src="/Public/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
         <?php include(THEME_PATH."nav.php");?>
        <div class="page-header">
            <h1>博客设置
            <small>
                设置网站的基本属性
            </small>
            </h1>
        </div>
        <div class="col-md-12">
                <form class="form-horizontal" action="<?php echo U('Admin/Setting/save');?>" method="post">
                <?php foreach($setting as $k=>$value){ ?>
                <div class="form-group">
                  <label class="col-sm-2 control-label"><?php echo $k;?></label>
                  <div class="col-sm-10">
                     <input type="text" name="<?php echo $k;?>" class="form-control" placeholder="请输入配置" value="<?php echo $value;?>">
                    
                  </div>
                </div>
                <?php } ?>
           
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">提交</button>
                  </div>
                </div>
            </form>
            </div>
    </div>
</body>
</html>