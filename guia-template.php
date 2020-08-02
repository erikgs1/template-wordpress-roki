<?php 

/*

Template Name: Guia

*/

?>

<?php get_header(); ?>
<?php 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];
?>
    <main class="main-background guia" style="background-image:url(<?php echo $thumb_url ?>)">
        <div class="container pt-3"> 
                <div class="row">
                    <!-- Espaço em branco background -->
                    <div class=" col-md-4 sidebar">
                        <?php 
                            $link = get_field('modeloc_link');
                        ?>
                        <a target="_blank" download href="<?php echo  $link; ?>" class="d-block">
                            <?php 
                                $image = get_field('modeloc_imagem');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif;?>
                        </a>
                    </div>
                    <!-- // Espaço em branco background -->
                    <!-- Conteudo -->
                    <div class=" col-md-8">
                        <div class="ml-4">
                            <div class="page-title">
                                <h1><?php echo the_title() ?></h1>
                            </div>  
                            <div class="descricao_guia">
                                <?php 
                                    $description = get_field('modeloc_descricao');
                                    echo  $description;
                                ?>
                            </div>
                                <p class="mt-5">
                                    <?php 
                                        $action = get_field('modeloc_cta');
                                        echo  $action;
                                    ?>
                                </p>
                        </div>
                    </div>
                    <!-- Conteudo -->
                </div>
            </div> 
    </main>
<?php get_footer(); ?>