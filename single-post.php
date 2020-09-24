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
<img class="image" src="<?php echo get_field('bandeau_image_g')['url'] ?>">
<img class="image" src="<?php echo get_field('bandeau_image_d')['url'] ?>">

<?php echo get_field('info'); ?>
<?php
if (get_field('bandeau_bouton')==true){
$link = get_field('bandeau_bouton')['link'];
echo '<a href="',$link,'">';
echo '<button type="button">';
 echo get_field('bandeau_bouton')['nom'];
 echo '</button>';
 echo '</a>';
}
?>
<?php endwhile ?>
</ul>
<?php else: ?>
<h1>Pas d'article</h1>
<?php endif; ?>
<?php get_footer()?>