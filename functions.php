<?php

function getMyPostType($type,$data = [])
{
    
    $args = [
        'post_type' => $type
     ];
     
     foreach ($data as $key => $value) {
         $args[$key]= $value;
     }
     $query = new WP_Query( $args );     
     return $query;
}
function getTaxEstructure($tax,$field,$terms)
{
    return [
            'tax_query'=>[
                    [
                    'taxonomy'=>$tax,
                    'field'=>$field,
                    'terms'=>$terms
                    ]
                ]
            ];
}
function TestQuery($type,$data = [])
{
    
    // $args = [
    //     'post_type' => $type
    //  ];
     
    //  foreach ($data as $key => $value) {
    //      $args[$key]= $value;
    //  }
    $args = array(
        'post_type' => 'experiencia
        ',
        'tax_query' => array(
            array(
                'taxonomy' => 'tipo-experiencia',
                'field'    => 'slug',
                'terms'    => 'experiencia',
            ),
        ),
    );
    
     $query = new WP_Query( $args );   
     // The Loop
    if ( $query->have_posts() ) : 
        while ( $query->have_posts() ) : $query->the_post(); 
        echo the_title().'---';
        endwhile; 
    else :
        echo '-------------No hay------2';
    endif; 
     return 0;
}
