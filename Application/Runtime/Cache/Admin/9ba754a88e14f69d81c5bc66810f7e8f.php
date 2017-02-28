<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>管理员登录</title>
    <script src="/Public/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css">
    <script src="/Public/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary" style="margin-top:200px;">
                <div class="panel-heading">
                    管理员登录
                </div>
                <div class="panel-body">
                    <form action="<?php echo U('Admin/Index/login?do=chk'); ?>" method="post" class="form-horizontal">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">账号：</label>
                            <div class="col-sm-10">
                              <input name="name" class="form-control" placeholder="请输入账号。。。">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">密码：</label>
                            <div class="col-sm-10">
                              <input name="passwd" type="password" class="form-control" placeholder="请输入密码。。。">
                            </div>
                          </div>
  
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-default">登录</button>
                            </div>
                          </div>
                        </form>
                </div>
                <div class="panel-footer text-right">版权所有，违者必究</div>
            </div>
        </div>
    </div>
</body>
</html>