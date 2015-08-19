<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

    <?php echo css('modules/purecss/pure.min.css') ?>
    <?php echo css('assets/css/main.min.css') ?>
    <?php echo css('assets/css/fonts/flama-font.min.css') ?>

</head>
<body>
<div class="header">
    <nav class="pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">NCHP<span>.</span>MN</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Tour</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sign Up</a></li>
        </ul>
    </nav>
</div>
