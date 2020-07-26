<?php 

/*

Template Name: Relatos

*/

?>
<?php get_header(); ?>
<?php 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];
?>
<main class="main-background-not100" style="background-image:url(<?php echo $thumb_url ?>)">
        <div class="container"> 
            <div class="row">
                <!-- Espaço em branco background -->
                <div class=" col-md-4">
                </div>
                <!-- // Espaço em branco background -->
                <!-- Conteudo -->
                <div class=" col-md-8">
                    <div class="list-bullet " >
                        <div class="page-title">
                            <h1><?php $title = get_field('nome_da_pagina'); echo $title; ?></h1>
                        </div>  
                        <div class="">
                            <div class="mt-4 mb-4">
                                <?php 
                                    $description = get_field('modelod_descricao');
                                    echo $description;
                                ?>
                            </div>
                            <div> 
                                <?php 
                                    if( have_rows('modelod_repeater') ):
                                        while ( have_rows('modelod_repeater') ) : the_row();
                                        echo '<div  class="separador-relatos"> <span class="aspas">"</span>';    
                                        $relato = get_sub_field('relato');
                                        echo  $relato;                                            
                                        echo '<span class="aspas">"</span></div>';
                                        endwhile;
                                    else :
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Conteudo -->
            </div>
        </div>   
    </main>

<?php get_footer(); ?>