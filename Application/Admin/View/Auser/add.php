<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="/Public/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css">
    <script src="/Public/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <?php include(THEME_PATH."nav.php");?>
    </div>
    <div class="container">
        <div class="page-header">
            <h1>管理员管理
            <small class="pull-right">
                <a href="<?php echo U("/Admin/Auser/index");?>" class="btn btn-primary">返回</a>
            </small>
            </h1>
        </div>
        <div class="col-md-6 col-md-offset-3">
        <div class="panel-body">
            <form method="post" action="<?php echo U("/Admin/Auser/save");?>?id=<?php echo $user['id'];?>">
              <div class="form-group">
                <label>账号：</label>
                <input name="name" class="form-control" placeholder="请输入要新增的账号" value="<?php echo $user["name"];?>">
              </div>
              <div class="form-group">
                <label>密码：</label>
                <input type="password" name="passwd" class="form-control" placeholder="请输入密码" value="<?php echo $user["passwd"];?>">
              </div>
              </div>
              <button type="submit" class="btn btn-primary">提交</button>
        </form>
        </div>
        </div>
    </div>
</body>
</html>