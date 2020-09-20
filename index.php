<?php 
get_header();
?>
Hello world : <?php  wp_title()?>
<?php if (have_posts()):?>
<ul>
<?php while(have_posts()): the_post(); ?>
<li><a href="<?php the_permalink()?>"><?php the_title() ?></a></li>
<div><?php the_content() ?> </div>
<?php endwhile ?>
</ul>
<?php else: ?>
<h1>Pas d'article</h1>
<?php endif; ?>

<?php get_footer()?>