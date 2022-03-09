<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') . " - Home" ?></title>
    <meta name="description" content="<?php bloginfo('description') ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head() ?>
</head>
<body>
<header>
    <div class="container">
        <h1 class="header-logo"><a href="<?php bloginfo('url')?>"><?php bloginfo('name') ?></a></h1>
        <div class="header-menu">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'header-menu'
                )
            )?>
        </div>
    </div>
</header>
    
