<?php
#自動整形機能の空白除去機能の停止   
add_filter('tiny_mce_before_init', 'my_tiny_mce_before_init_filter',10,3);

function my_tiny_mce_before_init_filter( $init_array ) {
    $init_array['remove_linebreaks'] = false;
    return $init_array;
}

#the_except()の体裁変更
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>