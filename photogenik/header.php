<!DOCTYPE html>
<html>

<head>
    <title>PhotoGenik</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="w3-container w3-teal">
        <div class="w3-row">
            <div class="w3-col m9 l9">
                <h1>
                    <?php bloginfo('name'); ?>
                </h1>
            </div>
            <div class="w3-col m3 l3">
                <form action="<?php echo esc_url(home_url('/'))?>" method="get">
                    <input name='s' class="w3-input" type="text" placeholder="Busqueda...">
                </form>
            </div>
        </div>
    </header>
    <div class="w3-row">
        <div class="w3-col m3 l3">
            <ul class="w3-ul">
                <li><a href="/wpthemes">All Photos</a></li>
                <li><a href="#">Nature</a></li>
                <li><a href="#">Animals</a></li>
                <li><a href="#">Objects</a></li>
                <li><a href="#">People</a></li>
                <li><a href="#">Abstract</a></li>
            </ul>
        </div>
        <div class="w3-col m9 l9">
            <div class="w3-row">