<?php
add_theme_support( 'menus' );
register_nav_menu('header',"tete du menu");

function montheme_register_assets(){
    wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');
};
function montheme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}


function montheme_title($title){
    return "Composition";

}
function montheme_menu_class($classes){
    $classes[] = 'nav-item mr-2';
    return $classes;
}

function montheme_pagination(){
    $pages = paginate_links(['type'=>'array']);
    if ($pages === null){
        return ;
    }
    echo '<nav aria-label="pagination">';
    echo '<ul class="pagination">';
    foreach($pages as $page){
        $active = strpos($page,'current') !== false;
        $class = 'page-item';
        if ($active){
            $class = ' page-item active';
        }
        echo '<li class="',$class,'">';
        echo  str_replace('page-numbers', 'page-link',$page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}
// <nav aria-label="...">
//   <ul class="pagination">
//     <li class="page-item disabled">
//       <a class="page-link" href="#" tabindex="-1">Previous</a>
//     </li>
//     <li class="page-item"><a class="page-link" href="#">1</a></li>
//     <li class="page-item active">
//       <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
//     </li>
//     <li class="page-item"><a class="page-link" href="#">3</a></li>
//     <li class="page-item">
//       <a class="page-link" href="#">Next</a>
//     </li>
//   </ul>
// </nav>

add_action('wp_enqueue_scripts','montheme_register_assets');
add_action('after_setup_them','montheme_support');
add_filter('wp_title','montheme_title');
add_filter('nav_menu_css_class','montheme_menu_class');
add_filter('nav_menu_link_attributes','montheme_menu_class');



?>