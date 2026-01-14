<?php
/* para poder agregar el apartado menu a wordpress */
register_nav_menus(array(
    'menu-header' => 'Menú Header'
));
/* Con esto puedo cargas los temas*/
add_theme_support('post-thumbnails');

/*con esto podemos registrar widgets, y en wordpress aparecera una zona en apariencia de widgets*/
register_sidebar(array(
    'name' => 'sidebar',
    'before_widget' => '<div class="widget">', /*etiqueta de apertura de los widgets */
    'after_widget' => '</div>',   /*etiqueta de cierre de los widgets*/
    'before_title' => '<h3>', 
    'after_title' => '</h3>'  
));

?>