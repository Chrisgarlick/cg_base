<?php 
// Include all logic for flexible components
// if ( is_home() || is_category() || is_tax() ) {
//     $page_id = get_option('page_for_posts', true);
//     // $context['page']['hero'] = get_field('flexible_hero', $page_id);
//     $context['page']['content'] = get_field('flexible_components', $page_id);

//     // if(is_tax() || is_category()){
//     //     $context['page']['hero'][0]['title'] = single_term_title( '', false );
//     //     $context['page']['hero'][0]['introduction'] = category_description();
//     //     $context['page']['hero'][0]['acf_fc_layout'] = 'standard_hero';
//     //     $context['page']['hero'][0]['space_bottom'] = true;
//     // }
// } else {
//     // $context['page']['hero'] = get_field('flexible_hero');
//     $context['page']['content'] = get_field('flexible_components');
// }

$page_id = get_option('page_for_posts', true);
$context['page']['content'] = get_field('flexible_components', $page_id);


