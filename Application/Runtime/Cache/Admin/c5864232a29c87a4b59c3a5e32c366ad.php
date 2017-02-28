<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>日志添加</title>
    <script src="/Public/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css">
    <script src="/Public/js/bootstrap.min.js"></script>
    <!-- simditor富文本编辑器 -->
    <link rel="stylesheet" type="text/css" href="/Public/simditor/styles/simditor.css" />

    <script type="text/javascript" src="/Public/simditor/scripts/module.js"></script>
    <script type="text/javascript" src="/Public/simditor/scripts/hotkeys.js"></script>
    <script type="text/javascript" src="/Public/simditor/scripts/uploader.js"></script>
    <script type="text/javascript" src="/Public/simditor/scripts/simditor.js"></script>

</head>
<body>
    <div class="container">
        <?php include(THEME_PATH."nav.php");?>
    </div>
    <div class="container">
        <div class="page-header">
            <h1>日志添加
            <small class="pull-right">
                <a href="<?php echo U("/Admin/Blog/index");?>" class="btn btn-primary">返回</a>
            </small>
            </h1>
        </div>
        <div class="col-md-12">
        <div class="panel-body">
            <form method="post" action="<?php echo U("/Admin/Blog/save");?>?bid=<?php echo $blogs['bid'];?>">
              <div class="form-group">
                <label>标题：</label>
                <input name="title" class="form-control" placeholder="请输入标题" value="<?php echo $blogs["title"];?>">
              </div>
              <div class="form-group">
                <label>作者：</label>
                <input name="author" class="form-control" placeholder="请输入作者" value="<?php echo $blogs["author"];?>">
              </div>
              <div class="form-group">
                <label>内容：</label>
                  <textarea name="content" id="content" placeholder="Balabala" >
                    <?php $blogs['content'];?>
                  </textarea>
                    <script>
                      var editor = new Simditor({
                        textarea: $('#content'),
                        upload:{
                          url:"<?php echo U('/Admin/Blog/upload');?>",
                          fileKey:"file1",
                        }
                        });
                    </script>
                    
              </div>
              </div>
              <button type="submit" class="btn btn-primary">提交</button>
        </form>
        </div>
        </div>
    </div>
</body>
</html>