<?php get_header(); ?>
<!-- <div class="w3-col m4 l4 pic">
    <a href="single.html">
        <img src="images/2.png" class="w3-animate-opacity">
    </a>
    <p>Lorem ipsum dolor sit amet,
        consectetur adipiscing elit.</p>
</div>
<div class="w3-col m4 l4 pic">
    <img src="images/3.png" class="w3-animate-opacity">
    <p>Lorem ipsum dolor sit amet,
        consectetur adipiscing elit.</p>
</div>
<div class="w3-col m4 l4 pic">
    <img src="images/4.png" class="w3-animate-opacity">
    <p>Lorem ipsum dolor sit amet,
        consectetur adipiscing elit.</p>
</div>
<div class="w3-col m4 l4 pic">
    <img src="images/5.png" class="w3-animate-opacity">
    <p>Lorem ipsum dolor sit amet,
        consectetur adipiscing elit.</p>
</div>
<div class="w3-col m4 l4 pic">
    <img src="images/6.png" class="w3-animate-opacity">
    <p>Lorem ipsum dolor sit amet,
        consectetur adipiscing elit.</p>
</div>
<div class="w3-col m4 l4 pic">
    <img src="images/7.png" class="w3-animate-opacity">
    <p>Lorem ipsum dolor sit amet,
        consectetur adipiscing elit.</p>
</div> -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<?php get_template_part('content', get_post_format()); ?>
<?php endwhile; ?>
<?php else : ?>
<?php echo wpautop('Sorry, there are no posts'); ?>
<?php endif; ?>
<?php get_footer(); ?>
