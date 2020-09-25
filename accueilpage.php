<?php 
/*
Template Name: modèle accueil
*/
get_header();
?>

<!-- <?php var_dump(get_field('bandeau_image_d')); ?> -->
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


<?php get_footer()?>
