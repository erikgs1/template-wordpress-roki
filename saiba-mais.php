<?php 

/*

Template Name: Saiba Mais

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
                    <div class="list-bullet saiba-mais" >
                        <div class="page-title">
                            <h1><?php $title = get_field('nome_da_pagina'); echo $title; ?></h1>
                        </div>  
                        <div class="saiba-mais">
                            <div class="mt-4 mb-4">
                                <?php 
                                    $description = get_field('modelob_descricao');
                                    echo $description;
                                ?>
                            </div>
                            <div>
                                <?php 
                                    if( have_rows('modelob_list') ):
                                        while ( have_rows('modelob_list') ) : the_row();
                                            $nome1 = get_sub_field('nome');
                                            $texto1 = get_sub_field('texto');
                                            echo '<div class="mb-3">';
                                            echo ' <h6> ' . $nome1 . '</h6>';
                                            echo ' <p> ' . $texto1 . '</p>';
                                            if( have_rows('link_repeater') ):
                                                while ( have_rows('link_repeater') ) : the_row();
                                                    $link = get_sub_field('link');
                                                    echo '<a target="_blank"  href="' . $link .'" >';
                                                    echo $link;
                                                    echo '</a>';
                                                endwhile;
                                            else :
                                            endif;
                                            echo '</div>';
                                        endwhile;
                                    else :
                                    endif;
                                ?>
                            </div>
                            <div>
                                <h4><?php $title = get_field('titulo_da_sessao'); echo $title; ?></h4>
                                <div>
                                    <?php 
                                        if( have_rows('modelob_list_2') ):
                                            while ( have_rows('modelob_list_2') ) : the_row();
                                                $nome2 = get_sub_field('nome');
                                                $texto2 = get_sub_field('texto');
                                                echo '<div class="mb-3">';
                                                echo ' <h6> ' . $nome2 . '</h6>';
                                                echo ' <p> ' . $texto2 . '</p>';
                                                if( have_rows('link_repeater') ):
                                                    while ( have_rows('link_repeater') ) : the_row();
                                                        $link2 = get_sub_field('link');
                                                        echo '<a target="_blank"  href="' . $link2 .'" >';
                                                        echo $link2;
                                                        echo '</a>';
                                                    endwhile;
                                                else :
                                                endif;
                                                echo '</div>';
                                            endwhile;
                                        else :
                                        endif;
                                    ?>
                                </div> 
                            </div>
                               
                        </div>
                    </div>
                </div>
                <!-- Conteudo -->
            </div>
        </div>   
    </main>

<?php get_footer(); ?>