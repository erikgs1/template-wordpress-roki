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
                            <h1><?php echo the_title() ?></h1>
                        </div>  
                        <div class="saiba-mais">
                            <div class="mt-4 mb-4">
                                <?php 
                                    $description = get_field('modelob_descricao');
                                    echo $description;
                                ?>
                            </div>
                            <h6>
                                <?php 
                                    if( have_rows('modelob_list') ):
                                        while ( have_rows('modelob_list') ) : the_row();
                                            $sub_value = get_sub_field('nome');
                                            echo $sub_value;
                                        endwhile;
                                    else :
                                    endif;
                                ?>
                            </h6>
                            <p>
                                <?php 
                                    if( have_rows('modelob_list') ):
                                        while ( have_rows('modelob_list') ) : the_row();
                                            $sub_value = get_sub_field('texto');
                                            echo $sub_value;
                                        endwhile;
                                    else :
                                    endif;
                                ?>
                            </p>
                            <?php 
                                if( have_rows('modelob_list') ):
                                    while ( have_rows('modelob_list') ) : the_row();
                                        $sub_value = get_sub_field('link');
                                        
                                        
                                    endwhile;
                                else :
                                endif;
                            ?>
                            <?php 
                                if( have_rows('modelob_list') ):
                                    while ( have_rows('modelob_list') ) : the_row();
                                        $sub_value_2 = get_sub_field('link-2');
                                    endwhile;
                                else :
                                endif;
                            ?>
                            <a href="<?php echo $sub_value; ?>"><?php echo $sub_value; ?></a><br>
                            <a href="<?php echo $sub_value_2; ?>"><?php echo $sub_value_2; ?></a>
                        </div>
                    </div>
                </div>
                <!-- Conteudo -->
            </div>
        </div>   
    </main>

<?php get_footer(); ?>