<?php
/*
Template Name: modèle blog
*/
get_header();
if (have_posts()):;
while(have_posts()): the_post();
the_content();
endwhile;

else:
echo "<h1>Pas d'article</h1>";
endif;
get_footer()
?>

