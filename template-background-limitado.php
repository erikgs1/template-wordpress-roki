<?php 

/*

Template Name: Fundo limitado

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
                <div class=" col-md-8 p-0">
                    <div class="page-title">
                        <h1><?php echo the_title() ?></h1>
                    </div>  
                    
			        <?php
                        // Start the Loop.
                        while ( have_posts() ) :
                            the_post();
                    ?>
                           <div class="entry-content">
                                <?php
                                    the_content();
                                ?>
                            </div>
                    <?php 
                        endwhile; // End the loop.
                    ?>
                    
                </div>
                <!-- Conteudo -->
            </div>
        </div>   
    </main>

<?php get_footer(); ?>