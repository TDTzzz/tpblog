<!DOCTYPE html>
<html>
<head>
    <title>管理员</title>
    <script src="/Public/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css">
    <script src="/Public/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <?php include(THEME_PATH."nav.php");?>
        <div class="panel-heading">
            <h1>管理员管理
            <small class="pull-right">
                <a href="<?php echo U("/Admin/Auser/add");?>" class="btn btn-primary">添加管理员</a>
            </small>
            </h1>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>管理功能</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['users'] as $user) {?>
                    <tr>
                        <th><?php echo $user['id'];?></th>
                        <th><?php echo $user['name'];?></th>
                        <th>
                            <a href="<?php echo U("/Admin/Auser/add");?>?id=<?php echo $user['id'];?>" class="btn btn-primary btn-xs">编辑</a>
                            <a href="<?php echo U("/Admin/Auser/delete");?>?id=<?php echo $user['id'];?>" class="btn btn-danger btn-xs">删除</a>
                        </th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>