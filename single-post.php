<?php 
get_header();
?>
<h1>Ceci est votre article !!!</h1>
<?php if (have_posts()):?>
    <? var_dump(get_field('info')); ?>
<ul>
<?php while(have_posts()): the_post(); ?>
<li><a href="<?php the_permalink()?>"><?php the_title() ?></a></li>
<div><?php the_content() ?> </div>
<?php echo get_field('info'); ?>

<?php endwhile ?>
</ul>
<?php else: ?>
<h1>Pas d'article</h1>
<?php endif; ?>
<?php get_footer()?>