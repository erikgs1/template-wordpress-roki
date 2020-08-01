<?php 

/*

Template Name: Sobre a Síndrome

*/

?>

<?php get_header(); ?>
<?php 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];
?>
<main class="main-background-not100-2" style="background-image:url(<?php echo $thumb_url ?>)">
        <div>
			<div class="container"> 
				<div class="row">
					 <!-- Espaço em branco background -->
                     <div class=" col-md-4">
                    </div>
                    <!-- // Espaço em branco background -->
					<div class=" col-md-8">
						<div class="main-content-text ml-0">
                            <div class="page-title">
                                <h1><?php echo the_title() ?></h1>
                            </div> 
                            <div class="list-bullet">
                                <?php 
                                    $firstText = get_field('sobre_a_sindrome_texto_primario');
                                    echo $firstText;
                                ?>
                            </div> 
                        </div>
					</div>
                </div>
                <div class="row mt-5">
					<!-- Espaço em branco background -->
                    <div class=" col-md-4"> 
                        <?php 
                            $image = get_field('sobre_a_sindrome_imagem_primaria');
                            if( !empty( $image ) ): ?>
                                <img  class="ml-md-n5" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif;?>
                    </div>
                    <!-- // Espaço em branco background -->
                    <div class=" col-md-5">
                    <?php 
                        $image = get_field('sobre_a_sindrome_imagem_secundaria');
                        if( !empty( $image ) ): ?>
                            <img class="ml-md-4" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif;?>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4"></div>
                    <div class="col-md-8 ">
                    <div class="list-bullet">
                        <?php 
                            $firstText = get_field('sobre_a_sindrome_texto_secundario');
                            echo $firstText;
                        ?>
                    </div> 
                    </div>
                </div>
			</div>
		</div>
    </main>


<?php get_footer(); ?>