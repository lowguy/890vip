<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>890vip</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <?php foreach($this->css as $css): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->cdn($css);?>">
    <?php endforeach;?>

</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container ">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span><img src="/static/images/menu-icon.png" width="22" height="23"></span>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">php</a></li>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">Android</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="search">
                <form class="navbar-search">
                    <input type="text" class="search-query" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</div>
