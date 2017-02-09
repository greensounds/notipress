<!DOCTYPE html>
<html <?php language_attributes();?>>

    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name')?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <meta name="MobileOptimized" content="320">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_url);?>">

        
        <!-- load Ink's css from the cdn -->
        <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.10/css/ink-flex.min.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.10/css/font-awesome.min.css">

        <!-- load Ink's css for IE8 -->
        <!--[if lt IE 9 ]>
            <link rel="stylesheet" href="http://cdn.ink.sapo.pt/3.1.10/css/ink-ie.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
        <![endif]-->

        

        <!-- load Ink's javascript files from the cdn -->
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/holder.js"></script>
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/ink-all.min.js"></script>
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/autoload.js"></script>

        <style>

            body {
                background: #ededed;
            }

            .panel {
                border-radius: 2px;
                -webkit-box-shadow: #dddddd 0 1px 1px 0;
                -moz-box-shadow: #dddddd 0 1px 1px 0;
                box-shadow: #dddddd 0 1px 1px 0;
                padding: 1em;
                border: 1px solid #BBB;
                background-color: #FFF;
            }

        </style>

    </head>
<body>

<header class="ink-grid">
    <div class="vertical-space">
        <div class="panel">
            <h1><?php bloginfo('name'); ?><small><?php bloginfo('description');?></small></h1>
            <nav class="ink-navigation">
                <?php wp_nav_menu(array(
                    'theme_location'  => 'primary',
                    'menu_class'      => 'menu horizontal black'
                ));
                ?>
            </nav>
        </div>
    </div>
</header>