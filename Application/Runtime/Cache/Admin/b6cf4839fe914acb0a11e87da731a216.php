<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>日志管理</title>
    <script src="/Public/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css">
    <script src="/Public/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
         <?php include(THEME_PATH."nav.php");?>
        <div class="panel-heading">
            <h1>日志管理
            <small class="pull-right">
                <a href="<?php echo U("/Admin/Blog/add");?>" class="btn btn-primary">添加日志</a>
            </small>
            </h1>
        </div>
         <table class="table table-striped">
            <thead>
                <tr>
                    <th>bid</th>
                    <th>title</th>
                    <th>author</th>
                    <th>content</th>
                    <th>intime</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($blogs as $blog) {?>
                    <tr>
                        <th><?php echo $blog['bid'];?></th>
                        <th><?php echo $blog['title'];?></th>
                        <th><?php echo $blog['author'];?></th>
                        <th><?php echo html_entity_decode($blog['content']);?></th>
                        <th><?php echo date("Y-m-d H:i:s",$blog['intime']);?></th>
                        <th>
                            <a href="<?php echo U("/Admin/Blog/add");?>?bid=<?php echo $blog['bid'];?>" class="btn btn-primary btn-xs">编辑</a>
                            <a href="<?php echo U("/Admin/Blog/delete");?>?bid=<?php echo $blog['bid'];?>" class="btn btn-danger btn-xs">删除</a>
                        </th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php echo $show;?>
    </div>
</body>
</html>