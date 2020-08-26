<?php

if( function_exists('acf_add_options_page') ) {
 	   
   
   // add sub page
   acf_add_options_sub_page(array(
       'page_title' 	=> 'Configurações Gerenciador de Carta de Crédito',
       'menu_title' 	=> 'Configurações',
       'parent_slug' 	=> 'edit.php?post_type=apt-carta-credito',
   ));

   acf_add_options_sub_page(array(
    'page_title' 	=> 'Instruções de Uso Gerenciador de Carta de Crédito',
    'menu_title' 	=> 'Instruções',
    'parent_slug' 	=> 'edit.php?post_type=apt-carta-credito',
));
   
}

?>