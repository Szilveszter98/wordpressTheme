<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <?php wp_head();?>
</head>
<body> 
     
<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
<!-- <div class="header">
    <h1 class="header_text"><?php echo get_bloginfo('name')."-". get_bloginfo('description');?></h1>
</div> -->
