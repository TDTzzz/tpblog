<!DOCTYPE html>
<html>
<head>
    <title>linux</title>
    <script src="/Public/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css">
    <script src="/Public/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include(THEME_PATH."nav.php");?>
    <div class="container">
        <div class="col-md-9">
            <div style="border-bottom: 2px solid gray;font-size: 30px;margin-top:130px;width:200px;">
                分类：Linux
            </div>
            <?php foreach($blogs as $blog){;?>
            <div style="margin-top:30px;height:200px;">
                <div class="title" style="width: 100px;line-height: 40px;font-size: 20px;height:40px;border-bottom:3px solid #d61616;"><?php echo $blog['title'];?> 
                </div>
                <div class="time" style="line-height: 50px;font-size: 20px;height:50px;">
                    <?php echo $blog['intime'];?>
                </div>
                <div style="font-size: 20px;height:100px;border-bottom:1px solid gray;">
                    <?php echo mb_substr(strip_tags(html_entity_decode($blog['content'])), 0,10);?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>