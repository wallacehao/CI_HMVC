<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Jackie Do" />
    
    <link rel="stylesheet" href="<?php echo base_url().'public/'.$module.'/css/'; ?>templates/css/reset.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700|Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo base_url().'public/'.$module.'/css/'; ?>templates/css/style.css" />

	<title><?php echo $title; ?></title>
</head>

<body>

    <div id="bg-top">
        <div id="bg-footer">
            <div id="layout">
                <div id="topmenu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div><!-- Eng topmenu -->
                <div id="banner">
                    <div id="logo"></div>
                    <div class="search">
                        <form action="" method="post">
                            <input type="text" name="txtSearch" value="Enter your keyword here..." />
                            <input type="submit" name="btnSubmit" value="&nbsp;" />
                        </form>
                    </div>
                </div><!-- End banner -->
                <div id="slider">
                    <img src="<?php echo base_url(); ?>public/<?php echo $module ?>/css/images/slideshow.jpg" />
                    <div id="slide_nav_bar">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                    </div><!-- End slide nav_bar -->
                </div><!-- End slider -->
                <div id="intro">
                    <div class="intro_item">
                        <h3>Why Choose Us?</h3>
                        <img src="<?php echo base_url(); ?>public/<?php echo $module ?>/css/images/intro_img.jpg" />
                        <p>
                            Đây là đoạn văn bản mẫu dùng để test layout. Đây là đoạn văn bản mẫu dùng để test layout. Đây là đoạn văn bản mẫu dùng để test layout.
                        </p>
                        <a href="#" class="readmore">Readmore</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="intro_item">
                        <h3>Why Choose Us?</h3>
                        <img src="<?php echo base_url(); ?>public/<?php echo $module ?>/css/images/intro_img.jpg" />
                        <p>
                            Đây là đoạn văn bản mẫu dùng để test layout. Đây là đoạn văn bản mẫu dùng để test layout. Đây là đoạn văn bản mẫu dùng để test layout.
                        </p>
                        <a href="#" class="readmore">Readmore</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="intro_item">
                        <h3>Why Choose Us?</h3>
                        <img src="<?php echo base_url(); ?>public/<?php echo $module ?>/css/images/intro_img.jpg" />
                        <p>
                            Đây là đoạn văn bản mẫu dùng để test layout. Đây là đoạn văn bản mẫu dùng để test layout. Đây là đoạn văn bản mẫu dùng để test layout.
                        </p>
                        <a href="#" class="readmore">Readmore</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- End intro -->