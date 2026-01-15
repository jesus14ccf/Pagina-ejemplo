<?php
/* para poder agregar el apartado menu a wordpress */
register_nav_menus(array(
    'menu-header' => 'Menú Header',
    'menu-footer-1' => 'Menu footer 1',
    'menu-footer-2' => 'Menú footer 2'
));
/* Con esto puedo cargas los temas*/
add_theme_support('post-thumbnails');

/*con esto podemos registrar widgets, y en wordpress aparecera una zona en apariencia de widgets va ser la de la derecha de la pagina*/
register_sidebar(array(
    'name' => 'sidebar', /*este es el nombre que saldra en wordpress en la zona de widgets*/
    'before_widget' => '<div class="widget">', /*etiqueta de apertura de los widgets */
    'after_widget' => '</div>',   /*etiqueta de cierre de los widgets*/
    'before_title' => '<h3>', 
    'after_title' => '</h3>'  
));

/*esta sera la zona de abajo de la pagina*/
register_sidebar(array(
    'name' => 'after-posts', /*este lo llamo afterposts*/
    'before_widget' => '<div class="anuncios">', 
    'after_widget' => '</div>',   
    'before_title' => '<h3>', 
    'after_title' => '</h3>'  
));

?>