<?php 

/*

Template Name: Eventos

*/

?>
<?php get_header(); ?>
<?php 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];
?>
<main class="main-background eventos" style="background-image:url(<?php echo $thumb_url ?>)">
    <div>
        <div class="container"> 
            <div class="row">
                    <!-- Espaço em branco background -->
                    <div class=" col-md-4">
                </div>
                <!-- // Espaço em branco background -->
                <div class=" col-md-8">
                    <div class="main-content-text">
                        <div class="page-title">
                            <h1>Eventos</h1>
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
                    <div class="main-content-text mt-5">                            
                        <h4 class="h6 event-border-b mb-4" >PRÓXIMOS EVENTOS</h4> 
                        <?php 
                        $query = new WP_Query( array( 'post_type'       => 'evento',
                        'posts_per_page'  => 2,
                        'orderby'         => 'date',
                        'order'           => 'DESC' ) );
                    ?>
                    <?php while( $query->have_posts() ) : $query->the_post(); ?>
                    <?php 
                        $titulo = get_field('nome_do_evento');
                        $entrevistado = get_field('entrevistado');
                        $data = get_field('data');
                        $foto = get_field('foto');
                    ?>  
                    <?php 
                        if( have_rows('rede_social') ):
                        while ( have_rows('rede_social') ) : the_row();
                        $local = get_sub_field('local-1');
                        $perfil = get_sub_field('perfil');
                        $link = get_sub_field('link');
                        endwhile;
                        else :
                        endif;
                    ?>                            
                         <!-- Event 1 -->
                        <div class="row align-items-center mt-4">
                        
                            <!-- Box event -->
                            <div class=" col-md-4">
                                <div class="box-event mb-3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/box-evento.jpg');">
                                    <div>
                                        <p class="title">
                                            <?php echo $titulo  ?> 
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <div>
                                                <p class="hour">
                                                <?php echo $data  ?> <br>
                                                </p>
                                                <p>
                                                <?php echo $local  ?> <br>
                                                <?php echo $perfil  ?> 
                                                </p>
                                            </div>
                                            <div>
                                                <h6 class="ps dkvine">
                                                    <?php echo $entrevistado  ?> <br>
                                                </h6>
                                                <!-- <p>
                                                    médica ginecologista
                                                </p> -->
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="box-pic">
                                                <img src="<?php echo $foto ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Box event -->

                            <!-- Title right -->
                            <div class=" col-md-7 margin-left">
                                <div class="row">
                                    <p class="p-lt mb-0">
                                    <?php echo $data ?> <br>
                                        
                                 <?php echo '<span class="a-ltvine">' . $local . ' <a href="'. $link .'">' . $perfil . '</a></span>'; ?>
                                    </p>
                                    <p class="p-dk mb-0">
                                       <?php echo $titulo  ?> 
                                    </p>
                                    <p class="ps dkvine">
                                        Entrevista com: <?php echo $entrevistado?>
                                    </p>
                                </div>
                            </div>
                             <!-- // Title right -->
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>	
                    
                    
                        <!-- // Event 1 -->
                        <h4 class="h6 event-border-b mt-4" >EVENTOS REALIZADOS</h4>
                        <?php 
                            $query2 = new WP_Query( array( 'post_type'       => 'evento',
                            'posts_per_page'  => 100,
                            'orderby'         => 'date',
                            'order'           => 'DESC' ) );
                        ?>
                        <?php while( $query2->have_posts() ) : $query2->the_post(); ?>
                        <?php 
                            $titulo = get_field('nome_do_evento');
                            $entrevistado = get_field('entrevistado');
                            $data = get_field('data');
                            $foto = get_field('foto');
                        ?>  
                        <?php 
                            if( have_rows('rede_social') ):
                            while ( have_rows('rede_social') ) : the_row();
                            $local = get_sub_field('local-1');
                            $perfil = get_sub_field('perfil');
                            $link = get_sub_field('link');
                            endwhile;
                            else :
                            endif;
                        ?>      
                        <div class="row align-items-center ml-1">
                            <p class="p-dk mb-0 w-100">
                                <?php echo $titulo; ?> 
                            </p>
                            <p class=" ps p-dk mb-0 w-100">
                                Entrevista com: <?php echo $entrevistado;?>
                            </p>
                            <p class="ps-2 p-lt w-100 mt-1">
                                Realizado em <?php echo $data ?>, disponível nas <?php echo $local . ' ' . $perfil;?> 
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>