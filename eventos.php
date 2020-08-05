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
                        <h4 class="h6 event-border-b mb-4" >PRÓXIMO EVENTO</h4> 
                        <?php 
                        $count = 0;
                        $query = new WP_Query( array( 'post_type'       => 'evento',
                        'posts_per_page'  => 1,
                        'orderby'         => 'date',
                        'order'           => 'DESC' ) );
                    ?>
                    <?php while( $query->have_posts() ) : $query->the_post(); ?>
                    <?php 
                        $titulo = get_field('nome_do_evento');
                        $entrevistado = get_field('entrevistado');
                        $profissao = get_field('profissao');
                        $data = get_field('data');
                        $foto = get_field('foto');
                        $linkEvento = get_field('link_evento');
                        $exibirV = get_field('exibir_v');
                        $imagemV = get_field('imagemv');
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
                        if(
                            $exibirV
                        ){
                    ?>                            
                         <!-- Event -->
                        <div class="row align-items-center mt-4 linha-<?php echo $count ?>">
                            <!-- Box event -->
                            <div class=" col-md-4">
                                <div class="box-event mb-3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/box-evento.jpg');">
                                    <div>
                                        <p  class="title">
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
                                                <?php echo ' <a target="_blank"  href="'. $link .'">' . $perfil . '</a></span>';  ?> 
                                                </p>
                                            </div>
                                            <div>
                                                <h6 class="ps dkvine">
                                                    <?php echo $entrevistado  ?> <br>
                                                </h6>
                                                <p>
                                                    <?php echo $profissao ?>
                                                </p>
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
                                        
                                 <?php echo '<span class="a-ltvine">' . $local . ' <a target="_blank"  href="'. $link .'">' . $perfil . '</a></span>'; ?>
                                    </p>
                                    <a href="<?php echo $linkEvento ?>" target="_blank"  class="p-dk mb-0">
                                       <?php echo $titulo  ?> 
                                    </a>
                                    <p class="ps dkvine">
                                        Entrevista com: <?php echo $entrevistado . ', ' . $profissao; ?> 
                                    </p>
                                </div>
                            </div>
                             <!-- // Title right -->
                        </div>
                        <?php 
                        } else{
                            ?>
                           <div class="row align-items-center">
                                <div class=" col-md-4">
                                    <img class="w-100" src="<?php echo $imagemV; ?>" alt="">
                                </div>
                                <!-- Title right -->
                                    <div class=" col-md-7 margin-left">
                                        <div class="row">
                                            <p class="p-lt mb-0">
                                            <?php echo $data ?> <br>
                                        <?php echo '<span class="a-ltvine">' . $local . ' <a target="_blank"  href="'. $link .'">' . $perfil . '</a></span>'; ?>
                                            </p>
                                            <a href="<?php echo $linkEvento ?>" target="_blank"  class="p-dk mb-0">
                                            <?php echo $titulo  ?> 
                                            </a>
                                            <p class="ps dkvine">
                                                Entrevista com: <?php echo $entrevistado . ', ' . $profissao; ?> 
                                            </p>
                                        </div>
                                    </div>
                                    <!-- // Title right -->
                           </div>
                        <?php
                        };
                            $count++ ?>
                        <?php endwhile; wp_reset_postdata(); ?>	
                    
                    
                        <!-- // Event -->
                        <h4 class="h6 event-border-b mt-4" >EVENTOS REALIZADOS</h4>
                        <?php 
                            $query2 = new WP_Query( array( 'post_type'       => 'evento',
                            'posts_per_page'  => 10,
                            'orderby'         => 'date',
                            'order'           => 'DESC',
                            'offset'          => '1',
                        ));
                        ?>
                        <?php while( $query2->have_posts() ) : $query2->the_post(); ?>
                        <?php 
                            $titulo = get_field('nome_do_evento');
                            $entrevistado = get_field('entrevistado');
                            $profissao = get_field('profissao');
                            $data = get_field('data');
                            $foto = get_field('foto');
                            $linkEvento = get_field('link_evento');
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
                            <a href="<?php echo $linkEvento ?>" target="_blank" class="p-dk mb-0 w-100">
                                <?php echo $titulo; ?> 
                            </a>
                            <p class=" ps p-dk mb-0 w-100">
                                Entrevista com: <?php echo $entrevistado . ', ' . $profissao;?>
                            </p>
                            <p class="ps-2 p-lt w-100 mt-1">
                                Realizado em <?php echo $data ?>, disponível <?php echo $local . ' ' . '<a target="_blank"  href="'. $link .'">' . $perfil . '</a>';?> 
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <div class="pagination">
                            <?php 
                                echo paginate_links( array(
                                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                    'total'        => $query2->max_num_pages,
                                    'current'      => max( 1, get_query_var( 'paged' ) ),
                                    'format'       => '?paged=%#%',
                                    'show_all'     => false,
                                    'type'         => 'plain',
                                    'end_size'     => 2,
                                    'mid_size'     => 1,
                                    'prev_next'    => true,
                                    'add_args'     => false,
                                    'add_fragment' => '',
                                    'next_text'    => sprintf( '%1$s <i></i>', __( ' Mais antigos', 'text-domain' ) ), 
                                    'prev_text'    => sprintf( '<i></i> %1$s', __( ' Mais Recentes', 'text-domain' ) ),
                                ) );
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>